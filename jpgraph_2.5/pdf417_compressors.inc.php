<?php
 DEFINE('TEXT_COMPRESSOR',0); DEFINE('NUMERIC_COMPRESSOR',1); DEFINE('BYTE_COMPRESSOR',2); DEFINE('TEXT_SUBMODE_ALPHA',8); DEFINE('TEXT_SUBMODE_LOWER',4); DEFINE('TEXT_SUBMODE_MIXED',2); DEFINE('TEXT_SUBMODE_PUNCT',1); DEFINE('PAD_CHARACTER',29); DEFINE('USE_TC',0); DEFINE('USE_NC',1); DEFINE('USE_BC_E6',2); DEFINE('USE_BC_O6',3); DEFINE('SHIFT_TO_BC',913); DEFINE('SHIFT_TO_BC_MARKER',1); class TextCompressor { private $iCharCodeTbl = array( 'A' => 0, 'B' => 1, 'C' => 2, 'D' => 3, 'E' => 4, 'F' => 5, 'G' => 6, 'H' => 7, 'I' => 8, 'J' => 9, 'K' => 10, 'L' => 11, 'M' => 12, 'N' => 13, 'O' => 14, 'P' => 15, 'Q' => 16, 'R' => 17, 'S' => 18, 'T' => 19, 'U' => 20, 'V' => 21, 'W' => 22, 'X' => 23, 'Y' => 24, 'Z' => 25, 'a' => 0, 'b' => 1, 'c' => 2, 'd' => 3, 'e' => 4, 'f' => 5, 'g' => 6, 'h' => 7, 'i' => 8, 'j' => 9, 'k' => 10, 'l' => 11, 'm' => 12, 'n' => 13, 'o' => 14, 'p' => 15, 'q' => 16, 'r' => 17, 's' => 18, 't' => 19, 'u' => 20, 'v' => 21, 'w' => 22, 'x' => 23, 'y' => 24, 'z' => 25, '0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7, '8' => 8, '9' => 9, '&' => 10, "\r" => 11, "\t" => 12, ',' => 13, ':' => 14, '#' => 15, '-' => 16, '.' => 17, '$' => 18, '/' => 19, '+' => 20, '%' => 21, '*' => 22, '=' => 23, '^' => 24, ' ' => 26, ';' => 0, '<' => 1, '>' => 2, '@' => 3, '[' => 4, '\\' => 5, ']' => 6, "_" => 7, "`" => 8, '~' => 9, '!' => 10, "\n" => 15, '"' => 20, '|' => 21, '(' => 23, ')' => 24, '?' => 25, '{' => 26, '}' => 27, '\'' => 28 ); private $iSubModeTbl = array( 'A' => 8, 'B' => 8, 'C' => 8, 'D' => 8, 'E' => 8, 'F' => 8, 'G' => 8, 'H' => 8, 'I' => 8, 'J' => 8, 'K' => 8, 'L' => 8, 'M' => 8, 'N' => 8, 'O' => 8, 'P' => 8, 'Q' => 8, 'R' => 8, 'S' => 8, 'T' => 8, 'U' => 8, 'V' => 8, 'W' => 8, 'X' => 8, 'Y' => 8, 'Z' => 8, 'a' => 4, 'b' => 4, 'c' => 4, 'd' => 4, 'e' => 4, 'f' => 4, 'g' => 4, 'h' => 4, 'i' => 4, 'j' => 4, 'k' => 4, 'l' => 4, 'm' => 4, 'n' => 4, 'o' => 4, 'p' => 4, 'q' => 4, 'r' => 4, 's' => 4, 't' => 4, 'u' => 4, 'v' => 4, 'w' => 4, 'x' => 4, 'y' => 4, 'z' => 4, '0' => 2, '1' => 2, '2' => 2, '3' => 2, '4' => 2, '5' => 2, '6' => 2, '7' => 2, '8' => 2, '9' => 2, '&' => 2,'%' => 2, '=' => 2, '^' => 2, '+' => 2, ';' => 1, '<' => 1, '>' => 1, '@' => 1, '[' => 1, '\\' => 1, ']' => 1, "_" => 1, "`" => 1, '~' => 1, '!' => 1, '"' => 1, '|' => 1, '(' => 1, ')' => 1, '?' => 1, '{' => 1, '}' => 1, '\'' => 1, "\n" => 1, "\r" => 3, "\t" => 3, ',' => 3,':' => 3, '#' => 2, '-' => 3, '$' => 3, '/' => 3, '*' => 3, '.' => 3, ' ' => 14 ); private $iCollector=null; private $iStateTbl = array( TEXT_SUBMODE_ALPHA => array( TEXT_SUBMODE_ALPHA => array( array(NULL,'Illegal state transition: (ALPHA => SHIFT ALPHA)'), array(NULL,'Illegal state transition: (ALPHA => LATCH ALPHA)') ), TEXT_SUBMODE_LOWER => array( array(array(LATCH_TO_LOWER),TEXT_SUBMODE_LOWER), array(array(LATCH_TO_LOWER),TEXT_SUBMODE_LOWER) ), TEXT_SUBMODE_MIXED => array( array(array(LATCH_TO_MIXED),TEXT_SUBMODE_MIXED), array(array(LATCH_TO_MIXED),TEXT_SUBMODE_MIXED) ), TEXT_SUBMODE_PUNCT => array( array(array(SHIFT_TO_PUNCT),TEXT_SUBMODE_ALPHA), array(array(LATCH_TO_MIXED,LATCH_TO_PUNCT),TEXT_SUBMODE_PUNCT) ) ), TEXT_SUBMODE_LOWER => array( TEXT_SUBMODE_ALPHA => array( array(array(SHIFT_TO_ALPHA),TEXT_SUBMODE_LOWER), array(array(LATCH_TO_MIXED,LATCH_TO_ALPHA),TEXT_SUBMODE_ALPHA) ), TEXT_SUBMODE_LOWER => array( array(NULL,'Illegal state transition: (LOWER => SHIFT LOWER)'), array(NULL,'Illegal state transition: (LOWER => LATCH LOWER)') ), TEXT_SUBMODE_MIXED => array( array(array(LATCH_TO_MIXED),TEXT_SUBMODE_MIXED), array(array(LATCH_TO_MIXED),TEXT_SUBMODE_MIXED) ), TEXT_SUBMODE_PUNCT => array( array(array(SHIFT_TO_PUNCT),TEXT_SUBMODE_LOWER), array(array(LATCH_TO_MIXED,LATCH_TO_PUNCT),TEXT_SUBMODE_PUNCT) ) ), TEXT_SUBMODE_MIXED => array( TEXT_SUBMODE_ALPHA => array( array(array(LATCH_TO_ALPHA),TEXT_SUBMODE_ALPHA), array(array(LATCH_TO_ALPHA),TEXT_SUBMODE_ALPHA) ), TEXT_SUBMODE_LOWER => array( array(array(LATCH_TO_LOWER),TEXT_SUBMODE_LOWER), array(array(LATCH_TO_LOWER),TEXT_SUBMODE_LOWER) ), TEXT_SUBMODE_MIXED => array( array(NULL,'Illegal state transition: (MIXED => SHIFT MIXED)'), array(NULL,'Illegal state transition: (MIXED => LATCH MIXED)') ), TEXT_SUBMODE_PUNCT => array( array(array(SHIFT_TO_PUNCT),TEXT_SUBMODE_MIXED), array(array(LATCH_TO_PUNCT),TEXT_SUBMODE_PUNCT) ) ), TEXT_SUBMODE_PUNCT => array( TEXT_SUBMODE_ALPHA => array( array(array(LATCH_TO_ALPHA_FROM_PUNCT),TEXT_SUBMODE_ALPHA), array(array(LATCH_TO_ALPHA_FROM_PUNCT),TEXT_SUBMODE_ALPHA) ), TEXT_SUBMODE_LOWER => array( array(array(LATCH_TO_ALPHA_FROM_PUNCT,LATCH_TO_LOWER),TEXT_SUBMODE_LOWER), array(array(LATCH_TO_ALPHA_FROM_PUNCT,LATCH_TO_LOWER),TEXT_SUBMODE_LOWER) ), TEXT_SUBMODE_MIXED => array( array(array(LATCH_TO_ALPHA_FROM_PUNCT,LATCH_TO_MIXED),TEXT_SUBMODE_MIXED), array(array(LATCH_TO_ALPHA_FROM_PUNCT,LATCH_TO_MIXED),TEXT_SUBMODE_MIXED) ), TEXT_SUBMODE_PUNCT => array( array(NULL,'Illegal state transition: (PUNCT => SHIFT PUNCT)'), array(NULL,'Illegal state transition: (PUNCT => LATCH PUNCT)') ) ) ); private $iDecodeTbl = array( TEXT_SUBMODE_ALPHA => array( 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', ' ', NULL, NULL, NULL), TEXT_SUBMODE_LOWER =>array( 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z' , ' ', NULL, NULL, NULL), TEXT_SUBMODE_MIXED => array( '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '&', "\r", "\t", ',', ':', '#', '-', '.', '$', '/', '+', '%', '*', '=', '^', NULL ,' ' , NULL, NULL, NULL), TEXT_SUBMODE_PUNCT => array( ';', '<', '>', '@', '[', '\\', ']', "_", "`", '~', '!', "\r", "\t", ',', ':', "\n", '-', '.', '$', '/', '"', '|', '*', '(', ')', '?', '{', '}', '\'' , NULL) ); function TextCompressor(&$aCollector) { $this->iCollector =& $aCollector; } function Encode($aTxt) { $txtLen = strlen($aTxt); $currentSubMode = TEXT_SUBMODE_ALPHA; $idx=0; $charval=array(); $modeList = array(TEXT_SUBMODE_ALPHA,TEXT_SUBMODE_LOWER,TEXT_SUBMODE_PUNCT,TEXT_SUBMODE_MIXED); $i=0; while( $i < $txtLen ) { $current_char = substr($aTxt,$i,1); $v = ord($current_char); if( $v == SHIFT_TO_BC_MARKER ) { if( $idx % 2 ) { $charval[$idx++] = PAD_CHARACTER; } $charval[$idx++] = SHIFT_TO_BC; $charval[$idx++] = ord(substr($aTxt,++$i,1)); } else { list($val,$mode) = $this->GetValSubMode($current_char); $next_mode = 0; if( $i < $txtLen - 1 ) { $next_char = substr($aTxt,$i+1,1); if( ord($next_char) != SHIFT_TO_BC_MARKER ) list($next_val,$next_mode) = $this->GetValSubMode($next_char); else { $next_mode = $currentSubMode; } } if( ! ($mode & $currentSubMode) ) { $nm = 0; while( $nm < 4 && !($mode & $modeList[$nm]) ) ++$nm; if( $nm >= 4 ) JpGraphError::RaiseL(26008,$mode); $se=$this->iStateTbl[$currentSubMode][$modeList[$nm]][($next_mode & $modeList[$nm]) > 0]; if( $se[0] === NULL ) JpGraphError::RaiseL(26015,$se[1]); $charval[$idx++] = $se[0][0]; if( count($se[0]) > 1 ) $charval[$idx++] = $se[0][1]; $currentSubMode = $se[1]; } $charval[$idx++] = $val; } ++$i; } if( $idx % 2 ) { $charval[$idx++] = PAD_CHARACTER; } $n = $idx / 2; for($i=0; $i < $n; ++$i ) { if( $charval[ 2*$i ] == SHIFT_TO_BC ) { $this->iCollector->AddSymbol(SHIFT_TO_BC,'SHIFT_BC'); $this->iCollector->AddSymbol($charval[2*$i+1]); } else { $val = $charval[ 2*$i ] * 30 + $charval[ 2*$i + 1 ] ; $this->iCollector->AddSymbol($val, $charval[ 2*$i ], $charval[ 2*$i + 1 ] ); } } } function GetValSubMode($aChar) { if( !array_key_exists($aChar, $this->iCharCodeTbl) || !array_key_exists($aChar, $this->iSubModeTbl) ) { JpGraphError::RaiseL(26009,ord($aChar)); } return array($this->iCharCodeTbl[$aChar],$this->iSubModeTbl[$aChar]); } function Decode(&$aCollector) { $currentMode = TEXT_SUBMODE_ALPHA; $n = count($aCollector->iSymbols); $i=0;$idx=0; $aSymbols = array(); while( $i < $n ) { $val = $aCollector->iSymbols[$i][0]; if( $val == SHIFT_TO_BC ) { $aSymbols[$idx++] = SHIFT_TO_BC; $aSymbols[$idx++] = $aCollector->iSymbols[++$i][0]; } else { $aSymbols[$idx++] = floor($val/30); $aSymbols[$idx++] = floor($val % 30); } ++$i; } $idx=0; $str = ''; $len = count($aSymbols); while( $idx < $len ) { $s = $aSymbols[$idx++]; $mode = $currentMode; switch( $currentMode ) { case TEXT_SUBMODE_ALPHA: if( $s == SHIFT_TO_BC ) { $str .= chr($aSymbols[$idx++]); } elseif( $s == SHIFT_TO_PUNCT ) { if( $idx >= $len ) break; if( $aSymbols[$idx] != SHIFT_TO_BC ) { $mode = TEXT_SUBMODE_PUNCT; $str .= $this->iDecodeTbl[$mode][$aSymbols[$idx++]]; } } else { if( $s == LATCH_TO_LOWER ) $currentMode = TEXT_SUBMODE_LOWER; elseif( $s == LATCH_TO_MIXED ) $currentMode = TEXT_SUBMODE_MIXED; else $str .= $this->iDecodeTbl[$mode][$s]; } break; case TEXT_SUBMODE_LOWER: if( $s == SHIFT_TO_BC ) { $str .= chr($aSymbols[$idx++]); } else { if( $s == SHIFT_TO_PUNCT || $s == SHIFT_TO_ALPHA ) { if( $s == SHIFT_TO_PUNCT ) { if( $idx >= $len ) break; if( $aSymbols[$idx] != SHIFT_TO_BC ) { $mode = TEXT_SUBMODE_PUNCT; } } else $mode = TEXT_SUBMODE_ALPHA; $s = $aSymbols[$idx++]; } if( $s == SHIFT_TO_BC ) { $str .= chr($aSymbols[$idx++]); } elseif( $s == LATCH_TO_MIXED && $mode != TEXT_SUBMODE_PUNCT ) $currentMode = TEXT_SUBMODE_MIXED; else $str .= $this->iDecodeTbl[$mode][$s]; } break; case TEXT_SUBMODE_MIXED: if( $s == SHIFT_TO_BC ) { $str .= chr($aSymbols[$idx++]); } elseif( $s == SHIFT_TO_PUNCT ) { if( $idx >= $len ) break; if( $aSymbols[$idx] != SHIFT_TO_BC ) { $mode = TEXT_SUBMODE_PUNCT; $str .= $this->iDecodeTbl[$mode][$aSymbols[$idx++]]; } } else { if( $s == LATCH_TO_ALPHA ) $currentMode = TEXT_SUBMODE_ALPHA; elseif( $s == LATCH_TO_PUNCT ) $currentMode = TEXT_SUBMODE_PUNCT; elseif( $s == LATCH_TO_LOWER ) $currentMode = TEXT_SUBMODE_LOWER; else $str .= $this->iDecodeTbl[$mode][$s]; } break; case TEXT_SUBMODE_PUNCT: if( $s == SHIFT_TO_BC ) { $str .= chr($aSymbols[$idx++]); } elseif( $s == LATCH_TO_ALPHA_FROM_PUNCT ) { if( ($idx < $len) && $aSymbols[$idx] != SHIFT_TO_BC ) { $currentMode = TEXT_SUBMODE_ALPHA; } } else $str .= $this->iDecodeTbl[$mode][$s]; break; default: JpGraphError::RaiseL(26016); } } return $str; } } class NumericCompressor { private $iCollector=NULL; function NumericCompressor(&$aCollector) { $this->iCollector =& $aCollector; } function ToBase900($aTxt) { $res=array(); $aTxt='1'.$aTxt; do { $ci = bcmod($aTxt,900); $aTxt = bcdiv($aTxt,900); $res[] = $ci ; } while( bccomp($aTxt,0) > 0 ); return array_reverse($res); } function FromBase900($aNum) { $n=count($aNum); $s='0'; for($i=0; $i < $n; ++$i) { $s = bcadd($s,bcmul(bcpow('900',$n-1-$i),$aNum[$i])); } return substr($s,1); } function Encode($aTxt) { if( !ctype_digit($aTxt) ) { JpGraphError::RaiseL(26011); } $charval=array(); $start = 0; $s = $aTxt; $numchunk = 44; while( strlen($s) > $numchunk ) { $r = $this->ToBase900(substr($s,0,$numchunk)); $charval = array_merge($charval,$r); $s = substr($s,$numchunk); } $r = $this->ToBase900(substr($s,0,$numchunk)); $charval = array_merge($charval,$r); $n = count($charval); for( $i=0; $i < $n; ++$i ) { $this->iCollector->AddSymbol($charval[$i],'NC','NC'); } } function Decode(&$aCollector) { $n = count($aCollector->iSymbols); $res=''; $pos = 0 ; while( $n > 15 ) { $num = array(); for( $i=0; $i < 15; ++$i ) { $num[$i] = $aCollector->iSymbols[$pos+$i][0]; } $res .= $this->FromBase900($num); $n -= 15; $pos += 15; } $num = array(); for( $i=0; $i < $n; ++$i ) { $num[$i] = $aCollector->iSymbols[$i+$pos][0]; } $res .= $this->FromBase900($num); return $res; } } class ByteCompressor { private $iCollector=NULL; function ByteCompressor(&$aCollector) { $this->iCollector =& $aCollector; } function ToBase256($aNum) { $res=array(); do { $ci = bcmod($aNum,256); $aNum = bcdiv($aNum,256); $res[] = $ci ; } while( bccomp($aNum,0) > 0 ); $n=count($res); while( $n < 6 ) $res[$n++]=0; return array_reverse($res); } function FromBase900($aNum) { $n=count($aNum); $s='0'; for($i=0; $i < $n; ++$i) { $s = bcadd($s,bcmul(bcpow('900',$n-1-$i),$aNum[$i])); } return $s; } function Base256To900($aTxt) { $w = array('1099511627776','4294967296','16777216','65536','256','1'); $t='0'; for( $i=0; $i < 6; ++$i ) { $d = ord(substr($aTxt,$i,1)); $ai = bcmul($d,$w[$i]); $add = bcadd($t,$ai); $t = $add; } $res=array(); do { $ci = bcmod($t,900); $t = bcdiv($t,900); $res[] = $ci ; } while( bccomp($t,0) > 0 ); $n=count($res); while( $n < 5 ) $res[$n++]=0; return array_reverse($res); } function Encode($aTxt) { $charval=array(); $this->iCollector->iOrgData = $aTxt; $s = $aTxt; $n = strlen($s); while( $n > 5 ) { $r = $this->Base256To900(substr($s,0,6)); $charval = array_merge($charval,$r); $s = substr($s,6); $n -= 6; } for($i=0; $i<$n; ++$i) $charval[] = ord(substr($s,$i,1)); $n = count($charval); for( $i=0; $i < $n; ++$i ) { $this->iCollector->AddSymbol($charval[$i],'BC','BC'); } } function Decode(&$aCollector,$aRetString=false) { $n = count($aCollector->iSymbols); if( $n==0 ) { JpGraphError::RaiseL(26012); } $odd = strlen($this->iCollector->iOrgData) & 1; $res=''; $pos = 0 ; $res = array(); $lim = $odd ? 6 : 5; while( $n >= $lim ) { $num = array(); for( $i=0; $i < 5; ++$i ) { $num[$i] = $aCollector->iSymbols[$pos++][0]; } $tt=$this->FromBase900($num); $tmp = $this->ToBase256($tt); $res = array_merge($res,$tmp); $n -= 5; } for( $i=0; $i < $n; ++$i ) { $res[] = $aCollector->iSymbols[$pos++][0]; } if( !$aRetString ) { return $res; } else { $n = count($res); $s='';$i=0; while( $n-- > 0 ) $s .= chr($res[$i++]); return $s; } } } ?>
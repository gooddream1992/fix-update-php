<?php

require_once 'functions/simplehtmldom/simple_html_dom.php';

if(!function_exists("check_apache_running_script")) {

	function check_apache_running_script($string='') {

		$data = file_get_contents('http://localhost/server-status');
		/* @var $hdom simple_html_dom */
		$hdom = str_get_html($data);
		
		$arrMatches = array();
		$i = 0;
		foreach ($hdom->find('tr') as $trdom) {
			$line = $trdom->innertext;
			if (false !== strstr($line, $string)) {
				$line = str_replace('<', ' <', $line); // add spaces between stuff, like words in multiple rows
				$line = strip_tags($line);
				$line = preg_replace("/\\s{2,}/", " ", $line); // replace whitespace with one space
				$line = trim($line);
				
				$arrLine = explode(' ', $line);
				
				// if no pid, skip
				if ('-' == $arrLine[1]) {
					continue;
				}
				
				$arrMatches[$i]['raw'] = $trdom->innertext;
				$arrMatches[$i]['line'] = $line;
				
				$arrMatches[$i]['Srv'] = $arrLine[0];
				$arrMatches[$i]['PID'] = $arrLine[1];
				$arrMatches[$i]['Acc'] = $arrLine[2];
				$arrMatches[$i]['M'] = $arrLine[3];
				$arrMatches[$i]['CPU'] = $arrLine[4];
				$arrMatches[$i]['SS'] = $arrLine[5];
				$arrMatches[$i]['Req'] = $arrLine[6];
				$arrMatches[$i]['Conn'] = $arrLine[7];
				$arrMatches[$i]['Child'] = $arrLine[8];
				$arrMatches[$i]['Slot'] = $arrLine[9];
				$arrMatches[$i]['Client'] = $arrLine[10];
				$arrMatches[$i]['VHost'] = $arrLine[11];
				$arrMatches[$i]['Request'] = $arrLine[12];
				
				
				$i++;
			}
		}
		return $arrMatches;
	}
}


<?PHP
/*************************************************************************/
/* This class stores associative arrays in an xml formated string.       */
/* There's also a function thar retrieves them. If you try to use        */ 
/* xml2array with a general xml, it can fail, since there can be some    */
/* repeated indexes....                                                  */
/*************************************************************************/

/*************************************************************************/
/* Use:
/* 
<?PHP
include('assoc_array2xml.php');
$example_array=array('one'=>'23','two'=>array('subone'=>'22',subtwo=>'233'),'three'=>'2');
$converter= new assoc_array2xml;
$string=$converter->array2xml($example_array);
echo "******\n$string\n********\n";
$array=$converter->xml2array($string);
print_r($array);
?>
 
*/
class assoc_array2xml {
	private $text;
	private $arrays, $keys, $node_flag, $depth, $xml_parser;
	private $record_key_name, $record_element_names, $record_count;
	
	function __construct() {
		$this->record_count = 0;
		$this->record_key_name = '';
		$this->record_element_names = array();
	}
	
	public function setRecordKeyName($v) {
		$this->record_key_name = $v;
	}
	
	public function setRecordElementNames($v) {
		$this->record_element_names = $v;
	}
	
	/*Converts an array to an xml string*/
	public function array2xml($array) {
		//global $text;
		$this->text="<?xml version=\"1.0\" encoding=\"iso-8859-1\"?><array>";
		$this->text.= $this->_array_transform($array);
		$this->text .="</array>";
		return $this->text;
	}

	/*Transform an XML string to associative array "XML Parser Functions"*/
	public function xml2array($xml){
		$this->depth=-1;
		$this->xml_parser = xml_parser_create();
		
		xml_set_object($this->xml_parser, $this);
		xml_parser_set_option ($this->xml_parser,XML_OPTION_CASE_FOLDING,0);//Don't put tags uppercase
		
		xml_set_element_handler($this->xml_parser, "_startElement", "_endElement");
		xml_set_character_data_handler($this->xml_parser,"_characterData");
		
		xml_parse($this->xml_parser,$xml,true);
		xml_parser_free($this->xml_parser);
		
		return $this->arrays;
	
	}

	private function _array_transform($array){
		//global $array_text;
		foreach($array as $key => $value){
			if(!is_array($value)){
				$this->text .= "<$key>$value</$key>";
			} else {
				$this->text.="<$key>";
				$this->_array_transform($value);
				$this->text.="</$key>";
			}
		}
		return $array_text;
	}
	
	private function _startElement($parser, $name, $attrs) {
		$this->keys[]=$name; //We add a key
		$this->node_flag=1;
		$this->depth++;
	}
	
	private function _characterData($parser,$data) {
		$key=end($this->keys);
		if(in_array($key, $this->record_element_names)) {
			$this->arrays[$this->depth][$this->record_count][$key]=$data;
		} else {
			$this->arrays[$this->depth][$key]=$data;
		}
		$this->node_flag=0; //So that we don't add as an array, but as an element
	}
	
	private function _endElement($parser, $name) {
		$key=array_pop($this->keys);
		//If $node_flag==1 we add as an array, if not, as an element
		if($this->node_flag==1){
			$this->arrays[$this->depth][$key]=$this->arrays[$this->depth+1];
			unset($this->arrays[$this->depth+1]);
		}
		$this->node_flag=1;
		$this->depth--;
		if( $key == $this->record_key_name ) {
			$this->record_count++;
		}
	}

}//End of the class

?>
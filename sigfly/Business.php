<?php



/**
 * Skeleton subclass for representing a row from the 'business' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.sigfly
 */
class Business extends BaseBusiness {
	
	private $_formErrors = array();
	private $_formMessages = array();
	private $_enc_key = 'e35.Nf-~e 0%&42;e35.Nf-~e 0%&np;'; // 128bitx2
	private $_tax_id_enc = null;
	
	public function setFormMessageKey($key, $value) {
		$this->_formMessages[$key] = $value;
	}
	public function setFormMessage($value) {
		$this->_formMessages[] = $value;
	}
	public function unsetFormMessages() {
		$this->_formMessages = array();
	}
	
	public function setFormErrorKey($key, $value) {
		$this->_formErrors[$key] = $value;
	}
	public function setFormError($value) {
		$this->_formErrors[] = $value;
	}
	public function unsetFormErrors() {
		$this->_formErrors = array();
	}
	
	public function getFormErrors() {
		return $this->_formErrors;
	}
	public function getFormError($key) {
		return $this->_formErrors[$key];
	}
	public function getFormMessages() {
		return $this->_formMessages;
	}
	public function getFormMessage($key) {
		return $this->_formMessages[$key];
	}
	
	public function setTaxId($v) {
		$v = ereg_replace( "[^[:digit:]\\-]", '', $v ); // remove non-digits
		$this->setTaxIdLastFour(substr($v, -4, 4));
		$this->setTaxIdEnc($this->_encrypt($v));
	}
	
	public function getTaxId() {
		if ($this->_tax_id_enc) {
			return $this->_decrypt($this->_tax_id_enc);
		}
		$fp = $this->getTaxIdEnc();
		if($fp) {
			$contents = stream_get_contents($fp);
			if (!$contents)
				return '';
				
			$this->_tax_id_enc = $contents;
			return $this->_decrypt($contents);
		} else {
			return  false;
		}
	}
	
	// for replacing [field] with value in text
	public function doReplaceFields($string) {
		$ReplaceFields = $this->getPeer()->getReplacementFields();
		
		foreach ($ReplaceFields as $phpName => $dbName) {
			$callback = sprintf("get%s", $phpName);
			$find_string = sprintf("[%s]", $dbName);
			$string = str_replace($find_string, $this->$callback(), $string);
		}
		return $string;
	}
	
	public function getFieldInfo($field) {
		
		$tableMap = BusinessPeer::getTableMap();
		$arr = array();
		
		//$email = '';
		$name = BusinessPeer::EMAIL ;
		$arr[$name ] = array(
			'name'=>$name , 
			'type'=>'text', 
			'is_required'=>true, 
			'size'=>$tableMap->getColumn($name)->getSize(),
			'column_name'=>$tableMap->getColumn($name)->getColumnName(),
			'php_name'=>$tableMap->getColumn($name)->getPhpName(),
			'human_name'=>ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))), 
			'human_description'=>'',
			'error'=>'A valid '.ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))). ' is required.');
		
		//$company_description = '';
		$name = BusinessPeer::COMPANY_DESCRIPTION ;
		$arr[$name ] = array(
			'name'=>$name , 
			'type'=>'text', 
			'is_required'=>false, 
			'size'=>$tableMap->getColumn($name)->getSize(),
			'column_name'=>$tableMap->getColumn($name)->getColumnName(),
			'php_name'=>$tableMap->getColumn($name)->getPhpName(),
			'human_name'=>ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))), 
			'human_description'=>'',
			'error'=>'A valid '.ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))). ' is required.');
		
		//$company_url = '';
		$name = BusinessPeer::COMPANY_URL ;
		$arr[$name ] = array(
			'name'=>$name , 
			'type'=>'text', 
			'is_required'=>false, 
			'size'=>$tableMap->getColumn($name)->getSize(),
			'column_name'=>$tableMap->getColumn($name)->getColumnName(),
			'php_name'=>$tableMap->getColumn($name)->getPhpName(),
			'human_name'=>ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))), 
			'human_description'=>'',
			'error'=>'A valid '.ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))). ' is required.');
		
		//$company_name = '';
		$name = BusinessPeer::COMPANY_NAME ;
		$arr[$name ] = array(
			'name'=>$name , 
			'type'=>'text', 
			'is_required'=>true, 
			'size'=>$tableMap->getColumn($name)->getSize(),
			'column_name'=>$tableMap->getColumn($name)->getColumnName(),
			'php_name'=>$tableMap->getColumn($name)->getPhpName(),
			'human_name'=>ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))), 
			'human_description'=>'',
			'error'=>'A valid '.ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))). ' is required.');
		
		//$addressline1 = '';
		$name = BusinessPeer::ADDRESSLINE1 ;
		$arr[$name ] = array(
			'name'=>$name , 
			'type'=>'text', 
			'is_required'=>true, 
			'size'=>$tableMap->getColumn($name)->getSize(),
			'column_name'=>$tableMap->getColumn($name)->getColumnName(),
			'php_name'=>$tableMap->getColumn($name)->getPhpName(),
			'human_name'=>ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))), 
			'human_description'=>'',
			'error'=>'A valid '.ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))). ' is required.');
		
		//$addressline2;
		$name = BusinessPeer::ADDRESSLINE2 ;
		$arr[$name ] = array(
			'name'=>$name , 
			'type'=>'text', 
			'is_required'=>false, 
			'size'=>$tableMap->getColumn($name)->getSize(),
			'column_name'=>$tableMap->getColumn($name)->getColumnName(),
			'php_name'=>$tableMap->getColumn($name)->getPhpName(),
			'human_name'=>ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))), 
			'human_description'=>'',
			'error'=>'A valid '.ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))). ' is required.');
		
		//$city = '';
		$name = BusinessPeer::CITY ;
		$arr[$name ] = array(
			'name'=>$name , 
			'type'=>'text', 
			'is_required'=>true, 
			'size'=>$tableMap->getColumn($name)->getSize(),
			'column_name'=>$tableMap->getColumn($name)->getColumnName(),
			'php_name'=>$tableMap->getColumn($name)->getPhpName(),
			'human_name'=>ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))), 
			'human_description'=>'',
			'error'=>'A valid '.ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))). ' is required.');
		
		//$state = '';
		$name = BusinessPeer::STATE ;
		$arr[$name ] = array(
			'name'=>$name , 
			'type'=>'select',
			'input_callback'=>'_getStatesList',
			'is_required'=>true, 
			'size'=>$tableMap->getColumn($name)->getSize(),
			'column_name'=>$tableMap->getColumn($name)->getColumnName(),
			'php_name'=>$tableMap->getColumn($name)->getPhpName(),
			'human_name'=>ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))), 
			'human_description'=>'',
			'error'=>'A valid '.ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))). ' is required.');
		
		//$postcode = '';
		$name = BusinessPeer::POSTCODE ;
		$arr[$name ] = array(
			'name'=>$name , 
			'type'=>'text', 
			'is_required'=>true, 
			'size'=>$tableMap->getColumn($name)->getSize(),
			'column_name'=>$tableMap->getColumn($name)->getColumnName(),
			'php_name'=>$tableMap->getColumn($name)->getPhpName(),
			'human_name'=>ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))), 
			'human_description'=>'',
			'error'=>'A valid '.ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))). ' is required.');
		
		//$country = '';
		$name = BusinessPeer::COUNTRY ;
		$arr[$name ] = array(
			'name'=>$name , 
			'type'=>'text', 
			'is_required'=>true, 
			'size'=>$tableMap->getColumn($name)->getSize(),
			'column_name'=>$tableMap->getColumn($name)->getColumnName(),
			'php_name'=>$tableMap->getColumn($name)->getPhpName(),
			'human_name'=>ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))), 
			'human_description'=>'',
			'error'=>'A valid '.ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))). ' is required.');
		
		//$telephone = '';
		$name = BusinessPeer::TELEPHONE ;
		$arr[$name ] = array(
			'name'=>$name , 
			'type'=>'text', 
			'is_required'=>true, 
			'size'=>$tableMap->getColumn($name)->getSize(),
			'column_name'=>$tableMap->getColumn($name)->getColumnName(),
			'php_name'=>$tableMap->getColumn($name)->getPhpName(),
			'human_name'=>ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))), 
			'human_description'=>'',
			'error'=>'A valid '.ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))). ' is required.');
		
		//$fax;
		$name = BusinessPeer::FAX ;
		$arr[$name ] = array(
			'name'=>$name , 
			'type'=>'text', 
			'is_required'=>false, 
			'size'=>$tableMap->getColumn($name)->getSize(),
			'column_name'=>$tableMap->getColumn($name)->getColumnName(),
			'php_name'=>$tableMap->getColumn($name)->getPhpName(),
			'human_name'=>ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))), 
			'human_description'=>'',
			'error'=>'A valid '.ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))). ' is required.');
		
		//$payment_threshold;
		$name = BusinessPeer::PAYMENT_THRESHOLD ;
		$arr[$name ] = array(
			'name'=>$name , 
			'type'=>'select', 
			'input_callback'=>'_getPaymentThreshold',
			'is_required'=>true, 
			'size'=>$tableMap->getColumn($name)->getSize(),
			'column_name'=>$tableMap->getColumn($name)->getColumnName(),
			'php_name'=>$tableMap->getColumn($name)->getPhpName(),
			'human_name'=>ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))), 
			'human_description'=>'Minimum Payment Amount',
			'error'=>'A valid '.ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))). ' is required.');
			
		// psudo-column
		$name = 'TAX_ID' ;
		$arr[$name ] = array(
			'name'=>$name , 
			'type'=>'text', 
//			'input_callback'=>'_getPaymentThreshold',
			'is_required'=>true, 
			'size'=>11,
			'column_name'=>$name,
			'php_name'=>'TaxId',
			'human_name'=>'Tax ID', 
			'human_description'=>'Business EIN or Personal SSN',
			'error'=>'A valid Tax ID is required.');
			
		////////////////////////////////////////////////////////
		//$is_active = 0;
		$name = BusinessPeer::IS_ACTIVE ;
		$arr[$name ] = array(
			'name'=>$name , 
			'type'=>'radio', 
			'input_callback'=>'_getYesNoList',
			'is_required'=>true, 
			'size'=>$tableMap->getColumn($name)->getSize(),
			'column_name'=>$tableMap->getColumn($name)->getColumnName(),
			'php_name'=>$tableMap->getColumn($name)->getPhpName(),
			'human_name'=>ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))), 
			'human_description'=>'',
			'error'=>'A valid '.ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))). ' is required.');
		
		//$is_premium = 0;
		$name = BusinessPeer::IS_PREMIUM ;
		$arr[$name ] = array(
			'name'=>$name , 
			'type'=>'radio', 
			'input_callback'=>'_getYesNoList',
			'is_required'=>true, 
			'size'=>$tableMap->getColumn($name)->getSize(),
			'column_name'=>$tableMap->getColumn($name)->getColumnName(),
			'php_name'=>$tableMap->getColumn($name)->getPhpName(),
			'human_name'=>ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))), 
			'human_description'=>'',
			'error'=>'A valid '.ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))). ' is required.');
		
		return $arr[$field];
	}
	
	public function getFieldsUserEditable() {
		
		$arr[BusinessPeer::EMAIL ] = $this->getFieldInfo(BusinessPeer::EMAIL );
		$arr[BusinessPeer::COMPANY_DESCRIPTION ] = $this->getFieldInfo(BusinessPeer::COMPANY_DESCRIPTION );
		$arr[BusinessPeer::COMPANY_URL ] = $this->getFieldInfo(BusinessPeer::COMPANY_URL );
		$arr[BusinessPeer::COMPANY_NAME ] = $this->getFieldInfo(BusinessPeer::COMPANY_NAME );
		$arr[BusinessPeer::ADDRESSLINE1 ] = $this->getFieldInfo(BusinessPeer::ADDRESSLINE1 );
		$arr[BusinessPeer::ADDRESSLINE2 ] = $this->getFieldInfo(BusinessPeer::ADDRESSLINE2 );
		$arr[BusinessPeer::CITY ] = $this->getFieldInfo(BusinessPeer::CITY );
		$arr[BusinessPeer::STATE ] = $this->getFieldInfo(BusinessPeer::STATE );
		$arr[BusinessPeer::POSTCODE ] = $this->getFieldInfo(BusinessPeer::POSTCODE );
//		$arr[BusinessPeer::COUNTRY ] = $this->getFieldInfo(BusinessPeer::COUNTRY );
		$arr[BusinessPeer::TELEPHONE ] = $this->getFieldInfo(BusinessPeer::TELEPHONE );
		$arr[BusinessPeer::FAX ] = $this->getFieldInfo(BusinessPeer::FAX );
		$arr[BusinessPeer::PAYMENT_THRESHOLD ] = $this->getFieldInfo(BusinessPeer::PAYMENT_THRESHOLD );
		
		// psudo-column
		$arr['TAX_ID'] = $this->getFieldInfo('TAX_ID');
		
		return $arr;
	}
	
	public function getFieldsAdmin() {
		
		$arr[BusinessPeer::EMAIL ] = $this->getFieldInfo(BusinessPeer::EMAIL);
		$arr[BusinessPeer::COMPANY_DESCRIPTION ] = $this->getFieldInfo(BusinessPeer::COMPANY_DESCRIPTION);
		$arr[BusinessPeer::COMPANY_URL ] = $this->getFieldInfo(BusinessPeer::COMPANY_URL);
		$arr[BusinessPeer::COMPANY_NAME ] = $this->getFieldInfo(BusinessPeer::COMPANY_NAME);
		$arr[BusinessPeer::ADDRESSLINE1 ] = $this->getFieldInfo(BusinessPeer::ADDRESSLINE1);
		$arr[BusinessPeer::ADDRESSLINE2 ] = $this->getFieldInfo(BusinessPeer::ADDRESSLINE2);
		$arr[BusinessPeer::CITY ] = $this->getFieldInfo(BusinessPeer::CITY);
		$arr[BusinessPeer::STATE ] = $this->getFieldInfo(BusinessPeer::STATE);
		$arr[BusinessPeer::POSTCODE ] = $this->getFieldInfo(BusinessPeer::POSTCODE);
		$arr[BusinessPeer::COUNTRY ] = $this->getFieldInfo(BusinessPeer::COUNTRY);
		$arr[BusinessPeer::TELEPHONE ] = $this->getFieldInfo(BusinessPeer::TELEPHONE);
		$arr[BusinessPeer::FAX ] = $this->getFieldInfo(BusinessPeer::FAX);
		$arr[BusinessPeer::PAYMENT_THRESHOLD ] = $this->getFieldInfo(BusinessPeer::PAYMENT_THRESHOLD);
		$arr[BusinessPeer::IS_ACTIVE ] = $this->getFieldInfo(BusinessPeer::IS_ACTIVE);
		$arr[BusinessPeer::IS_PREMIUM ] = $this->getFieldInfo(BusinessPeer::IS_PREMIUM);
		
		// psudo-column
		$arr['TAX_ID'] = $this->getFieldInfo('TAX_ID');
		
		$arr[BusinessPeer::ADDRESSLINE1 ]['is_required'] = false;
		$arr[BusinessPeer::CITY ]['is_required'] = false;
		$arr[BusinessPeer::STATE ]['is_required'] = false;
		$arr[BusinessPeer::POSTCODE ]['is_required'] = false;
		$arr[BusinessPeer::COUNTRY ]['is_required'] = false;
		$arr[BusinessPeer::TELEPHONE ]['is_required'] = false;
		$arr[BusinessPeer::TAX_ID ]['is_required'] = false;
		
		return $arr;
	}

	public function setFieldsFromArray($a, $fieldsInfo) {
		
		foreach ($fieldsInfo as $fieldArr) {
			if (isset($a[$fieldArr['column_name']])) {
				$function_name = 'set' . $fieldArr['php_name'];
				$this->$function_name($a[$fieldArr['column_name']]);
			}
		}
		return true;
	}
	
	public function getFormHeader($title = 'Edit Business Info') {

		$output = '<table width="100%" border="0" align="center" cellspacing="0" cellpadding="1" class="mainText">';
		
		if (count($this->getFormErrors()) > 0) {
			$output .= sprintf("<tr><td colspan=\"2\" class=\"mainText\" valign=\"top\" style=\"border: 15px solid red; padding: 10px\"><li>%s</td></tr>\n", implode(' <li>', $this->getFormErrors()));
		}
		
		if (count($this->getFormMessages()) > 0) {
			$output .= sprintf("<tr><td colspan=\"2\" class=\"mainText\" valign=\"top\" style=\"border: 15px solid green; padding: 10px\"><li>%s</td></tr>\n", implode(' <li>', $this->getFormMessages()));
		}
		
		$output .= '
		<tr>
			<td colspan="2">
				<b>'. $title .'</b>&nbsp;&nbsp;Starred (*) fields are required
				<hr size="1" noshade> 
			</td>
		</tr>
		';
		
		
		// ============================================
		return $output;
	}
		
	public function getForm($fields, $name_prefix = '') {
		
		$tableMap = BusinessPeer::getTableMap();
		
		$name = BusinessPeer::IS_PREMIUM ;
		$arr[$name ] = array(
			'name'=>$name , 
			'type'=>'radio', 
			'input_callback'=>'_getYesNoList',
			'is_required'=>true, 
			'size'=>$tableMap->getColumn($name)->getSize(),
			'column_name'=>$tableMap->getColumn($name)->getColumnName(),
			'php_name'=>$tableMap->getColumn($name)->getPhpName(),
			'human_name'=>ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))), 
			'human_description'=>'',
			'error'=>'A valid '.ucwords(strtolower(str_replace('_', ' ', $tableMap->getColumn($name)->getColumnName() ))). ' is required.');
		
		
		// 
		// ============================================
		foreach ($fields as $fieldName => $field) {
			$strRequired = '';
			$strHumanDescription = '';
			$strHumanName = $field['human_name'];
			
			if(strlen($field['human_description'])) {
				$strHumanDescription = sprintf("\n<br> (%s)\n", $field['human_description']);
			}
			if($field['is_required'] == true) {
				$strRequired = '<sup>*</sup>';
			}
			
			$output .= '
			<tr>
				<td width="45%" style="padding-left:10pt" valign="top">
					<b>'. $strHumanName .':</b>'. $strRequired . $strHumanDescription .'
				</td>
				<td valign="top">
				';
			
					$function_name = 'get' . $field['php_name'];
					
					switch ($field['type']) {
						case 'select':
							$input_callback = $field['input_callback'];
							$valueArr = $this->$input_callback();
							
							$output .= sprintf("<select name=\"%s\">", $name_prefix . $field['column_name']);
							$output .= '<option value=""> -- Select One -- </option>';
							
							foreach ($valueArr as $key => $val) {
								$output .= sprintf("<option value=\"%s\"%s>%s</option>", $key, ($key == $this->$function_name())?' selected':'', $val);
							}
							
							$output .= '</select>';
							break;
						case 'radio':
						case 'checkbox':
							$input_callback = $field['input_callback'];
							$valueArr = $this->$input_callback();
							
							foreach ($valueArr as $key => $val) {
								$output .= sprintf("<input type=\"%s\" name=\"%s\" value=\"%s\"%s>%s</option>", 
									$field['type'], 
									$name_prefix . $field['column_name'],
									$key, 
									($key == $this->$function_name())?' checked':'', 
									$val);
							}
							
							break;
							
						case 'textarea':
							$output .= sprintf("<textarea name=\"%s\" rows=\"4\" cols=\"30\" wrap=\"virtual\">%s</textarea>", 
								$name_prefix . $field['column_name'],
								htmlspecialchars($this->$function_name())
								);
							break;
					
						default: // text
							$inputSize = ($field['size'] + 2 > 35)? 35 : $field['size'] + 2;
							$output .= sprintf("<input type=\"text\" value=\"%s\" name=\"%s\" size=\"%d\" maxlength=\"%d\">", 
								htmlspecialchars($this->$function_name()), 
								$name_prefix . $field['column_name'],
								$inputSize,
								$field['size']
								);
							break;
					}
						
						
					if($this->getFormError($field['column_name'])) {
						$output .= ' <span class="mainText" style="color: #ff0000;">Attention required.</span>';
					}
					
			$output .= '
				</td>
			</tr>
			';
//			<tr><td colspan="2"><hr size="1" noshade style="color: #E0E0E0; background-color: #E0E0E0;"></td></tr>
//			';
		}
		
		
		// ============================================
		return $output;
	}
	
	public function getFormFooter($submit = 'Submit') {
		
		$output = '';
		
		// notes
		// ============================================
		$output .= '
		<tr><td colspan="2"><hr size="1" noshade style="color: #E0E0E0; background-color: #E0E0E0;"></td></tr>
		<tr>
			<td colspan="2" valign="top" style="padding-left:10pt" bgcolor="f5f5f5">
				<em>Notes:</em> Payments will be delivered to the above address once the payment threshold is reached.
				Please verify that the address is correct.
			</td>
		</tr>
		<tr><td colspan="2"><hr size="1" noshade style="color: #E0E0E0; background-color: #E0E0E0;"></td></tr>
		';
		
		// submit it.
		// ============================================
		$output .= '
		</table>
		<br />
		
		<input type="submit"  value="'. $submit .'">
		';
		
		
		// ============================================
		return $output;
	}
	
	public function validate_form($fieldsInfo = array()) {

		foreach ($fieldsInfo as $fieldArr) {
			$function_name = 'get' . $fieldArr['php_name'];
			if(strlen($this->$function_name()) < 1 && $fieldArr['is_required']) {
				$this->setFormErrorKey($fieldArr['column_name'] , $fieldArr['error']);
			}
		}
		
		if( count($this->getFormErrors()) ) {
			return false;
		} else {
			return true;
		}
	}
	
	private function _getPaymentThreshold() {
		$ret = array();
		$ret[100] = '100';
		$ret[150] = '150';
		$ret[250] = '250';
		$ret[500] = '500';
		$ret[1000] = '1000';
		$ret[2000] = '2000';
		$ret[5000] = '5000';
		$ret[10000] = '10000';
		
		return $ret;
	}
	
	private function _getYesNoList() {
		$ret = array();
		$ret[1] = 'yes';
		$ret[0] = 'no';
		
		return $ret;
	}
	
	private function _getTrueFalseList() {
		$ret = array();
		$ret[1] = true;
		$ret[0] = false;
		
		return $ret;
	}
	
	private function _getStatesList() {
		$list = ZipcodePeer::getDistinctStates();
		return $list;
	}
	
	
	public function save(PropelPDO $conn = null) {
		
		if($this->isNew()) {
			$this->setIsActive(1);
			$this->setDateCreated(time());
			$this->setRemoteAddrCreated($_SERVER['REMOTE_ADDR']);
			
		}
		if($this->isModified()) {
			// do stuff if object has been modified
			// such as change date modified or save changes to changelog database
			$this->setDateModified(time());
			$this->setRemoteAddrModified($_SERVER['REMOTE_ADDR']);
		}
		
		parent::save($conn);
	}
	
	private function _encrypt($data) {
		$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
		$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
		
		$crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $this->_enc_key, $data, MCRYPT_MODE_ECB, $iv);
		
		return $crypttext;
	}
	
	private function _decrypt($data) {
		$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
		$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
		
		$decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $this->_enc_key, $data, MCRYPT_MODE_ECB, $iv);
		$decrypttext = rtrim($decrypttext, "\0");
		
		return $decrypttext;
	}

} // Business

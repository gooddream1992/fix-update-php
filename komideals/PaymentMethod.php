<?php
require_once 'komideals/om/BasePaymentMethod.php';
require_once 'komideals/ZipcodePeer.php';

/** 
 * The skeleton for this class was autogenerated by Propel  on:
 *
 * [Tue Jan 31 10:11:39 2006]
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package komideals 
 */
class PaymentMethod extends BasePaymentMethod {
	
	private $_default_cc_number = '************';
	private $_enc_key = 'e35.Nf-~e 0%&np;e35.Nf-~e 0%&np;'; // 128bitx2
	private $_formErrors = array();
	private $_formMessages = array();
	
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
	
	public function setNumber($v) {
		$v = ereg_replace( "[^[:digit:]]", '', $v ); // remove non-digits
		
		$this->setNumberLastFour(substr($v, -4, 4));
		$this->setNumberEnc($this->_encrypt($v));
	}
	
	public function getNumber() {
		if($this->getNumberEnc()) {
			return $this->_decrypt($this->getNumberEnc()->getContents());
		} else {
			return  false;
		}
	}
	
	public function setFieldsFromArray($a) {
		
		$tableMap = PaymentMethodPeer::getTableMap();
//		$tableMap = PaymentMethodPeer::getMapBuilder()->getDatabaseMap()->getTable(PaymentMethodPeer::TABLE_NAME );
		
		$allowed_fields = array();
		$allowed_fields['NUMBER'] = 'Number';  // special field that does not have actual column in database
		$allowed_fields[$tableMap->getColumn(PaymentMethodPeer::TYPE)->getColumnName()] 			= $tableMap->getColumn(PaymentMethodPeer::TYPE			)->getPhpName();
		$allowed_fields[$tableMap->getColumn(PaymentMethodPeer::CCV)->getColumnName()] 			= $tableMap->getColumn(PaymentMethodPeer::CCV			)->getPhpName();
		$allowed_fields[$tableMap->getColumn(PaymentMethodPeer::NAME)->getColumnName()] 			= $tableMap->getColumn(PaymentMethodPeer::NAME			)->getPhpName();
		$allowed_fields[$tableMap->getColumn(PaymentMethodPeer::ADDRESSLINE1)->getColumnName()] 	= $tableMap->getColumn(PaymentMethodPeer::ADDRESSLINE1	)->getPhpName();
		$allowed_fields[$tableMap->getColumn(PaymentMethodPeer::ADDRESSLINE2)->getColumnName()] 	= $tableMap->getColumn(PaymentMethodPeer::ADDRESSLINE2	)->getPhpName();
		$allowed_fields[$tableMap->getColumn(PaymentMethodPeer::CITY)->getColumnName()] 			= $tableMap->getColumn(PaymentMethodPeer::CITY			)->getPhpName();
		$allowed_fields[$tableMap->getColumn(PaymentMethodPeer::STATE)->getColumnName()] 			= $tableMap->getColumn(PaymentMethodPeer::STATE			)->getPhpName();
		$allowed_fields[$tableMap->getColumn(PaymentMethodPeer::POSTCODE)->getColumnName()] 		= $tableMap->getColumn(PaymentMethodPeer::POSTCODE		)->getPhpName();
		$allowed_fields[$tableMap->getColumn(PaymentMethodPeer::EXPIRATION_MONTH)->getColumnName()]= $tableMap->getColumn(PaymentMethodPeer::EXPIRATION_MONTH)->getPhpName();
		$allowed_fields[$tableMap->getColumn(PaymentMethodPeer::EXPIRATION_YEAR)->getColumnName()] = $tableMap->getColumn(PaymentMethodPeer::EXPIRATION_YEAR)->getPhpName();
		$allowed_fields[$tableMap->getColumn(PaymentMethodPeer::TELEPHONE_DAY)->getColumnName()] 	= $tableMap->getColumn(PaymentMethodPeer::TELEPHONE_DAY	)->getPhpName();
		$allowed_fields[$tableMap->getColumn(PaymentMethodPeer::TELEPHONE_EVE)->getColumnName()] 	= $tableMap->getColumn(PaymentMethodPeer::TELEPHONE_EVE	)->getPhpName();
		
		while (list($colName, $colPhpName) = each($allowed_fields)) {
			
			if (isset($a[$colName])) {
				$function_name = 'set' . $colPhpName;
				$this->$function_name($a[$colName]);
			}
		}
		
		return true;
	}
	
	public function getPaymentMethodForm() {
		
		$tableMap = PaymentMethodPeer::getTableMap();
//		$tableMap = PaymentMethodPeer::getMapBuilder()->getDatabaseMap()->getTable(PaymentMethodPeer::TABLE_NAME );
		
		
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
				<b>Account Billing Information</b>&nbsp;&nbsp;Starred (*) fields are required
				<hr size="1" noshade> 
			</td>
		</tr>
		';
		
		
		// address line 1
		// ============================================
		$thisColumn = $tableMap->getColumn(PaymentMethodPeer::ADDRESSLINE1);
		$output .= '
		<tr>
			<td width="30%" nowrap style="padding-left:10pt">
				Billing Street Address:<sup>*</sup>
			</td>
			<td>
			';
		
				$output .= sprintf("<input type=\"text\" value=\"%s\" name=\"%s\" size=\"25\" maxlength=\"%d\">", 
					htmlspecialchars($this->getAddressline1()), 
					$thisColumn->getColumnName(),
					$thisColumn->getSize()
					);
				if($this->getFormError($thisColumn->getColumnName())) {
					$output .= ' <span class="mainText" style="color: #ff0000;">Attention required.</span>';
				}
				
		$output .= '
			</td>
		</tr>
		';
		
		
		// address line 2
		// ============================================
		$thisColumn = $tableMap->getColumn(PaymentMethodPeer::ADDRESSLINE2 );
		$output .= '
		<tr>
			<td>
				&nbsp;
			</td>
			<td>
			';
		
				$output .= sprintf("<input type=\"text\" value=\"%s\" name=\"%s\" size=\"25\" maxlength=\"%d\">", 
					htmlspecialchars($this->getAddressline2()), 
					$thisColumn->getColumnName(),
					$thisColumn->getSize()
					);
				if($this->getFormError($thisColumn->getColumnName())) {
					$output .= ' <span class="mainText" style="color: #ff0000;">Attention required.</span>';
				}
				
		$output .= '
			</td>
		</tr>
		';
		
		
		// city
		// ============================================
		$thisColumn = $tableMap->getColumn(PaymentMethodPeer::CITY );
		$output .= '
		<tr>
			<td width="30%" nowrap style="padding-left:10pt">
				City:<sup>*</sup>
			</td>
			<td>
			';
		
				$output .= sprintf("<input type=\"text\" value=\"%s\" name=\"%s\" size=\"15\" maxlength=\"%d\">", 
					htmlspecialchars($this->getCity()), 
					$thisColumn->getColumnName(),
					$thisColumn->getSize()
					);
				if($this->getFormError($thisColumn->getColumnName()) || $this->getFormError('ADDRESS')) {
					$output .= ' <span class="mainText" style="color: #ff0000;">Attention required.</span>';
				}
				
		$output .= '
			</td>
		</tr>
		';
		
		
		// state
		// ============================================
		$thisColumn = $tableMap->getColumn(PaymentMethodPeer::STATE );
		$output .= '
		<tr>
			<td width="30%" nowrap style="padding-left:10pt">
				State:<sup>*</sup>
			</td>
			<td>
				';
				$output .= sprintf("<select name=\"%s\"><option value=\"\">&nbsp; -- Select one --</option>\n", $thisColumn->getColumnName());
				
				$states = ZipcodePeer::getDistinctStates();
				
				//	Get the States of the Union
				while (list($state_code, $state_name) = each($states)) { 
					$output .= sprintf("<option value=\"%s\"%s>%s</option>\n", 
						$state_code,
						($this->getState() == $state_code)?' selected':'',
						$state_name);
				}
				
				$output .= '
				</select>
				';
		
				if($this->getFormError($thisColumn->getColumnName()) || $this->getFormError('ADDRESS')) {
					$output .= ' <span class="mainText" style="color: #ff0000;">Attention required.</span>';
				}
				
		$output .= '
			</td>
		</tr>
		';
		
		
		// postcode
		// ============================================
		$thisColumn = $tableMap->getColumn(PaymentMethodPeer::POSTCODE );
		$output .= '
		<tr>
			<td width="30%" nowrap style="padding-left:10pt">
				Zip/ Postal Code:<sup>*</sup>
			</td>
			<td>
			';
		
				$output .= sprintf("<input type=\"text\" value=\"%s\" name=\"%s\" size=\"6\" maxlength=\"%d\">", 
					htmlspecialchars($this->getPostcode()), 
					$thisColumn->getColumnName(),
					$thisColumn->getSize()
					);
				if($this->getFormError($thisColumn->getColumnName()) || $this->getFormError('ADDRESS')) {
					$output .= ' <span class="mainText" style="color: #ff0000;">Attention required.</span>';
				}
				
		$output .= '
			</td>
		</tr>
		';
		
		/*
		// country
		// ============================================
		$thisColumn = $tableMap->getColumn(PaymentMethodPeer::COUNTRY);
		$output .= '
		<tr>
			<td width="30%" nowrap style="padding-left:10pt">Country:</td>
			<td>
				<select name="country">
				<option value="Select one">Select one</option>
		<?php
		//	Get the countries
		$qryGetCountries = sprintf("SELECT country_name, country_code FROM acct_lp_countries ORDER by country_name ASC");
		$resGetCountries = sql_query($qryGetCountries,PRIMARYCONN_C);
		while(list($country_name,$country_code) = sql_fetch_row($resGetCountries))
		{
		?>
					<option value="<?= $country_code ?>"<?php if( $PaymentMethod->getCountry() == $country_code ) { ?> selected<?php } ?>>
						<?= $country_name ?>
					</option>
		<?php
		}
		?>
				</select>
				<? if($this->getFormError('country')) echo ' <span class="mainText" style="color: #ff0000;">Attention required.</span>';?>
			</td>
		</tr>
		*/
		
		
		// telephone daytime
		// ============================================
		$thisColumn = $tableMap->getColumn(PaymentMethodPeer::TELEPHONE_DAY );
		$output .= '
		<tr>
			<td width="30%" nowrap style="padding-left:10pt">
				Day Phone:<sup>*</sup>
			</td>
			<td>
			';
		
				$output .= sprintf("<input type=\"text\" value=\"%s\" name=\"%s\" maxlength=\"%d\">", 
					htmlspecialchars($this->getTelephoneDay()), 
					$thisColumn->getColumnName(),
					$thisColumn->getSize()
					);
				if($this->getFormError($thisColumn->getColumnName())) {
					$output .= ' <span class="mainText" style="color: #ff0000;">Attention required.</span>';
				}
				
		$output .= '
			</td>
		</tr>
		';
		
		
		// telephone evening
		// ============================================
		$thisColumn = $tableMap->getColumn(PaymentMethodPeer::TELEPHONE_EVE );
		$output .= '
		<tr>
			<td width="30%" nowrap style="padding-left:10pt">
				Evening Phone:
			</td>
			<td>
			';
		
				$output .= sprintf("<input type=\"text\" value=\"%s\" name=\"%s\" maxlength=\"%d\">", 
					htmlspecialchars($this->getTelephoneEve()), 
					$thisColumn->getColumnName(),
					$thisColumn->getSize()
					);
				if($this->getFormError($thisColumn->getColumnName())) {
					$output .= ' <span class="mainText" style="color: #ff0000;">Attention required.</span>';
				}
				
		$output .= '
			</td>
		</tr>
		';
		
		
		// cc-specific info
		// ============================================
		// ============================================
		// ============================================
		$output .= '
		<tr>
			<td colspan="2">
				<br />
				<b>Credit Card Information</b>
				<hr size="1" width="100%" noshade>
			</td>
		</tr>
		';
		
		
		// name on card
		// ============================================
		$thisColumn = $tableMap->getColumn(PaymentMethodPeer::NAME );
		$output .= '
		<tr>
			<td width="30%" nowrap style="padding-left:10pt">
				Name as it Appears on Card:<sup>*</sup>
			</td>
			<td>
			';
		
				$output .= sprintf("<input type=\"text\" value=\"%s\" name=\"%s\" size=\"25\" maxlength=\"%d\">", 
					htmlspecialchars($this->getName()), 
					$thisColumn->getColumnName(),
					$thisColumn->getSize()
					);
				if($this->getFormError($thisColumn->getColumnName())) {
					$output .= ' <span class="mainText" style="color: #ff0000;">Attention required.</span>';
				}
				
		$output .= '
			</td>
		</tr>
		';
		
		
		// card type
		// ============================================
		$thisColumn = $tableMap->getColumn(PaymentMethodPeer::TYPE );
		$output .= '
		<tr>
			<td width="30%" nowrap style="padding-left:10pt">
				Card Type:<sup>*</sup>
			</td>
			<td>
				';
				$output .= sprintf("<select name=\"%s\"><option value=\"\">&nbsp; -- Select one --</option>\n", $thisColumn->getColumnName());
				
				$card_types = PaymentMethodPeer::getTypes();
				
				while (list($key,$value) = each($card_types)) { 
					$output .= sprintf("<option value=\"%s\"%s>%s</option>\n", 
						$key,
						($this->getType() == $key)?' selected':'',
						ucwords(strtolower(str_replace("_", " ", $value))) );
				}
				
				$output .= '
				</select>
				';
		
				if($this->getFormError($thisColumn->getColumnName())) {
					$output .= ' <span class="mainText" style="color: #ff0000;">Attention required.</span>';
				}
				
		$output .= '
			</td>
		</tr>
		';
		
		
		// credit card number
		// ============================================
		// special field does not have matching column
		// ... data is stored in an excrypted blob
		$output .= '
		<tr>
			<td width="30%" nowrap style="padding-left:10pt">
				Card Number:<sup>*</sup>
			</td>
			<td>
			';
		
				$output .= sprintf("<input type=\"text\" value=\"%s\" name=\"%s\" size=\"20\" maxlength=\"%d\">", 
					htmlspecialchars($this->getNumber()), 
					'NUMBER',
					20
					);
				if($this->getFormError('NUMBER')) {
					$output .= ' <span class="mainText" style="color: #ff0000;">Attention required.</span>';
				}
				
		$output .= '
			</td>
		</tr>
		';
		
		
		// expiration month and year
		// ============================================
		$thisColumnExpMo = $tableMap->getColumn(PaymentMethodPeer::EXPIRATION_MONTH );
		$thisColumnExpYr = $tableMap->getColumn(PaymentMethodPeer::EXPIRATION_YEAR );
		$output .= '
		<tr>
			<td width="30%" nowrap style="padding-left:10pt">
				Card Expiration:<sup>*</sup>
			</td>
			<td>
				';
				$output .= sprintf("<select name=\"%s\">\n", $thisColumnExpMo->getColumnName());
				
				for( $i = 1; $i <= 12; $i++ ) {
					$output .= sprintf("<option value=\"%s\"%s>%s %s</option>\n", 
						$i,
						($this->getExpirationMonth() == $i)?' selected':'',
						sprintf("%02d", $i),
						date("F", mktime(0,0,0,$i,1,date("Y"))) );
				}
				
				$output .= '
				</select>
				/
				';
				
				
				$output .= sprintf("<select name=\"%s\">\n", $thisColumnExpYr->getColumnName());
				
				$startYear = date("Y");
				$endYear = $startYear + 10;
		
				for( $i = $startYear; $i < $endYear; $i++ ) {
					$output .= sprintf("<option value=\"%s\"%s>%s</option>\n", 
						$i,
						($this->getExpirationYear() == $i)?' selected':'',
						sprintf("%04d", $i) );
				}
				
				$output .= '
				</select>
				';
		
				if($this->getFormError('EXPIRATION')) {
					$output .= ' <span class="mainText" style="color: #ff0000;">Attention required.</span>';
				}
				
		$output .= '
			</td>
		</tr>
		';
		
		
		// ccv (usually on back of card)
		// ============================================
		$thisColumn = $tableMap->getColumn(PaymentMethodPeer::CCV );
		$output .= '
		<tr>
			<td width="30%" nowrap valign="top" style="padding-left:10pt">
				CCV:<sup>*</sup>
			</td>
			<td>
			';
		
				$output .= sprintf("<input type=\"text\" value=\"%s\" name=\"%s\" size=\"5\" maxlength=\"%d\">", 
					htmlspecialchars($this->getCcv()), 
					$thisColumn->getColumnName(),
					$thisColumn->getSize()
					);
				if($this->getFormError($thisColumn->getColumnName())) {
					$output .= ' <span class="mainText" style="color: #ff0000;">Attention required.</span>';
				}
				
		$output .= '
				<br>Visa and MasterCard CCV numbers are 3 characters located on the back of the card.  
				<br>American Express CCV numbers are 4 characters located on the front of the card.
			</td>
		</tr>
		';
		
		
		// billing notes
		// ============================================
		$output .= '
		<tr>
			<td colspan="2" nowrap valign="top" style="padding-left:10pt" bgcolor="f5f5f5">
				<em>Notes:</em> By submitting this information, you agree to be billed a recurring monthly charge of [monthly_charge]
				until you cancel your account.
			</td>
		</tr>
		';
		
		
		// submit it.
		// ============================================
		$output .= '
		</table>
		<br />
		
		<input type="submit"  value="Verify Card">
		';
		
		
		$monthly_charge = sprintf("\$%.02f", $this->getUser()->getPaymentPlan()->getAmount());
		$output = str_replace('[monthly_charge]', $monthly_charge, $output);
		
		// ============================================
		return $output;

	}
	
	public function validate_method() {
		
		$tableMap = PaymentMethodPeer::getTableMap();
//		$tableMap = PaymentMethodPeer::getMapBuilder()->getDatabaseMap()->getTable(PaymentMethodPeer::TABLE_NAME );
		
		if(strlen($this->getAddressline1()) < 1) {
			$this->setFormErrorKey($tableMap->getColumn(PaymentMethodPeer::ADDRESSLINE1)->getColumnName() , 'Address is a required field.');
		}
		if(strlen($this->getCity()) < 1) {
			$this->setFormErrorKey($tableMap->getColumn(PaymentMethodPeer::CITY)->getColumnName() , 'City is a required field.');
		}
		if(strlen($this->getState()) < 1) {
			$this->setFormErrorKey($tableMap->getColumn(PaymentMethodPeer::STATE)->getColumnName() , 'State is a required field.');
		}
		if(strlen($this->getPostcode()) < 1) {
			$this->setFormErrorKey($tableMap->getColumn(PaymentMethodPeer::POSTCODE)->getColumnName() , 'Zip code is a required field.');
		}
		
		if(strpos($this->getPostcode(), '-')) {
			$parr = explode('-', $this->getPostcode());
			$newcode = $parr[0];
			if(strlen($newcode) == 5) {
				$this->setPostcode($newcode);
			} else {
				$this->setFormErrorKey($tableMap->getColumn(PaymentMethodPeer::POSTCODE)->getColumnName() , 'Please enter a valid 5-digit zip code.');
			}
		}
		
		if(!ZipcodePeer::validateAddress($this->getAddressline1(), $this->getCity(), $this->getState(), $this->getPostcode())) {
			$this->setFormErrorKey('ADDRESS', 'Specified address does not appear valid.');
		}
		
		if(strlen($this->getTelephoneDay()) < 1) {
			$this->setFormErrorKey($tableMap->getColumn(PaymentMethodPeer::TELEPHONE_DAY)->getColumnName() , 'Daytime Telephone is a required field.');
		}
		if(strlen($this->getName()) < 1) {
			$this->setFormErrorKey($tableMap->getColumn(PaymentMethodPeer::NAME)->getColumnName() , 'Name on Card is a required field.');
		}
		if(strlen($this->getType()) < 1) {
			$this->setFormErrorKey($tableMap->getColumn(PaymentMethodPeer::TYPE)->getColumnName() , 'Card Type is a required field.');
		}
		if(strlen($this->getNumber()) < 1) {
			$this->setFormErrorKey('NUMBER', 'Card Number is a required field.');
		}
		if(strlen($this->getExpirationMonth()) < 1) {
			$this->setFormErrorKey($tableMap->getColumn(PaymentMethodPeer::EXPIRATION_MONTH)->getColumnName() , 'Expiration Month is a required field.');
		}
		if(strlen($this->getExpirationYear()) < 1) {
			$this->setFormErrorKey($tableMap->getColumn(PaymentMethodPeer::EXPIRATION_YEAR)->getColumnName() , 'Expiration Year is a required field.');
		}
		if(strlen($this->getCcv()) < 3) {
			$this->setFormErrorKey($tableMap->getColumn(PaymentMethodPeer::CCV)->getColumnName() , 'CCV is a required field.');
		}
		
		if(!$this->getTypeName()) {
			$this->setFormErrorKey($tableMap->getColumn(PaymentMethodPeer::TYPE)->getColumnName() , 'Invalid Card Type specified.');
		}

		if (time() > 86400 + strtotime(sprintf("%04d-%02d-%02d", $this->getExpirationYear(), $this->getExpirationMonth(), date("d")))) {
			$this->setFormErrorKey('EXPIRATION', 'The credit card expiration date does not seem to be valid');
		}

		// validate number format and luhn algo
		$aErr = array();
		if(!PaymentMethodPeer::CCValidate($aErr, $this->getNumber(), $this->getType())) {
			
			$this->_formErrors = array_merge($this->_formErrors, $aErr);
		}
		
		if( count($this->getFormErrors()) ) {
			return false;
		} else {
			return true;
		}
	}

	public function getTypeName() {
		$arr = PaymentMethodPeer::getTypes();
		return $arr[$this->getType()];
	}
	
	public function save(PropelPDO $conn = null) {
		
		if($this->isNew()) {
			$this->setIsActive(1);
			$this->setDateCreated(time());
			$this->setRemoteAddr($_SERVER['REMOTE_ADDR']);
			
			parent::save($conn);
			
		} elseif ($this->isModified()) {
//			vdump($this->modifiedColumns);
//			exit;
			$copy = $this->copy();
			$copy->setIsActive(1);
			$copy->setDateCreated(time());
			$copy->setRemoteAddr($_SERVER['REMOTE_ADDR']);
			$copy->save($conn);
		}
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
	
	private function _encryptx($input) {
		$td = mcrypt_module_open('tripledes', '', 'ecb', '');
		$iv = mcrypt_create_iv (mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
		mcrypt_generic_init($td, $this->_enc_key, $iv);
		
		$encrypted_data = mcrypt_generic($td, $input);
		
		mcrypt_generic_deinit($td);
		mcrypt_module_close($td);
		
		return $encrypted_data;
	}
	
	private function _decryptx($encrypted_data) {
		$td = mcrypt_module_open('tripledes', '', 'ecb', '');
		$iv = mcrypt_create_iv (mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
		$key = substr($this->_enc_key, 0, mcrypt_enc_get_key_size($td));
		mcrypt_generic_init($td, $key, $iv);
		
		$decrypted_data = mdecrypt_generic($td, $encrypted_data);
		
		mcrypt_generic_deinit($td);
		mcrypt_module_close($td);

		$decrypted_data = rtrim($decrypted_data, "\0");
		
		return $decrypted_data;
	}
}
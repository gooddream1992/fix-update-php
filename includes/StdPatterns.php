<?
	// ------------------------------------------------------------
	// StdPatterns constants
	// 
	// this file contains numerous regular expressions both in POSIX
	// and PERL format which can be used for data validation.
	// 
	// constant prefixes:
	//   RX_  = POSIX regex.  used with ereg()
	//   RXP_ = PERL regex.  used with preg_match()
	// 
	// constant suffix:
	//   all constants should be defined with the "_C" suffix.
	//   
	//   for all constants that are part of a pseudo array, consecutive 
	//   numbers should be added to the end of the constants like so:
	//     RX_US_POSTCODE_C0
	//     RX_US_POSTCODE_C1
	//     RX_US_POSTCODE_C2
	//   this allows you to loop on the constants from 0 up to the
	//   last one that is defined.
	// 
	// example:
	//   RX_US_POSTCODE_C
	// 
	// example uses:
	//   if (! ereg(RX_US_POSTCODE_C, $ValueToCheck))
	//   if (! preg_match(RXP_STRONG_PASSWORD_C, $ValueToCheck))
	// ------------------------------------------------------------
	
	// passwords
	// ------------------------------------------------------------
	
	// weak password
	//   must be a minimum of 6 characters long.
	//   must contain at least 1 numeric character.
	//   must contain at least 1 alpha character.
	define("RXP_WEAK_PWD_C", "/^(?=.*\d)(?=.*[a-zA-Z]).{6,}$/");
	
	// strong password
	//   must be a minimum of 6 characters long.
	//   must contain at least 1 numeric character.
	//   must contain at least 1 capital alpha character.
	//   must contain at least 1 lower case alpha character.
	define("RXP_STRONG_PWD_C", "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/");
	
	
	// postal codes
	// ------------------------------------------------------------
	
	// brazil
	//   NN.NNN
	//   NN.NNN-NNN
	define("RX_BRAZIL_POSTCODE_C", "^[0-9]{2}\.[0-9]{3}(-[0-9]{3})?$");
	
	// canada
	//   ANA NAN
	define("RX_CANADA_POSTCODE_C", "^[a-zA-Z][0-9][a-zA-Z] ?[0-9][a-zA-Z][0-9]$");
	
	// dutch
	//   NNNN AA
	//   NNNNAA
	define("RX_DUTCH_POSTCODE_C", "^[0-9]{4,4} {0,1}[a-zA-Z]{2,2}$");
	
	// india
	//   NNNNNN
	//   NNN NNN
	define("RX_INDIA_POSTCODE_C", "^[0-9]{3} ?[0-9]{3}$");
	
	// sweden
	//   NNNNN
	//   NNN NN
	//   S-NNNNN
	//   S-NNN NN
	define("RX_SWEDEN_POSTCODE_C", "^(s-|S-)?[0-9]{3} ?[0-9]{2}$");
	
	// UK (United Kingdom)
	//   AN NAA
	//   ANN NAA
	//   ANA NAA
	//   AAN NAA
	//   AANN NAA
	//   AANA NAA
	define("RX_UK_POSTCODE_C", "^[a-zA-Z]{1,2}[0-9][0-9A-Za-z]? ?[0-9][A-Za-z]{2,2}$");
	
	// US (United States)
	//   NNNNN
	//   NNNNN-NNNN
	define("RX_US_POSTCODE_C", "^[0-9]{5,5}(-[0-9]{4,4})?$");
	
	
	// phone numbers
	// ------------------------------------------------------------
	
	
	
	// government IDs
	// ------------------------------------------------------------
	
	// UK National Insurance Number
	//   AANNNNNNA
	define("RX_UK_NIN_C", "^[A-Za-z]{2,2}[0-9]{6,6}[A-Za-z]$");
	
	// US Employer Identification Number
	//   NN-NNNNNNN
	define("RX_US_EIN_C", "^[0-9]{2}-[0-9]{7}$");
	
	// US Social Security Number
	//   NNN-NN-NNNN
	define("RX_US_SSN_C", "^[0-9]{3}-[0-9]{2}-[0-9]{4}$");
	
	
	// misc.
	// ------------------------------------------------------------
	
	// email address
	//   supports IP email address as well as domains.
	//   
	//   this is a better regex for matching IP, but will add later.
	//   \b((25[0-5]|2[0-4]\d|[01]\d\d|\d?\d)\.){3}(25[0-5]|2[0-4]\d|[01]\d\d|\d?\d)\b
	//   who uses an email address at an IP anyway.
	define("RX_EMAIL_ADDRESS_C", "^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$");
	
	// MAC address
	//   fE:dC:bA:98:76:54
	define("RX_MAC_ADDRESS_C", "^([0-9a-fA-F][0-9a-fA-F]:){5}([0-9a-fA-F][0-9a-fA-F])$");
	
	// ODBC DateTime
	//   YYYY-MM-DD HH:MM:SS
	//   YYYY/MM/DD HH:MM:SS
	//   YYYY-MM-DDTHH:MM:SS
	//   YYYY/MM/DDTHH:MM:SS
	define("RX_ODBC_DATETIME_C", "^[0-9]{4,4}(-|/)((0[1-9])|(1[0-2]))(-|/)((0[1-9])|([1-2][0-9])|(3[0-1]))( |T)(([0-1][0-9])|(2[0-3])):([0-5][0-9]):([0-5][0-9])$");
	
	
?>
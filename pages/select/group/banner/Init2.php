<?

// Get the default values for this user
/* @var $PaymentMethod PaymentMethod */
/* @var $User User */

$id = $_POST['id']?$_POST['id']:$_GET['id'];
$type_id = $_POST['type_id']?$_POST['type_id']:$_GET['type_id'];

$User = $objSession->getUser();

if((int)$id > 0) {
	
	
} else {
	
}




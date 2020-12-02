<?


$Image = ImagePeer::retrieveByPK($_GET['id']);
$Image->outputImage(($_GET['download'] == '1')? true: false);

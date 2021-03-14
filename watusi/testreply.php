//Example in php
<?php
$name = $_POST['name'];
$response = array(
	"Hello $name, thanks for your message!"
);

header('Content-Type: application/json');
echo json_encode($response);

?>
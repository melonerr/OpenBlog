
<?php
$uploaddir = '../Upload/';
$uploadfile = $uploaddir . basename($_FILES['upload']['name']);

if (move_uploaded_file($_FILES['upload']['tmp_name'], $uploadfile)) {
    $this->sendJson(array("message" => "sucess"));
} else {
    $this->sendJson(array("message" => "failed"));
}

$returnArray = array();
$returnArray["uploaded"] = true;
$returnArray["url"] = "http://127.0.0.1/teach/Upload/" . $_FILES['upload']['name'];
return 123;
// $this->sendJson($returnArray);
// $this->terminate();


<?php
  require "../class/Pet.php";

  $pet = new Pet();
  $pet->connectDB();

  $id = $_GET['id'];
  $result = $pet->getOne($id);
  $rows = $result->num_rows;

  if(!$rows > 0){
    http_response_code(404);
    exit();
  }

  $pet->delete($id);

  http_response_code(204);

?>

<?php

  require "../class/Pet.php";

  $data = json_decode(file_get_contents("php://input"));

  if(empty($data->name) || empty($data->description)){
    http_response_code(422);
    exit();
  }

  $pet = new Pet();
  $pet->connectDB();
  $id = $_GET['id'];
  $result = $pet->getOne($id);
  $rows = $result->num_rows;
  
  if(!$rows > 0){
    http_response_code(404);
    exit();
  }

  $pet->update($id, $data);

  http_response_code(200);

?>

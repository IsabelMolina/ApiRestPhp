<?php

  require "../class/Pet.php";

  $data = json_decode(file_get_contents("php://input"));

  if(empty($data->name) || empty($data->description)){
    http_response_code(422);
    exit();
  }

  $pet = new Pet();
  $pet->connectDB();
  $pet->create($data);

  http_response_code(201);

?>

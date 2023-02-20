<?php

   require "../class/Pet.php";

   $pet = new Pet();
   $pet->connectDB();

   if(isset($_GET['id'])){
     $id = $_GET['id'];
     $result = $pet->getOne($id);
     $rows = $result->num_rows;
     if(!$rows > 0){
       http_response_code(404);
       exit();
     }
   }
   else{
     $result = $pet->getAll();
   }

   $data = $result->fetch_all(MYSQLI_ASSOC);

   header("Content-Type: application/json");
   http_response_code(200);
   echo json_encode($data);

?>

<?php
    $data = file_get_contents("php://input");
    $json_data = json_decode($data);
    echo json_encode($json_data);
?>

<?php
include "../db/config.php";
if(isset($_POST['status']) && $_POST['updateID']){
    $id=$_POST['updateID'];
    $status=$_POST['status'];
    $sql = "UPDATE `ransomware_reports` SET `status`=:status WHERE `id`=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':id',$id);
    $update=$stmt->execute();
    if ($update) {
        $data = array("message" => "ok");
        header('Content-Type: application/json');
        echo json_encode($data);
    } else {
        $data = array("message" => "error");
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}
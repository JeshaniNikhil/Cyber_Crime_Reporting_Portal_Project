<?php      
// Include database configuration file  
define('DB_HOST', 'localhost'); 
define('DB_USER', 'root'); 
define('DB_PASS', ''); 
define('DB_NAME', 'cyber_crime_reporting_portal'); 
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);  
if($conn->connect_error){  
    die("Failed to connect with MySQL: " . $conn->connect_error);  
} 
 // Retrieve JSON from POST body 
$jsonStr = file_get_contents('php://input'); 
$jsonObj = json_decode($jsonStr); 
if($jsonObj->request_type == 'deleteUser'){ 
    $id = $jsonObj->user_id; 
    $sql = "DELETE FROM ransomware_reports WHERE id=$id"; 
    $delete = $conn->query($sql); 
    if($delete){ 
        $output = [ 
            'status' => 1, 
            'msg' => 'Member deleted successfully!' 
        ]; 
        echo json_encode($output); 
    }else{ 
        echo json_encode(['error' => 'Member Delete request failed!']); 
    } 
}
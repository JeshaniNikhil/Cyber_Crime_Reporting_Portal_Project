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
$jsonStr = file_get_contents(filename: 'php://input'); 
$jsonObj = json_decode($jsonStr); 
 
if($jsonObj->request_type == 'addEditUser'){ 
    $user_data = $jsonObj->user_data; 
    $name = !empty($user_data[0])?$user_data[0]:''; 
    $email = !empty($user_data[1])?$user_data[1]:''; 
    $domain = !empty($user_data[2])?$user_data[2]:''; 
    $requirements = !empty($user_data[3])?$user_data[3]:''; 
    $id = !empty($user_data[4])?$user_data[4]:0; 
    $testing_types = !empty($user_data[5])?$user_data[5]:[]; 
    $err = ''; 
    if(empty($name)){ 
        $err .= 'Please enter your First Name.<br/>'; 
    } 
    if(empty($domain)){ 
        $err .= 'Please enter your Website Domain Name.<br/>'; 
    } 
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){ 
        $err .= 'Please enter a valid Email Address.<br/>'; 
    } 
     
    if(!empty($user_data) && empty($err)){ 
        $testing_types_json = json_encode($testing_types); 
        if(!empty($id)){ 
            // Update user data into the database 
            $sqlQ = "UPDATE web_request SET name=?, email=?, domain=?, requirements=?, testing_type=? WHERE request_id=?"; 
            $stmt = $conn->prepare($sqlQ); 
            $stmt->bind_param("sssssi", $name, $email, $domain, $requirements, $testing_types_json, $id); 
            $update = $stmt->execute(); 
 
            if($update){ 
                $output = [ 
                    'status' => 1, 
                    'msg' => 'Member updated successfully!' 
                ]; 
                echo json_encode($output); 
            }else{ 
                echo json_encode(['error' => 'Member Update request failed!']); 
            } 
        }else{ 
            // Insert event data into the database 
            $sqlQ = "INSERT INTO web_request (name, email, domain, requirements, testing_type , status) VALUES (?,?,?,?,?,?)"; 
            $stmt = $conn->prepare($sqlQ);
            $status="Request Submitted"; 
            $stmt->bind_param("ssssss", $name, $email, $domain, $requirements, $testing_types_json,$status); 
            $insert = $stmt->execute(); 
            if($insert){ 
                $output = [ 
                    'status' => 1, 
                    'msg' => 'Member added successfully!' 
                ]; 
                echo json_encode($output); 
            }else{ 
                echo json_encode(['error' => 'Member Add request failed!']); 
            } 
        } 
    }else{ 
        echo json_encode(['error' => trim($err, '<br/>')]); 
    } 
}
elseif($jsonObj->request_type == 'deleteUser'){ 
    $id = $jsonObj->user_id; 
    $sql = "DELETE FROM web_request WHERE request_id=$id"; 
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

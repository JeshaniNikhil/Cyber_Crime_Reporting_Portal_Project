<?php 
// Include config file 
include_once '../db/config.php'; 
// Database connection info
$dbDetails = array( 
    'host' => 'localhost', 
    'user' => 'root', 
    'pass' => '', 
    'db'   => 'cyber_crime_reporting_portal' 
); 
function cleanJsonString($jsonString) {
    // Decode the JSON string to an array
    $array = json_decode($jsonString, true);

    // Check if the json_decode was successful
    if (json_last_error() !== JSON_ERROR_NONE) {
        // Handle the error if the string was not valid JSON
        return false;
    }

    // Convert the array back to a comma-separated string
    $cleanString = implode(", ", $array);

    return $cleanString;
}
// DB table to use 
$table = 'other_reports'; 
// Table's primary key 
$primaryKey = 'id'; 
// Array of database columns which should be read and sent back to DataTables. 
// The `db` parameter represents the column name in the database.  
// The `dt` parameter represents the DataTables column identifier. 
$columns = array(
    array('db' => 'id', 'dt' => 0),
    array('db' => 'full_name', 'dt' => 1),
    array('db' => 'email', 'dt' => 2),
    array('db' => 'phone_number', 'dt' => 3),
    array('db' => 'incident_date', 'dt' => 4),
    array('db' => 'incident_time', 'dt' => 5),
    array('db' => 'type_of_fraud', 'dt' => 6),
    array('db' => 'description', 'dt' => 7),
    array('db' => 'status', 'dt' => 8),
    array(
        'db' => 'id',
        'dt' => 9,
        'formatter' => function($d, $row) {
            return '<a href="javascript:void(0);" class="btn btn-primary" onclick="updatestatus(' . htmlspecialchars(json_encode($row), ENT_QUOTES, 'UTF-8') . ')">
                        <i class="fas fa-sync"></i>
                    </a>';
        }
    ),
    array(
        'db' => 'id',
        'dt' => 10,
        'formatter' => function($d, $row) {
            return '
                <a href="javascript:void(0);" onclick="deleteData(' . $d . ')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                    </svg>
                </a>';
        }
    )
);

 // Include SQL query processing class 
require 'ssp.class.php'; 
 // Output data as json format 
echo json_encode( 
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns ) 
);
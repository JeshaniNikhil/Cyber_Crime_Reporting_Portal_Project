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
$table = 'contact_request'; 
// Table's primary key 
$primaryKey = 'request_id'; 
// Array of database columns which should be read and sent back to DataTables. 
// The `db` parameter represents the column name in the database.  
// The `dt` parameter represents the DataTables column identifier. 
$columns = array( 
    array( 'db' => 'request_id', 'dt' => 0 ), 
    array( 'db' => 'name',  'dt' => 1 ), 
    array( 'db' => 'email',      'dt' => 2 ), 
    array( 'db' => 'phone',     'dt' => 3 ), 
    array( 'db' => 'subject',    'dt' => 4 ), 
    array( 'db' => 'comments',    'dt' => 5 ),
); 
 // Include SQL query processing class 
require 'ssp.class.php'; 
 // Output data as json format 
echo json_encode( 
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns ) 
);
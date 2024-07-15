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
 
// DB table to use 
$table = 'web_request'; 
 
// Table's primary key 
$primaryKey = 'request_id'; 
 
// Array of database columns which should be read and sent back to DataTables. 
// The `db` parameter represents the column name in the database.  
// The `dt` parameter represents the DataTables column identifier. 
$columns = array( 
    array( 'db' => 'request_id', 'dt' => 0 ), 
    array( 'db' => 'name',  'dt' => 1 ), 
    array( 'db' => 'email',      'dt' => 2 ), 
    array( 'db' => 'domain',     'dt' => 3 ), 
    array( 'db' => 'requirements',    'dt' => 4 ), 
    array( 'db' => 'testing_type',    'dt' => 5 ), 
    // array( 
    //     'db'        => 'created', 
    //     'dt'        => 6, 
    //     'formatter' => function( $d, $row ) { 
    //         return date( 'jS M Y', strtotime($d)); 
    //     } 
    // ), 
    // array( 
    //     'db'        => 'status', 
    //     'dt'        => 6, 
    //     'formatter' => function( $d, $row ) { 
    //         return ($d == 1)?'Active':'Inactive'; 
    //     } 
    // ), 
    array( 
        'db'        => 'request_id', 
        'dt'        => 6, 
        'formatter' => function( $d, $row ) { 
            return ' 
                <a href="javascript:void(0);" class="btn btn-warning" onclick="editData('.htmlspecialchars(json_encode($row), ENT_QUOTES, 'UTF-8').')">Edit</a>&nbsp; 
                <a href="javascript:void(0);" class="btn btn-danger" onclick="deleteData('.$d.')">Delete</a> 
            '; 
        } 
    ) 
); 
 
// Include SQL query processing class 
require 'ssp.class.php'; 
 
// Output data as json format 
echo json_encode( 
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns ) 
);
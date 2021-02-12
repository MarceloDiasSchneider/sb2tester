<?php 
    // Database connection info 
    $dbDetails = array( 
        'host' => '107.180.25.194', 
        'user' => 'MarceloSchneider', 
        'pass' => 'pfekr3sJ22VjzH8', 
        'db'   => 'sell-master' 
    ); 
    
    // DB table to use 
    $table = 'members'; 
    
    // Table's primary key 
    $primaryKey = 'id'; 
    
    // Array of database columns which should be read and sent back to DataTables. 
    // The `db` parameter represents the column name in the database.  
    // The `dt` parameter represents the DataTables column identifier. 
    $columns = array( 
        array( 'db' => 'first_name', 'dt' => 'first_name' ), 
        array( 'db' => 'last_name',  'dt' => 'last_name' ), 
        array( 'db' => 'email',      'dt' => 'email' ), 
        array( 'db' => 'gender',     'dt' => 'gender' ), 
        array( 'db' => 'country',    'dt' => 'country' ), 
        array( 
            'db' => 'created', 
            'dt' => 'created', 
            'formatter' => function( $d, $row ) { 
                return date( 'jS M Y', strtotime($d)); 
            } 
        ), 
        array( 
            'db'        => 'status', 
            'dt'        => 'status', 
            'formatter' => function( $d, $row ) { 
                return ($d == 1)?'Active':'Inactive'; 
            } 
        ) 
    ); 
    
    // Include SQL query processing class 
    require '../php/ssp.class.php'; 
    
    // Output data as json format 
    echo json_encode( 
        SSP::simple( $_POST, $dbDetails, $table, $primaryKey, $columns ) 
    );
?>
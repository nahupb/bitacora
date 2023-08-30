<?php
// Include config file
include_once 'config.php';

// Database connection info
$dbDetails = array(
    'host' => DB_HOST,
    'user' => DB_USER,
    'pass' => DB_PASS,
    'db'   => DB_NAME
);

// DB table to use
$table = 'tratamiento';

// Table's primary key
$primaryKey = 'ticket';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database. 
// The `dt` parameter represents the DataTables column identifier.
$columns = array(
    array( 'db' => 'ticket_remedy', 'dt' => 0 ),
    array( 'db' => 'fecha_creacion', 'dt' => 1 ),
    array( 'db' => 'ticket_proveedor', 'dt' => 2 ),
    array( 'db' => 'llamada_guardias', 'dt' => 3 ),
    array( 'db' => 'grupo_escalado', 'dt' => 4 ),
    array(
        'db'        => 'descripcion',
        'dt'        => 5//,
        //'formatter' => function( $d, $row ) {
            //return ($d == 1)?'Active':'Inactive';
        //}
    ),
    array(
        'db'        => 'ticket',
        'dt'        => 6,
        'formatter' => function( $d, $row ) {
            return '
                <a href="javascript:void(0);" class="fa-solid fa-pen-to-square" style="color: #5f6163;" onclick="editData('.htmlspecialchars(json_encode($row), ENT_QUOTES, 'UTF-8').')"></a>
                <a href="javascript:void(0);" class="fa-solid fa-check" style="color: #5f6163;" onclick="solveData('.$d.')"></a>
                <a href="javascript:void(0);" class="fa-solid fa-trash" style="color: #5f6163;" onclick="deleteData('.$d.')"></a>
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
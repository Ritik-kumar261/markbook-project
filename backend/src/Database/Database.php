<?php  

// here the connection of db with the sql server
$serverName ="RITIK-1234\\SQLEXPRESS";
$connectionData =[
    "Database"=> "MarkbookTracker",
    "Uid"=>"sa",
    "PWD"=>"work123@#$"
];
$connection = sqlsrv_connect($serverName, $connectionData);
if (!$connection) {
    die("❌ Connection failed: " . print_r(sqlsrv_errors(), true));
} else {
    echo "✅ Connected to MS SQL Server!";
}



?>
<?php

include('admin_db_configuration.php');

function getCount($dbTable)
{
    global $conn;
    $result = $conn->query("SELECT COUNT(*) FROM  $dbTable");
    return $result->fetch_row()[0];
}

$userCount = getCount('user');
$adminCount = getCount('admin');
$laptopCount = getCount('tblLaptop');
$phoneCount = getCount('tblSmartPhone');
$tabletCount = getCount('tblTablet');

$conn->close();

//return as json
echo json_encode([
    'userCount' => $userCount,
    'adminCount' => $adminCount,
    'laptopCount' => $laptopCount,
    'phoneCount' => $phoneCount,
    'tabletCount' => $tabletCount,
]);
?>
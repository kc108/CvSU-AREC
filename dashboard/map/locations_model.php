<?php


// Gets data from URL parameters.
if(isset($_GET['add_location'])) {
    add_location();
}
if(isset($_GET['confirm_location'])) {
    confirm_location();
}



function add_location(){
    include('../../dbconfig.php');
    $lat = $_GET['lat'];
    $lng = $_GET['lng'];
    $title =$_GET['title'];
    $address =$_GET['address'];
    $description =$_GET['description'];
    // Inserts new row with place data.
    $query = sprintf("INSERT INTO locations " .
        " (id, lat, lng, title, description,location_status,address) " .
        " VALUES (NULL, '%s', '%s', '%s', '%s', '1','%s');",
        mysqli_real_escape_string($conn,$lat),
        mysqli_real_escape_string($conn,$lng),
        mysqli_real_escape_string($conn,$title),
        mysqli_real_escape_string($conn,$description),
        mysqli_real_escape_string($conn,$address));

    $result = mysqli_query($conn,$query);
    echo"Inserted Successfully";
    if (!$result) {
        die('Invalid query: ' . mysqli_error($conn));
    }
}
function confirm_location(){
    include('../../dbconfig.php');
    $id =$_GET['id'];
    $connfirmed =$_GET['confirmed'];
    // update location with confirm if admin confirm.
    $query = "update locations set location_status = $connfirmed WHERE id = $id ";
    $result = mysqli_query($conn,$query);
    echo "Inserted Successfully";
    if (!$result) {
        die('Invalid query: ' . mysqli_error($conn));
    }
}
function get_confirmed_locations(){
   include('../../dbconfig.php');
    // update location with location_status if admin location_status.
    $sqldata = mysqli_query($conn,"
select id ,lat,lng,description,location_status,title as isconfirmed
from locations WHERE  location_status = 1
  ");

    $rows = array();

    while($r = mysqli_fetch_assoc($sqldata)) {
        $rows[] = $r;

    }

    $indexed = array_map('array_values', $rows);
    //  $array = array_filter($indexed);

    echo json_encode($indexed);
    if (!$rows) {
        return null;
    }
}
function get_all_locations(){
    include('../../dbconfig.php');
    // update location with location_status if admin location_status.
    $sqldata = mysqli_query($conn,"
select id ,lat,lng,description,location_status,title as isconfirmed
from locations
  ");

    $rows = array();
    while($r = mysqli_fetch_assoc($sqldata)) {
        $rows[] = $r;

    }
  $indexed = array_map('array_values', $rows);
  //  $array = array_filter($indexed);

    echo json_encode($indexed);
    if (!$rows) {
        return null;
    }
}
function array_flatten($array) {
    if (!is_array($array)) {
        return FALSE;
    }
    $result = array();
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, array_flatten($value));
        }
        else {
            $result[$key] = $value;
        }
    }
    return $result;
}

?>
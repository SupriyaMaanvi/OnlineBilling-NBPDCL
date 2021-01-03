<?php
$con = mysqli_connect('localhost','root','','revisionnorth') or die ("Try Again");


function insertData($table,$fields){
    global $con;
    
    $cols = implode(",",array_keys($fields));
    $rows = implode("','",array_values($fields));
    
    $query = mysqli_query($con,"insert into $table ($cols) value ('$rows')");
    
}

function callingData($table){
    $array = array();
    global $con;
    
    $query = mysqli_query($con,"select * from $table");
    while($row = mysqli_fetch_array($query)){
    $array[] = $row; 
    }
    return $array;
}

function redirect($page){
    echo "<script>window.open('$page.php','_self')</script>";
}

function deleteData($table,$cond){
    global $con;
    
    $query = mysqli_query($con,"delete from $table where $cond");
    return $query;
}

function updateData($table,$fields,$where){
    global $con;
    
    $query = mysqli_query($con,"update $table set $fields where $where");
}

function checkData($table,$cond){
    global $con;
    $data = mysqli_query($con,"select * from $table where $cond");
    $count = mysqli_num_rows($data);
    
    if($count > 0){
        return true;
    }
    else{
        return false;
    }
}

?>
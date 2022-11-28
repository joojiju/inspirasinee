<?php

include('_secure.php');
include('header.php');
include('include/db.php');
include('include/function.php');

if(isset($_POST['update'])) {
    $ID = $_GET['ID'];
    $Ser_Name = $_POST['Services_Name'];
    $Ser_Type = $_POST['Services_Type'];
    $Dry_Price = $_POST['Dry_Price'];
    $Laundry_Price = $_POST['Laundry_Price'];

    $query = " update services_uploade set Services_Name = '" . $Ser_Name . "',Services_Type='" . $Ser_Type . "',Dry_Price='" . $Dry_Price . "',Laundry_Price='" . $Laundry_Price . "'where ID='" . $ID . "'";
    $result = mysqli_query($db,$query);

    if($result)
    {
        header("location:Services_record.php");
    }
    else
    {
        echo ' Please Check Your Query ';
    }
}
else
{
    header("location:Services_record.php");

}
?>
<?php
session_start();
$dbcon = mysqli_connect("localhost","root", "", "patient");

if(isset($_POST['save_data']))
{

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $city = $_POST['city'];

    $state = $_POST['state'];

    $zipcode = $_POST['zipcode'];

    $mobnumber = $_POST['mobnumber'];

    $aadharno = $_POST['aadharno'];

    $dob = $_POST['dob'];

    $address = $_POST['address'];

    $Bgroup = $_POST['Bgroup'];

    $Allergy = $_POST['Allergy'];

    $category = $_POST['category'];

    $doctor = $_POST['doctor'];

    $query = "INSERT INTO FORM (fname , lname, city, state, zipcode, mobnumber, aadharno, dob, address, Bgroup,Allergy,category,doctor) VALUES (' $fname', '$lname','$city','$state','$zipcode', '$mobnumber', '$aadharno', '$dob', '$address','$Bgroup', '$Allergy','$category' ,'$doctor')";
    $squery_run = mysqli_query($dbcon, $query);

    if($squery_run)
    {
        $_SESSION['status']= "Data Inserted";
        header("Location: admin1.html");
    }
    else
    {
        $_SESSION['status']= "Data Not Inserted";
        header("Location: admin1.html");
    }

   



}
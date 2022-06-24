<?php
 $server = "localhost";
 $username = "root";
 $password = "";
 $dbname = "carrent";
 // initalized connection
 $conn = mysqli_connect ($server,$username,$password, $dbname) ;
// error chkecking
if(isset($_POST['submit'])){

  if (!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['number']) &&  !empty($_POST['car'])){

    $name = $_POST['name'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $car = $_POST['car'];

    $query = "INSERT into rentfrom (name,address,number,car) VALUES ( '$name', '$address' , '$number', '$car' ) ";

    $run = mysqli_query ($conn,$query) or (mysqli_error());
    
    if($run){
      header('location:RentRegi.php');
    }
    else{
       echo "Form not Submitted";
    }
       
    
   
     
    } 
  
  }
?>
<?php 
    $id = 0;
    $carno = "";
    $Cartype= "";
    $brand= ""; 
    $Pcapacity = "";
    $aval="";
    $edit_state = false;

    // initalized connection
    $db_conn = mysqli_connect('localhost','root','','carrental');

    // inserting of data 
    if (isset($_POST['save'])){

        $carno = $_POST['carno'];
        $Cartype= $_POST['Cartype'];
        $brand= $_POST['brand'];
        $Pcapacity = $_POST['Pcapacity'];
        $aval=$_POST['aval'];

        $query ="INSERT INTO carregi (carno,Cartype,brand,Pcapacity,aval) VALUES ('$carno','$Cartype','$brand','$Pcapacity','$aval')";
        mysqli_query($db_conn,$query);
        header('location: CarReg.php');
    }
    // get result
    $result =mysqli_query($db_conn,"SELECT * FROM carregi ORDER BY id;");



    // udpate record 

    if(isset ($_POST['update'])){
        $carno =  $_POST['carno'];
        $Cartype= $_POST['Cartype'];
        $brand= $_POST['brand'];
        $Pcapacity= $_POST['Pcapacity'];
        $aval= $_POST['aval'];
        $id = $_POST['id'];

        mysqli_query($db_conn, "UPDATE carregi SET carno='$carno', Cartype='$Cartype',brand='$brand',Pcapacity='$Pcapacity',aval='$aval' WHERE id = '$id' ");
        header('location: CarReg.php');
    }
    // Delete Record 
 
    if(isset($_GET['delete'])){
      $id = $_GET['delete'];
       
        mysqli_query($db_conn,"DELETE FROM basic_info WHERE id= $id");
        header('location: CarReg.php');       


    }

?>


   
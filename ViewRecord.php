<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Records</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+Armenian&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md sticky-top bg-dark text-center" style="font-family: 'Noto Sans Armenian', sans-serif;padding: 9px 18px;">
        <div class="container-fluid">
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" data-bss-hover-animate="pulse" href="index.php" style="font-weight: bold;">Wheels.™</a>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" data-bss-hover-animate="pulse" href="RentRegi.php">Rent A Car</a></li>
                    <li class="nav-item"><a class="nav-link active" data-bss-hover-animate="pulse" href="CarReg.php">Car Registration</a></li>
                    <li class="nav-item"><a class="nav-link active" data-bss-hover-animate="pulse" href="ViewRecord.php">View Records</a></li>
                    <li class="nav-item"><a class="nav-link active" data-bss-hover-animate="pulse" href="AboutPage.php">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    


<?php

include("connections.php");

?>


<script type = "text/javascript" src="js/jQuery.js"></script>

<script type= "applications/javascript">

setInterval(function(){

    $('#retriever').load('retriever.php');



},1000);


</script>

<?php
if(empty($_GET["getDelete"])){

}else{

    include ("confirm_delete.php");

    



}










if(empty($_GET["getUpdate"])){



?>

<div id="retriever">

<?php include ("retriever.php");?>

</div>


<?php

}else{

include("updating_user.php");


}

if(empty($_GET["notify"])){

    // do nothing here TEHEE
}else{
    echo "<font color=green><h3><center>" . $_GET["notify"] . "</center></h3></font> ";
}




?>


</body>
</html>

<?php

session_start();

include("connections.php");

if(isset($_SESSION["email"])){
    $email = $_SESSION["email"];

    $authention = mysqli_query($connections,"SELECT * FROM tbl_user WHERE email = '$email'" );
    $fetch = mysqli_fetch_assoc($authention);
    $account_type = $fetch["account_type"];

    if($account_type != 1){
        echo "<script>window.location.href='../Forbidden';</script>";
    }
}






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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
</body>
</html>

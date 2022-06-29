<br>
<br>
<br>
<br>




<center>
    <div class="container">
        <div class="table-responsive text-center" style="background: var(--bs-body-bg);">
            <table class="table table-bordered">
        <tr>
            <td width="16%"><b>Name</td>
            <td width="10%"><b>address</td>
            <td width="16%"><b>number</td>
            <td width="16%"><b>Car</td>       
        </tr>
<?php

include("connections.php");

$retireve_query = mysqli_query($connections,"SELECT * FROM rentfrom WHERE id=id ");

while($row_users = mysqli_fetch_assoc($retireve_query)){

    $id = $row_users["id"];

    $db_name = $row_users["name"];
    $db_address = $row_users["address"];
    $db_number = $row_users["number"];
    $db_car = $row_users["car"];

    $jScript = md5(rand(1,9));

    $newScript  = md5(rand(1,9));

    $getUpdate  = md5(rand(1,9));

    $getDelete =  md5(rand(1,9));

   echo "

   <tr>
       <td>$db_name</td>

       <td>$db_address</td>
       <td>$db_number</td>
       <td>$db_car</td>

    </tr>";
}

?>

</table>
<br>
<br>
<br>
<br>




<center>
    <table border="0" width = "80%">


    <tr>

        <td width="16%"><b>Carno</td>
        <td width="10%"><b>Car type</td>
        <td width="16%"><b>Brand</td>
        <td width="16%"><b>Passenger Capacity</td>
        <td width="16%"><b>Availability</td>
        <td width="16%"><b>Action</td>
    </tr>


    <tr>
        
        <td colspan='6'> <hr> </td>

    </tr>










<?php

include("connections.php");

$retireve_query = mysqli_query($connections,"SELECT * FROM carregi WHERE id=id ");

while($row_users = mysqli_fetch_assoc($retireve_query)){

    $id = $row_users["id"];

    $db_carno = $row_users["carno"];
    $db_Cartype = $row_users["Cartype"];
    $db_brand = $row_users["brand"];
    $db_Pcapacity = $row_users["Pcapacity"];
    $db_aval = $row_users["aval"];
    

    $jScript = md5(rand(1,9));

    $newScript  = md5(rand(1,9));

    $getUpdate  = md5(rand(1,9));

    $getDelete =  md5(rand(1,9));







   echo "

   <tr>
       <td>$db_carno</td>

       <td>$db_Cartype</td>
       <td>$db_brand</td>
       <td>$db_Pcapacity</td>
       <td>$db_aval</td>


       <td>
            <center>
                <br>
                <br>
                
                <a href='?jScript=$jScript && newScript=$newScript && getUpdate=$getUpdate && id=$id' class ='btn-update'>update</a>
               &nbsp;
   
               <a href=' ?jScript=$jScript && newScript=$newScript && getDelete=$getDelete && id=$id' class ='btn-delete'>delete</a>
                <br>
                <br>   
                
            </center>
       
       
       
       
       
       
       </td>


    </tr>";



    echo "
    
        <tr>

            <td colspan='6'> <hr></td>

        </tr>
    
    
    
    
    
    
    ";

    
    

}

?>

</table>
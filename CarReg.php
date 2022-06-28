<?php include('bd_opt.php');

    include('connections.php');

    if(isset($_GET['edit'])){
          $id = $_GET ['edit'];
          $edit_state = true;
          $rec = mysqli_query($db_conn, "SELECT * FROM carregi WHERE id= $id ");
          $record = mysqli_fetch_array($rec);
          $carno = $record['carno'];
          $Cartype = $record['Cartype'];
          $brand = $record['brand'];
          $Pcapacity= $record['Pcapacity'];
         
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

<form method= "post" action="bd_opt.php">
    
    <input type= "hidden" name="id" value= "<?php echo $id?>">  
        <div>
            <label>Car no</label>
            <input type= "text" name="carno" value= "<?php echo $carno?>">
        </div>
        <div>
            <label>Car Type</label>
            <input type= "text" name="Cartype"value= "<?php echo $Cartype?>">
        </div>
        <div>
            <label>Brand</label>
            <input type= "text" name="brand"value= "<?php echo $brand?>">
        </div>
        <div>
            <label>Passenger Capacity</label>
            <input type= "number" name="Pcapacity"value= "<?php echo $Pcapacity?>">
        </div>
        <div>
            
            <label>Availability</label>
        <select name="aval">  

            <option name="aval" value="">Vehicle Status</option> 

                <option name="aval" value="occupied" >occupied</option> 
                <option name="aval" value="vacant">vacant</option>

       </select>
 
                <div>

                    <?php if ($edit_state == false ):?>
                        <button type="submit" name = "save"> Save</button>
                    <?php else: ?>   
                        <button type="submit" name= "update" >Update</button>
                        <?php endif ?>   
             </div>

     </form>
     
     <br>
     <br>
     <br>
    



    <table border = "1" cellpadding ="10">
        <thead>
            <tr>
                <th>I.D</th>
                <th>Car no</th>
                <th>Car Type</th>
                <th>Brand</th>
                <th>P. capacity</th>
                <th>Availability</th>
                <th colspan ="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['carno']?></td>
                    <td><?php echo $row['Cartype']?></td>
                    <td><?php echo $row['brand']?></td>
                    <td><?php echo $row['Pcapacity']?></td>
                    <td><?php echo $row['aval']?></td>
                    <td><a href="CarReg.php?edit=<?php echo $row['id'];?>">Edit</td>
                    <td><a href="CarReg.php?delete=<?php echo $row['id'];?>">Delete</td>

                </tr>
            <?php } ?>
        </tbody>
    </table> 
   
    
    <table border = "1">
        <thead>
            <tr>
                
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['carno']?></td>
                    <td><?php echo $row['Cartype']?></td>
                    <td><?php echo $row['brand']?></td>
                    <td><?php echo $row['Pcapacity']?></td>
                    <td><?php echo $row['aval']?></td>
                    <td><a href="CarReg.php?edit=<?php echo $row['id'];?>">Edit</td>
                    <td><a href="CarReg.php?delete=<?php echo $row['id'];?>">Delete</td>

                </tr>
            <?php } ?>
        </tbody>
    </table> 


       
 
</body>
</html>
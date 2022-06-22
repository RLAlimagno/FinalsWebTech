<?php include('bd_opt.php');

    if(isset($_GET['edit'])){
          $id = $_GET ['edit'];
          $edit_state = true;
          $rec = mysqli_query($db_conn, "SELECT * FROM carregi WHERE id= $id");
          $record = mysqli_fetch_array($rec);
          $carno = $record['carno'];
          $Cartype = $record['Cartype'];
          $brand = $record['brand'];
          $Pcapacity = $record['Pcapacity'];
          $aval= $record['aval'];
          $id = $record['id']; 
        //  ONCE YOU CLICK THE EDIT YOU CAN SEE THE CORRESPONDING ID OF TH DATA NEAR THE  local host
        //localhost/crud1/index.php?/edit=(corresponding ID) 
        // yung isang code dito line 54 naka hidden (para di display yung  $id at the same time 
        // ma declare na din kasi without it mag error sa id hindi mag eedit a yeet )
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <title>Vechicle List</title>
</head>
<body>
<form class= "container">    
 
 <div class="col">
    <form method= "post" action="bd_opt.php">
    
        <input type= "hidden" name="id" value= "<?php echo $id?>">  
          <div class="mb-3">
            <label for = "inputEmail4" class ="form-control">Car No.</label>
            <input type= "text" name="carno" value= "<?php echo $carno?>">
            </div>
            <div class="mb-3">
            <label class ="form-control">Car Type </label>
            <input type= "text" name="Cartype"value= "<?php echo $Cartype?>">
            </div>
            <div class="mb-3">
            <label class ="form-control">Brand </label>
            <input type= "text" name="brand"value= "<?php echo $brand?>">
            </div>
            <div class="mb-3">
            <label class ="form-control">Passenger Capacity </label>
            <input type= "number" name="Pcapacity"value= "<?php echo $Pcapacity?>">
            </div>
            <div class="mb-3">
            <label class ="form-control">Availablity</gender>
            <select name="aval">  

            <option name="aval" value="">Vechicle Status</option> 

            <option name="aval" value="Vacant" >Vacant</option> 
            <option name="aval" value="Occupied">Occupied</option>

            </select>


            <div>
                <?php if ($edit_state == false ):?>
                <button type="submit" name = "save">Save</button>
                <?php else: ?>   
                <button type="submit" name= "update" >Update</button>
                <?php endif ?>
            </div>    
     </form>
     
</div> 
     <br>
     <br>
     <br>
    

<div class="col">
   
        <table border = "1" cellpadding ="10">
            <thead>
                <tr>
                    <th>I.D</th>
                    <th>Car no.</th>
                    <th>Cartype</th>
                    <th>Brand</th>
                    <th>P.capacity</th>
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
                        <td><?php echo $row['cartype']?></td>
                        <td><?php echo $row['brand']?></td>
                        <td><?php echo $row['Pcapacity']?></td>
                        <td><?php echo $row['aval']?></td>
                        <td><a href="index.php?edit=<?php echo $row['id'];?>">Edit</td>
                        <td><a href="index.php?delete=<?php echo $row['id'];?>">Delete</td>

                    </tr>
                <?php } ?>
            </tbody>
        </table> 
    

</div>       
</div>
</form>
</body>
</html>
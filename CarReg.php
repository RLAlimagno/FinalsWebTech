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
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Registration</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+Armenian&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body style="background: var(--bs-dark);">
    <nav class="navbar navbar-dark navbar-expand-md sticky-top bg-dark text-center" style="font-family: 'Noto Sans Armenian', sans-serif;padding: 9px 18px;">
        <div class="container-fluid"><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a class="navbar-brand" href="index.html" style="font-weight: bold;">Wheels.™</a>
            <div id="navcol-1" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="rentform.html">Rent A Car</a></li>
                    <li class="nav-item"><a class="nav-link active" href="carregi.php">Car Registration</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">View Records</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <form style="color: var(--bs-body-bg);background: var(--bs-dark);padding: 87px;">
            <div>
                <input class="form-control" type="hidden" name="id" value="<?php echo $id?>" />
            </div>
            <div>
                <label class="form-label">Car Number:</label>
                <input class="form-control" type="text" name="carno" value="<?php echo $carno?>" />
            </div>
            <div>
                <label class="form-label">Car type:</label>
                <input class="form-control" type="text" name="Cartype" value="<?php echo $Cartype?>" />
            </div>
            <div>
                <label class="form-label">Brand:</label>
                <input class="form-control" type="text" name="brand" value="<?php echo $brand?>" />
            </div>
            <div>
                <label class="form-label">Passenger Capacity:</label>
                <input class="form-control" type="text" name="Pcapacity" value="<?php echo $Pcapacity?>;" />
            </div>
            <div>
                <label class="form-label">Availability:</label>
                <select class="form-select">
                    <optgroup label="Vehicle Status">
                        <option value="Vacant">Vacant</option>
                        <option value="Occupied">Occupied</option>
                    </optgroup>
                </select>
            </div>
            <div> 
                <?php if ($edit_state == false ):?>
                    <button type="submit" name = "save">Save</button>
                <?php else: ?>   
                    <button type="submit" name= "update" >Update</button>
                <?php endif ?>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="table-responsive text-center" style="background: var(--bs-body-bg);">
            <table class="table table-bordered">
                <thead>
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
</body>

</html>
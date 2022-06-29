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
    <title>Registration</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+Armenian&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body style="background: var(--bs-dark);">
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
                    <li class="nav-item"><a class="nav-link active" data-bss-hover-animate="pulse" href="carregi.php">Car Registration</a></li>
                    <li class="nav-item"><a class="nav-link active" data-bss-hover-animate="pulse" href="ViewRecord.php">View Records</a></li>
                    <li class="nav-item"><a class="nav-link active" data-bss-hover-animate="pulse" href="AboutPage.php">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <form method= "post" action="bd_opt.php" style="color: var(--bs-body-bg);background: var(--bs-dark);padding: 87px;">
            <div>         
                <input class="form-control" type= "hidden" name="id" value= "<?php echo $id?>">  
            </div>           
            <div>
                <label class="form-label">Car Number</label>
                <input class="form-control" type= "text" name="carno" value= "<?php echo $carno?>">
            </div>
            <div>
                <label class="form-label">Car Type</label>
                <input class="form-control" type= "text" name="Cartype"value= "<?php echo $Cartype?>">
            </div>
            <div>
                <label class="form-label">Brand</label>
                <input class="form-control" type= "text" name="brand"value= "<?php echo $brand?>">
            </div>
            <div>
                <label class="form-label">Passenger Capacity</label>
                <input class="form-control" type= "number" name="Pcapacity"value= "<?php echo $Pcapacity?>">
            </div>
            <div>
                <label class="form-label" >Availability</label>
                <select class="form-select" name="aval">  
                    <option name="aval" value="">Vehicle Status</option> 
                    <option name="aval" value="occupied" >occupied</option> 
                    <option name="aval" value="vacant">vacant</option>
               </select>
            </div>
            <div class="text-center">
                <?php if ($edit_state == false ):?>
                    <button class="btn btn-primary" type="submit" name = "save" style="background: var(--bs-gray);"> Save</button>
                <?php else: ?>   
                    <button class="btn btn-primary" type="submit" name= "update" style="background: var(--bs-gray);">Update</button>
                <?php endif ?>   
            </div>
        </form>
    </div>
    <div class="container">
        <div class="table-responsive text-center" style="background: var(--bs-body-bg);">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>I.D</th>
                        <th>Car Number</th>
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
        </div>
    </div>
    <div class="row" style="background: var(--bs-dark);">
        <div class="col" style="background: var(--bs-dark);">
            <footer class="text-black-50" style="padding: 14px;margin: 13px;">
                <p class="text-center" style="font-family: 'Noto Sans Armenian', sans-serif;color: var(--bs-secondary);">Wheels.™ © 2022</p>
            </footer>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>
</html>
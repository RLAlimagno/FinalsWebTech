<?php include('insert.php')

?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Rent Form</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+Armenian&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body style="background: url(&quot;assets/img/bgb1.png&quot;) center / cover no-repeat;height: 700px;padding: 0px;">
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

    <div class="container" style="padding: 112px;">
        <form  method = "post" action ="insert.php" style="background: var(--bs-dark);">
            <div style="padding: 87px;margin: 6px;">
                <h1 style="color: var(--bs-body-bg);font-family: 'Open Sans', sans-serif;text-align: center;">Rent Form</h1>
                <div>
                    <input type ="text" name="name" required class="form-control" placeholder="Full Name" style="padding: 6px 12px;margin: 14px;">
                </div>
                <div>
                    <input type="text" name="address" required class="form-control" placeholder="Address" style="margin: 14px;">
                </div>
                <div>
                    <td><input type="text" name="number" required class="form-control" placeholder="Phone Number" style="margin: 14px;">
                </div>
                <div>
                    <select class="form-select" name="car" style="padding: 6px 36px 6px 8px;margin: 14px;">
                        <option name="car" value="">Select vehicle</option> 
                        <option name="car" value="Sedan">Sedan</option> 
                        <option name="car" value="SUV">SUV</option>
                        <option name="car" value="Luxury">Luxury</option>
                    </select>
                </div>
                <div class="text-center">   
                    <button class="btn btn-primary" type="submit" name="submit" style="background: var(--bs-gray);">Submit</button>
                </div>
            </div>
        </form>
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
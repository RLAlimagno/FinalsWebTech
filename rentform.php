<?php
    

    include('connections.php');


?>


<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"><title>Untitled</title><link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+Armenian&amp;display=swap"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&amp;display=swap"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"></head><body style="background: url(&quot;assets/img/bgb1.png&quot;) center / cover no-repeat;height: 700px;padding: 0px;"><nav class="navbar navbar-dark navbar-expand-md sticky-top bg-dark text-center" style="font-family: 'Noto Sans Armenian', sans-serif;padding: 9px 18px;"><div class="container-fluid"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a class="navbar-brand" href="index.html" style="font-weight: bold;">Wheels.™</a><div class="collapse navbar-collapse" id="navcol-1"><ul class="navbar-nav"><li class="nav-item"><a class="nav-link active" href="rentform.html">Rent A Car</a></li><li class="nav-item"><a class="nav-link active" href="#">About Us</a></li></ul></div></div></nav><div class="container" style="padding: 112px;"><form style="background: var(--bs-dark);"><div style="padding: 87px;margin: 6px;"><h1 style="color: var(--bs-body-bg);font-family: 'Open Sans', sans-serif;text-align: center;">Rent Form</h1><div><input class="form-control" type="text" name="name" placeholder="Full Name" style="padding: 6px 12px;margin: 14px;"></div><div><input class="form-control" type="text" name="address" placeholder="Address" style="margin: 14px;"></div><div><input class="form-control" type="text" name="number" placeholder="Phone Number" style="margin: 14px;"></div><div><select class="form-select" name="car" style="padding: 6px 36px 6px 8px;margin: 14px;"><optgroup label="-Select A Vehicle-"><option value="" selected="">Sedan</option><option value="">SUV</option><option value="">Luxury</option></optgroup></select></div><div class="text-center"><button class="btn btn-primary" type="button" style="background: var(--bs-gray);">Submit</button></div></div></form></div><script src="assets/bootstrap/js/bootstrap.min.js"></script><script src="assets/js/script.min.js"></script></body></html><html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Rent Form</title>
</head>

<body style="background: url('bgb1.png') center / cover no-repeat;height: 700px;padding: 0px;">
    <nav class="navbar navbar-dark navbar-expand-md sticky-top bg-dark text-center" style="font-family: 'Noto Sans Armenian', sans-serif;padding: 9px 18px;">
        <div class="container-fluid"><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a class="navbar-brand" href="index.html" style="font-weight: bold;">Wheels.™</a>
            <div id="navcol-1" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="rentform.html">Rent A Car</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="padding: 112px;">
        <form style="background: var(--bs-dark);">
            <div style="padding: 87px;margin: 6px;">
                <h1 style="color: var(--bs-body-bg);font-family: 'Open Sans', sans-serif;text-align: center;">Rent Form</h1>
                <div><input class="form-control" type="text" name="name" placeholder="Full Name" style="padding: 6px 12px;margin: 14px;" /></div>
                <div><input class="form-control" type="text" name="address" placeholder="Address" style="margin: 14px;" /></div>
                <div><input class="form-control" type="text" name="number" placeholder="Phone Number" style="margin: 14px;" /></div>
                <div><select class="form-select" name="car" style="padding: 6px 36px 6px 8px;margin: 14px;">
                        <optgroup label="-Select A Vehicle-">
                            <option value selected>Sedan</option>
                            <option value>SUV</option>
                            <option value>Luxury</option>
                        </optgroup>
                    </select></div>
                <div class="text-center"><button class="btn btn-primary" type="button" style="background: var(--bs-gray);">Submit</button></div>
            </div>
        </form>
    </div>
</body>

</html>
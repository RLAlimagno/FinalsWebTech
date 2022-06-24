<?php include('insert.php')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Form</title>
</head>
<body>
    <form  method = "post" action ="insert.php" >
            <div>
                <lable>Full Name</label>
                  <td><input type ="text"  name="name" required >
            </div>
            <div>
                <label>Address</label>
                <input type="text" name="address" required>
            </div>
            <div>
                <lable>Number</label>
                <td><input type="text" name="number" required>
            </div>
            <div class="mb-3">
                <label>Vehicle Prefence</gender>
                <select name="car">  

                <option name="car" value="">Select vehicle</option> 

                    <option name="car" value="Sudan">Sudan</option> 
                    <option name="car" value="SUV">SUV</option>
                    <option name="car" value="Luxury">Luxury</option>


                </select>
            </div>
            </div>
            <div>   
                <button type="submit" name="submit">Submit</button>
            </div>
        
    </form>
    
</body>
</html>
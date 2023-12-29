<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $color=$_POST['color'];
    $descr = $_POST['descr'];
    $sql = "INSERT INTO `loginsystem`.`bookings` (`name`, `dob`, `email`, `phone`, `address`,'color', `other`, `dt`) VALUES ('$name', '$dob', '$email', '$phone','$address','$color, '$descr', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="mouse.css">
</head>
<body>
    <?php require 'nav.php' ?>
    <div class="container">
        <h1>Prebooking Form</h1>
        <p>Enter your details and submit this form to confirm your booking</p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form.We will shortly get back to you</p>";
        }
        ?>
        <form action="form.php" method="post" class="ho">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="date" name="dob" id="dob" placeholder="Enter your Date of Birth">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <input type="text" name="address" id="address" placeholder="Enter your current address">
    </form>
    <form id="hi">
            <label id="hr">Color options: </label>
            <input type="radio" name="color" id="color1" value="green">
            <label>Camo green</label>
            <input type="radio" name="color" id="color2" value="black">
            <label>Black </label>
            <input type="radio" name="color" id="color3" value="white">
            <label>Ivory white </label>
    </form>
    <form class="ho">
            <textarea name="descr" id="descr" cols="30" rows="10" placeholder="Enter any other information regarding customisation here"></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>
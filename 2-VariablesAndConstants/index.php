<?php 
    $name= 'john';//declaring a variable called name and assigning it a value of john
    $age= '20';//declaring a variable called age and assigning it a value of 20
    define('NAME', 'henry');//declaring a constant called NAME and assigning it a value of henry
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables and constants</title>
</head>
<body>
    <div >
        <h1>Hello <?php echo $name; ?>, this is one of the ways you can use variables in php</h1>
        <h2>You are <?php echo $age; ?> years old</h2>
        <h3>This is a constant <?php echo NAME; ?> and is declared with the define() function. It cannot be overridden.</h3>
    </div>
        
</body>
</html>
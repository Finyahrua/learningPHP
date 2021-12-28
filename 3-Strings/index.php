<?php 
    // $firstName = "Fin";//declaring a string variable called firstName and and assigning it a value of "Fin"
    // $lastName = "Adrian";//declaring a string variable called lastName and and assigning it a value
    // $fullName = "$firstName $lastName";//declaring a string variable called fullName and assigning it a value of firstName and lastName
    // echo $fullName;//outputting the value of fullName
    // echo "my full name is $fullName";//outputting the value of fullName using the fullName variable within double quotes

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h2>The following sentence is concatenated using strings</h2>
    <div>
        <?php 
            $firstName = "Fin";
            $lastName = "Adrian";
            $fullName = "$firstName $lastName";
            echo "My first name is $firstName."." "."my last name is $lastName."."<br/>"."my full name is $fullName";
        ?>
    </div>
    <div>
        <?php 
            $firstName = "Fin";
            echo str_repeat("$firstName ", 13);//outputs the firstName 13 times
        ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
table, th, td {
  border: 2px solid black;
  background-color: #f1f1c1;
}body{
    margin: 50px;
}
</style>
    <title>Learning php</title>
</head>
<body>
    <h3>Arrays</h3>
    <h4>The following array is an indexed array</h4>
    <p>It contains a list of cars created using the array() function</p>
    <p>
        <?php 
            $cars = array("Volvo", "BMW", "Toyota","benz","suzuki");//creates a new cars array
            print_r($cars);//prints the array
        ?>
    </p>
<!-- printing the cars using a for loop -->
    <p>
        <?php 
            // foreach($cars as $car){
            //     echo $car."<br>";
            // }
            //using for loop and count function 
            for($i=0;$i<count($cars);$i++){
                print_r($cars[$i]."<br>");
                
            }
        ?>
    </p>
    <h3>The following array is an associative array</h3>
    <h4>It contains a list of cars created using the square brackets </h4>
    <p>
        <?php 
            $cars = ["Volvo"=>"XC90", "BMW"=>"X5", "Toyota"=>"Corolla","benz"=>"C-class","suzuki"=>"Swift"];//creates a new cars array
        ?>
    </p>
    <!-- printing the cars using a foreach loop -->
 
    <ol>
        <?php foreach($cars as $car=>$value){?>
            <li><?php echo $car . " represents => " . $value;?></li>
        <?php } ?>
    </ol>
    <h3>The following array is a multidimensional array</h3>
    <h4>It contains a name price pairs of various cars</h4>
    <?php 
        $cars =[ 
            ["name"=>"volvo","price"=>"100000"],
                ["name"=>"bmw","price"=>"200000"],
                ["name"=>"toyota","price"=>"300000"],
                ["name"=>"benz","price"=>"400000"],
                ["name"=>"suzuki","price"=>"500000"]
            ];
    ?>
    <!-- printing the value of the array using a foreach loop -->
    <h4>The following table prints the contents of the created array which is the car name and car price</h4>
      <table>
          <tr>
              <th>Car name</th>
              <th>Car price</th>
          </tr>
        <?php foreach($cars as $car){?>
          
                <tr>
                    <td><?php echo $car["name"];?></td>
                    <td><?php echo $car["price"];?></td>
                </tr>
            
        <?php } ?>
   </table>
</body>
</html>
<?php 
     $name = "bsis";
     $campus = "2024";
     $college = "bsis";
    echo "hello world";
    echo"<br/>";
    echo $name. "-" .$campus."-".$college;

    

    $fullname = (isset($_GET['fullname'])) ? $_GET['fullname'] : "";
    $age = (isset($_GET['age'])) ? $_GET['age'] : 0;
    echo"<br/>";
   
    $x =1234;
    var_dump($x);

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php sample</title>
</head>
<body>
    <h1>php</h1>
   
    <?php 
     $name = "bsis";
     $campus = "2024";
     $college = "bsis";
    echo "hello world";
    echo"<br/>";
    echo $name. "-" .$campus."-".$college;
    ?>
  

    <form action="" method="get">
        <label for="">name</label>
        <input type="text" name="fullname">
        <label for="">age</label>
        <input type="number" name="age">
        <button type="submit"> submit</button>
    </form>

    <?php 
    echo "Fullname: " . $fullname . "<br>";
    echo "age: " . $age . "<br>";
    ?>


   


</body>
</html>
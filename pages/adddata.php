<?php

session_start();

$age = isset($_POST['age']) ? $_POST['age'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$course = isset($_POST['course']) ? $_POST['course'] : '';
$campus = isset($_POST['campus']) ? $_POST['campus'] : '';
$college = isset($_POST['college']) ? $_POST['college'] : '';



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Add Data</title>
        <?php include('../layout/style.php')?>
    </head>
    <body class="sb-nav-fixed">
        <?php include('../layout/header.php')?>
       
        <div id="layoutSidenav">
           <?php include('../layout/navigation.php')?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Data</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Input your Information</li>
                        </ol>
                        <form action="" method="post" onSubmit = "return confirm ('DO YOU REALLY WANT TO ADD THIS DATA?');">
                       
                        <div class="form-floating mb-3">
                                                <input class="form-control"name="age"  id="inputAge"  type="number" placeholder="age@example.com" />
                                                <label for="inputAge">Age</label>
                                            </div>
                                          
                                            <div class="form-floating mb-3">
                                                <input class="form-control"name="gender"  id="inputGender"    type="text"placeholder="gender@example.com" />
                                                <label for="inputGender">Gender</label>
                                            </div>
                                                              
                                             <div class="form-floating mb-3">
                                                <input class="form-control"name="course"  id="inputCourse"    type="text"placeholder="course@example.com" />
                                                <label for="inputCourse">Course</label>
                                            </div>
                                                              
                                            <div class="form-floating mb-3">
                                                <input class="form-control"name="campus"  id="inputCampus"    type="text" placeholder="campus@example.com" />
                                                <label for="inputCampus">Campus</label>
                                            </div>
                                              
                                            <div class="form-floating mb-3">
                                                <input class="form-control"name="college"  id="inputCollege" type="text"placeholder="college@example.com" />
                                                <label for="inputCollege">College</label>
                                            </div>

                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                              
                                              <button type="submit" class="btn btn-success">Add</a></button>
                                            </div>
                                            </form> 
                    </div>
                </main>
               <?php include('../layout/footer.php')?>
            </div>
        </div>
        <?php include('../layout/script.php')?>
       
    </body>
</html>

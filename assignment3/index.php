<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?> <!--Error Reader-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>SCP Foundation</title>
</head>
<body class="container" style="background-color: rgb(212, 212, 212)">
    
    <?php include "app/connection.php"; ?>

    <h1 style="text-align: center;">SCP Foundation</h1>

    <!-- Menu -->
    <div class="row">
        <div class="col">
            <ul class="nav navbar-light" style="background-color: black; border-radius: 25px; padding: 10px;">

                <?php foreach($result as $name): ?>
                <li class="nav-item">
                    <a href="index.php?Name='<?php echo $name['Name']; ?>'" class="nav-link" style="color: white;"><?php echo $name['Name']; ?></a>
                </li>
                <?php endforeach; ?>

                <li>
                    <a href="forum.php" class="nav-link" style="color: white;">New Record</a>
                </li>
            </ul>
        </div>
    </div>
    
    <br>
    
    <!-- DB Content -->
    <div class="row">
        <div class="col" class="container" style="color: white; border-radius: 25px; background-color: black; padding: 30px;">
            <?php 
                if(isset($_GET['Name']))
                {
                    $nm = trim($_GET['Name'], "'");
                
                    $record = $connection->query("select * from SCP where Name='$nm'") or die($connection->error());
                
                    $row = $record->fetch_assoc();
                    
                    $n = $row['Name'];
                    $cl = $row['Class'];
                    $pro = $row['Procedure'];
                    $des = $row['Description'];
                    $ex1 = $row['Extra1'];
                    $ex2 = $row['Extra2'];
                    $ex3 = $row['Extra3'];
                    
                    $id = $row['ID'];
                    $update = "update.php?update=" . $id;
                    $delete = "app/connection.php?delete=" . $id;
                
                    echo "
                        <h1>Name: {$n}</h1>
                        <h2>Class: {$cl}</h2>
                        <h3>Procedure:</h3>
                        <p>{$pro}</p>
                        <h3>Description:</h3>
                        <p>{$des}</p>
                        <h3>Added information:</h3>
                        <p>{$ex1}</p>
                        <p>{$ex2}</p>
                        <p>{$ex3}</p>
                        
                        <p><a href='{$update}' class='btn btn-dark'>Update</a> <a href='{$delete}' class='btn btn-dark'>Delete</a></p>
                    ";
                
                }
                else
                {
                    echo "
                        <h1>Welcome Employeer</h1>
                        <p>This is the SCP website that allows access to the main database of the SCP Foundation. Caution is advised while advancing through this website and its content.</p>
                        <p>To access the database and its contents, you will need to first click on the a SCP you desire to read at the navigation tab near the top of the website.</p>
                    ";
                }
            ?>
        </div>
    </div>    
<br>
<footer style="background-color: black; border-radius: 25px; padding: 15px; color: white;">30019578 - Timothy Woods - COMP.5210 - Assignment 3</footer>
<br>
</body>
</html>
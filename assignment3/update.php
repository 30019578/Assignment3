<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>SCP Foundation</title>
</head>
<body class="container" style="background-color: rgb(212, 212, 212)">

    <h1 style="text-align: center;">SCP Foundation Application</h1>
    
    <div class="container" style="color: white; border-radius: 25px; background-color: black; padding: 30px;" >

        <h2>Update a subject record:</h2> 
        <br>
        <p><a href="index.php" class="btn btn-dark">Main Index Page</a></p>
        <br>
        
        <?php
            include 'app/connection.php';
            $id = $_GET['update'];
            $record = $connection->query("select * from SCP where ID='$id'") or die($connection->error());
            $row = $record->fetch_assoc();
        ?>
        
        <form class="form-group" method="POST" action="app/connection.php">
            <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
            <label>Update name:</label>
            <br>
            <input type="text" class="form-control" name="Name" value="<?php echo $row['Name']; ?>">
            <br>

            <label>Update class:</label>
            <br>
            <input type="text" class="form-control" name="Class" value="<?php echo $row['Class']; ?>">
            <br>

            <label>Update procedure:</label>
            <br>
            <textarea class="form-control" name="Procedure" rows="5" placeholder="<?php echo $row['Procedure']; ?>"><?php echo $row['Procedure']; ?></textarea>
            <br>

            <label>Update further description:</label>
            <br>
            <textarea class="form-control" name="Description" rows="5" placeholder="<?php echo $row['Description']; ?>"><?php echo $row['Description']; ?></textarea>
            <br>

            <label>Update any other information:</label>
            <br>
            <textarea class="form-control" name="Extra1" rows="5" placeholder="<?php echo $row['Extra1']; ?>"><?php echo $row['Extra1']; ?></textarea>
            <br>

            <label>Update any more information:</label>
            <br>
            <textarea class="form-control" name="Extra2" rows="5" placeholder="<?php echo $row['Extra2']; ?>"><?php echo $row['Extra2']; ?></textarea>
            <br>

            <label>Update any further information:</label>
            <br>
            <textarea class="form-control" name="Extra3" rows="5" placeholder="<?php echo $row['Extra3']; ?>"><?php echo $row['Extra3']; ?></textarea>
            <br>
            <hr width="75%">

            <input type="Submit" class="btn btn-dark" name="update" value="update">
        </form>

    </div>
    <br>
</body>
</html>
<?php
    $user = "a3001957_AgmWebUser";
    $pw = "Toiohomai1234";
    $db = "a3001957_Assignment3";
    
    $connection = new mysqli('localhost', $user, $pw, $db) or die(mysqli_error($connection));

    $result = $connection->query("select * from SCP") or die($connection->error());
    
    if(isset($_POST['submit']))
    {
        $nm = $_POST['Name'];
        $cl = $_POST['Class'];
        $pro = $_POST['Procedure'];
        $desc = $_POST['Description'];
        $ex1 = $_POST['Extra1'];
        $ex2 = $_POST['Extra2'];
        $ex3 = $_POST['Extra3'];
        
        $sql = "insert into SCP(Name, Class, `Procedure`, `Description`, `Extra1`, `Extra2`, `Extra3`) values('$nm', '$cl', '$pro', '$desc', '$ex1', '$ex2', '$ex3')";
        
        if($connection->query($sql) === TRUE)
        {
            echo"<h1>The new record has been added successfully</h1>";
            echo"<p><a href='../index.php'>Back to index page<p>";
        }
        else
        {
            echo"<h1>Error: data submitted was unsucessful</h1>";
            echo"<p>$connection->error()</p>";
            echo"<p><a href='../index.php'>Back to index page<p>";
        }
    }
    
    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];
        
        $del = "delete from SCP where id=$id";
        
        if($connection->query($del) === TRUE)
        {
            echo"<p>Record has been deleted. <a href='../index.php'>Return to index page</a></p>";
        }
        else
        {
            echo "
                <p>Error: record cannont be deleted</p>
                <p><a href='../index.php'>Return to index page</a></p>
                <p>$connection->error()</p>
            ";
        }
    }
    
    // update function
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nm = $_POST['Name'];
        $cl = $_POST['Class'];
        $pro = $_POST['Procedure'];
        $desc = $_POST['Description'];
        $ex1 = $_POST['Extra1'];
        $ex2 = $_POST['Extra2'];
        $ex3 = $_POST['Extra3'];
        
        $update = "UPDATE SCP SET Name='$nm', Class='$cl', Procedure='$pro', Description='$desc', Extra1='$ex1', Extra2='$ex2', Extra3='$ex3' WHERE ID=$id";
        
        if($connection->query($update) === TRUE)
        {
            echo"<h1>The record has been updated successfully</h1>";
            echo"<p><a href='../index.php'>Back to index page></a><p>";
        }
        else
        {
            echo"<h1>Error: updating the data was unsucessful</h1>";
            echo"<p>$connection->error()</p>";
            echo"<p><a href='../index.php'>Back to index page></a><p>";
        }
    }

?>
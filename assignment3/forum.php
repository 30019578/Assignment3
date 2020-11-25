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
        <h2>Enter a new subject record: </h2>
        
        <p><a href="index.php" class="btn btn-dark">Main Index Page</a></p>
        
        <form class="form-group" method="post" action="app/connection.php">
            <label>Name</label>
            <br>
            <input type="text" class="form-control" name="Name" placeholder="Name" required>
            <br>

            <label>Class</label>
            <br>
            <input type="text" class="form-control" name="Class" placeholder="Class type" required>
            <br>

            <label>Procedure</label>
            <br>
            <textarea class="form-control" name="Procedure" rows="5"></textarea>
            <br>

            <label>Further Description</label>
            <br>
            <textarea class="form-control" name="Description" rows="5"></textarea>
            <br>

            <label>Other information</label>
            <br>
            <textarea class="form-control" name="Extra1" rows="5"></textarea>
            <br>

            <label>More information</label>
            <br>
            <textarea class="form-control" name="Extra2" rows="5"></textarea>
            <br>

            <label>Further information</label>
            <br>
            <textarea class="form-control" name="Extra3" rows="5"></textarea>
            <br>
            <hr width="75%">

            <input type="submit" class="btn btn-dark" name="submit" value="submit SCP Data">
            </form>

    </div>

</body>
</html>
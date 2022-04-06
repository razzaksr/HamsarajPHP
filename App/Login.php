<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login TO PHP CRUDL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        session_start();
        if($_POST)
        {
            if($_POST['username']=="hamsaraj" && $_POST['password']=="zealous")
            {
                $_SESSION['user']=$_POST['username'];
                header("Location:./UI.php");
            }
            else{
                header("Location:./Login.php");
            }
        }
    ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" class="col-lg-6 col-md-8 col-sm-12 shadow p-3">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="USername" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password" class="form-control"/>
                </div>
                <div class="row justify-content-around mt-3">
                    <button class="btn btn-outline-primary col-2" type="submit">Login</button>
                    <button class="btn btn-outline-danger col-2" type="reset">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
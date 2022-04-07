<?php 
include 'UI.php';
include 'Controller.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire new one</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        //echo "hi";
        if($_POST)
        {
            $txt=$_POST['skills'];
            $arr=explode(",",$txt);
            //$r=new Resource($_POST['user'],$arr,$_POST['place'],$_POST['pay']);
            //$m=new Manage();
            //$m->recruite($r);
            try{
                $obj=new PDO("mysql:host=localhost;dbname=hamsaraj","root","");
            
                $obj->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
                $sql="insert into resource(name,location,skills,commercials) values(:a,:b,:c,:d)";
            
                $statement=$obj->prepare($sql);

                $statement->bindParam(":a",$_POST['user']);
                $statement->bindParam(":b",$_POST['place']);
                $statement->bindParam(":c",$arr);
                $statement->bindParam(":d",$_POST['pay']);

                $statement->execute();
            
                echo "Record created";
            
                $obj=null;
            }
            catch(PDOException $pd)
            {
                echo $pd->getMessage();
            }
            header("Location:./list.php");
        }
    ?>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <form class="col-lg-6 col-md-8 col-sm-12 shadow p-5" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
                <div class="form-group">
                    <label>Resource name</label>
                    <input type="text" required name="user" placeholder="user" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Resource location</label>
                    <input type="text" required name="place" placeholder="Location" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Resource pay</label>
                    <input type="text" required name="pay" placeholder="Commercials" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Resource skills</label>
                    <textarea required name="skills" class="form-control" placeholder="Skills seperated by ,"></textarea>
                </div>
                <div class="row justify-content-around mt-5">
                    <input type="submit" value="Recruite" class="btn btn-outline-success col-3"/>
                    <input type="reset" value="cancel" class="btn btn-outline-secondary col-3"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
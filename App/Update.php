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
        //$ob=new Resource();
        $ob;
        $pos;
        //echo "hi";
        if($_POST)
        {
           //echo $_POST['pos']." ".$_POST['skills']; 
            try{
                $obj=new PDO("mysql:host=localhost;dbname=hamsaraj","root","");
            
                $obj->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
                $sql="update resource set name=:n, location=:l, skills=:s,commercials=:c where res_id=:r";
            
                $statement=$obj->prepare($sql);

                $statement->bindParam(":r",$_POST['pos']);
                $statement->bindParam(":n",$_POST['user']);
                $statement->bindParam(":l",$_POST['place']);
                $statement->bindParam(":c",$_POST['pay']);
                $statement->bindParam(":s",$_POST['skills']);
            
                $statement->execute();
            
                //$ob=$statement->fetch(PDO::FETCH_OBJ);

                //$txt=trim($ob->skills,"");
                //echo strlen($ob->skills)." ",strlen($txt);

                header("Location:./List.php");
            
                $obj=null;
            }
            catch(PDOException $pd)
            {
                echo $pd->getMessage();
            }
            // // $txt=$_POST['skills'];
            // // $arr=explode(",",$txt);
            // //$r=new Resource($_POST['user'],$arr,$_POST['place'],$_POST['pay']);
            // $m=new Manage();
            // $m->update($r,$_POST['pos']);
        }
        else{
            //$m=new Manage();
            //$ob=$m->read($_GET['data']);
            //$pos=$ob[1];
            //$ob=$ob[0];
            $alpha=$_GET['data'];
            //echo $alpha."Got @ update";
            try{
                $obj=new PDO("mysql:host=localhost;dbname=hamsaraj","root","");
            
                $obj->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
                $sql="select * from resource where res_id=:hai";
            
                $statement=$obj->prepare($sql);

                $statement->bindParam(":hai",$alpha);
            
                $statement->execute();
            
                $ob=$statement->fetch(PDO::FETCH_OBJ);

                //$txt=trim($ob->skills,"");
                //echo strlen($ob->skills)." ",strlen($txt);
            
                $obj=null;
            }
            catch(PDOException $pd)
            {
                echo $pd->getMessage();
            }
        }
    ?>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <form class="col-lg-6 col-md-8 col-sm-12 shadow p-5" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
                <input type="hidden" name="pos" value="<?php echo $ob->res_id?>"/>
                <div class="form-group">
                    <label>Resource name</label>
                    <input type="text" required value="<?php echo $ob->name?>" name="user" placeholder="user" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Resource location</label>
                    <input type="text" required name="place" value="<?php echo $ob->location?>" placeholder="Location" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Resource pay</label>
                    <input type="text" required name="pay" value="<?php echo $ob->commercials?>" placeholder="Commercials" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Resource skills</label>
                    <input type="text" required name="skills" value="<?php echo $ob->skills?>" placeholder="Skills by ," class="form-control"/>
                </div>
                <div class="row justify-content-around mt-5">
                    <input type="submit" value="Update" class="btn btn-outline-success col-3"/>
                    <input type="reset" value="cancel" class="btn btn-outline-secondary col-3"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
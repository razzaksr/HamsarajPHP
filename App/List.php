<?php
include 'UI.php';
include 'Controller.php';
require_once 'Model.php';
try{
    $obj=new PDO("mysql:host=localhost;dbname=hamsaraj","root","");

    $obj->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select * from resource";

    $statement=$obj->prepare($sql);

    $statement->execute();

    $tmp=$statement->fetchAll(PDO::FETCH_OBJ);

    //echo $tmp[0]->name;

    $obj=null;
}
catch(PDOException $pd)
{
    echo $pd->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing All</title>
</head>
<body>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="table-responsive-md">
                <table class="col-lg-7 col-md-8 col-sm-12 table table-striped p-4 shadow">
                    <thead>
                        <tr>
                            <th>Resource Name</th><th>Resource Location</th>
                            <th>Resource Skills</th><th>Resource Pay</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            //$m=new Manage();
                            //$tmp=$m->list();
                            function iterate($ob)
                            {
                                echo "<tr>";
                                echo "<td><a href='./Read.php?data=".$ob->name."'"." class='btn btn-outline-success'><i class='bi bi-book-half'></i>".$ob->name."</a></td>";
                                echo "<td>".$ob->location."</td>";
                                echo "<td>".$ob->skills."</td>";
                                echo "<td>".$ob->commercials."</td>";
                                echo "<td> <a class='btn btn-outline-danger rounded-circle me-2' href='./Delete.php?data=".$ob->res_id."'"."><i class='bi bi-x-circle-fill'></i></a>";
                                echo "<a class='btn btn-outline-warning rounded-circle' href='./Update.php?data=".$ob->res_id."'"."><i class='bi bi-arrow-down-up'></i></a></td>";
                                echo "</tr>";
                            }
                            array_map("iterate",$tmp);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
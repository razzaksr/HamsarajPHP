<?php
include 'UI.php';
include 'Controller.php';
require_once 'Model.php'?>
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
                            $m=new Manage();
                            $tmp=$m->list();
                            function iterate($obj)
                            {
                                echo "<tr>";
                                echo "<td><a href='./Read.php?data=".$obj->getName()."'"." class='btn btn-outline-success'><i class='bi bi-book-half'></i>".$obj->getName()."</a></td>";
                                echo "<td>".$obj->getLocation()."</td>";
                                echo "<td>".$obj->getSkillsView()."</td>";
                                echo "<td>".$obj->getCommercials()."</td>";
                                echo "<td> <a class='btn btn-outline-danger rounded-circle me-2' href='./Delete.php?data=".$obj->getName()."'"."><i class='bi bi-x-circle-fill'></i></a>";
                                echo "<a class='btn btn-outline-warning rounded-circle' href='./Update.php?data=".$obj->getName()."'"."><i class='bi bi-arrow-down-up'></i></a></td>";
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
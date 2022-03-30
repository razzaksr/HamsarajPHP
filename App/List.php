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
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $m=new Manage();
                            $tmp=$m->list();
                            function iterate($obj)
                            {
                                echo "<tr>";
                                echo "<td>".$obj->getName()."</td>";
                                echo "<td>".$obj->getLocation()."</td>";
                                echo "<td>".$obj->getSkills()."</td>";
                                echo "<td>".$obj->getCommercials()."</td>";
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
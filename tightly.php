<?php declare(strict_types=1);
    function calculate(float $liter,int $kms)
    {
        echo "<br/>Mileage is ".($kms/$liter)."<br/>";
    }

    calculate(34,450);
?>
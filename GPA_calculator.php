<?php
    $marks=array("CSE-1101"=>80,"CSE-1103"=>74,"CSE-1105"=>68,"CSE-1105"=>76,"CSE-1106"=>62,"CSE-1107"=>84);
    $total_point=0.00;
    $len=count($marks);
    foreach($marks as $x=>$y)
    {
    

        if($y>=80 && $y<=100)$total_point+=4.00;
        else if($y>=75 && $y<=79)$total_point+=3.75;
        else if($y>=70 && $y<=74)$total_point+=3.50;
        else if($y>=65 && $y<=69)$total_point+=3.25;
        else if($y>=60 && $y<=64)$total_point+=3.00;
        else if($y>=55 && $y<=59)$total_point+=2.75;
        else if($y>=50 && $y<=54)$total_point+=2.50;
        else if($y>=45 && $y<=49)$total_point+=2.25;
        else if($y>=40 && $y<=44)$total_point+=2.00;
        else $total_point+=0.00;

    }

    $GPA=($total_point/$len);

    echo "GPA = ".$GPA;


?>
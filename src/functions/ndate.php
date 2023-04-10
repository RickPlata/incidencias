<?php
function nDate ($str){
        $date = strval($str['fecha']);
        $day = substr($date, 8, 9);
        $month = substr($date, 5, -3);
        $year = substr($date, 0, 4);
        return $day.'/'.$month.'/'.$year;
    }
?>
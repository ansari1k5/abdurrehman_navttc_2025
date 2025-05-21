<?php
class summer {
    public static $count= "5" ; 

    public static function sum($count) {
        return $count*$count++;
    }
}
echo summer::sum(5);


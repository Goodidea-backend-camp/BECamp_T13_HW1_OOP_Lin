<?php
require 'vendor/autoload.php';

use Classes\Mysql;
use classes\Character;
use Classes\Player;
use Classes\Enemy;
use Classes\View;

$mysql = new Mysql();

while(true){

    View::showMenu();
    $choice = readline();
    $choice = (int)$choice;

    if ($choice === 1)
    {

    }elseif($choice === 2)
    {

    }elseif($choice === 3)
    {

    }elseif($choice === 4)
    {
        exit;
    }else
    {
        echo "請輸入1/2/3以進行選擇!\n";
        sleep(2);
        View::clearScreen();
        continue;
    }
}


?>
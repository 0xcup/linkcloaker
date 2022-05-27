<?php

$forbidden = 'forbidden.php';

if(isset($_SERVER['HTTP_REFERER'])){
    $ref = $_SERVER['HTTP_REFERER'] ;
    if($ref !== 'http://localhost/x.php'){
        header("Location: $forbidden");
    }
}
else{
    header("Location: $forbidden");
}

?>


<h1>Hello World</h1> <!--innocous home page-->


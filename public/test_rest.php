<?php





function test_http(){
    $x = array('name'=>'Bill');
    header("Access-Control-Allow-Origin: *");
    return json_encode($x);
}

//echo test_http();



phpinfo();







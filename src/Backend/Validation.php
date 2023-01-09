<?php

    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $phone = $_POST['uphone'];

    echo "$name<br>$email<br>$phone";

    $fh = fopen("DB/uinfo.csv","r+");
    if(!$fh) die ("File not found");

    fseek($fh,0,SEEK_END);
    echo ftell($fh);
    fwrite($fh, "\"".$name."\"".",".$email.",".$phone."\n");
    

?>
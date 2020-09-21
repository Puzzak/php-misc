<?php
  function DB($request){
    $host="";
    $user="";
    $password=""; 
    $database="";
    mysql_connect($host, $user, $password); 
    mysql_select_db($database); 
    mysql_set_charset('utf8');
    $answer=mysql_query("$request");
    return $answer;
  }
?>

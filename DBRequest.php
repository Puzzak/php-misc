<?php
  function DBRequest($request){
    $mysql_host="";
    $mysql_user="";
    $mysql_password=""; 
    $mysql_database="";
    mysql_connect($mysql_host, $mysql_user, $mysql_password); 
    mysql_select_db($mysql_database); 
    mysql_set_charset('utf8');
    $answer=mysql_query("$request");
    return $answer;
  }
?>

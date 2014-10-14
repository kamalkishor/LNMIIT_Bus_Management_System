<?php
require_once('dbconnect.php');    
  function getdata($dataquery)
  {
        $databaseconnection = MySQLConnectionFactory::connection();
        $database_data = mysql_query($dataquery,$databaseconnection) or die (mysql_error($databaseconnection)); 
        return $database_data;  
  }
  
  function savedata($savequery)
  {
      $databaseconnection = MySQLConnectionFactory::connection();
      if (!mysql_query($savequery,$databaseconnection))
      {
        die('Error: ' . mysql_error());
        return false;
      }
      else
      {
         return true;
      }
  }
  
  function updatedata($savequery)
  {
      $databaseconnection = MySQLConnectionFactory::connection();
      if (!mysql_query($savequery,$databaseconnection))
      {
        die('Error: ' . mysql_error());
        return false;
      }
      else
      {
         return true;
      }
  }
  
  function deletedata($deletequery)
  {
      $databaseconnection = MySQLConnectionFactory::connection();
      if (!mysql_query($deletequery,$databaseconnection))
      {
        die('Error: ' . mysql_error());
        return false;
      }
      else
      {
         return true;
      }
  }    
?>
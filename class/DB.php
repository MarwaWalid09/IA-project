<?php

namespace App;

 #like import
//lw 3andy aktr mn object f class wahed w kolhom 5ado al attributes bta3to yb2a instatns variable
// bs lw class variable yb2A 3ANDI mno nos5a wahda bs  (static) w 3shan hwa static yb2a msh lazm adelo object
// ha3ml kda *****DB::$username**** da ma3naha eno belong ll class,kol al tahat da belong ll class
//myobj=newdb() PHP
//myObj.UserName  myobj->username PHP
// self word refere to class not object
use mysqli;



class DB
{
      private static string $UserName = 'root';  #default attributes its type is string
      private static string $host = 'localhost';
      private static string $dbName ='appointment_project';
      private static string $password ='';
    #con is an object its type is mysqli to use any attribute in class mysqli to make some quairies in database
      public mysqli $Con;

      public  function connect()//to connect with database
      {
          $this->Con = mysqli_connect(self::$host,self::$UserName,self::$password,self::$dbName);
      }

      public  function check()
      {
          if (!$this->Con)
              echo"failed to connect to DB";
          else
              echo"connecting to DB";
      }
}


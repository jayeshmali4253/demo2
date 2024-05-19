<?php
if(isset($_POST["s1"]))
{
  $name=$_POST["name"];
  $email=$_POST["email"];
  $add=$_POST["add"];
  $coll=$_POST["coll"];

  $con=mysql_connect("localhost","root","");
  $db=mysql_selectdb("smlt");
  $q=mysql_query("insert into gitbash values('$name','$email','$add','$coll')");

  if($q)
  {
    echo("registration successfull");
  }
  else
  {
    echo("registraion not succssfull");
  }




}

?>
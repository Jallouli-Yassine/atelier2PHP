<!--MODEL-->
<?php
  class User  
    {
      public string $LastName;
      public string $FirstName;
      public string $Password;
      public string $Email;
      public string $UserName;

      public function __construct($LastName, $FirstName, $Password, $Email, $UserName)
      {
        $this->LastName = $LastName;
        $this->FirstName = $FirstName;
        $this->Password = $Password;
        $this->Email = $Email;
        $this->UserName = $UserName;
      }
      public function afficherUser($user)
      {   
        echo "
        <table border='5'>
         <tr>
         <td>LastName</td>
         <td>FirstName</td>
         <td>Password</td>
         <td>Email</td>
         <td>UserName</td>
           </tr>
           <tr>
        <td> $user->LastName </td>
        <td> $user->FirstName </td>
        <td> $user->Password </td>
        <td> $user->Email </td>
        <td> $user->UserName </td>
            </tr>
           </table>
        ";
      }
  }
?>
<!--RECUPERATION DES DONNES -> OBJECT-->
<?php

if(!empty($_POST['LastName'])&&!empty($_POST['FirstName'])&&!empty($_POST['Password'])&&!empty($_POST['Email'])&&!empty($_POST['username']))
{
  $LastName=$_POST['LastName'];
  $FirstName=$_POST['FirstName'];
  $Password=$_POST['Password'];
  $Email=$_POST['Email'];
  $UserName=$_POST['username'];
  
  $user1 = new User($LastName,$FirstName,$Password,$Email,$UserName); 
  var_dump($user1);
  echo"<br>";
  $user1->afficherUser($user1);
}else 
echo "il y a 1 ou des input(s) vide(s) !";

?>
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
    public function afficher()
    {
      echo "
      <table border='5'>
  <tr>
    <td>prenom</td>
    <td>nom</td>
    <td>password</td>
    <td>email</td>
    <td>username</td>
  </tr>
  <tr>
    <td> $this->LastName </td>
    <td> $this->FirstName </td>
    <td> $this->Password </td>
    <td> $this->Email </td>
    <td> $this->UserName </td>
  </tr>
  </table>
      ";
    }
  }
?>
<?php
   require_once "../core.php";

   if(isset($_POST["authorization"])) {
      $login = $_POST["login"];
      $password = md5($_POST['password']);

      $reliability = $link->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

      if($reliability->num_rows == 0) {
         $_SESSION["authorization_error"] = "Неверный логин или пароль";
         header("Location: ../../../index.php");
         exit;
      }

      $result = $reliability->fetch_assoc();
      
      $_SESSION['user'] = [
         "id" => $result['id'],
         "login" => $result['login'],
         "role_id" => $result['role_id']
      ];

      header("Location: ../../../index.php");
      exit;
   }
?>
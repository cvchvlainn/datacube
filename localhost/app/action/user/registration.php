<?php
   require_once "../core.php";

   if(isset($_POST["registration"])) {
      $login = $_POST["login"];
      $password = md5($_POST['password']);
      $email = $_POST["email"];
      $group = 2;

      $existence = $link->query("SELECT * FROM `users` WHERE `login` = '$login' OR `email` = '$email'");

      if($existence->num_rows > 0) {
         $_SESSION["registration_error"] = "Указанные почта или логин уже заняты";
         header("Location: ../../../index.php");
         exit;
      }

      $link->query("INSERT INTO `users` (`login`, `password`, `email`, `group_id`) VALUES ('$login', '$password', '$email', '$group')");

      header("Location: ../../../index.php");
      exit;
   }
?>
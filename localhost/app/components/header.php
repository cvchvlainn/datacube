<?php 
   require_once "./app/action/core.php";
   
   $posts = $link->query("SELECT `users`.*, `communities`.*, `topics`.*, `posts`.*
   FROM `posts`
      LEFT JOIN `users` ON `posts`.`user_id` = `users`.`id` 
      LEFT JOIN `communities` ON `posts`.`community_id` = `communities`.`id` 
      LEFT JOIN `topics` ON `posts`.`topic_id` = `topics`.`id`" .
      (empty($_GET['topic']) ? "" : " WHERE `posts`.`topic_id` = '{$_GET['topic']}'") .
      (empty($_GET['search']) ? "" : (!empty($_GET['topic']) ? " AND" : " WHERE") . " `posts`.`heading` LIKE '%{$_GET['search']}%'"));
      
      if(!empty($_GET['sort'])) {
         if($_GET['sort'] == 'popular') {
            $posts = $link->query("SELECT `users`.*, `communities`.*, `topics`.*, `posts`.*
            FROM `posts`
               LEFT JOIN `users` ON `posts`.`user_id` = `users`.`id` 
               LEFT JOIN `communities` ON `posts`.`community_id` = `communities`.`id` 
               LEFT JOIN `topics` ON `posts`.`topic_id` = `topics`.`id`
               ORDER BY `posts`.`count_likes` DESC");
         } elseif($_GET['sort'] == 'old') {
            $posts = $link->query("SELECT `users`.*, `communities`.*, `topics`.*, `posts`.*
            FROM `posts`
               LEFT JOIN `users` ON `posts`.`user_id` = `users`.`id` 
               LEFT JOIN `communities` ON `posts`.`community_id` = `communities`.`id` 
               LEFT JOIN `topics` ON `posts`.`topic_id` = `topics`.`id`
               ORDER BY `posts`.`created_at` ASC");
         } else {
            $posts = $link->query("SELECT `users`.*, `communities`.*, `topics`.*, `posts`.*
            FROM `posts`
               LEFT JOIN `users` ON `posts`.`user_id` = `users`.`id` 
               LEFT JOIN `communities` ON `posts`.`community_id` = `communities`.`id` 
               LEFT JOIN `topics` ON `posts`.`topic_id` = `topics`.`id`
               ORDER BY `posts`.`created_at` DESC");
         }
      }
      
   if(!empty($_GET['topic'])) {
      $currentTopic = $link->query("SELECT `id`, `topic` FROM `topics` WHERE `id` = '{$_GET['topic']}'");
      $currentTopic = $currentTopic->fetch_assoc();
   }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./assets/styles/style.css">
   <script src="./assets/scripts/jquery-3.7.1.min.js"></script>
   <title>Datacube</title>
</head>
<body>
   <header>
      <div class="header-container">
         <a href="./index.php" class="header-block header-logo">
            <img src="./assets/images/logo.svg" alt="Логотип" class="header-logo__iconLogo">
            <span class="header-logo__title">datacube</span>
         </a>
         <form action="./app/action/search.php" method="GET" class="header-block header-search">
            <?php if(!empty($_GET['topic'])) { ?>
               <input type="hidden" name="topic" value="<?php echo $_GET['topic']; ?>">
            <?php } ?>
            <input type="text" name="field" class="header-search__field" placeholder="<?php if(!empty($_GET['topic'])) { echo "Поиск по теме: {$currentTopic['topic']}"; } else { echo "Поиск по сайту"; } ?>">
            <button name="search" class="header-search__button"><img src="./assets/images/search.svg" alt="Поиск" class="header-search__iconSearch"></button>
         </form>
         <div class="header-block header-menu">
            <?php if(isset($_SESSION['user'])) { ?>
               <a href="./chat.php" class="header-menu__userBtn">
                  <img src="./assets/images/chat.svg" alt="Чат" class="header-menu__userBtnIcon">
               </a>
               <a href="./create-post.php" class="header-menu__userBtn">
                  <img src="./assets/images/plus.svg" alt="Создать пост" class="header-menu__userBtnIcon">
               </a>
               <a href="./profile.php" class="header-menu__userBtn">
                  <img src="./assets/images/profile.svg" alt="Профиль" class="header-menu__userBtnIcon">
               </a>
            <?php } else { ?>
            <a href="#" class="header-menu__btnLogin header-menu__openModal">
               Войти
            </a>
            <?php } ?>
            <a href="#" class="header-menu__btnHamburgerMenu">
               <img src="./assets/images/dots.svg" alt="Гамбургер меню" class="header-menu__iconDots">
            </a>
         </div>
         <div class="header-menu__hamburgerMenu">
            <a href="#" class="header-menu__hamburgerMenu__btn">Реклама на Datacube</a>
            <?php if(isset($_SESSION['user'])) { ?>
               <?php if($_SESSION['user']['role_id'] == 1) { ?>
                  <a href="./admin-panel.php" class="header-menu__hamburgerMenu__btn">Админ-панель</a>
               <?php } ?>
               <a href="./app/action/user/logout.php" class="header-menu__hamburgerMenu__btn">Выход</a>
            <?php } else { ?>
               <a href="#" class="header-menu__hamburgerMenu__btn header-menu__openModal">Вход | Регистрация</a>
            <?php } ?>
         </div>
      </div>
   </header>
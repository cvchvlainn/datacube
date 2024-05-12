<?php
   $topics = $link->query("SELECT * FROM `topics`");
?>
         <aside>
            <div class="aside-block aside-main">
               <a href="#" class="aside-main__btnActive">
                  <img src="./assets/images/popular.svg" alt="Популярное" class="aside-main__icon">Популярное
               </a>
               <div class="separator"></div>
               <div class="aside-main__list" data-id="1">
                  <a href="#" class="aside-main__list__openList" data-id="1">
                     ТЕМЫ<img src="./assets/images/arrow.svg" alt="Стрелочка" class="aside-main__list__iconArrow" data-id="1">
                  </a>
                  <div class="aside-main__listHidden" data-id="1">
                     <div class="aside-main__listShow" data-id="1">
                        <?php while($topic = $topics->fetch_assoc()) { ?>
                           <a href="./index.php?topic=<?php echo $topic['id']; ?>" class="aside-main__btn">
                              <img src="./assets/images/<?php echo $topic['topic_image']; ?>.svg" alt="Популярное" class="aside-main__icon"><?php echo $topic['topic']; ?>
                           </a>
                        <?php } ?>
                     </div>
                  </div>
               </div>
               <div class="separator"></div>
               <div class="aside-main__list" data-id="2">
                  <a href="#" class="aside-main__list__openList" data-id="2">
                     ПРОЧЕЕ<img src="./assets/images/arrow.svg" alt="Стрелочка" class="aside-main__list__iconArrow" data-id="2">
                  </a>
                  <div class="aside-main__listHidden" data-id="2">
                     <div class="aside-main__listShow" data-id="2">
                        <a href="#" class="aside-main__btn">
                           <img src="./assets/images/about-us.svg" alt="Популярное" class="aside-main__icon">О нас
                        </a>
                        <a href="#" class="aside-main__btn">
                           <img src="./assets/images/advertisement.svg" alt="Популярное" class="aside-main__icon">Реклама
                        </a>
                        <a href="#" class="aside-main__btn">
                           <img src="./assets/images/communities.svg" alt="Популярное" class="aside-main__icon">Сообщества
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="aside-block aside-footer">
               © 2024. All rights reserved.
            </div>
         </aside>
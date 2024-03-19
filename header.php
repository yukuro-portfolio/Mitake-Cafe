 <!-- =================================================== 
  header.php
  ヘッダーテンプレート
================================================== -->

 <header class="header" id="head_wrap">
   <div class="header__inner">
     <?php the_custom_logo(); ?>

     <div class="mobile-btn">
       <span class="mobile-btn__border"></span>
       <span class="mobile-btn__border"></span>
       <span class="mobile-btn__border"></span>
       <span class="mobile-btn__text">menu</span>
     </div>

     <!-- <nav class="g-nav">
       <ul class="g-nav__menu">
         <li class="g-nav__item">
           <a class="g-nav__link" href="/menu.html">Menu</a>
         </li>
         <li class="g-nav__item">
           <a class="g-nav__link" href="/mitake.html">Mitake</a>
         </li>
         <li class="g-nav__item">
           <a class="g-nav__link" href="/blog.html">Blog</a>
         </li>
         <li class="g-nav__item">
           <a class="g-nav__link" href="/index.html#access">Access</a>
         </li>
         <li class="g-nav__item">
           <a class="g-nav__link" href="/index.html#contact">Contact</a>
         </li>
       </ul>
     </nav> -->

     <?php
      wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'menu' => '',
        'menu_id'=>'',
        'menu_class' => 'g-nav__menu',
        'container' => 'nav',
        'container_class' => 'g-nav',
        'container_id' => '',
        'add_li_class' => 'g-nav__item'
      ));
      ?>
   </div>
 </header>
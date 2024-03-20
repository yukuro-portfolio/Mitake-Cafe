 <!-- =================================================== 
  header.php
  ヘッダーテンプレート
================================================== -->

 <header class="header" id="head_wrap">
   <div class="header__inner">

     <?php 
     if( has_custom_logo() ){
      /* ロゴが設定されていたら画像を表示 */
      the_custom_logo();
    }else{
      /* ロゴが設定されていなければサイトタイトルを表示 */
      echo '<h1>' . get_bloginfo( 'name' ) . '</h1>';
    }
     ?>

     <div class="mobile-btn">
       <span class="mobile-btn__border"></span>
       <span class="mobile-btn__border"></span>
       <span class="mobile-btn__border"></span>
       <span class="mobile-btn__text">menu</span>
     </div>

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
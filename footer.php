 <!-- =================================================== 
  footer.php
  フッターテンプレート
================================================== -->
<p class="pagetop">
  <a class="pagetop__link" href="#wrap">▲</a>
</p>

 <footer class="footer">
   <div class="footer__wrapper">
     <div class="footer__logo">
       <?php the_custom_logo(); ?>
     </div>

     <!-- ===== フッターメニュー Start ===== -->
     <?php
      wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'menu' => '',
        'menu_id'=>'footer__menu',
        'menu_class' => 'footer__menu',
        'container' => 'nav',
        'container_class' => 'footer__nav',
        'container_id' => '',
        'add_li_class' => 'footer__menu-item'
      ));
      ?>
     <!-- ===== フッターメニュー End ===== -->

     <div class="footer__address">
       <p class="footer__address-text">
         〒198-0000 東京都青梅市御岳本町0000-00
       </p>
       <p class="footer__address-text">
         Tel. 000 - 0000 - 0000
       </p>
     </div>

     <div class="footer__business-hours">
       <p class="footer__bh-label">
         【営業時間】
       </p>
       <p class="footer__bh-text">
         平日：10:00 ~ 18:00（水・木 定休日）
       </p>
       <p class="footer__bh-text">
         土日・祝日：9:00 ~ 17:00
       </p>
     </div>

     <!-- ===== SNSアイコン Start ===== -->
     <?php
      wp_nav_menu(array(
        'theme_location' => 'sns-menu',
        'menu' => '',
        'menu_id'=>'',
        'menu_class' => 'footer__sns',
        'container' => 'div',
        'container_class' => 'sns-menu',
        'container_id' => '',
        'add_li_class' => 'footer__sns-icon'
      ));
      ?>
     <!-- ===== SNSアイコン End ===== -->

     <div class="footer__copyright">
       <small class="footer__copyright-text">
         &copy; Cafe Mitake 2023 <br>Yukuro CreateFolio All Rights Reserved.
       </small>
     </div>
   </div>
 </footer>
 <?php wp_footer(); ?>
 <!-- ⬆︎ ######################## フッター End ######################## ⬆︎ -->

 <!-- ------------------------------------------------------------------------------- -->
 <!-- ⬇︎ ===== JavaScript / JQuery 読み込み ===== ⬇︎ -->
 <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 </body>

 </html>
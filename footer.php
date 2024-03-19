 <!-- =================================================== 
  footer.php
  フッターテンプレート
================================================== -->
 <footer class="footer">
   <div class="footer__wrapper">
     <div class="footer__logo">
       <?php the_custom_logo(); ?>
     </div>

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
     <div class="footer__sns">
       <a href="#" class="footer__sns-icon">
         <img class="footer__icon" src="/images/icon/ico_instagram_white.svg" alt="インスタグラム">
       </a>
       <a href="#" class="footer__sns-icon">
         <img class="footer__icon" src="/images/icon/ico_line-share.svg" alt="Line">
       </a>
     </div>
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
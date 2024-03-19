 <!-- =================================================== 
  sidebar.php
  サイドメニューテンプレート
================================================== -->

 <aside class="sidebar">
   <?php if (is_active_sidebar('sidebar')) { ///sidebarにはfunctions.phpで設定したidを入れる ?>
    <?php dynamic_sidebar('sidebar'); ?>
   <?php } ?>
 </aside>
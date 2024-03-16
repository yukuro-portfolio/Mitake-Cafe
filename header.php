 <!-- =================================================== 
  header.php
  ヘッダーパーツ
================================================== -->

 <header class="header" id="head_wrap">
   <div class="header__inner">
     <a href="/" class="header__logo">
       <img src="<?php echo get_theme_file_uri( '/assets/images/icon/ico_logo.svg' ); ?>" alt="Cafe Miatake">
     </a>

     <div class="mobile-btn">
       <span class="mobile-btn__border"></span>
       <span class="mobile-btn__border"></span>
       <span class="mobile-btn__border"></span>
       <span class="mobile-btn__text">menu</span>
     </div>

     <nav class="g-nav">
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
     </nav>
   </div>
 </header>
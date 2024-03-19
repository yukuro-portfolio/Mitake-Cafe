 <!-- =================================================== 
  prev-next.php
  記事の前後パーツ
================================================== -->

 <?php // 現在の投稿に隣接している前後の投稿を取得する
  $prev_post = get_previous_post(); // 前の投稿を取得
  $next_post = get_next_post(); // 次の投稿を取得
  if ($prev_post || $next_post) : // どちらか一方があれば表示
  ?>
   <div class="prev-next">
     <?php if ($prev_post) : // 前の投稿があれば表示 
      ?>
       <a class="prev-next__item" href="<?php echo get_permalink($prev_post->ID); ?>">
         <p class="prev-next__label prev-next__label--prev">Prev</p>
         <p class="prev-next__title">
           <?php echo get_the_title($prev_post->ID); ?>
         </p>

         <time class="prev-next__time datetime=" <?php the_time('Y.n.j'); ?>">
           <span class="prev-next__time-year"><?php the_time('Y'); ?></span>
           <span class="prev-next__time-date"><?php the_time('m | d'); ?></span>
         </time>
       </a>
     <?php endif; ?>
     <?php if ($next_post) : // 次の投稿があれば表示 
      ?>
       <a class="prev-next__item" href="<?php echo get_permalink($next_post->ID); ?>">
         <p class="prev-next__label prev-next__label--next">Next</p>
         <p class="prev-next__title">
           <?php echo get_the_title($next_post->ID); ?>
         </p>
         <time class="prev-next__time datetime=" <?php the_time('Y.n.j'); ?>">
           <span class="prev-next__time-year"><?php the_time('Y'); ?></span>
           <span class="prev-next__time-date"><?php the_time('m | d'); ?></span>
         </time>
       </a>
     <?php endif; ?>
   </div>
 <?php endif; ?>
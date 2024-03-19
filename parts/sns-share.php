 <!-- =================================================== 
  sns-share.php
  SNSシェアボタン パーツ定義
================================================== -->

<div class="sns-share">

  <a class="share-button share-button--x" href="//twitter.com/intent/tweet?text=<?php echo urlencode(the_title("","",0)); ?>&<?php echo urlencode(get_permalink()); ?>&url=<?php echo urlencode(get_permalink()); ?>" target="_blank">
    <span class="share-button__inner share-button__inner--x">エックス</span>
  </a>

  <a class="share-button share-button--facebook" href="//www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>&t=<?php echo urlencode(the_title("","",0)); ?>" target="_blank" title="facebookでシェアする">
    <span class="share-button__inner share-button__inner--facebook">FaceBook</span>
  </a>

  <a class="share-button share-button--pinterest" href="http://pinterest.com/pin/create/button/?url=ここにリンク&media=ここに画像URL&description=ここにテキスト" onclick="window.open(this.href, 'PINwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;">
    <span class="share-button__inner share-button__inner--pinterest">Pinterest</span>
  </a>

  <a class="share-button share-button--line" href="//timeline.line.me/social-plugin/share?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" title="LINEでシェアする">
    <span class="share-button__inner share-button__inner--line">LINE</span>
  </a>
</div>
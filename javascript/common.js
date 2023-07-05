/*===================================================
 common.js 
 jsプログラムの定義
================================================== */

/* --------------------------------------------------
 index.html キャッチコピーの一文字アニメーション
-------------------------------------------------- */ 
// js-textanimeにappeartextというクラス名を付ける定義
function EachTextAnimeControl() {
  $('.js-textanime').each(function () {
    var elemPos = $(this).offset().top - 50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass("appeartext");

    } else {
      $(this).removeClass("appeartext");
    }
  });
}

// 画面が読み込まれたらすぎに動かす記述
addEventListener('load', function()  {
  //spanタグを追加する
  var element = $(".js-textanime");
  element.each(function () {
    var text = $(this).text();
    var textbox = "";
    text.split('').forEach(function (t, i) {
      if (t !== " ") {
        if (i < 10) {
          textbox += '<span style="animation-delay:.' + i + 's;">' + t + '</span>';
        } else {
          var n = i / 10;
          textbox += '<span style="animation-delay:' + n + 's;">' + t + '</span>';
        }

      } else {
        textbox += t;
      }
    });
    $(this).html(textbox);
  });

  EachTextAnimeControl();/* アニメーション用の関数を呼ぶ*/
});
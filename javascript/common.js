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
addEventListener('load', function () {
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

/* --------------------------------------------------
 slick.js カルーセルの指定
-------------------------------------------------- */
window.onload = function () {

  $(".js-slide").slick({
    arrows: true,
    lazyLoad: 'ondemand',
    autoplaySpeed: 2000,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 400,
    infinite: false,

    responsive: [{
      breakpoint: 768, // ブレイクポイントを指定
      settings: {
        slidesToShow: 2,
        speed: 400,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        centerMode: true,
        centerPadding: '20%',
      },
    },
    ]
  });
};

/* --------------------------------------------------
 タブメニュー
-------------------------------------------------- */
document.addEventListener('DOMContentLoaded', function(){
  // タブに対してクリックイベントを適用
  const tabs = document.getElementsByClassName('tab-menu__item');
  for(let i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener('click', tabSwitch, false);
  }

  // タブをクリックすると実行する関数
  function tabSwitch(){
    // タブのclassの値を変更
    document.getElementsByClassName('is-active')[0].classList.remove('is-active');
    this.classList.add('is-active');
    // コンテンツのclassの値を変更
    document.getElementsByClassName('is-show')[0].classList.remove('is-show');
    const arrayTabs = Array.prototype.slice.call(tabs);
    const index = arrayTabs.indexOf(this);
    document.getElementsByClassName('menu-contents__panel')[index].classList.add('is-show');
  };
}, false);
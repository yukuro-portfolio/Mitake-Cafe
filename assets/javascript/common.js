/*===================================================
 common.js 
 jsプログラムの定義
================================================== */

/* --------------------------------------------------
 グローバルナビゲーション 固定ヘッダー
-------------------------------------------------- */
$(function () {
	$('.mobile-btn').on("click", function () {
		$('.g-nav').toggleClass('open');  // メニューにopenクラスをつけ外しする
	});
});

/* --------------------------------------------------
 ビジュアルテキストアニメーション
-------------------------------------------------- */
// eachTextAnimeにappeartextというクラス名を付ける定義
function EachTextAnimeControl() {
  $('.eachTextAnime').each(function () {
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

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  EachTextAnimeControl();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
  //spanタグを追加する
  var element = $(".eachTextAnime");
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
});// ここまで画面が読み込まれたらすぐに動かしたい場合の記述
/* --------------------------------------------------
 slick.js カルーセルの指定
-------------------------------------------------- */
window.onload = function () {

  $(".js-slide").slick({
    arrows: true,
    lazyLoad: 'ondemand',
    autoplaySpeed: 2000,
    slidesToShow: 2,
    slidesToScroll: 1,
    speed: 400,
    infinite: false,
    centerPadding: '50%',
    dots: true,
    dotsClass: 'dots-class',
    variableWidth: true,

    responsive: [{
      breakpoint: 768, // ブレイクポイントを指定
      settings: {
        slidesToShow: 2,
        speed: 400,
        centerPadding: '25%',
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        centerMode: true, 
      },
    },
    ]
  });
};

/* --------------------------------------------------
 タブメニュー menu.html
-------------------------------------------------- */
document.addEventListener('DOMContentLoaded', function () {
  // タブに対してクリックイベントを適用
  const tabs = document.getElementsByClassName('tab-menu__item');
  for (let i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener('click', tabSwitch, false);
  }

  // タブをクリックすると実行する関数
  function tabSwitch() {
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

/* --------------------------------------------------
 タブメニュー mitake.html
-------------------------------------------------- */
$(function() {
  // パラメータ取得
  function getParam(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    let regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
  }
 
  // ページ読み込み時のタブ切り替え
  let tabPram = ['is-dish', 'is-sweets', 'is-drink', 'is-spring', 'is-summer', 'is-autumn', 'is-winter'];
  let pram = getParam('active-tab');
  if (pram && $.inArray(pram, tabPram) !== -1) {
    $('.js-tab-cts,.js-tab-switch').removeClass('is-active');
    $('[data-tab="' + pram + '"]').addClass('is-active');
  }
 
  // ロード後のタブ切り替え
  $('.js-tab-switch').on('click', function() {
    let dataPram = $(this).data('tab');
    $('.js-tab-cts,.js-tab-switch').removeClass('is-active');
    $('[data-tab="' + dataPram + '"]').addClass('is-active');
  });
});

/* --------------------------------------------------
 フェードインアニメーション
-------------------------------------------------- */
window.addEventListener('DOMContentLoaded', function () {
  AOS.init({
    offset: 120,
    duration: 1500,
    easing: "ease-out",
    delay: 100,
  });
});

/* --------------------------------------------------
 アコーディオン開閉アニメーション blog.html
-------------------------------------------------- */
// アニメーションの時間とイージング
const animTiming = {
  duration: 300,
  easing: "ease-in-out",
};

// アコーディオンを閉じるときのキーフレーム
const closingAnimation = (answer) => [
  {
    height: answer.offsetHeight + "px",
    opacity: 1,
  },
  {
    height: 0,
    opacity: 0,
  },
];

// アコーディオンを開くときのキーフレーム
const openingAnimation = (answer) => [
  {
    height: 0,
    opacity: 0,
 },
 {
    height: answer.offsetHeight + "px",
    opacity: 1,
  },
];

document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".is-datails").forEach(function (el) {
      const summary = el.querySelector(".is-summary");
      const answer = el.querySelector(".blog-aside__archive-menu");
      summary.addEventListener("click", (event) => {
        // デフォルトの挙動を無効化
        event.preventDefault();
        // detailsのopen属性を判定
        if (el.getAttribute("open") !== null) {
          // アコーディオンを閉じるときの処理
          const closingAnim = answer.animate(closingAnimation(answer), animTiming);
  
          closingAnim.onfinish = () => {
            // アニメーションの完了後にopen属性を取り除く
            el.removeAttribute("open");
          };
        } else {
          // open属性を付与
          el.setAttribute("open", "true");
          // アコーディオンを開くときの処理
          const openingAnim = answer.animate(openingAnimation(answer), animTiming);
        }
      });
    });
  });
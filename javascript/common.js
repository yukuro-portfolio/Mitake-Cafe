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
    let elemPos = $(this).offset().top - 50;
    let scroll = $(window).scrollTop();
    let windowHeight = $(window).height();
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
  let element = $(".js-textanime");
  element.each(function () {
    let text = $(this).text();
    let textbox = "";
    text.split('').forEach(function (t, i) {
      if (t !== " ") {
        if (i < 10) {
          textbox += '<span style="animation-delay:.' + i + 's;">' + t + '</span>';
        } else {
          let n = i / 10;
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
document.addEventListener('DOMContentLoaded', function () {
  // タブに対してクリックイベントを適用
  const tabs = document.getElementsByClassName('tab-menu__item');
  for (let i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener('click', tabSwitch, false);
  }

  // タブをクリックすると実行する関数
  function tabSwitch() {
    // タブのclassの値を変更
    document.getElementsByClassName('is-active-mitake')[0].classList.remove('is-active-mitake');
    this.classList.add('is-active-mitake');
    // コンテンツのclassの値を変更
    document.getElementsByClassName('is-show-mitake')[0].classList.remove('is-show-mitake');
    const arrayTabs = Array.prototype.slice.call(tabs);
    const index = arrayTabs.indexOf(this);
    document.getElementsByClassName('mitake-valley__capture')[index].classList.add('is-show-mitake');
  };
}, false);

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
 ハンバーガーメニュー
-------------------------------------------------- */
//スクロールをするとハンバーガーメニューに変化するための設定を関数でまとめる
function FixedAnime() {
  //ヘッダーの高さを取得
  var headerH = $('.js-header').outerHeight(true);
  var scroll = $(window).scrollTop();
  if (scroll >= headerH){//ヘッダーの高さ以上までスクロールしたら
      $('.is-open').addClass('fadeDown');//.openbtnにfadeDownというクラス名を付与して
      $('.js-header').addClass('dnone');//.js-headerにdnoneというクラス名を付与
    }else{//それ以外は
      $('.is-open').removeClass('fadeDown');//fadeDownというクラス名を除き
      $('.js-header').removeClass('dnone');//dnoneというクラス名を除く
    }
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  FixedAnime();//スクロールをするとハンバーガーメニューに変化するための関数を呼ぶ
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
  FixedAnime();//スクロールをするとハンバーガーメニューに変化するための関数を呼ぶ
});


//ボタンをクリックした際のアニメーションの設定
$(".is-open").click(function () {//ボタンがクリックされたら
  $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    $(".js-header").toggleClass('panelactive');//ヘッダーにpanelactiveクラスを付与
});
$(".nav li a").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".is-open").removeClass('active');//ボタンの activeクラスを除去し
    $(".js-header").removeClass('panelactive');//ヘッダーのpanelactiveクラスも除去
});


//リンク先のidまでスムーススクロール
//※ページ内リンクを行わない場合は不必要なので削除してください
    $('.nav li a').click(function () {
  var elmHash = $(this).attr('href');
  var pos = $(elmHash).offset().top-0;
  $('body,html').animate({scrollTop: pos}, 1000);
  return false;
});

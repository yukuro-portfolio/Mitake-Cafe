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
(function($) {
  $(function() {
    var wgts = $(".widget_archive");//アーカイブウィジェット全てを取得
    //アーカイブウィジェットを1つずつ処理する
    wgts.each(function(i, el) {
      wgt = $(el);

      //日付表示＋投稿数か
      var has_date_count = wgt.text().match(/\d+年\d+月\s\(\d+\)/);
      //日付表示だけか
      var has_date_only = wgt.text().match(/\d+年\d+月/) && !has_date_count;

      //日付表示されているとき（ドロップダウン表示でない時）
      if ( has_date_count || has_date_only ) {
        var
          clone = wgt.clone(),//アーカイブウィジェットの複製を作成
          year = [];
        //クローンはウィジェットが後に挿入。クローンはcssで非表示
        wgt.after(clone);
        clone.attr("class", "archive_clone").addClass('hide');

        var
          acv = wgt; //ウィジェット
          acvLi = acv.find("li"); //ウィジェット内のli全て
        //ul.yearsをアーカイブウィジェット直下に追加してそのDOMを取得
        var acv_years =  acv.append('<ul class="years"></ul>').find("ul.years");

        //liのテキストから年がどこからあるかを調べる
        acvLi.each(function(i) {
          var reg = /(\d+)年(\d+)月/;
          //日付表示＋投稿数か
          if ( has_date_count ) {
            reg = /(\d+)年(\d+)月\s\((\d+)\)/;
          }
          var dt = $(this).text().match(reg);
          year.push(dt[1]);

        });
        $.unique(year); //重複削除

        acvLi.unwrap(); //liの親のulを解除

        //投稿年があるだけ中にブロックを作る
        var
          yearCount = year.length,
          i = 0;
        while (i < yearCount) {
          acv_years.append("<li class='year_" + year[i] + "'><a class='year'>" + year[i] + "年</a><ul class='month'></ul></li>");
          i++;
        }

        //作ったブロック内のulに内容を整形して移動
        //オリジナルのクローンは順番に削除
        var j = 0;
        acvLi.each(function(i, el) {
          var reg = /(\d+)年(\d+)月/;
          //日付表示＋投稿数か
          if ( has_date_count ) {
            reg = /(\d+)年(\d+)月\s\((\d+)\)/;
          }
          var
            dt = $(this).text().match(reg),
            href = $(this).find("a").attr("href");

          //月の追加
          var rTxt = "<li><a href='" + href + "'>" + "" + dt[2] + "月</a>";
          //日付表示＋投稿数か
          if ( has_date_count ) {
            rTxt += " (" + dt[3] + ")" + "</li>"; //投稿数の追加
          }

          //作成した月のHTMLを追加、不要なものは削除
          if (year[j] === dt[1]) {
            acv_years.find(".year_" + year[j] + " ul").append(rTxt);
            $(this).remove();
          } else {
            j++;
            acv_years.find(".year_" + year[j] + " ul").append(rTxt);
            $(this).remove();
          }
        });

        //クローン要素を削除
        clone.remove();

        //直近の年の最初以外は.hide
        acv.find("ul.years ul:not(:first)").addClass("hide");

        //年をクリックでトグルshow
        acv.find("a.year").on("click", function() {
          $(this).next().toggleClass("hide");
        });
      }//if has_date_count || has_date_only
    });//wgts.each

  });

})
'use strict';

// トップカルーセル
$(function() {
    $('.home-slider').bxSlider();
  });

// ヘッダーカテゴリーアコーディオン
$(function() {
  $(".header-category").on("mouseover", function() {
    $(this).toggleClass("active");
    $(this).next('.header-category__dropdown-menu').slideToggle();
  });
});

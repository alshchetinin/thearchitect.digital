$(document).ready(function () {
  //Изменение высоты экрана
  const appHeight = () =>
    document.documentElement.style.setProperty(
      "--app-height",
      `${window.innerHeight}px`
    );
  window.addEventListener("resize", appHeight);
  appHeight();

  //Табы
  $(".fillter__item").click(function (e) {
    var id = $(this).attr("data-tab"),
      content = $('.tab[data-tab="' + id + '"]');
    $(".fillter__item-active").removeClass("fillter__item-active");
    $(this).addClass("fillter__item-active");
    $(".tab-active").removeClass("tab-active");
    content.addClass("tab-active");
    var fillter = $(".fillter");
    $("html, body").animate({ scrollTop: $(fillter).offset().top }, 300);
    e.preventDefault();
  });

  var loc = window.location.hash;
  console.log(loc);
  if (loc != "") {
    var href = loc.replace("#", "");
    var fillter = $(".fillter");
    $("html, body").animate({ scrollTop: $(fillter).offset().top }, 300);
    content = $('.tab[data-tab="' + href + '"]');
    tab = $('.fillter__item[data-tab="' + href + '"]');
    $(".fillter__item-active").removeClass("fillter__item-active");
    $(tab).addClass("fillter__item-active");
    $(".tab-active").removeClass("tab-active");
    content.addClass("tab-active");
  }
});

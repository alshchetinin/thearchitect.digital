$(document).ready(function () {
  var $project_slider = $(".project-slider");
  var $whatwedo_Slider = $(".whatwedo-slide");
  var $whatwedo_Slider__item = $(".whatwedo-slide__item");
  var $single_project = $(".singleHorisontalScroll");
  var $logo = $("#logo_rhombus");
  var controller = new ScrollMagic.Controller();
  var widthWathwedo = 0;

  var singleProjectSliderWidht = 0;

  if ($(window).width() >= 1024) {
    whatwedo_width();
    funsingleProjectSliderWidht();
    hSlide($project_slider, ".main-project", ".main-project", "4000", '+=0.1');
    whatwedoslide($whatwedo_Slider, ".whatwedo", ".whatwedo", "4000", '+=0.01');
    hSlide(
      $single_project,
      ".singleHorisontalScroll",
      ".singleHorisontalScroll",
      "6000"
    );
    opacityItemWhatWeDo();
  }

  var hedline = new TimelineMax()
    .staggerFrom(
      ".hero_anome",
      1,
      {
        y: -10,
        opacity: 0,
        color: "#ff403c"
      },
      0.5
    )
    .from(".strike span", 0.3, { x: -10, opacity: 0 })
    .staggerFrom(
      ".stagger-menu",
      0.3,
      { y: -2, opacity: 0, color: "#ff403c" },
      0.3
    );

  // гирина страницы проекта
  function funsingleProjectSliderWidht() {
    $(".singleHorisontalScroll section").each(function (index, element) {
      // element == this
      singleProjectSliderWidht += Number($(this).outerWidth());
      console.log(singleProjectSliderWidht);
    });
    $($single_project).width(singleProjectSliderWidht);
  }
  //Ширина для whatwedo
  function whatwedo_width() {
    $(".whatwedo-slide__item").each(function (index, element) {
      var par = parseInt($(this).outerWidth(true));
      widthWathwedo += parseInt($(this).outerWidth(true));
      console.log(par);
      $whatwedo_Slider.outerWidth(widthWathwedo + (widthWathwedo * 5) / 100);
    });
  }

  //Горизонтально вертикальный скрол
  function hSlide($slider_wrap, trigger, pin, duration, delay) {
    var slider_width = $slider_wrap.outerWidth(true);
    var translate = slider_width - $(".container").width();

    var hSide = new TimelineMax().to($slider_wrap, 1, { x: -translate }, delay);

    var scroll_ProjectSlide = new ScrollMagic.Scene({
      triggerElement: trigger,
      triggerHook: "0",
      duration: duration
      //reverse: true
    })
      .setPin(pin)
      .setTween(hSide)
      //.addIndicators() // add indicators (requires plugin)
      .addTo(controller);
  }

  //Горизонтально вертикальный скрол whatwedo
  function whatwedoslide($slider_wrap, trigger, pin, duration, delay) {
    var slider_width = $slider_wrap.outerWidth(true);
    var translate = slider_width - $(".container").width();

    var hSide = new TimelineMax().to($slider_wrap, 1, { x: -translate }, delay);

    var scroll_ProjectSlide = new ScrollMagic.Scene({
      triggerElement: trigger,
      triggerHook: "0",
      duration: duration
      //reverse: true
    })
      .setPin(pin, { pushFollowers: true })
      .setTween(hSide)
      //.addIndicators() // add indicators (requires plugin)
      .addTo(controller);
  }

  function opacityItemWhatWeDo() {
    var opacityItem = new TimelineMax().staggerFromTo(
      $whatwedo_Slider__item,
      0.5,
      { opacity: 0.5 },
      { opacity: 1 },
      0.4
    );

    var scroll_opacity = new ScrollMagic.Scene({
      triggerElement: ".whatwedo",
      triggerHook: "0.5",
      duration: "2800"
    })
      .setTween(opacityItem)
      .addTo(controller);
  }
});

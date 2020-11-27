$(document).ready(function () {
  // reload location when window resize
  var windowWidth = $(window).width();
  var windowHeight = $(window).height();

  $(window).resize(function () {
    if (
      windowWidth != $(window).width() ||
      windowHeight != $(window).height()
    ) {
      location.reload();
      return;
    }
  });
  // panel width resize function
  $(".panels")
    .on("resize", function () {
      var width = 0;
      $(".panel_container").each(function () {
        width += $(this).outerWidth(true);
      });
      $(".panels").css("width", width + 100);
    })
    .resize();

  // side nav bar click function
  $(".side_nav_bars").click(function () {
    $(this).toggleClass("open");
    $(".side_nav").toggleClass("active");
    $(".side_nav_bars span").toggleClass("active");
    $(".search_icon img.top_img").toggleClass("transparent");
    $(".search_bar").removeClass("active");
    $(".close_icon").toggleClass("on");
  });

  /* side nav subscribe & contact page popup function */
  $(".appear").click(function () {
    $(this).toggleClass("disappear");
  });
  $(".subscribe_pop").click(function () {
    $(".subscribe").addClass("popup");
  });
  $(".subscribe_close").click(function () {
    $(".subscribe").removeClass("popup");
  });
  $(".subscribe_close_back").click(function () {
    $(".subscribe").removeClass("popup");
  });
  $(".contact_pop").click(function () {
    $(".contact").addClass("popup");
  });
  $(".subscribe_close").click(function () {
    $(".contact").removeClass("popup");
  });
  $(".subscribe_close_back").click(function () {
    $(".contact").removeClass("popup");
  });

  //cutting long text
  var cuttingText = function () {
    var winWidth = $(window).width();
    for (var i = 0; i < $(".panel_content_text").length; i++) {
      var txt_length = $(".panel_content_text").eq(i).find("p").text();
      if (txt_length.length > 100) {
        $(".panel_content_text")
          .eq(i)
          .find("p")
          .text(txt_length.substr(0, 100) + "...");
      } else {
        txt_length;
      }
    }
  };
  cuttingText();
});

// search bar appear function
function openNav() {
  document.getElementById("search_bar").style.top = "0";
  document.getElementById("search_icon").style.opacity = "40%";
  document.getElementById("pointer").style.visibility = "visible";
  document.getElementById("pointer").style.marginTop = "15px";
  document.getElementById("body").style.marginTop = "50px";
  document.getElementById("navbar").style.top = "50px";
}
function closeNav() {
  document.getElementById("search_bar").style.top = "-50px";
  document.getElementById("search_icon").style.opacity = "100%";
  document.getElementById("pointer").style.marginTop = "-25px";
  document.getElementById("pointer").style.visibility = "hidden";
  document.getElementById("body").style.marginTop = "0";
  document.getElementById("navbar").style.top = "0";
}

// image lazy load function
lozad(".lozad", {
  load: function (el) {
    el.src = el.dataset.src;
    el.onload = function () {
      el.classList.add("fade");
    };
  },
}).observe();
$(window).on("load", function () {
  $("body").addClass("loaded");
});

// ===========detail page function============
//main navigation function
$(document).ready(function () {
  $("#body").removeClass("close");
  $(".close_icon").click(function () {
    $("#body").addClass("close");
    setTimeout("history.go(-1)", 400);
  });
  //   content image slide function
  // image_boxs width resize function

  $(".image_boxs")
    .on("resize", function () {
      var width = 0;
      var height = 0;
      $(".image_box").each(function () {
        width += $(this).outerWidth(true);
      });
      $(".image_box").each(function () {
        height = $(this).outerHeight(true);
      });
      $(".image_boxs").css("width", width);
      $(".image_boxs").css("height", height);
    })
    .resize();

  var boxAppear = function () {
    var imgBoxWidth = $(".image_boxs").outerWidth();
    if (imgBoxWidth < 1400) {
      $(".content_image").addClass("on");
      $(".dots").addClass("on");
      $(".image_box_oneImg").removeClass("on");
    } else {
      $(".content_image").removeClass("on");
      $(".dots").removeClass("on");
      $(".image_box_oneImg").addClass("on");
    }
  };
  boxAppear();
  //**** main slide function
  var mySlide = function () {
    // **** variation hoisting
    var slideGroup = $(".image_boxs");
    var slides = slideGroup.find(".image_box");
    var currentIndex = 0;
    var indicator = "";
    var imgBoxLeft = $(".image_box").outerWidth();
    // **** a tag left value
    for (var i = 0; i < slides.length; i++) {
      slides.eq(i).css({ left: imgBoxLeft * i });
      indicator += "<span></span>";
    }
    $(".dots").html(indicator);
    function goToSlide(index) {
      slideGroup.animate({ left: -imgBoxLeft * index }, 200);
      currentIndex = index;
      update();
    }
    function update() {
      $(".dots span").removeClass("active");
      $(".dots span").eq(currentIndex).addClass("active");
      $(".image_box").css({ opacity: "0.5" });
      $(".image_box").eq(currentIndex).css({ opacity: "1" });
    }
    $(".dots span").click(function () {
      var index = $(this).index();
      goToSlide(index);
    });
    goToSlide(currentIndex);
  };
  mySlide();

  //   long image resize function{
  var img_height = $(".main_contents .image_box_oneImg img").height();
  if (img_height > 1000) {
    $(".main_contents .image_box_oneImg img").css({ width: "70%" });
    $(".main_contents .image_box_oneImg").css({ width: "80%", margin: "auto" });
  }
});

var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
    document.getElementById("search_bar").style.top = "-50px";
    document.getElementById("search_icon").style.opacity = "100%";
    document.getElementById("pointer").style.marginTop = "-25px";
    document.getElementById("pointer").style.visibility = "hidden";
  } else {
    document.getElementById("navbar").style.top = "-75px";
    document.getElementById("search_bar").style.top = "-50px";
    document.getElementById("search_icon").style.opacity = "100%";
    document.getElementById("pointer").style.marginTop = "-25px";
    document.getElementById("pointer").style.visibility = "hidden";
  }
  prevScrollpos = currentScrollPos;
};

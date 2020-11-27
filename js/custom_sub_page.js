$(document).ready(function () {
  var mql = window.matchMedia("screen and (min-width: 700px)");
  if (mql.matches) {
    $(".panels")
      .on("resize", function () {
        var width = 0;
        $(".panel_container").each(function () {
          width += $(this).outerWidth(true);
        });
        $(".panels").css("width", width + 800);
      })
      .resize();
  } else {
    $(".panels")
      .on("resize", function () {
        var width = 0;
        $(".panel_container").each(function () {
          width += $(this).outerWidth(true);
        });
        $(".panels").css("width", width + 100);
      })
      .resize();
  }
  $(".date_box").click(function () {
    $(".date_box_all").removeClass("active");
    $(".container_search").hide();
    $(".container_search_result").show();
  });
  $(".date_box_all").click(function () {
    $(".container_search").show();
    $(".container_search_result").hide();
    $(".date_box").removeClass("active");
    $(".date_box_all").addClass("active");
  });
});
function get_page(no) {
  $(".date_box").removeClass("active");
  $(".date_box").eq(no).addClass("active");
  $.get(
    "sub_page_1_ajax.php",
    {
      month: no,
    },
    function (args) {
      $("#container_search_ajax").html(args);
    }
  );
}

(function() {
  $("button").on("click", function() {
    $("button").addClass("hide");
    return $(".popup").addClass("show");
  });

  $(".icon i").on("click", function() {
    $("button").removeClass("hide");
    return $(".popup").removeClass("show");
  });

}).call(this);
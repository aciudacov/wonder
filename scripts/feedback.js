(function() {
  $(".feedbutton").on("click", function() {
    $("button").addClass("hide");
    return $(".popup").addClass("show");
  });

  $(".sendbutton").on("click", function() {
    $("button").removeClass("hide");
    return $(".popup").removeClass("show");
  });

}).call(this);
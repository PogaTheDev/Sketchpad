$(document).ready(function () {
  $("#get-started-button").on("click", function () {
    if ($("#hidden-text").is(":hidden")) {
      $("#hidden-text").show();
    } else {
      $("#hidden-text").hide();
    }
  });
});

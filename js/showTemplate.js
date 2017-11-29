$(document).ready(function() {

  // grab all of the html in the Template
  // and show present it as code
  $('#getHtml').on("click", function() {
    var htmlString = $('#html').html();
    $('#newhtml').text(htmlString);
  });

  // copy to clipboard button
  $('#copyBtn').on("click", function() {
    var element = $('#newhtml');
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
  });

});

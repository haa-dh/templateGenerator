// this is the array of page parts, it must match the partsArray.php array in order for the user to select the part


var arr = ["hello", "no", "yes"];
var options;
for (var i = 0, len = arr.length; i < len; i++) {
  options += "<option value="+arr[i]+">"+arr[i]+ "</option>";
}


// When the user selects the number of columns, show that number of input options
$(document).ready(function() {
  $('.changing').on('change', function() {
    // remove any of the select elements when changing column number
    $(this).parent().children("input").remove();
    // add select elements to end of column number selector
    var columnNumber = $(this).val();
    for(var i = 0; i< columnNumber; i++) {
     $(this).parent().append(
       "<h3>Column "+ (i+1) + " content</h3><select name='" + $(this).parent().attr('id') + (i+1) + "'>"+options+"</select>"
     );
     // alert($(this).parent().attr('id') + i);
   }
  });
});

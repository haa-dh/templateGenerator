<?php
function createGridClass($element) {

   $gridClass = (100/$element) * .12;
   echo $gridClass;
}
  if(isset($_POST['submit'])) {
    $clientName = $_POST['clientName'];
    $headerCols = $_POST['headerCols'];
  }
?>

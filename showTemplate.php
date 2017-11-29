<!DOCTYPE html>
<html>
  <head>
    <?php include('processTemplate.php'); ?>
    <meta charset="utf-8">
    <title>PHP to HTML</title>
    <script
      src="https://code.jquery.com/jquery-1.12.4.min.js"
      integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
      crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.js"></script>
    <script src="js/showTemplate.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.css">
  </head>
  <body>

  <a class="button" href="index.php">Back to template generator</a>

    <!-- this is the section where the user will be editing -->
    <div id="html" contenteditable="true">

        <div class="header">

          <h1>Client Name: <?php echo $clientName; ?></h1>

          <?php
            // takes the user selection and loops through the number of columns selected
            for($i = 0; $i < $headerCols; $i++) {
          ?>
            <div class="columns small-<?php createGridClass($headerCols); ?>">
              <h2>Column <?php echo $i+1; ?></h2>
            </div>
          <?php } ?>
        </div>

        <!-- sample code -->
        <p>This is a test for generating html from php</p>
        <br>
        <h3>Here is what I want it to do</h3>
        <ul>
          <li>Select an html template you would like to change</li>
          <li>Change out specific elements on the page with your own text/images</li>
          <li>Print out the html for the user to copy and paste.</li>
          <img src="<?php echo $imgsrc = "/"; ?>"  />
        </ul>

    </div>

    <!-- Here is where the user will copy the html code -->
    <hr>

    <h1>Html code</h1>
    <button class="button" id="getHtml" type="submit" name="submit">Submit</button>
    <pre>
      <span id="newhtml">Click the submit button to see the html for the content above</span>
    </pre>
    <button class="button" id="copyBtn">Copy to Clipboard</button>

  </body>
</html>

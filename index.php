<?php

/*
 * Title:         Select Landing Page Template
 * Author:        Hoglund Analytics
 * Creation Date: 11/21/17
 * Description:   This page will allow a user to select
                  the specific columns and content they
                  want the landing page to display. It
                  will submit to printTemplate.php file
                  and from there they can edit the
                  content text.
 */

?>
<?php include('includes/partsArray.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Select template</title>
    <script
      src="https://code.jquery.com/jquery-1.12.4.min.js"
      integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
      crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.js"></script>
    <script src="js/generate.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.css">
  </head>
  <body>

      <div class="row">
        <h1 style="text-align: center;">Template Attributes</h1>
        <div class="small-12">

          <form action="showTemplate.php" method="post">

            <label>Client Name</label>
            <input type="text" name="clientName">

            <div id="header">
            <select class="changing" name="headerCols" id="headerCol">
              <option disabled selected value> -- select a column number -- </option>
              <option value="1">1
              <option value="2">2
              <option value="3">3
              <option value="4">4
              <option value="6">6
            </select>
            </div>

            <input type="submit" name="submit">
          </form>

        </div>
      </div>

  </body>
</html>

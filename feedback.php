<!DOCTYPE html>
<html>
<head>
  <?php
  include("includes/head.php");?>
  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <!-- Load validation -->
  <script src="scripts/clientValidation.js" type="text/javascript"></script>
</head>
<body class="index">
  <div id="backgroundabout"></div>
  <div id="overlay">
    <div id="titlefeedback">
      <!-- Adapted from lab 11 -->
      <form method="post" action="feedbackresponse.php" id="mainForm">
        <div class="labelAndInputHolder">
          <div class="labelHolder">
            <label for="Name">Name:</label>
          </div>
          <div class="inputHolder">
            <input id="Name" name="Name" placeholder="Johnny Appleseed"required>
          </div>
        </div>

        <div class="labelAndInputHolder">
          <div class="labelHolder">
            <label for="Email">Cornell Email:</label>
          </div>
          <div class="inputHolder">
            <input id="Email" type="email" name="Email" placeholder="Johnny@appleseed.com" required>
          </div>
        </div>

        <div class="labelAndInputHolder">
          <div class="labelHolder">
            <label for="FavThing">Favorite Thing about AppleFest </label>
          </div>
          <div class="inputHolder">
            <input id="FavThing" type="text" name="FavThing" placeholder="Apple Pie!" required>
          </div>
        </div>

        <div class="labelAndInputHolder">
          <div class="labelHolder">
            <label for="FavThing">How can we improve?</label>
          </div>
          <div class="inputHolder">
            <input id="LeastFavThing" type="text" name="LeastFavThing" placeholder="Needs more apples" required>
          </div>
        </div>

        <div class="labelAndInputHolder">
          <div class="labelHolder">
            <label for="Additional">Additional comments</label>
          </div>
          <div class="inputHolder">
            <input id="Additional" type="text" name="Additional" placeholder="Extra comments, questions, or concerns">
          </div>
        </div>

        <div>
          <button type="submit" class="submit">Submit</button>
        </div>
      </form>
  <div id="overlaynavbar">
    <?php
    include("includes/navigation.php");?>
  </div>
  </body>
  </html>

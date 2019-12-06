<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>INFOSECIANS About</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px;
      }
    </style>
    <link href="/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="/">INFOSECIANS</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="/">Home</a></li>
              <li class="active"><a href="/about.php">About</a></li>
              <li><a href="/vyshnav.php">Hacker</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <h1>INFOSECAINS</h1>
      <p>Website - <a href="https://vyshnavvizz.github.io/me">vyshnavizz</a></p>
      <img src="/images/vyshnav.jpg" />
      <p>What else would you want to know?!</p>
<?php
$counter_file = "/tmp/visitor_counter.txt";
$x = file_get_contents($counter_file);
$x += 1;
file_put_contents($counter_file, $x);
?>
      <p>You are the <?=$x;?>th visitor to this page.
<?php
if ($x % 1000 == 0) {
?>
      Congrats, here's your prize: VIZZ{999ProblemsButAReloadAint1}</p>
<?php
} else {
?>
      Every thousandth visitor gets a prize.</p>
<?php
}
?>
    </div> <!-- /container -->
  </body>
</html>

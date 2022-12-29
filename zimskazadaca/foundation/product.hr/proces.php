<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'head.php'; ?>   
  </head>
<body>
    <div class="grid-container">
      <?php require_once 'izbornik.php'; ?>
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <div class="callout" id="tijelo">
            PROCES PROIZVODNJE
          <ul class="tabs" data-tabs id="example-tabs">
  <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Tab 1</a></li>
  <li class="tabs-title"><a href="#panel2">Tab 2</a></li>
  <li class="tabs-title"><a href="#panel3">Tab 3</a></li>
  <li class="tabs-title"><a href="#panel4">Tab 4</a></li>
  <li class="tabs-title"><a href="#panel5">Tab 5</a></li>
  <li class="tabs-title"><a href="#panel6">Tab 6</a></li>
</ul>

<div class="tabs-content" data-tabs-content="example-tabs">
  <div class="tabs-panel is-active" id="panel1">
    <p>One</p>
    <p>Check me out! I'm a super cool Tab panel with text content!</p>
  </div>
  <div class="tabs-panel" id="panel2">
    <p>Two</p>
    <img class="thumbnail" src="assets/img/generic/rectangle-7.jpg" alt="">
  </div>
  <div class="tabs-panel" id="panel3">
    <p>Three</p>
    <p>Check me out! I'm a super cool Tab panel with text content!</p>
  </div>
  <div class="tabs-panel" id="panel4">
    <p>Four</p>
    <img class="thumbnail" src="assets/img/generic/rectangle-2.jpg" alt="">
  </div>
  <div class="tabs-panel" id="panel5">
    <p>Five</p>
    <p>Check me out! I'm a super cool Tab panel with text content!</p>
  </div>
  <div class="tabs-panel" id="panel6">
    <p>Six</p>
    <img class="thumbnail" src="assets/img/generic/rectangle-8.jpg" alt="">
  </div>
</div>
          </div>
        </div>
        <?php include_once 'podnozje.php'; ?>
      </div>
    </div>
   <?php include_once 'jskripte.php'; ?>
  </body>
</html>
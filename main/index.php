<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/bootstrap-grid.css">
<link rel="stylesheet" href="../css/gridstack.min.css">
<link rel="stylesheet" href="../style.css">
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/gridstack.js"></script>
<script type="text/javascript" src="../js/bootstrap.js" ></script>
<head>
    <title>Klasės vinjetė</title>
</head>
<body style="overflow:hidden;">
<nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Klasės vinjetė</a>
</nav>
<div class="main-div row grid-stack" data-gs-row="5" data-gs-max-row="7">
<div class="grid-stack-item" data-gs-x="0" data-gs-y="2" data-gs-width="3" data-gs-height="3" data-gs-max-width="7" data-gs-max-height="4">
  <div class="grid-stack-item-content"><img class="img-fluid image"src="../image/nuotrauka1.jpg"></div>
</div>
<div class="grid-stack-item" data-gs-x="3" data-gs-y="2" data-gs-width="1" data-gs-height="1" data-gs-max-width="7" data-gs-max-height="4">
  <div class="grid-stack-item-content"><img class="img-fluid image"src="../image/nuotrauka2.jpg"></div>
</div>
<div class="grid-stack-item" data-gs-x="3" data-gs-y="2" data-gs-width="2" data-gs-height="2" data-gs-max-width="7" data-gs-max-height="4">
  <div class="grid-stack-item-content"><img class="img-fluid image"src="../image/nuotrauka3.jpg"></div>
</div>
<div class="grid-stack-item" data-gs-x="5" data-gs-y="2" data-gs-width="2" data-gs-height="2" data-gs-max-width="7" data-gs-max-height="4">
  <div class="grid-stack-item-content"><img class="img-fluid image"src="../image/nuotrauka4.jpg"></div>
</div>
<div class="grid-stack-item" data-gs-x="5" data-gs-y="2" data-gs-width="1" data-gs-height="1" data-gs-max-width="7" data-gs-max-height="4">
  <div class="grid-stack-item-content"><img class="img-fluid image"src="../image/nuotrauka6.jpg"></div>
</div>
<div class="grid-stack-item" data-gs-x="4" data-gs-y="2" data-gs-width="1" data-gs-height="1" data-gs-max-width="7" data-gs-max-height="4">
  <div class="grid-stack-item-content"><img class="img-fluid image"src="../image/nuotrauka7.jpg"></div>
</div>
<div class="grid-stack-item" data-gs-x="9" data-gs-y="2" data-gs-width="3" data-gs-height="2" data-gs-max-width="7" data-gs-max-height="4">
  <div class="grid-stack-item-content"><img class="img-fluid image"src="../image/nuotrauka1.jpg"></div>
</div>
<div class="grid-stack-item" data-gs-x="7" data-gs-y="2" data-gs-width="2" data-gs-height="1" data-gs-max-width="7" data-gs-max-height="4">
  <div class="grid-stack-item-content"><img class="img-fluid image"src="../image/nuotrauka2.jpg"></div>
</div>
<div class="grid-stack-item" data-gs-x="10" data-gs-y="2" data-gs-width="3" data-gs-height="1" data-gs-max-width="7" data-gs-max-height="4">
  <div class="grid-stack-item-content"><img class="img-fluid image"src="../image/nuotrauka3.jpg"></div>
</div>
<div class="grid-stack-item" data-gs-x="7" data-gs-y="2" data-gs-width="2" data-gs-height="2" data-gs-max-width="7" data-gs-max-height="4">
  <div class="grid-stack-item-content"><img class="img-fluid image"src="../image/nuotrauka4.jpg"></div>
</div>
<div class="grid-stack-item" data-gs-x="6" data-gs-y="2" data-gs-width="1" data-gs-height="1" data-gs-max-width="7" data-gs-max-height="4">
  <div class="grid-stack-item-content"><img class="img-fluid image"src="../image/nuotrauka4.jpg"></div>
</div>
</div>
<footer class=" text-center py-3 fixed-bottom bg-dark text-white">
    © 2020 Gytis Ramanasukas
</footer>
</body>
<script type="text/javascript">
$(document).ready(function(){
  $(function () {
    $('.grid-stack').gridstack({
      cellHeight:80,
      verticalMargin: 10
    });
  });
});
</script>
</html>

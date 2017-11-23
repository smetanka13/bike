<link rel="stylesheet" type="text/css" href="../css/header.css">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="logo"><img src="../images/icons/logo.svg"></span>BigBike</a>
    </div>
 
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li>
          <a href="#">Каталог<span class="sr-only">(current)</span></a>
        </li>
        <li>
          <a href="personal.php">Персонал</a>
        </li>
        <li>
          <a href="#">Контакты</a>
        </li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Нажмите для поиска">
        </div>
        <button type="submit" class="wth_boot_but confirm_but">Поиск</button>
      </form>
    </div>
  </div>
</nav>
<?php
  $mysqli = new mysqli("localhost","root","","bike");
  $mysqli->query("SET NAMES 'utf8'");

  // $success = $mysqli->query("INSERT INTO `personal` (`name_pr`,`surname_pr`,`lastname_pr`,`age_pr`,`start_work_date`,`sallery_pr`,`category_pr`) VALUES ('Виктор','Бурятов','Владимирович','28','".time()."','3200','механик')");
  //   echo $mysqli -> error;
  
  $mysqli->close();
?>
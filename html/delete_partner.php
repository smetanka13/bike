<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  
  <link rel="stylesheet" type="text/css" href="../css/add_admin.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">

	<!--<link rel="stylesheet" type="text/css" href="../css/admin_main.css">-->

	<title>Adminka</title>

</head>

<body class="sidebar-mini fixed">
  <div class="wrapper">

<!--ХЕДЕР АДМИНКИ-->

    <header class="main-header hidden-print"><a class="logo" href="admin_main.php">Address Forever</a>
    	<nav class="navbar navbar-static-top">
    		<a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
    		<div class="navbar-custom-menu">
    			<ul class="top-nav">
            <li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o fa-lg"></i></a>
              <ul class="dropdown-menu">
                <li class="not-head">У Вас 4 новых оповещения.</li>
                <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div class="media-body"><span class="block">Пользователь Lisa прислала Вам Email</span><span class="text-muted block">2 мин. назад</span></div></a></li>
                <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div class="media-body"><span class="block">Сервер не отвечает</span><span class="text-muted block">10 мин. назад</span></div></a></li>    
                <li class="not-footer"><a href="#">Смотреть всё</a></li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
              <ul class="dropdown-menu settings-menu">
			          <li><a href="#"><i class="fa fa-cog fa-lg"></i> Настройки</a></li>
			          <li><a href="#"><i class="fa fa-user fa-lg"></i> Профиль</a></li>
			          <li><a href="#"><i class="fa fa-sign-out fa-lg"></i> Выход</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

<!--БОКОВОЕ МЕНЮ-->

	 <aside class="main-sidebar hidden-print">
      <section class="sidebar">
        <div class="user-panel">
          <div class="pull-left image"><img class="img-circle" src="../images/user.png" alt="User Image"></div>
          <div class="pull-left info">
            <p>Администратор</p>
          </div>
        </div>

          <ul class="sidebar-menu">
            <li class="active"><a href="#"><i class="fa fa-dashboard"></i><span>Главная</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span> Управление ролями</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Управление Админами</a>
                  <ul class="treeview-menu">
                    <li><a href="add_admin.php"><i class="fa fa-circle-o"></i> Добавить</a></li>
                    <li><a href="delete_admin.php"><i class="fa fa-circle-o"></i><span> Удалить</span></a></li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Управление Партнерами</a>
                  <ul class="treeview-menu">
                    <li><a href="add_parthner.php"><i class="fa fa-circle-o"></i> Добавить</a></li>
                    <li><a href="delete_parthner.php"><i class="fa fa-circle-o"></i><span> Удалить</span></a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="charts.html"><i class="fa fa-pie-chart"></i><span>Кнопка 3</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Пункт 1</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Пункт 2</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Пункт 3</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Пункт 4</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Кнопка 4</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Пункт 1</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Пункт 2</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Пункт 3</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Пункт 4</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Кнопка 5</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i>  Пункт 1</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>  Пункт 2</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Кнопка 6</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Пункт 1</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Пункт 2</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Пункт 3</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Пункт 4</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Пункт 5</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Пункт 6</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Пункт 7</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Пункт 8</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-share"></i><span>Кнопка 7</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Пункт 1</a></li>
                <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i><span> Пункт 2</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Подпункт 1</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i><span> Подпункт 2</span></a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
      </section>
    </aside>



    <div class="content-wrapper1">
      <div class="card">
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-1">
            <div class="adm_text2">
              <div class="adm_text">
                <b>id</b>
              </div>
           </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
            <div class="adm_text2">
              <div class="adm_text">
                <b>Имя</b>
              </div>
           </div>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-3">
           <div class="adm_text2">
              <div class="adm_text">
                <b>Email</b>
              </div>
           </div>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-3">
           <div class="adm_text2">
              <div class="adm_text">
                <b>роль</b>
              </div>
           </div>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-3">
           <div class="adm_text2">
              <div class="adm_text">
                <b>удалить</b>
              </div>
           </div>
          </div>
        </div>
      </div>
      <div class="card">
       <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-1">
            <div class="adm_text2">
              <div class="adm_text">
                <b>1</b>
              </div>
           </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
            <div class="adm_text2">
              <div class="adm_text">
                <b>sasha</b>
              </div>
           </div>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-3">
           <div class="adm_text2">
              <div class="adm_text">
                <b>sasha761111@gmail.com</b>
              </div>
           </div>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-3">
           <div class="adm_text2">
              <div class="adm_text">
                <b>админ</b>
              </div>
           </div>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-3">
           <div class="adm_text2">
              <div class="adm_text">
                <div class="checkbox">
    <label>
          <input type="checkbox"> 
        </label>
  </div>
              </div>
           </div>
          </div>
        </div>
      </div>
      <div class="card">
       <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-1">
            <div class="adm_text2">
              <div class="adm_text">
                <b>2</b>
              </div>
           </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
            <div class="adm_text2">
              <div class="adm_text">
                <b>sasha</b>
              </div>
           </div>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-3">
           <div class="adm_text2">
              <div class="adm_text">
                <b>sasha761111@gmail.com</b>
              </div>
           </div>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-3">
           <div class="adm_text2">
              <div class="adm_text">
                <b>админ</b>
              </div>
           </div>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-3">
           <div class="adm_text2">
              <div class="adm_text">
               <div class="checkbox">
    <label>
          <input type="checkbox"> 
        </label>
  </div>
              </div>
           </div>
          </div>
        </div>
      </div>
     <div class="card">
       <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-1">
            <div class="adm_text2">
              <div class="adm_text">
                <b>3</b>
              </div>
           </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
            <div class="adm_text2">
              <div class="adm_text">
                <b>sasha</b>
              </div>
           </div>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-3">
           <div class="adm_text2">
              <div class="adm_text">
                <b>sasha761111@gmail.com</b>
              </div>
           </div>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-3">
           <div class="adm_text2">
              <div class="adm_text">
                <b>админ</b>
              </div>
           </div>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-3">
           <div class="adm_text2">
              <div class="adm_text">
                 <div class="checkbox">
    <label>
          <input type="checkbox"> 
        </label>
  </div>
              </div>
           </div>
          </div>
        </div>
      </div>
      

      <div class="card">
        <div class="content-wrapper2">
          <form>
            <button type="button" id="add_adm" class="btn btn-primary">подтвердить</button>
          </form>
        </div>
      </div>



    </div>


      
   
    

      
        
                
              
              
              
            
          
          
             




      
             
      


  </div>
	




<script src="../js/jquery-2.1.4.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>


</body>
</html>
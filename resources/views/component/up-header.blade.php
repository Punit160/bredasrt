<style>
  .dot {
    display: block;
    position: absolute;
    height: 10px !important;
    width: 10px !important;
    background-color: #6de708;
    border-radius: 50%;
    top: 25px;
    left: 35px;
  }

  .activePage {
    background-color: #785822;

    font-weight: 800;
  }

  .sidesEle {
    font-size: 16px;
    font-weight: 400;
  }
</style>
</head>



<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-secondary navbar-light text-sm"
      style="height:58px; background-color: rgb(51, 50, 50) !important; position: sticky; top: 0%; ">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item sidesEle ">
          <a class="nav-link text-light" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

      <ul class="navbar-nav ml-auto">

        <li class="nav-item sidesEle  hidden-mobile">
          <div class="user-panel  d-flex">
            <div class="image">
              <img src="{{asset('dist/img/avatar4.png')}}" class="img-circle elevation-2" alt="User Image">
              <span class="dot"></span>
            </div>
            <!--<div class="info">-->
            <!--  <a href="#" class="d-block text-white">Alexander Pierce</a>-->
            <!--</div>-->
          </div>
        </li>
        <li class="nav-item sidesEle ">
          <a class="nav-link text-light" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>


      </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-secondary elevation-4"
      style="background-color:rgb(51, 50, 50) !important; height: 100vh !important; position: fixed;">



        <a href="{{route('state')}}" class="brand-link text-light  " >

        <img src="{{asset('dist/img/klk.png')}}" alt="AdminLTE Logo" class="brand-image img-circle p-1 elevation-3"
          style=" background-color: white;padding: 2px;">
        <span class="brand-text text-white">KLK Ventures</span>

      </a>

      <div class="sidebar">


        <nav>
          <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-flat" data-widget="treeview" role="menu"
            data-accordion="false">

                          <li class="nav-item sidesEle bord ">
                            <a href="{{route('kusum-dash')}}" class="nav-link  p-2  ">
                                <i class="nav-icon fas fa-home "></i>
                                <p class="text-white ">
                                    Dashboard
                                </p>
                            </a>
                        </li>
            </li>
                               <li class="nav-item sidesEle ">
                            <a href="{{route('logout')}}" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-power-off"></i>
                                <p>
                                   Logout
                                </p>
                            </a>
                        </li>
          </ul>
        </nav>

      </div>

    </aside>
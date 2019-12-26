 <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src='{{asset("AdminLTE-2.4.18/dist/img/user2-160x160.jpg")}}' class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="{{url('/')}}">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-archive"></i> <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('category/')}}"><i class="fa fa-database"></i> Categories</a></li>
            <li><a href="{{url('category/create')}}"><i class="fa fa-plus-circle"></i> Add Category</a></li>
          </ul>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-pencil"></i> <span>Article</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('article')}}"><i class="fa fa-book"></i> Articles</a></li>
            <li><a href="{{url('article/add')}}"><i class="fa fa-plus-circle"></i> Add Article</a></li>
          </ul>
        </li>
      </ul>
    </section>
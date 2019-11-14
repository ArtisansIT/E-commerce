  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('admin/css/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
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
        <li><a href=" "><i class="fa fa-dashboard text-red"></i> <span>Dashboard</span></a></li>
       
       
        {{-- <li><a href=""> <i class="fa  fa-list text-yellow"></i><span> ডাক্তারের মেসেজ</span></a></li> --}}

       


        <li class=" treeview">
          <a href="#">
            <i class="fa  fa-list text-yellow"></i> <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.category.create') }}"><i class="fa fa-circle-o text-aqua"></i><span>Create Category </span></a></li>
            <li><a href="{{ route('admin.category.index') }}"><i class="fa fa-circle-o text-aqua"></i><span>View All Category </span></a></li>
            <li><a href="{{ route('admin.category.softdelete.list') }}"><i class="fa fa-circle-o text-aqua"></i><span>View All Temorari Delete </span></a></li>
          </ul>
        </li>
        {{-- Subcategory Links  --}}

        <li class=" treeview">
          <a href="#">
            <i class="fa  fa-list text-yellow"></i> <span>Sub-Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.subcategory.create') }}"><i class="fa fa-circle-o text-aqua"></i><span>Create Sub-Category </span></a></li>
            <li><a href="{{ route('admin.subcategory.index') }}"><i class="fa fa-circle-o text-aqua"></i><span>View All Sub-Category </span></a></li>
            <li><a href="{{ route('admin.SubCategory.softdelete.list') }}"><i class="fa fa-circle-o text-aqua"></i><span>View All Deleted Sub-category </span></a></li>
          </ul>
        </li>
        <li class=" treeview">
          <a href="#">
            <i class="fa  fa-list text-yellow"></i> <span>Brand</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.brand.create') }}"><i class="fa fa-circle-o text-aqua"></i><span>Create Brand </span></a></li>
            <li><a href="{{ route('admin.brand.index') }}"><i class="fa fa-circle-o text-aqua"></i><span>View All Brand </span></a></li>
            <li><a href="{{ route('admin.brand.softdelete.list') }}"><i class="fa fa-circle-o text-aqua"></i><span>View All Deleted Brand </span></a></li>
          </ul>
        </li>
        <li class=" treeview">
          <a href="#">
            <i class="fa  fa-list text-yellow"></i> <span>Color</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.color.create') }}"><i class="fa fa-circle-o text-aqua"></i><span>Create Color </span></a></li>
            <li><a href="{{ route('admin.color.index') }}"><i class="fa fa-circle-o text-aqua"></i><span>View All Color </span></a></li>
            <li><a href="{{ route('admin.color.softdelete.list') }}"><i class="fa fa-circle-o text-aqua"></i><span>View All Deleted Color </span></a></li>
          </ul>
        </li>
        <li class=" treeview">
          <a href="#">
            <i class="fa  fa-list text-yellow"></i> <span>Size</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.size.create') }}"><i class="fa fa-circle-o text-aqua"></i><span>Create Size </span></a></li>
            <li><a href="{{ route('admin.size.index') }}"><i class="fa fa-circle-o text-aqua"></i><span>View All Size </span></a></li>
            <li><a href="{{ route('admin.size.softdelete.list') }}"><i class="fa fa-circle-o text-aqua"></i><span>View All Deleted Size </span></a></li>
          </ul>
        </li>
        <li class=" treeview">
          <a href="#">
            <i class="fa  fa-list text-yellow"></i> <span>Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i><span>Demo Dropdown </span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i><span>Demo Dropdown </span></a></li>
          </ul>
        </li>

        <li><a href="#"><span>Warning</span></a></li>
        <li><a href="#"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
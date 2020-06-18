<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      <!-- search form -->

      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
 
        <li><a href="{{ route('admin.author.index') }}"><i class="fa fa-user"></i> <span>Penulis</span></a></li>
        <li><a href="{{ route('admin.book.index') }}"><i class="fa fa-book"></i> <span>Buku</span></a></li>
        <li><a href="#"><i class="fa fa-users"></i> <span>User</span></a></li>
        <li><a href="{{ route('admin.borrow.index') }}"><i class="fa fa-bookmark"></i> <span>Daftar Pinjaman</span></a></li>

        <li class="header">EXTRA</li>
        <li><a href="{{ route('admin.report.top-book') }}"><i class="fa fa-circle-o text-warning"></i> <span>Buku Favorit</span></a></li>
        <li><a href="{{ route('admin.report.top-user') }}"><i class="fa fa-circle-o text-aqua"></i> <span>Top User</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
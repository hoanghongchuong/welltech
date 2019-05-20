<?php $is_admin = Auth::guard('admin')->user(); ?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu">
        <!-- <li class="treeview ">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Quản lý phòng</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="backend/productcate"><i class="fa fa-circle-o"></i> <span>Loại phòng</span></a></li>
            <li><a href="backend/product"><i class="fa fa-circle-o"></i> <span>Quản lý phòng</span></a></li>
            <li><a href="backend/about/edit?type=phong"><i class="fa fa-th"></i> <span>Slogan</span></a></li>
          </ul>
        </li> -->

        @if($is_admin->can('can_menu'))
        <li><a href="backend/menu?type=menu-top"><i class="fa fa-gear"></i> <span>Quản lý menu</span></a></li>
        @endif
        @if($is_admin->can('admin_manager'))
        <li class="{{ Request::segment(2) == 'admin' ? 'active' : '' }}">
            <a href="{{ route('admin.admin.index') }}"><i class="fa fa-user"></i>Quản lý tài khoản</a>
        </li>
        @endif
        <li class="treeview {{ Request::segment(2) == 'about' || Request::segment(2) == 'lienket' ? 'active' : '' }}" >
            <a href="#">
                <i class="fa fa-edit"></i> <span>Quản lý giới thiệu</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="backend/about/edit?type=gioi-thieu"><i class="fa fa-circle-o"></i> <span>Mô tả trang chủ</span></a></li>
                <li><a href="backend/gioithieu"><i class="fa fa-circle-o"></i> <span>Bài viết</span></a></li>
                
                <li><a href="backend/lienket?type=khachhang"><i class="fa fa-circle-o"></i> <span>Khách hàng</span></a></li>
                <li><a href="backend/lienket?type=doitac"><i class="fa fa-circle-o"></i> <span>Đối tác</span></a></li>
            </ul>
        </li>
        
        @if($is_admin->can('can_news'))
        <li class="{{ @$_GET['type'] == 'tin-tuc' ? 'active' : '' }}">
                    <a href="backend/news?type=tin-tuc"><i class="fa fa-circle-o"></i> <span>Tin tức</span></a>
        </li>
        <!-- <li class="treeview {{ @$_GET['type'] == 'tin-tuc' ? 'active' : '' }}">
            <a href="#">
                <i class="fa fa-edit"></i> <span>Quản lý tin tức</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li class="{{ @$_GET['type'] == 'tin-tuc' ? 'active' : '' }}">
                    <a href="backend/newscate?type=tin-tuc"><i class="fa fa-circle-o"></i> <span>Danh mục</span></a>
                </li>
                
            </ul>
        </li> -->
        @endif
        
        <li><a href="{{ asset('backend/langs?type=langs') }}"><i class="fa fa-circle-o"></i> <span>Ngôn ngữ website</span></a></li>        
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Ảnh và video </span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="backend/about/edit?type=video"><i class="fa fa-circle-o"></i> <span>Mô tả</span></a></li>
            <li><a href="backend/video"><i class="fa fa-circle-o"></i> <span>Video</span></a></li>
            <li><a href="backend/lienket?type=thu-vien"><i class="fa fa-circle-o"></i> <span>Thư viện ảnh</span></a></li>            
          
          </ul>
        </li> -->
        <!-- <li><a href="backend/partner"><i class="fa fa-circle-o"></i> <span>Đối tác</span></a></li>        -->
        <li><a href="backend/feedback"><i class="fa fa-circle-o"></i> <span>Ý kiến khách hàng</span></a></li>       
        @if($is_admin->can('can_contact'))
        <li class="{{ Request::segment(2) == 'contact' ? 'active' : '' }}"><a href="backend/contact"><i class="fa fa-envelope"></i> <span>Quản lý liên hệ</span></a></li>
        @endif
        <!-- <li><a href="backend/newsletter?type=newsletter"><i class="fa fa-circle-o"></i> <span>Đăng ký nhận tin</span></a></li> -->

        @if($is_admin->can('can_slider'))
        <li class="treeview {{ Request::segment(2) == 'slider' ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Hình ảnh slider-banner</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::segment(2) == 'slider' ? 'active' : '' }}"><a href="backend/slider?type=gioi-thieu"><i class="fa fa-circle-o"></i> <span>Quản lý slider</span></a></li>
            <li><a href="backend/banner"><i class="fa fa-gear" aria-hidden="true"></i> <span>Quản lý banner</span></a></li>
          </ul>
        </li>
        @endif
        <!-- <li><a href="backend/position"><i class="fa fa-gear" aria-hidden="true"></i> <span>Vị trí quảng cáo</span></a></li> -->
        @if($is_admin->can('admin_manager'))
        <li><a href="{{ asset('backend/setting') }}"><i class="fa fa-gear" aria-hidden="true"></i> <span>Quản lý thiết lập</span></a></li>
        @endif

        <!-- <li><a href="backend/province"><i class="fa fa-gear" aria-hidden="true"></i> <span>Quản lý tỉnh/ thành phố</span></a></li> -->
         <!-- <li><a href="backend/district"><i class="fa fa-gear" aria-hidden="true"></i> <span>Quản lý quận/ huyện</span></a></li> -->
      </ul>
    </section>
</aside>
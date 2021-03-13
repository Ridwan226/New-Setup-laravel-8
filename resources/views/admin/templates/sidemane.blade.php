<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
  <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
      <i class="mdi mdi-close"></i>
  </button>

  <div class="left-side-logo d-block d-lg-none">
      <div class="text-center">
          <a href="index.html" class="logo"><img src="{{ asset('member/assets/images/logo.png') }}" height="20" alt="logo"></a>
      </div>
  </div>

  <div class="sidebar-inner slimscrollleft">
      
      <div id="sidebar-menu">
          <ul>
              <li class="menu-title">Main</li>

              <li>
                  <a href="{{ url('/administrator/dashboard') }}" class="waves-effect">
                      <i class="dripicons-home"></i>
                      <span> Dashboard <span class="badge badge-success badge-pill float-right">3</span></span>
                  </a>
              </li>

             
             
              <li class="menu-title">Setting</li>
 
              <li class="has_sub">
                  <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-location"></i><span> Users </span> <span class="badge badge-danger badge-pill float-right">2</span></a>
                  <ul class="list-unstyled">
                      <li><a href="{{ url('administrator/roles') }}"> Roles </a></li>
                      <li><a href="{{ url('administrator/permission') }}"> Permissions</a></li>
                  </ul>
              </li>
              
          </ul>
      </div>
      <div class="clearfix"></div>
  </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->

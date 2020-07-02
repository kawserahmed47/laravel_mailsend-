<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
<a href="{{route('index')}}" class="brand-link">
      <img src="{{asset('public/back/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">e-Tex Soft</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('public/back/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin Name</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
          <a href="{{route('allContacts')}}" class="nav-link active">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                All Contacts
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
          </li>
       
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Bank
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('addBank')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Bank</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{route('viewBank')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bank List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Banker
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('addBanker')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Banker</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{route('viewBanker')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banker List</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Employee
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('addBanker')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Employee</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{route('viewBanker')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee List</p>
                </a>
              </li>
            </ul>
          </li>
        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Audit
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('addBanker')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Audit</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{route('viewBanker')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Audit List</p>
                </a>
              </li>
            </ul>
          </li>
        
        
        
        
        
       
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

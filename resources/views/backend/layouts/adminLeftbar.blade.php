<aside class="main-sidebar"> 
  <div class="sidebar"> 
    <div class="user-panel">
      <div class="image text-center">
        <img src="{{ url('') }}/dist/img/img1.jpg" class="img-circle" alt="User Image"> 
      </div>
      <div class="info">
        <p>{{ auth('admin')->user()->name ?? 'Admin' }}</p>
        <a href="#"><i class="fa fa-envelope"></i></a> 
        <a href="#"><i class="fa fa-gear"></i></a> 
        
        <form action="{{ route('admin.logout') }}" method="POST" style="display:inline;">
          @csrf
          <button type="submit" style="background:none; border:none; color:#fff; cursor:pointer; padding:0;">
            <i class="fa fa-power-off"></i>
          </button>
        </form>
      </div>
    </div>
    
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>

      <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"> 
        <a href="{{ route('admin.dashboard') }}"> 
          <i class="ti-dashboard"></i> <span>Dashboard</span> 
        </a> 
      </li>

      <li class="treeview {{ request()->is('admin/departments*') ? 'active menu-open' : '' }}"> 
        <a href="#"> 
          <i class="ti-briefcase"></i> <span>Departments</span> 
          <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> 
        </a>
        <ul class="treeview-menu" style="{{ request()->is('admin/departments*') ? 'display: block;' : '' }}">
          <li class="{{ request()->routeIs('admin.departments.index') ? 'active' : '' }}">
            <a href="{{ route('admin.departments.index') }}"><i class="fa fa-angle-right"></i> All Departments</a>
          </li>
          <li class="{{ request()->routeIs('admin.departments.create') ? 'active' : '' }}">
            <a href="{{ route('admin.departments.create') }}"><i class="fa fa-angle-right"></i> Add Department</a>
          </li>
        </ul>
      </li>

      <li class="{{ request()->is('admin/designations*') ? 'active' : '' }}">
    <a href="{{ route('admin.designations.index') }}">
        <i class="ti-id-badge"></i> <span>Designations</span>
    </a>
</li>

      <li class="treeview {{ request()->is('admin/employees*') ? 'active menu-open' : '' }}"> 
        <a href="#"> 
          <i class="ti-user"></i> <span>Employees</span> 
          <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> 
        </a>
        <ul class="treeview-menu" style="{{ request()->is('admin/employees*') ? 'display: block;' : '' }}">
          <li class="{{ request()->routeIs('admin.employees.index') ? 'active' : '' }}">
            <a href="{{ route('admin.employees.index') }}"><i class="fa fa-angle-right"></i> All Employees</a>
          </li>
          <li class="{{ request()->routeIs('admin.employees.create') ? 'active' : '' }}">
            <a href="{{ route('admin.employees.create') }}"><i class="fa fa-angle-right"></i> Add Employee</a>
          </li>
        </ul>
      </li>

      <li class="{{ request()->routeIs('admin.leaves.*') ? 'active' : '' }}">
          <a href="{{ route('admin.leaves.index') }}">
              <i class="ti-calendar"></i> <span>Leave Management</span>
          </a>
      </li>

      <li class="{{ request()->routeIs('admin.attendance.index') ? 'active' : '' }}">
          <a href="{{ route('admin.attendance.index') }}">
              <i class="ti-timer"></i> <span>Attendance</span>
          </a>
      </li>

      <li class="{{ request()->is('admin/payroll*') ? 'active' : '' }}">
          <a href="{{ route('admin.payroll.index') }}">
              <i class="ti-wallet"></i> <span>Payroll System</span>
          </a>
      </li>

     <li class="{{ request()->is('admin/holidays*') ? 'active' : '' }}">
    <a href="{{ route('admin.holidays.index') }}">
        <i class="ti-view-grid"></i> <span>Calendar / Holidays</span>
    </a>
</li>

     <li class="{{ request()->is('admin/notices*') ? 'active' : '' }}">
    <a href="{{ route('admin.notices.index') }}">
        <i class="ti-announcement"></i> <span>Notice</span>
    </a>
</li>


<li class="{{ request()->is('admin/settings*') ? 'active' : '' }}">
    <a href="{{ route('admin.settings.index') }}">
        <i class="ti-settings"></i> <span>General Settings</span>
    </a>
</li>


    </ul>
    
  </div>
</aside>
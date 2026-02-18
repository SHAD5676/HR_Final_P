<aside class="main-sidebar"> 
  <div class="sidebar"> 
    <div class="user-panel">
      <div class="image text-center">
        <img src="{{ url('') }}/dist/img/img1.jpg" class="img-circle" alt="User Image"> 
      </div>
      <div class="info">
        <p>{{ auth('employee')->user()->name ?? 'Employee' }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        <form action="{{ route('employee.logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" style="background:none; border:none; color:#fff; cursor:pointer;">
              <i class="fa fa-power-off"></i>
            </button>
        </form>
      </div>
    </div>
    
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>

      <li class="{{ request()->routeIs('employee.dashboard') ? 'active' : '' }}"> 
        <a href="{{ route('employee.dashboard') }}"> 
          <i class="ti-dashboard"></i> <span>Dashboard</span> 
        </a> 
      </li>

      <li class="{{ request()->routeIs('employee.attendance.history') ? 'active' : '' }}">
        <a href="{{ route('employee.attendance.history') }}">
            <i class="ti-timer"></i> <span>My Attendance</span>
        </a>
      </li>

      <li class="{{ request()->routeIs('employee.leaves.create') ? 'active' : '' }}">
        <a href="{{ route('employee.leaves.create') }}">
            <i class="ti-pencil-alt"></i> <span>Apply for Leave</span>
        </a>
      </li>

      <li class="{{ request()->routeIs('employee.payroll.index') ? 'active' : '' }}">
        <a href="{{ route('employee.payroll.index') }}">
            <i class="ti-wallet"></i> <span>My Salary Slips</span>
        </a>
      </li>

      <li class="{{ request()->routeIs('employee.holidays.index') ? 'active' : '' }}">
        <a href="{{ route('employee.holidays.index') }}">
            <i class="ti-calendar"></i> <span>Holiday Calendar</span>
        </a>
      </li>

      <li class="{{ request()->routeIs('employee.notices.index') ? 'active' : '' }}">
        <a href="{{ route('employee.notices.index') }}">
            <i class="ti-announcement"></i> <span>Notice Board</span>
        </a>
      </li>

      <li class="{{ request()->routeIs('employee.profile') ? 'active' : '' }}">
        <a href="{{ route('employee.profile') }}">
            <i class="ti-user"></i> <span>My Profile</span>
        </a>
      </li>

    </ul>
  </div>
</aside>
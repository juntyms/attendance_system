<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="icon-box menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#students" aria-expanded="false" aria-controls="students">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Students</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="students">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('student.list') }}"> Student List </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('student.building') }}"> Bldg Assignment </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#reports" aria-expanded="false" aria-controls="reports">
                <i class="icon-printer menu-icon"></i>
                <span class="menu-title">Reports</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="reports">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('student.inout') }}"> Check-in/Check-out </a></li>
                    <li class="nav-item"> <a class="nav-link" href="#"> Absent </a></li>
                    <li class="nav-item"> <a class="nav-link" href="#"> Late </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="false" aria-controls="settings">
                <i class="icon-cog menu-icon"></i>
                <span class="menu-title">Settings</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="settings">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#"> Attendance Fetch </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('devices.index') }}"> Devices </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('departments.index') }}"> Departments </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('buildings.index') }}"> Buildings </a></li>
                    @role('super-admin')
                    <li class="nav-item"> <a class="nav-link" href="{{ route('report.schedule') }}"> Report Schedule </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('users.index') }}"> Users </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('roles.index')}}"> Roles</a></li>
                    @endrole

                </ul>
            </div>
        </li>
    </ul>
</nav>

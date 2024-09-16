<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Go Clinic</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">GC</a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item dropdown ">
                <a href="{{ route('home') }}" class=" nav-link"><i class="fas fa-home"></i>
                    <span>
                        Dashboard
                    </span>
                </a>
            </li>
            <li class="nav-item dropdown ">
                <a href="{{ route('users.index') }}" class=" nav-link"><i class="fas fa-user"></i>
                    <span>
                        Users
                    </span>
                </a>
            </li>
            <li class="nav-item dropdown ">
                <a href="{{ route('doctors.index') }}" class=" nav-link"><i class="fas fa-user"></i>
                    <span>
                        Doctors
                    </span>
                </a>
            </li>
            <li class="nav-item dropdown ">
                <a href="{{ route('doctor-schedules.index') }}"><i class="fas fa-calendar"></i>
                    <span>
                        Doctors Schedules
                    </span>
                </a>
            </li>
            <li class="nav-item dropdown ">
                <a href="{{ route('patients.index') }}"><i class="fas fa-users"></i>
                    <span>
                        Patients
                    </span>
                </a>
            </li>
    </aside>
</div>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/index">
    <div class="sidebar-brand-icon">
        <img style="border:2px solid blue; border-radius:100%;" src="corporate-dashboard/img/sdalogo.jpg" height="50" width="50" alt="Corporate Logo">
    </div>
    <div class="sidebar-brand-text mx-3">KCS</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="/members">
        <i class="fas fa-fw fa-user"></i>
        <span>Members</span>
    </a>
</li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="/blogs">
            <i class="fas fa-fw fa-file"></i>
            <span>Blogs</span>
        </a>
    </li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="/testimonies">
        <i class="fas fa-fw fa-quote-left"></i>
        <span>Testimonies</span>
    </a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="/admannouncements">
        <i class="fas fa-fw fa-comment"></i>
        <span>Announcements</span>
    </a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="/projects">
        <i class="fas fa-fw fa-building"></i>
        <span>Projects</span>
    </a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="/mission">
        <i class="fas fa-fw fa-church"></i>
        <span>Mission</span>
    </a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="/weekly-programme">
        <i class="fas fa-fw fa-calendar"></i>
        <span>Weekly Programme</span>
    </a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="/admgallery">
        <i class="fas fa-fw fa-image"></i>
        <span>Gallery</span>
    </a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="/bulletin">
        <i class="fas fa-fw fa-image"></i>
        <span>Weeekly Bulletin</span>
    </a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item dropdown" style="position:relative;">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown">
        <i class="fas fa-fw fa-file"></i>
        <span>Spiritual Materials</span>
    </a>
    <div class="dropdown-menu mb-3">
        <a class="dropdown-item" href="/videos">Videos</a>
        <a class="dropdown-item" href="/literature">Literature</a>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('logout') }}"
          onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Logout</span>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </a>
</li>

</ul>
<!-- End of Sidebar -->

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            <i class="fas fa-university"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><small><?=CFG::bank_name ?> Customer Panel</small></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <hr>
    <!-- Nav Item - Dashboard -->
    <div class="sidebar-heading">
        Home
    </div>

    <li class="nav-item active">
        <a class="nav-link" href="<?=URL::backend_dashboard ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Account
    </div>
    <li class="nav-item">
        <a class="nav-link" href="<?=URL::backend_send ?>">
        <i class="fas fa-fw fa-exchange-alt"></i>
        <span>Money Transfer</span></a>
    </li>

    
    <div class="sidebar-heading">
        Help
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?=URL::backend_contact ?>">
        <i class="fas fa-fw fa-question"></i>
        <span>Contact</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-concierge-bell"></i>
        <span>Services</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-window-restore"></i>
        <span>Products</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Menu</span>
    </a>
@can('ver-rol')
    <a class="nav-link" href="/roles">
        <i class=" fas fa-user-lock"></i><span>Roles</span>
    </a>
@endcan
    <a class="nav-link" href="/blogs">
        <i class=" fas fa-blog"></i><span>Blogs</span>
    </a>
    <a class="nav-link" href="/proveedores">
        <i class=" fas fa-user"></i><span>Proveedores</span>
    </a>
    <a class="nav-link" href="/usuarios">
        <i class=" fas fa-users"></i><span>User</span>
    </a>
    
</li>

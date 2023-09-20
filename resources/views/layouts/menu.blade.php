<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('ships.index') }}" class="nav-link {{ Request::is('ships.index') ? 'active' : '' }}">
        <i class="nav-icon fa fa-tasks"></i>
        <p>Ships</p>
    </a>
<li class="nav-item">
    <a href="{{ route('categories.index') }}" class="nav-link {{ Request::is('categories.index') ? 'active' : '' }}">
        <i class="nav-icon fa fa-cc-discover"></i>
        <p>Categories</p>
    </a>
</li>

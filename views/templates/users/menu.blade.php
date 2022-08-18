<li class="sidebar-item  {{ Request::is('users*') ? ' pure-menu-selected' : '' }}">
    <a href="{{ route('users.index') }}" class='sidebar-link'>
        <i class="bi bi-grid-fill"></i>
        <span>Users</span>
    </a>
</li>

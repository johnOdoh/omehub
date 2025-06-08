@props([
    'name',
    'route',
    'icon'
])
<li class="sidebar-item {{ request()->routeIs($route) ? 'active' : '' }}">
    <a class='sidebar-link' href='{{ route($route) }}' wire:navigate>
        <i class="align-middle fa fa-{{ $icon }}"></i> <span class="align-middle">{{ $name }}</span>
    </a>
</li>

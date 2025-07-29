@props([
    'name',
    'route',
    'icon',
    'params'
])
<li class="sidebar-item {{ request()->routeIs($route) ? 'active' : '' }}">
    <a class='sidebar-link' href='{{ route($route, $params ?? []) }}' wire:navigate>
        <i class="align-middle fa fa-{{ $icon }} fa-fw"></i> <span class="align-middle">{{ $name }}</span>
    </a>
</li>

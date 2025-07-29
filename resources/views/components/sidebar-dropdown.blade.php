@props([
    'items' => [],
    'icon',
    'name',
    'id'
])
@php
    $routes = array_column($items, 'route');
    $show = in_array(Route::currentRouteName(), $routes); //show the dropdown if the current route is one of the dropdown links
@endphp
<li class="sidebar-item {{ $show ? 'active' : '' }}">
    <a data-bs-target="#{{ $id }}" data-bs-toggle="collapse" class="sidebar-link">
        <i class="align-middle fa fa-{{ $icon }} fa-fw"></i> <span class="align-middle">{{ $name }}</span>
    </a>
    <ul id="{{ $id }}" class="sidebar-dropdown list-unstyled collapse {{ $show ? 'show' : '' }}" data-bs-parent="#sidebar">
        @foreach ($items as $item)
            <li class="sidebar-item {{ request()->routeIs($item['route']) ? 'active' : '' }}">
                <a class='sidebar-link' href='{{ route($item['route'], $item['params'] ?? []) }}' wire:navigate>{{ $item['name'] }}</a>
            </li>
        @endforeach
    </ul>
</li>

@props([
    'items' => [],
    'icon',
    'name',
    'id'
])
@php
    $allRoutes = [];
    foreach ($items as $item) {
        if (isset($item['routes']) && is_array($item['routes'])) {
            foreach ($item['routes'] as $route) {
                $allRoutes[] = $route['route'] ?? null;
            }
        } elseif (isset($item['route'])) {
            $allRoutes[] = $item['route'];
        }
    }
    $show = in_array(Route::currentRouteName(), $allRoutes);
@endphp
<li class="sidebar-item {{ $show ? 'active' : '' }}">
    <a data-bs-target="#{{ $id }}" data-bs-toggle="collapse" class="sidebar-link collapsed">
        <i class="align-middle fa fa-{{ $icon }} fa-fw""></i>  <span class="align-middle">{{ $name }}</span>
    </a>
    <ul id="{{ $id }}" class="sidebar-dropdown list-unstyled collapse {{ $show ? 'show' : '' }}" data-bs-parent="#sidebar">
        @foreach ($items as $item)
            @if ($item['isSingle'] == false)
                {{-- Multi-level Dropdown --}}
                <li class="sidebar-item">
                    <a data-bs-target="#multi-{{ $loop->index }}" data-bs-toggle="collapse" class="sidebar-link collapsed">{{ $item['name'] }}</a>
                    <ul id="multi-{{ $loop->index }}" class="sidebar-dropdown list-unstyled collapse">
                        @foreach ($item['routes'] as $route)
                            <li class="sidebar-item {{ request()->routeIs($route['route']) ? 'active' : '' }}">
                                <a class='sidebar-link' href='{{ route($route['route'], $route['params'] ?? []) }}' wire:navigate>{{ $route['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @else
                {{-- Single Item --}}
                <li class="sidebar-item {{ request()->routeIs($item['routes'][0]['route']) ? 'active' : '' }}">
                    <a class="sidebar-link" href="{{ route($item['routes'][0]['route']) }}" wire:navigate>{{ $item['name'] }}</a>
                </li>
            @endif
        @endforeach
    </ul>
</li>

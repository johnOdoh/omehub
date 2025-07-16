@php
    $insuranceQuoteDropdown = [
        0 => ['name' => 'Quote Requests', 'route' => 'insurance.quote-requests'],
        1 => ['name' => 'My Quotes', 'route' => 'insurance.quotes-sent']
    ];
    $logisticsQuoteDropdown = [
        0 => ['name' => 'Quote Requests', 'route' => 'logistics.quote-requests'],
        1 => ['name' => 'My Quotes', 'route' => 'logistics.quotes-sent']
    ];
    $shipperQuoteDropdown = [
        0 => ['name' => 'Request Quote', 'route' => 'shipper.get-quotes'],
        1 => ['name' => 'My Requests', 'route' => 'shipper.quote-requests'],
    ];
    $blogDropdown = [
        0 => ['name' => 'Create Post', 'route' => 'user.blog.create'],
        1 => ['name' => 'My Posts', 'route' => 'user.blog.posts'],
    ];
@endphp
<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class='sidebar-brand' href='{{ route('home') }}'>
            <span class="sidebar-brand-text align-middle">
                <img src="{{ asset('assets/img/logo-horizontal.png') }}" alt="logo" class="img-fluid" width="180">
            </span>
            <svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.5"
                stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF" style="margin-left: -3px">
                <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
                <path d="M20 12L12 16L4 12"></path>
                <path d="M20 16L12 20L4 16"></path>
            </svg>
        </a>

        <div class="sidebar-user">
            <div class="d-flex justify-content-center">
                {{-- <div class="flex-shrink-0">
                    <img src="{{ asset('portal-assets/img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded me-1" alt="image">
                </div> --}}
                <div class="flex-grow-1 ps-2">
                    <span class="sidebar-user-title">
                        {{ auth()->user()->name }}
                    </span>
                    <div class="sidebar-user-subtitle">{{ auth()->user()->role }}</div>
                </div>
            </div>
        </div>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Shipper
            </li>
            <x-sidebar-item route="shipper.dashboard" name="Dashboard" icon="sliders" />
            <x-sidebar-item route="shipper.profile" name="Profile" icon="user" />
            <x-sidebar-dropdown :items="$shipperQuoteDropdown" name="Quotes" icon="lightbulb" id="quotes" />
            <x-sidebar-item route="shipper.shipments" name="My Shipments" icon="ship" />
            <x-sidebar-dropdown :items="$blogDropdown" name="Blog" icon="blog" id="blog" />
            <li class="sidebar-header">
                Logistics
            </li>
            <x-sidebar-item route="logistics.dashboard" name="Dashboard" icon="sliders" />
            <x-sidebar-item route="logistics.profile" name="Profile" icon="user" />
            <x-sidebar-dropdown :items="$logisticsQuoteDropdown" name="Quotes" icon="lightbulb" id="requests" />
            <li class="sidebar-header">
                Insurance
            </li>
            <x-sidebar-item route="insurance.dashboard" name="Dashboard" icon="sliders" />
            <x-sidebar-item route="insurance.profile" name="Profile" icon="user" />
            <x-sidebar-dropdown :items="$insuranceQuoteDropdown" name="Quotes" icon="lightbulb" id="insurance-requests" />
        </ul>
    </div>
</nav>

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
    $financingDropdown = [
        0 => ['name' => 'Request Financing', 'route' => 'user.financing.request'],
        1 => ['name' => 'My Requests', 'route' => 'user.financing.list'],
    ];
    $adminDropdown = [
        0 => ['name' => 'Create Admin', 'route' => 'admin.create-admin'],
        1 => ['name' => 'Admin List', 'route' => 'admin.admins'],
    ];
    $adminUsersDropdown = [
        0 => ['name' => 'Create Partner', 'route' => 'admin.create-user'],
        1 => ['name' => 'Users List', 'route' => 'admin.users'],
    ];
    $ticketDropdown = [
        0 => ['name' => 'Create Ticket', 'route' => 'user.ticket.create'],
        1 => ['name' => 'My Tickets', 'route' => 'user.ticket.list'],
    ];
    $legalDropdown = [
        0 => ['name' => 'Raise Claim', 'routes' => [
            0 => [
                'name' => 'Create Claim',
                'route' => 'user.dispute.create'
            ],
            1 => [
                'name' => 'My Claims',
                'route' => 'user.dispute.list'
            ],
            2 => [
                'name' => 'Claims Against',
                'route' => 'user.dispute.against',
                'params' => ['q' => 'against']
            ]
        ], 'isSingle' => false],
        1 => ['name' => 'Request Legal Advice', 'routes' => [
            0 => [
                'name' => 'Request Legal Advice',
                'route' => 'user.legal.advice'
            ],
        ], 'isSingle' => true],
    ];
    $bulletinDropdown = [
        0 => ['name' => 'Advert', 'routes' => [
            0 => [
                'name' => 'Create Ad',
                'route' => 'user.bulletin.create',
                'params' => ['loc' => 'ad']
            ],
            1 => [
                'name' => 'My Ads',
                'route' => 'user.bulletin.list',
                'params' => ['loc' => 'ad']
            ]
        ], 'isSingle' => false],
        1 => ['name' => 'Blog', 'routes' => [
            0 => [
                'name' => 'Create Post',
                'route' => 'user.bulletin.create',
                'params' => ['loc' => 'blog']
            ],
            1 => [
                'name' => 'My Posts',
                'route' => 'user.bulletin.list',
                'params' => ['loc' => 'blog']
            ]
        ], 'isSingle' => false],
    ];
    $adminParam = ['q' => 'admin'];
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
            @if (auth()->user()->role == 'Admin')
                <x-sidebar-item route="admin.dashboard" name="Dashboard" icon="sliders" />
                <x-sidebar-item route="admin.profile" name="Profile" icon="user" />
                @if (auth()->user()->admin_role == 'Admin')
                    <x-sidebar-dropdown :items="$adminUsersDropdown" name="Users" icon="users" id="users" />
                    <x-sidebar-dropdown :items="$adminDropdown" name="Admins" icon="users-cog" id="admins" />
                    <x-sidebar-item route="admin.tickets" name="Tickets" icon="hands-helping" />
                @endif
                @if (in_array(auth()->user()->admin_role, ['Legal Partner', 'Admin']) )
                    <x-sidebar-item route="admin.disputes" name="Disputes" icon="balance-scale" :params="$adminParam" />
                @endif
                @if (in_array(auth()->user()->admin_role, ['Shipment Auditor', 'Admin']) )
                    <x-sidebar-item route="admin.shipments" name="Shipments" icon="ship" />
                @endif
            @elseif (auth()->user()->role == 'Shipper')
                <x-sidebar-item route="shipper.dashboard" name="Dashboard" icon="sliders" />
                <x-sidebar-item route="user.profile" name="Profile" icon="user" />
                <x-sidebar-dropdown :items="$shipperQuoteDropdown" name="Quotes" icon="lightbulb" id="quotes" />
                <x-sidebar-item route="shipper.shipments" name="My Shipments" icon="ship" />
                <x-sidebar-multi-dropdown :items="$bulletinDropdown" name="Bulletin" icon="blog" id="bulletin" />
                <x-sidebar-multi-dropdown :items="$legalDropdown" name="Legal" icon="balance-scale" id="legal" />
                <x-sidebar-dropdown :items="$financingDropdown" name="Trade Finance" icon="money-check" id="financing" />
                <x-sidebar-dropdown :items="$ticketDropdown" name="Support" icon="hands-helping" id="support" />
            @elseif (auth()->user()->role == 'Logistics Provider')
                <x-sidebar-item route="logistics.dashboard" name="Dashboard" icon="sliders" />
                <x-sidebar-item route="user.profile" name="Profile" icon="user" />
                <x-sidebar-dropdown :items="$logisticsQuoteDropdown" name="Quotes" icon="lightbulb" id="requests" />
                <x-sidebar-item route="logistics.shipments" name="My Shipments" icon="ship" />
                <x-sidebar-multi-dropdown :items="$bulletinDropdown" name="Bulletin" icon="blog" id="bulletin" />
                <x-sidebar-multi-dropdown :items="$legalDropdown" name="Legal" icon="balance-scale" id="legal" />
                <x-sidebar-dropdown :items="$financingDropdown" name="Trade Finance" icon="money-check" id="financing" />
                <x-sidebar-dropdown :items="$ticketDropdown" name="Support" icon="hands-helping" id="support" />
            @elseif (auth()->user()->role == 'Insurance Provider')
                <x-sidebar-item route="insurance.dashboard" name="Dashboard" icon="sliders" />
                <x-sidebar-item route="user.profile" name="Profile" icon="user" />
                <x-sidebar-dropdown :items="$insuranceQuoteDropdown" name="Quotes" icon="lightbulb" id="insurance-requests" />
                <x-sidebar-item route="insurance.shipments" name="My Shipments" icon="ship" />
                <x-sidebar-multi-dropdown :items="$bulletinDropdown" name="Bulletin" icon="blog" id="bulletin" />
                <x-sidebar-multi-dropdown :items="$legalDropdown" name="Legal" icon="balance-scale" id="legal" />
                <x-sidebar-dropdown :items="$financingDropdown" name="Trade Finance" icon="money-check" id="financing" />
                <x-sidebar-dropdown :items="$ticketDropdown" name="Support" icon="hands-helping" id="support" />
            @elseif (auth()->user()->role == 'Financial Partner')
                <x-sidebar-item route="finance.dashboard" name="Dashboard" icon="sliders" />
                <x-sidebar-item route="user.profile" name="Profile" icon="user" />
                <x-sidebar-item route="finance.requests" name="Financing Requests" icon="money-check" />
                <x-sidebar-multi-dropdown :items="$bulletinDropdown" name="Bulletin" icon="blog" id="bulletin" />
                <x-sidebar-multi-dropdown :items="$legalDropdown" name="Legal" icon="balance-scale" id="legal" />
                <x-sidebar-dropdown :items="$ticketDropdown" name="Support" icon="hands-helping" id="support" />
            @elseif (auth()->user()->role == 'Sustainability Partner')
                <x-sidebar-item route="finance.dashboard" name="Dashboard" icon="sliders" />
                <x-sidebar-item route="user.profile" name="Profile" icon="user" />
                <x-sidebar-multi-dropdown :items="$bulletinDropdown" name="Bulletin" icon="blog" id="bulletin" />
                <x-sidebar-multi-dropdown :items="$legalDropdown" name="Legal" icon="balance-scale" id="legal" />
                <x-sidebar-dropdown :items="$ticketDropdown" name="Support" icon="hands-helping" id="support" />
            @else
                <li class="sidebar-header">
                    No Role
                </li>
            @endif
        </ul>
    </div>
</nav>

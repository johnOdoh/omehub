<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
    <div class="services-list">
        <a href="{{ route('service', ['service' => 'book-freight']) }}" class="{{ Request::is('services/book-freight') ? 'active' : ''}}">Quote & Book Freight</a>
        <a href="{{ route('service', ['service' => 'track-shipment']) }}" class="{{ Request::is('services/track-shipment') ? 'active' : ''}}">Track Shipment</a>
        <a href="{{ route('service', ['service' => 'trade-finance']) }}" class="{{ Request::is('services/trade-finance') ? 'active' : ''}}">Trade Finance</a>
        {{-- <a href="{{ route('service', ['service' => 'access-insurance']) }}" class="{{ Request::is('services/access-insurance') ? 'active' : ''}}">Access Insurance</a> --}}
        <a href="{{ route('service', ['service' => 'resolve-disputes']) }}" class="{{ Request::is('services/resolve-disputes') ? 'active' : ''}}">Resolve Disputes & Claims</a>
        <a href="{{ route('service', ['service' => 'offset-carbon-emission']) }}" class="{{ Request::is('services/offset-carbon-emission') ? 'active' : ''}}">Offset CO₂ Emissions</a>
        <a href="{{ route('service', ['service' => 'community-feed']) }}" class="{{ Request::is('services/community-feed') ? 'active' : ''}}">Community Feed</a>
    </div>

    {{-- <h4>Start Shipping your Cargo Across the Globe</h4>
    <p>We ensure your cargo sails at favorable rates, on schedule, giving you greater end-to-end control and visibility</p> --}}
</div>

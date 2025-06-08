<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
    <div class="services-list">
        <a href="{{ route('service', ['service' => 'air-freight']) }}" class="{{ Request::is('services/air-freight') ? 'active' : ''}}">Air Freight</a>
        <a href="{{ route('service', ['service' => 'ocean-freight']) }}" class="{{ Request::is('services/ocean-freight') ? 'active' : ''}}">Ocean Freight</a>
        <a href="{{ route('service', ['service' => 'road-freight']) }}" class="{{ Request::is('services/road-freight') ? 'active' : ''}}">Road Freight</a>
        <a href="{{ route('service', ['service' => 'rail-freight']) }}" class="{{ Request::is('services/rail-freight') ? 'active' : ''}}">Rail Freight</a>
        <a href="{{ route('service', ['service' => 'courier-service']) }}" class="{{ Request::is('services/courier-service') ? 'active' : ''}}">Courier Service</a>
        <a href="{{ route('service', ['service' => 'cargo-insurance']) }}" class="{{ Request::is('services/cargo-insurance') ? 'active' : ''}}">Cargo Insurance</a>
    </div>

    <h4>Start Shipping your Cargo Across the Globe</h4>
    <p>We ensure your cargo sails at favourable rates, on schedule, giving you greater end-to-end control and visibility</p>
</div>

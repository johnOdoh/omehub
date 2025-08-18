<div class="card-body">
    <ul class="list-unstyled mb-0">
        @if ($user->role == 'Shipper')
            <li class="d-flex align-items-center gap-2 mb-2">
                <i class="fas fa-briefcase fa-fw me-1"></i>
                <div>
                    <div class="text-muted small">Account Type</div>
                    <div class="fw-bold">{{ $user->profile()->account_type }}</div>
                </div>
            </li>
            <li class="d-flex align-items-center gap-2 mb-2">
                <i class="fas fa-user fa-fw me-1"></i>
                <div>
                    <div class="text-muted small">{{ $user->profile()->account_type == 'Business' ? 'Business' : 'Full' }} Name</div>
                    <div class="fw-bold">{{ $user->name }}</div>
                </div>
            </li>
            @if ($user->profile()->account_type == 'Business')
                <li class="d-flex align-items-center gap-2 mb-2">
                    <i class="fas fa-briefcase fa-fw me-1"></i>
                    <div>
                        <div class="text-muted small">Business Type</div>
                        <div class="fw-bold">{{ $user->profile()->business_type }}</div>
                    </div>
                </li>
                @endif
        @else
            <li class="d-flex align-items-center gap-2 mb-2">
                <i class="fas fa-user fa-fw me-1"></i>
                <div>
                    <div class="text-muted small">Business Name</div>
                    <div class="fw-bold">{{ $user->name }}</div>
                </div>
            </li>
        @endif
        <li class="d-flex align-items-center gap-2 mb-2">
            <i class="fas fa-key fa-fw me-1"></i>
            <div>
                <div class="text-muted small">Registration Number/TAX ID</div>
                <div class="fw-bold">{{ $user->profile()->reg_no ?? 'N/A' }}</div>
            </div>
        </li>
        <li class="d-flex align-items-center gap-2 mb-2">
            <i class="fas fa-phone fa-fw me-1"></i>
            <div>
                <div class="text-muted small">Phone Number</div>
                <div class="fw-bold">{{ $user->profile()->dial_code.' '.$user->profile()->phone }}</div>
            </div>
        </li>
        <li class="d-flex align-items-center gap-2 mb-2">
            <i class="fas fa-map-pin fa-fw me-1"></i>
            <div>
                <div class="text-muted small">Address</div>
                <div class="fw-bold">{{ $user->profile()->address }}</div>
            </div>
        </li>
        <li class="d-flex align-items-center gap-2 mb-2">
            <i class="fas fa-tag fa-fw me-1"></i>
            <div>
                <div class="text-muted small">Zip</div>
                <div class="fw-bold">{{ $user->profile()->zip }}</div>
            </div>
        </li>
        <li class="d-flex align-items-center gap-2 mb-2">
            <i class="fas fa-home fa-fw me-1"></i>
            <div>
                <div class="text-muted small">City</div>
                <div class="fw-bold">{{ $user->profile()->city }}</div>
            </div>
        </li>
        <li class="d-flex align-items-center gap-2 mb-2">
            <i class="fas fa-globe fa-fw me-1"></i>
            <div>
                <div class="text-muted small">Country</div>
                <div class="fw-bold">{{ $user->profile()->country }}</div>
            </div>
        </li>
        <li class="d-flex align-items-center gap-2 mb-2">
            <i class="fas fa-{{ $user->profile()->is_verified ? 'check-circle' : 'exclamation-triangle' }} fa-fw me-1 text-{{ $user->profile()->is_verified ? 'success' : 'warning' }}"></i>
            <div>
                <div class="text-muted small">Verification Status</div>
                @if ($user->profile()->document)
                    <div class="fw-bold">{{ $user->profile()->is_verified ? 'Verified' : 'Pending' }}</div>
                @else
                    <div class="fw-bold">No documents submitted yet. <a @if($user->verification_payment) href="{{ route('user.upload-document') }}" @else href="#" data-bs-toggle="modal" data-bs-target="#uploadDocuments" @endif>Submit documents</a></div>
                @endif
            </div>
        </li>
    </ul>
</div>

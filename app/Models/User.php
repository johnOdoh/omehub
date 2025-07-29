<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ', 2)
            ->map(fn (string $name) => Str::of($name)->substr(0, 1))
            ->implode('');
    }

    public function dashboard(): string
    {
        return match ($this->role) {
            'Logistics Provider' => 'logistics.dashboard',
            'Insurance Provider' => 'insurance.dashboard',
            'Shipper' => 'shipper.dashboard',
            'Admin' => 'admin.dashboard',
            default => 'home'
        };
    }

    public function profile()
    {
        $user = $this;
        return match ($user->role) {
            'Logistics Provider' => $user->logistic_provider,
            'Insurance Provider' => $user->insurance_provider,
            'Shipper' => $user->shipper, // Assuming Shipper has a profile
            'Admin' => $user->admin, // Assuming Admin has
            default => null, // Handle other roles if necessary
        };
    }

    public function firstname(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->first();
    }

    public function shipper()
    {
        return $this->hasOne(Shipper::class);
    }

    public function logistic_provider()
    {
        return $this->hasOne(Logistic::class);
    }

    public function insurance_provider()
    {
        return $this->hasOne(Insurance::class);
    }

    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }

    public function insuranceQuotes()
    {
        return $this->hasMany(InsuranceQuote::class);
    }

    public function requests()
    {
        return $this->hasMany(Request::class);
    }

    public function shipments()
    {
        return $this->hasMany(Shipment::class);
    }

    public function claims()
    {
        return $this->hasMany(Claim::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

<?php

namespace App\Livewire\Admin\Profile;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class EditProfile extends Component
{
    public $user;
    public $countryCodes;
    public $currentCountry;
    public string $phone = '';
    public string $address = '';
    public string $city = '';
    public string $country = '';
    public string $dial_code;
    public string $zip = '';

    public function mount()
    {
        $this->dispatch('load-countries-plugin');
        $this->countryCodes = DB::table('countries')->orderBy('name')->get();
        $this->fill($this->user->admin);
        $this->currentCountry = $this->countryCodes->firstWhere('name', $this->country);
        $this->dial_code = $this->currentCountry->code;
        $this->dispatch('load-defaults');
    }

    public function updateProfile()
    {
        $validated = $this->validate([
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'dial_code' => 'required|string',
            'zip' => 'required|string'
        ]);
        $validated['phone'] = $validated['phone']/1;
        $this->user->admin()->update($validated);
        request()->session()->flash("updated");
        $this->dispatch('profile-updated');
    }

    public function closePage()
    {
        $this->dispatch('close-page');
    }

    public function render()
    {
        return view('livewire.admin.profile.edit-profile');
    }
}

<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="register" class="flex flex-col gap-6">
        <!-- Name -->
        <div>
            <flux:input
                wire:model="name"
                :label="__('Name')"
                type="text"
                required
                autofocus
                autocomplete="name"
                :placeholder="__('Full name')"
            />
        </div>

        <!-- Email Address -->
        <div>
            <flux:input
                wire:model="email"
                :label="__('Email address')"
                type="email"
                required
                autocomplete="email"
                placeholder="email@example.com"
            />
        </div>

        <div>
            <flux:select wire:model="role" label="Role" placeholder="Choose Role..." required>
                {{-- <flux:select.option value="Admin">Admin</flux:select.option> --}}
                <flux:select.option value="Shipper">Shipper</flux:select.option>
                <flux:select.option value="Logistics Provider">Logistics Provider</flux:select.option>
                {{-- <flux:select.option value="Insurance Provider">Insurance Provider</flux:select.option> --}}
            </flux:select>
        </div>

        <!-- Password -->
        <div>
            <flux:input
                wire:model="password"
                :label="__('Password')"
                type="password"
                required
                autocomplete="new-password"
                :placeholder="__('Password')"
                viewable
            />
        </div>

        <!-- Confirm Password -->
        <flux:input
            wire:model="password_confirmation"
            :label="__('Confirm password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Confirm password')"
            viewable
        />
        <div class="flex items-center space-x-2">
            <input
                id="terms"
                type="checkbox"
                required
                class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
            />
            <label for="terms" class="text-sm">
                I agree to the <a href="{{ route('terms') }}" target="_blank" class="text-blue-600 hover:underline">Terms of Service</a> and <a href="{{ route('privacy') }}" target="_blank" class="text-blue-600 hover:underline">Privacy Policy</a>.
            </label>
        </div>

        {{-- <div class="flex items-center space-x-2">
            <input
                id="privacy"
                type="checkbox"
                required
                class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
            />
            <label for="privacy" class="text-sm">
                I agree to the .
            </label>
        </div> --}}

        <div class="flex items-center justify-end">
            <flux:button type="submit" variant="primary" class="w-full">
                {{ __('Create account') }}
            </flux:button>
        </div>
    </form>

    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
        {{ __('Already have an account?') }}
        <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
    </div>
</div>

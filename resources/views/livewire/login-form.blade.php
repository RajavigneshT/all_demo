<!-- resources/views/livewire/login-form.blade.php -->

<div>
    <form wire:submit.prevent="login">
        @if (session()->has('error'))
            <div>{{ session('error') }}</div>
        @endif

        <div>
            <label for="email">Email:</label>
            <input type="email" wire:model="email" required>
            @error('email') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" wire:model="password" required>
            @error('password') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</div>

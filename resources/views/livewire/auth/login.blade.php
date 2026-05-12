<div>

    @if (session()->has('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form wire:submit.prevent='login'>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" wire:model='email' aria-describedby="email">
            @error('email')
                <span class="text-danger small">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" wire:model='password' id="password">
            @error('password')
                <span class="text-danger small">
                    {{ $message }}
                </span>
            @enderror
        </div>
<button type="submit" class="btn btn-primary">entrar</button>
</form>
{{-- The whole world belongs to you. --}}
</div>

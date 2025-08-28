@extends('layouts.auth')

@section('title', 'Login - InLife')

@section('content')
    @include('auth.partials.login-form')
@endsection

@push('scripts')
<script>
    function togglePassword() {
        const passwordField = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            eyeIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7
                      a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243
                      M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21">
                </path>`;
        } else {
            passwordField.type = 'password';
            eyeIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M2.458 12C3.732 7.943 7.523 5 12 5
                      c4.478 0 8.268 2.943 9.542 7
                      -1.274 4.057-5.064 7-9.542 7
                      -4.477 0-8.268-2.943-9.542-7z"></path>`;
        }
    }

    document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value.trim();
        if (!email || !password) {
            alert('Mohon lengkapi semua field');
            return;
        }

        const button = this.querySelector('button[type="submit"]');
        button.textContent = 'Sedang Masuk...';
        button.disabled = true;

        fetch('/api/login', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ email, password })
        }).then(res => res.json())
          .then(data => {
              alert('Login berhasil (dummy)');
              button.textContent = 'Masuk';
              button.disabled = false;
          })
          .catch(() => {
              alert('Terjadi kesalahan');
              button.textContent = 'Masuk';
              button.disabled = false;
          });
    });
</script>
@endpush

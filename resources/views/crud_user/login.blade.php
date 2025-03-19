@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <h3 class="card-header text-center text-primary py-3">Đăng Nhập - Admin</h3>
                        <div class="card-body p-4">
                            <form method="POST" action="{{ route('user.authUser') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" 
                                           placeholder="Nhập email" 
                                           id="email" 
                                           class="form-control rounded-3" 
                                           name="email" 
                                           value="{{ old('email') }}" 
                                           required 
                                           autofocus>
                                    @error('email')
                                        <span class="text-danger d-block mt-1">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password" class="form-label">Mật khẩu</label>
                                    <div class="input-group">
                                        <input type="password" 
                                               placeholder="Nhập mật khẩu" 
                                               id="password" 
                                               class="form-control rounded-3" 
                                               name="password" 
                                               required>
                                        <button type="button" 
                                                class="btn btn-outline-secondary" 
                                                onclick="togglePassword(this)">
                                            <i class="fas fa-eye" id="eyeIcon"></i>
                                        </button>
                                    </div>
                                    @error('password')
                                        <span class="text-danger d-block mt-1">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" 
                                               class="form-check-input" 
                                               id="remember" 
                                               name="remember" 
                                               {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">Ghi nhớ tôi</label>
                                    </div>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-block rounded-3 py-2">
                                        Đăng Nhập
                                    </button>
                                </div>
                            </form>

                            <p class="text-center mt-3">
                                Chưa có tài khoản? 
                                <a href="{{ route('registration') }}" class="text-primary">Đăng ký ngay</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Font Awesome for Icons (Add this to your layout if not already included) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        .login-form .card {
            background: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #fff;
            border-bottom: none;
        }
        .form-control {
            padding: 10px;
            font-size: 0.95rem;
            border-radius: 8px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-1px);
        }
        .text-primary {
            color: #007bff !important;
        }
        .text-danger {
            font-size: 0.85rem;
        }
        .input-group .btn-outline-secondary {
            border-radius: 0 8px 8px 0;
        }
    </style>

    <!-- Custom JavaScript -->
    <script>
        function togglePassword(button) {
            const passwordField = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }
    </script>
@endsection
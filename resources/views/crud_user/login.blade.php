@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card border-0 shadow-lg" style="border-radius: 15px; overflow: hidden;">
                    <!-- Background image header -->
                    <div class="card-header p-4 text-center" style="background: linear-gradient(135deg, #007bff, #6c63ff); color: #fff;">
                        <h3 class="mb-0">Welcome Back!</h3>
                        <p class="mb-0" style="font-size: 14px;">Login to access your account</p>
                    </div>
                    <div class="card-body bg-light p-4">
                        <form method="POST" action="{{ route('user.authUser') }}">
                            @csrf
                            <!-- Email input -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" placeholder="Enter your email" id="email" class="form-control" name="email" required autofocus>
                                @if ($errors->has('email'))
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>

                            <!-- Password input -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" placeholder="Enter your password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <div class="text-danger">{{ $errors->first('password') }}</div>
                                @endif
                            </div>

                            <!-- Remember Me checkbox -->
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>

                            <!-- Action buttons -->
                            <div class="d-flex justify-content-end align-items-center gap-2">
                                <a href="#" class="text-muted" style="font-size: 14px;">Forgot Password?</a>
                                <button type="submit" class="btn btn-lg btn-primary" style="background: linear-gradient(135deg, #6c63ff, #007bff); border: none;">Log In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@extends('dashboard')

@section('content')
<main class="signup-form">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card border-0 shadow-lg" style="border-radius: 15px; overflow: hidden;">
                    <!-- Header with a gradient background -->
                    <div class="card-header p-4 text-center" style="background: linear-gradient(135deg, #007bff, #6c63ff); color: #fff;">
                        <h3 class="mb-0">Create Your Account</h3>
                        <p class="mb-0" style="font-size: 14px;">Fill in the information below to sign up.</p>
                    </div>
                    <div class="card-body bg-light p-4">
                        <form action="{{ route('user.postUser') }}" method="POST" enctype="multipart/form-data">>
                            @csrf
                            <!-- Name input -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" placeholder="Enter your name" id="name" class="form-control" name="name" required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <!-- Avatar input -->
                            <!-- Avatar input -->
                            <div class="mb-3">
                                <label for="avatar" class="form-label">Upload Avatar</label>
                                <input type="file" id="avatar" class="form-control" name="avatar" accept="image/*" required>
                                @if ($errors->has('avatar'))
                                <span class="text-danger">{{ $errors->first('avatar') }}</span>
                                @endif
                            </div>

                            <!-- Age input -->
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" placeholder="Enter your age" id="age" class="form-control" name="age" required autofocus>
                                @if ($errors->has('age'))
                                <span class="text-danger">{{ $errors->first('age') }}</span>
                                @endif
                            </div>

                            <!-- Hobby input -->
                            <div class="mb-3">
                                <label for="github" class="form-label">Github</label>
                                <input type="text" placeholder="Enter your Github link" id="github" class="form-control" name="github" required autofocus>
                                @if ($errors->has('github'))
                                <span class="text-danger">{{ $errors->first('github') }}</span>
                                @endif
                            </div>

                            <!-- Email input -->
                            <div class="mb-3">
                                <label for="email_address" class="form-label">Email</label>
                                <input type="email" placeholder="Enter your email" id="email_address" class="form-control" name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <!-- Password input -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" placeholder="Enter your password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <!-- Password input -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Retype Password</label>
                                <input type="password" placeholder="Re-enter your password" id="repassword" class="form-control" name="repassword" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <!-- Submit button and login link -->
                            <div class="d-flex justify-content-end align-items-center gap-2">
                                <a href="{{ route('login') }}" class="text-primary" style="font-size: 14px; text-decoration: underline;">Already have an account? Login</a>
                                <button type="submit" class="btn btn-sm btn-primary" style="width: 25%; background: linear-gradient(135deg, #6c63ff, #007bff); border: none;">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@extends('footer')
@extends('dashboard')

@section('content')
<main class="update-form">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card border-0 shadow-lg" style="border-radius: 15px; overflow: hidden;">
                    <!-- Header with a gradient background -->
                    <div class="card-header p-4 text-center" style="background: linear-gradient(135deg, #007bff, #6c63ff); color: #fff;">
                        <h3 class="mb-0">Update User</h3>
                        <p class="mb-0" style="font-size: 14px;">Edit the information below to update the user.</p>
                    </div>
                    <div class="card-body bg-light p-4">
                        <form action="{{ route('user.postUpdateUser') }}" method="POST">
                            @csrf
                            <input name="id" type="hidden" value="{{$user->id}}">
                            
                            <!-- Name input -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" placeholder="Enter name" id="name" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <!-- Hobby input -->
                            <div class="mb-3">
                                <label for="hobby" class="form-label">Hobby</label>
                                <input type="text" placeholder="Enter hobby" id="hobby" class="form-control" name="hobby" value="{{ $user->hobby }}" required>
                                @if ($errors->has('hobby'))
                                    <span class="text-danger">{{ $errors->first('hobby') }}</span>
                                @endif
                            </div>

                            <!-- Age input -->
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" placeholder="Enter age" id="age" class="form-control" name="age" value="{{ $user->age }}" required>
                                @if ($errors->has('age'))
                                    <span class="text-danger">{{ $errors->first('age') }}</span>
                                @endif
                            </div>

                            <!-- Email input -->
                            <div class="mb-3">
                                <label for="email_address" class="form-label">Email</label>
                                <input type="email" placeholder="Enter email" id="email_address" class="form-control" name="email" value="{{ $user->email }}" required>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <!-- Password input -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" placeholder="Enter password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <!-- Submit button -->
                            <div class="d-flex justify-content-end gap-2">
                                <button type="submit" class="btn btn-primary btn-sm" style="background: linear-gradient(135deg, #6c63ff, #007bff); border: none;">Update</button>
                                <a href="{{ route('user.list') }}" class="btn btn-light btn-sm border">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

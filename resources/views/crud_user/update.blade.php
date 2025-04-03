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
                        <form action="{{ route('user.postUpdateUser') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input name="id" type="hidden" value="{{$user->id}}">

                            <!-- Avatar Upload with Current and Preview -->
                            <div class="mb-3">
                                <label for="avatar" class="form-label">Upload New Avatar</label>

                                <!-- New Avatar Upload -->
                                <div>
                                    <input type="file" id="avatar" class="form-control" name="avatar" accept="image/*" onchange="previewNewAvatar(event)">
                                    @if ($errors->has('avatar'))
                                    <span class="text-danger">{{ $errors->first('avatar') }}</span>
                                    @endif
                                </div>

                                <div  class="d-flex">
                                    <!-- Current Avatar Display -->
                                    <div class="d-flex align-items-center mb-2">
                                        <div>
                                            <p class="mb-1 text-muted">Current Avatar:</p>
                                            <img src="{{ asset($user->avatar) }}"
                                                alt="Current Avatar"
                                                class="rounded-circle shadow-sm"
                                                width="80" height="80">
                                        </div>
                                    </div>

                                    <!-- Preview of New Avatar -->
                                    <div class="ms-auto">
                                        <p class="mb-1 text-muted">Preview New Avatar:</p>
                                        <img id="newAvatarPreview" class="rounded-circle shadow-sm"
                                            width="80" height="80"
                                            style="display: none;" alt="New Avatar Preview">
                                    </div>
                                </div>
                            </div>

                            <!-- Name input -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" placeholder="Enter name" id="name" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
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

                            <!-- Github input -->
                            <div class="mb-3">
                                <label for="github" class="form-label">Github</label>
                                <input type="text" placeholder="Enter github link" id="github" class="form-control" name="github" value="{{ $user->github }}" required>
                                @if ($errors->has('github'))
                                <span class="text-danger">{{ $errors->first('github') }}</span>
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

<!-- JavaScript for Avatar Preview -->
<script>
    function previewNewAvatar(event) {
        const preview = document.getElementById('newAvatarPreview');
        const file = event.target.files[0];

        if (file) {
            preview.src = URL.createObjectURL(file);
            preview.style.display = "block";
        } else {
            preview.style.display = "none";
        }
    }
</script>
@endsection
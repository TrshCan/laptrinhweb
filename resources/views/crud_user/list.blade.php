@extends('dashboard')

@section('content')
<main class="list-page">
    <div class="container py-5">
        <!-- Page Header -->
        <div class="row mb-4">
            <div class="col text-center">
                <h2>User List</h2>
                <p class="text-muted">Manage users, update their details, or view their profiles.</p>
            </div>
        </div>

        <!-- Responsive Table -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="table-responsive shadow-lg">
                    <table class="table table-hover table-bordered align-middle">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Hobby</th>
                                <th scope="col">Age</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->hobby }}</td>
                                <td>{{ $user->age }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="text-center">
                                    <a href="{{ route('user.readUser', ['id' => $user->id]) }}" class="btn btn-sm btn-info text-white">View</a>
                                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="btn btn-sm btn-warning text-white">Edit</a>
                                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <nav class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</main>
@endsection
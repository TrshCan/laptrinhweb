@extends('dashboard')

@section('content')
    <main class="personal-page">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow-lg rounded">
                        <div class="card-header bg-info text-white text-center rounded-top">
                            <div class="d-flex align-items-center flex-column">
                                <img src="{{ asset($messi->avatar) }}" 
                                     class="rounded-circle mb-3" 
                                     alt="{{ $messi->name }}" width="120" height="120">
                                <h2>{{ $messi->name }}</h2>
                                <p class="text-white-50">Age: {{ $messi->age }} | GitHub: 
                                    <a href="{{ $messi->github }}" class="text-white text-decoration-underline" target="_blank">
                                        Visit Profile
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="card-body bg-light">
                            <h4 class="text-center mb-4">Personal Information</h4>
                            <table class="table table-striped table-bordered text-center">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">Field</th>
                                        <th scope="col">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $messi->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Name</td>
                                        <td>{{ $messi->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ $messi->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Age</td>
                                        <td>{{ $messi->age }}</td>
                                    </tr>
                                    <tr>
                                        <td>GitHub</td>
                                        <td>
                                            <a href="{{ $messi->github }}" target="_blank" class="text-primary text-decoration-underline">
                                                {{ $messi->github }}
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-center bg-secondary text-white rounded-bottom">
                            <p class="mb-0">Detailed personal information for {{ $messi->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

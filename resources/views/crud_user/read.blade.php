@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-lg rounded">
                        <div class="card-header bg-primary text-white text-center">
                            <h3>User Details</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$messi->id}}</td>
                                        <td>{{$messi->name}}</td>
                                        <td>{{$messi->email}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@extends('footer')
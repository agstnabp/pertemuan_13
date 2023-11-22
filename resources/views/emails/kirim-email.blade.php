@extends('auth.layouts')
@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">Register</div>
            <div class="card-body">
                {{-- send email --}}
                @if (session('success'))
                <div class="alert alert-primary" role="alert">
                {{ session('success') }}
                </div>
                @endif
                <form action="{{ route('post-email') }}" method="post">

                @csrf
                <div class="form-group my-3">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nama">
                @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                </div>
                <div class="form-group my-3">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                </div>

                <div class="form-group my-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Tujuan">
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                </div>
                <div class="form-group my-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                <button class="btn btn-primary">Kirim Email</button>
                </div>
                </div>
            </div>
            @endsection
            </div>
        </div>
    </div>
</div>
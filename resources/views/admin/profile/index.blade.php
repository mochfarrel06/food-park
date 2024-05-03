@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
        </div>

        <div class="section-body">
            {{-- Update User Setting Start --}}
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Update User Settings</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control"
                                value="{{ auth()->user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Name</label>
                            <input type="email" id="email" name="email" class="form-control"
                                value="{{ auth()->user()->email }}">
                        </div>
                        <button class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
            {{-- Update User Setting End --}}

            {{-- Update Password Start --}}
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Update Password</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.profile.password.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="current_password">Current Password</label>
                            <input type="password" id="current_password" name="current_password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Password Confirmation</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="form-control">
                        </div>
                        <button class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
            {{-- Update Password End --}}
        </div>
    </section>
@endsection

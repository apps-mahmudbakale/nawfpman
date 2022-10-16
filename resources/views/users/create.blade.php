@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="container-xl">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Create Role</h3>
        </div>
        <div class="card-body border-bottom py-3">
            <form action="{{ route('app.users.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    Name
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    Email
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    Role
                    <select name="roles[]" id="" class="form-control">
                        @foreach ($roles as $key => $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    Password
                    <input type="password" name="password" class="form-control">
                </div>
        </div>
        <div class="card-footer d-flex align-items-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
</div>
@endsection
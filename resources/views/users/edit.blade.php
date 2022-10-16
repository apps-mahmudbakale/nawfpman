@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="container-xl">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Create Role</h3>
        </div>
        <div class="card-body border-bottom py-3">
            <form action="{{ route('app.users.update', [$user->id]) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    Name
                    <input type="text" name="name" value="{{ old('name', isset($user) ? $user->name : '') }}" class="form-control">
                </div>
                <div class="form-group">
                    Email
                    <input type="text" name="email" value="{{ old('name', isset($user) ? $user->email : '') }}" class="form-control">
                </div>
                <div class="form-group">
                    Role
                    <select name="roles[]" id="" class="form-control">
                        @foreach ($roles as $id => $role)
                        <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || isset($user->role) && $user->role->contains($id)) ? 'selected' : '' }}>
                            {{$role->name}}
                        </option>
                        @endforeach
                    </select>
                </div>
        </div>
        <div class="card-footer d-flex align-items-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
</div>
@endsection
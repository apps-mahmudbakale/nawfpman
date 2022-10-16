@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="container-xl">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Create Vendor</h3>
          <a href="{{route('app.vendors.index')}}" class="btn btn-primary ml-auto">Go Back</a>
        </div>
        <div class="card-body border-bottom py-3">
            <form action="{{ route('app.vendors.store') }}" method="POST">
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
                    Category
                    <select name="category" id="" class="form-control">
                       <option>Constructions</option>
                       <option>Education</option>
                       <option>Health</option>
                       <option>Legal</option>
                       <option>Marketing</option>
                       <option>Telecommunication</option>
                    </select>
                </div>
                <div class="form-group">
                    Phone
                    <input type="text" name="phone" class="form-control">
                </div>
                <div class="form-group">
                    Address
                    <input type="text" name="address" class="form-control">
                </div>
        </div>
        <div class="card-footer d-flex align-items-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
</div>
@endsection
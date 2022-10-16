@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Show - {{ strtoupper($vendor->name) }}</h3>
                <a href="{{route('app.vendors.index')}}" class="btn btn-primary ml-auto">Back</a>
            </div>
            <div class="card-body border-bottom py-3">
                <table class="table table-bordered">
                    <tr class="success">
                        <td><strong>Name</strong></th>
                        <td>{{ $vendor->name }}</td>
                    </tr>
                    <tr class="success">
                        <td><strong>Category</strong></th>
                        <td>{{ $vendor->category }}</td>
                    </tr>
                    <tr class="success">
                        <td><strong>Phone</strong></th>
                        <td>{{ $vendor->phone }}</td>
                    </tr>
                    <tr class="success">
                        <td><strong>Address</strong></th>
                        <td>{{ $vendor->address }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection

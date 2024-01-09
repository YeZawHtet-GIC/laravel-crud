@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 shadow-lg">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->size }}</td>
                                    <td>{{ $product->quantity }}</td>
                            </tbody>
                        </table>
                        <div class="mb-4">
                            <a class="text-decoration-none text-bold btn btn-outline-dark"
                                href="{{ route('index') }}">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

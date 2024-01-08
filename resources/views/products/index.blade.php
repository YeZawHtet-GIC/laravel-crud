@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 shadow">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Size</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <th scope="row">{{ $product->id }}</th>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->size }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td><a class="text-decoration-none text-black btn btn-outline-warning"
                                            href="{{ route('product.edit', $product->id) }}"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <form action="{{ route('product.destroy', $product->id) }}" class="d-inline-block"
                                            method="post">
                                            @method('Delete')
                                            @csrf
                                            <button class="text-black btn btn-outline-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

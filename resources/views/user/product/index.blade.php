@extends('user.layouts.app', ['current' => 'product'])

@section('title', 'Product')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title " style="float: left">Product Table</h4>
                        <a href="{{ route('admin.product.create') }}" class="btn btn-secondary" style="float: right">Create</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slot</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->slot }}</td>
                                            <td class="text-primary">{{ $product->price }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>
                                                <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-primary btn-sm" style="float: left">Edit</a>
                                                <form method="post" action="{{ route('admin.product.delete', $product->id) }}">
                                                    @csrf
                                                    <a href="{{ route('admin.product.delete', $product->id) }}" class="btn btn-da\ btn-sm" style="float: right" onclick="event.preventDefault();
                                        this.closest('form').submit();">Delete</a>
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
        </div>
    </div>
@endsection

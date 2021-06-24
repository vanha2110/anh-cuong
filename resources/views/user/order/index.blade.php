@extends('user.layouts.app', ['current' => 'order'])

@section('title', 'Order')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Order Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Order At</th>
                                <th>Actions</th>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->product->name }}</td>
                                        <td>{{ $order->quantity }}</td>
                                        <td class="text-primary">{{ ($order->product->price)*($order->quantity) }}</td>
                                        <td>{{ $order->order_at }}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm" style="float:left">Payment</a>
                                            <form method="post" action="{{ route('order.delete', $order->id) }}">
                                                @csrf
                                                <a href="{{ route('order.delete', $order->id) }}" class="btn btn-da\ btn-sm" style="float:right" onclick="event.preventDefault();
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

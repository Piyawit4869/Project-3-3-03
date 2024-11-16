@extends('layouts.master_backend')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">รายการคำสั่งซื้อ</h4>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive mt-4">
                                <table id="basic-table" class="table table-striped mb-0" role="grid">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Total Price</th>
                                            <th>Final Price</th>
                                            <th>Item</th>
                                            {{-- <th>Images</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Created_at</th>
                                        <th>Updated_at</th>
                                        <th>Actions</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td>{{ $order->total_price }}</td>
                                                <td>{{ $order->final_price }}</td>
                                                <td>
                                                    @foreach ($order->items as $item)
                                                        <div>
                                                            <strong>{{ $item['name'] }}</strong> - {{ $item['price'] }} THB
                                                        </div>
                                                    @endforeach
                                                </td>
                                                {{-- <td><img src=""></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-3 ms-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection

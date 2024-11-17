@extends('layouts.master_backend')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">ข้อมูลการติดต่อ</h4>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive mt-4">
                                <table id="basic-table" class="table table-striped mb-0" role="grid">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Created_at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contact as $con)
                                            <tr>
                                                <td>{{ $con->contact_id }}</td>
                                                <td>{{ $con->name }}</td>
                                                <td>{{ $con->subject }}</td>
                                                <td>{{ $con->message }}</td>
                                                <td>{{ $con->created_at }}</td>
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
    </div>
@endsection


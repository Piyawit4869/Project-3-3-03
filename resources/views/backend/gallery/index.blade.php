@extends('layouts.master_backend')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">แกลเลอรี่</h4>
                        </div>
                        <div class="m-n2">
                            <a href="{{ route('g.create') }}" type="button" class="btn btn-outline-primary m-2">เพิ่มรูปภาพ</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive mt-4">
                            <table id="basic-table" class="table table-striped mb-0" role="grid">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Images</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gallery as $gall)
                                        <tr>
                                            <td>{{ $gall->gallery_id }}</td>
                                            <td>{{ $gall->name }}</td>
                                            <td><img src="{{ asset('backend/gallery/resize/'.$gall->image) }}"></td>
                                            <td>
                                                <a href="{{ route('g.edit',$gall->gallery_id) }}" class="btn btn-outline-primary">แก้ไข</>
                                                <a href="{{ url('admin/gallery/delete/'.$gall->gallery_id) }}" class="btn btn-outline-danger mx-2">ลบ</a>
                                            </td>
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

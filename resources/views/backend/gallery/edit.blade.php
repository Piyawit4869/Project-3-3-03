@extends('layouts.master_backend')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="row">
            <div class="col-sm-12">

                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">แก้ไข รูปภาพ</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p></p>
                        <form method="POST" enctype="multipart/form-data" action="{{ url('admin/gallery/update/'.$gall->gallery_id) }}">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="exampleInputText1">Name</label>
                                <input type="text" name="name" value="{{ $gall->name }}" class="form-control" id="exampleInputText1"
                                    placeholder="กรุณากรอกชื่อรูปภาพ">
                            </div>

                            <div class="mt-3">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="exampleInputNumber1">Image</label>
                                <input type="file" name="image" value="{{ $gall->image }}" class="form-control" id="exampleInputNumber1">
                            </div>

                            <div class="mt-3">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mt-4">
                                <img src="{{ asset('backend/gallery/resize/'.$gall->image) }}">
                            </div>

                            <input type="submit" value="บันทึก" class="btn btn-primary mt-3">
                            <a href="{{ route('g.index') }}" class="btn btn-danger mt-3">ยกเลิก</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

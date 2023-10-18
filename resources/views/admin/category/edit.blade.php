@extends('layouts.masterbackend')
@section('text')
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">เพิ่มประเภทสินค้า</h6>
        </div>
        <form action="{{ route('cat.update', $type->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">ชื่อประเภทสินค้า</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $type->name }}">

                    @error('name')
                        <span class="mt-2 text-danger">
                            {{ $message }}
                        </span>
                    @enderror

                </div>
                <div class="mt-4">
                    <input type="submit" class="btn btn-success" value="แก้ไข">
                    <a href="{{ route('cat.index') }}" class="btn btn-danger">กลับหน้าหลัก</a>
                </div>
            </div>
        </form>
    </div>
@endsection

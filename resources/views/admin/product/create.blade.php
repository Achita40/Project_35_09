

@extends('layouts.masterbackend')
@section('text')
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">เพิ่มสินค้า</h6>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">ชื่อสินค้า</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">ราคาสินค้า</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="detail" class="form-label">รายละเอียดสินค้า</label>
                    <textarea class="form-control" id="detail" name="detail" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">ประเภทสินค้า</label>
                    <select class="form-select form-control " aria-label="กรุณาเลือกประเภทสินค้า">
                        <option selected>กรุณาเลือกประเภทสินค้า</option>
                        <option value="1">อาหาร</option>
                        <option value="2">เครื่องดื่ม</option>
                      </select>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">รูปภาพสินค้า</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="mt-4">
                    <input type="submit" class="btn btn-primary" value="บันทึก">
                    <a href="{{route('pro_index')}}" class="btn btn-danger">กลับหน้าหลัก</a>
                </div>
            </div>
        </form>
    </div>
@endsection


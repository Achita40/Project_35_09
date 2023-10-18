@extends('layouts.masterbackend')
@section('text')
    <div class="mt-4">
        <a href="{{route('cat.create')}}" class="btn btn-success"> เพิ่มประเภทสินค้า</a>
    </div>
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">ประเภทสินค้า</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Type Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($categorys as $type)
                            <tr>
                                <td>
                                    {{ $type->id }}
                                </td>
                                <td>
                                    {{ $type->name }}
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('cat.edit', $type->id) }}" class="btn btn-warning btn-sm mx-1">
                                        แก้ไข
                                    </a>
                                    <a href="{{ route('cat.delete', $type->id) }}" class="btn btn-danger btn-sm mx-1">
                                        ลบ
                                    </a>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

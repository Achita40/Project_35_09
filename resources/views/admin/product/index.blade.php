@extends('layouts.masterbackend')
@section('text')
    <div class="mt-4">
        <a href="{{route('pro.create')}}" class="btn btn-success"> เพิ่มสินค้า</a>
    </div>
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">สินค้า</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Product image</th>
                            <th>Product type</th>
                            <th>Product Price</th>
                            <th>Product Detail</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if(! $products->isEmpty() )

                            @foreach ($products as $product)
                                <tr>
                                    <td>
                                        {{ $product->id }}
                                    </td>
                                    <td>
                                        {{ $product->product_name }}
                                    </td>
                                    <td>
                                        @if($product->image)
                                            <img src="{{ asset('images/'.$product->image) }}" width="200px" alt="." class="img-thumbnail" />
                                        @else
                                            <span class="text-danger">
                                                {{ __('ไม่มีรูปภาพ') }}
                                            </span>
                                        @endif
                                    </td>
                                    <td typeproductd>
                                        {{
                                            !empty($product->typeproduct) ?

                                                !empty($product->Type->name) ?
                                                    $product->Type->name
                                                : 'ไม่มีเภทที่ระบุ'

                                            : 'ไม่ได้ระบุประเภท'
                                        }}
                                    </td>
                                    <td>
                                        {{
                                            number_format(
                                                !empty($product->product_price) ?
                                                    $product->product_price
                                                : 0
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{ $product->product_detail }}
                                    </td>
                                    <td>

                                        <!-- Edit -->

                                        <button
                                            type="button"
                                            class="btn btn-warning btn-sm"
                                            data-toggle="modal"
                                            data-target="#editProduct{{ $product->id }}"
                                        >
                                            แก้ไข
                                        </button>

                                        <div class="modal fade" id="editProduct{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <div class="modal-title h6" id="exampleModalLabel">
                                                    แก้ไขสินค้า [ ID : {{ $product->id }} Product Name : {{ $product->product_name }} ]
                                                  </div>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <form method="post" action="{{ route('pro.update', $product->id) }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}" />
                                                    <div class="modal-body">
                                                        {{-- Name --}}
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">
                                                                Product Name
                                                            </label>
                                                            <input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}" />
                                                        </div>
                                                        {{-- Endname --}}
                                                        {{-- Price --}}
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">
                                                                Product Price
                                                            </label>
                                                            <input type="number" name="product_price" class="form-control" value="{{ $product->product_price }}" />
                                                        </div>
                                                        {{-- EndPrice --}}
                                                        {{-- Detail --}}
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">
                                                                Product Detail
                                                            </label>
                                                            <input type="text" name="product_detail" class="form-control" value="{{ $product->product_detail }}" />
                                                        </div>
                                                         {{-- EndDetail --}}

                                                         {{-- Type --}}
                                                         <div class="form-group mb-3">
                                                            <label class="exampleInputPassword1">ประเภทสินค้า</label>
                                                            <select class="form-select form-control " name="typeproduct" aria-label="กรุณาเลือกประเภทสินค้า">
                                                                @if (empty($product->typeproduct))
                                                                    <option selected>กรุณาเลือกประเภทสินค้า</option>
                                                                @endif

                                                                @foreach ($product_type as $type)
                                                                    <option value="{{ $type->id }}" {{ ($product->typeproduct == $type->id) ? 'selected' : '' }}>
                                                                        {{ $type->name }}
                                                                    </option>
                                                                @endforeach

                                                              </select>
                                                        </div>
                                                         {{-- ./Type --}}

                                                         {{-- Image --}}
                                                         <div class="mb-3">
                                                            <label for="image" class="form-label">รูปภาพสินค้า</label>
                                                            <input type="file" class="form-control" id="image" name="image">
                                                         </div>
                                                         {{-- ./Image --}}
                                                    </div>

                                                     {{--save c --}}
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                    {{--end save c --}}
                                                </form>
                                              </div>
                                            </div>
                                        </div>

                                        <!-- ./Edit -->

                                        <!-- Delete -->
                                        <button
                                            type="button"
                                            class="btn btn-danger btn-sm"
                                            data-toggle="modal"
                                            data-target="#delProduct{{ $product->id }}"
                                        >
                                            ลบ
                                        </button>

                                        <div class="modal fade" id="delProduct{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <div class="modal-title h6" id="exampleModalLabel">
                                                    แก้ไขสินค้า [ ID : {{ $product->id }} Product Name : {{ $product->product_name }} ]
                                                  </div>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>

                                                    <div class="modal-body">

                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">
                                                                Product Name
                                                            </label>
                                                            <input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}" />
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <a href="{{ route('pro.delete', $product->id) }}" class="btn btn-primary">Confrim Delete</a>
                                                    </div>

                                              </div>
                                            </div>
                                        </div>
                                        <!-- ./Delete -->

                                        {{-- @if ($p->status == 0)
                                        <a href="" class="btn btn-success">เปิด</a>
                                        @else
                                        <a href="" class="btn btn-success">ปิด</a>
                                        @endif --}}

                                    </td>
                                </tr>
                            @endforeach

                        @else
                            <tr>
                                <td colspan="5">
                                    ไม่มีข้อมูลแสดง
                                </td>
                            </tr>
                        @endif

                    </tbody>
                </table>

                @if(! $products->isEmpty() )
                    <div class="mt-3">
                        {{ $products->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

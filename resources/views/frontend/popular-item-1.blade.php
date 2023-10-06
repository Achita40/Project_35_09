{{-- @section('popular-item-1')

      <section class="py-4">

        <div class="container">
          <div class="col-lg-7 mx-auto text-center mb-6">
            <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Popular items</h5>
          </div>
          <div class="row h-100 gx-2 mt-7">

            @foreach ($products as $product)
                <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
                    <div class="card card-span h-100">
                    <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="{{ asset('frontend/assets/img/gallery/discount-item-1.png') }}" alt="..." />
                        <div class="card-actions">
                            <div class="d-flex flex-between-center">
                            <div></div>
                            <div><br />
                                <div ></div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <h5 class="fw-bold text-1000 text-truncate">
                        {{ $product->product_name }}
                    </h5>
                    <span class="badge bg-soft-danger py-2 px-3">
                        <span class="fs-1 text-danger">{{ $product->product_price }}</span></span>
                    </div><a class="stretched-link" href="#"></a>
                    </div>
                </div>
            @endforeach


            {{-- <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
              <div class="card card-span h-100">
                <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="{{ asset('frontend/assets/img/gallery/discount-item-2.png ') }}" alt="..." />
                  <div class="card-actions">

                      <div class="d-flex flex-between-center">
                        <div></div>
                        <div><br />
                          <div></div>
                        </div>
                      </div>

                  </div>
                </div>
                <div class="card-body px-0">
                  <h5 class="fw-bold text-1000 text-truncate">ข้าวหน้าไก่</h5><span class="badge bg-soft-danger py-2 px-3"><span class="fs-1 text-danger">6 days Remaining</span></span>
                </div><a class="stretched-link" href="#"></a>
              </div>
            </div> --}}

            {{-- <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
              <div class="card card-span h-100">
                <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="{{ asset('frontend/assets/img/gallery/discount-item-3.png ') }}" alt="..." />
                  <div class="card-actions">

                      <div class="d-flex flex-between-center">
                        <div></div>
                        <div><br />
                          <div></div>
                        </div>
                      </div>

                  </div>
                </div>
                <div class="card-body px-0">
                  <h5 class="fw-bold text-1000 text-truncate">ซาลาเปา</h5><span class="badge bg-soft-danger py-2 px-3"><span class="fs-1 text-danger">6 days Remaining</span></span>
                </div><a class="stretched-link" href="#"></a>
              </div>
            </div> --}}

            {{-- <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
              <div class="card card-span h-100">
                <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="{{ asset('frontend/assets/img/gallery/discount-item-4.png') }}" alt="..." />
                  <div class="card-actions">

                      <div class="d-flex flex-between-center">
                        <div></div>
                        <div><br />
                          <div></div>
                        </div>
                      </div>

                  </div>
                </div>
                <div class="card-body px-0">
                  <h5 class="fw-bold text-1000 text-truncate">กระหรี่ปั๊บ</h5><span class="badge bg-soft-danger py-2 px-3"><span class="fs-1 text-danger">6 days Remaining</span></span>
                </div><a class="stretched-link" href="#"></a>
              </div>
            </div>

          </div>
        </div><!-- end of .container-->

      </section>

@endsection --}}

<section class="py-0">

    <div class="container">
       <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
          <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">สินค้าขายดี</h5>
        </div>
      <div class="row h-100 gx-2 mt-7">
        <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
          <div class="card card-span h-100">
            <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="{{ asset('frontend/assets/img/gallery/12539.jpg') }}" alt="..." />
              <div class="card-actions">
                <div class="p-4">
                  <div class="d-flex flex-between-center">
                    <div><br/>
                      <div class="fw-normal fs-1 mt-2"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0">
              <h5 class="fw-bold text-1000 text-truncate">กระปิเสวย</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
          <div class="card card-span h-100">
            <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="{{ asset('frontend/assets/img/gallery/12521.jpg') }}" alt="..." />
              <div class="card-actions">
                <div class="p-4">
                  <div class="d-flex flex-between-center">
                    <div class="d-block text-white fs-2"><br/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0">
              <h5 class="fw-bold text-1000 text-truncate">กะหรี่ปั๊บ</h5><span class="badge bg-soft-danger py-2 px-3"></span>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
          <div class="card card-span h-100">
            <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="{{ asset('frontend/assets/img/gallery/12505.jpg') }}" alt="..." />
              <div class="card-actions">
                <div class="p-4">
                  <div class="d-flex flex-between-center">
                    <div class="d-block text-white fs-2"><br/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0">
              <h5 class="fw-bold text-1000 text-truncate">ขนมจีบ</h5><span class="badge bg-soft-danger py-2 px-3"></span>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
          <div class="card card-span h-100">
            <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="{{ asset('frontend/assets/img/gallery/0220.jpg') }}" alt="..." />
              <div class="card-actions">
                <div class="p-4">
                  <div class="d-flex flex-between-center">
                    <div class="d-block text-white fs-2"><br />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0">
              <h5 class="fw-bold text-1000 text-truncate">กากหมูกระปุก</h5><span class="badge bg-soft-danger py-2 px-3"></span>
            </div>
          </div>
        </div>
      </div>
    </div><!-- end of .container-->

  </section>

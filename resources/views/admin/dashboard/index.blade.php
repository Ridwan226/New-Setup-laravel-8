@extends('admin.templates.index')

@section('content')


<div class="container-fluid">

  <div class="row">
      <div class="col-sm-12">
          <div class="page-title-box">
              <div class="row align-items-center">
                  <div class="col-md-8">
                      <h4 class="page-title m-0">Dashboard</h4>
                  </div>
                  <div class="col-md-4 pull-right">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">DASHBOARD</a></li>
                        {{-- <li class="breadcrumb-item active" aria-current="page">Data</li> --}}
                      </ol>
                  </div>
                  <!-- end col -->
              </div>
              <!-- end row -->
          </div>
          <!-- end page-title-box -->
      </div>
  </div> 
  <!-- end page title -->

  <div class="row">
      <div class="col-xl-3 col-md-6">
          <div class="card bg-primary mini-stat">
              <div class="p-3 mini-stat-desc">
                  <div class="clearfix">
                      <h6 class="text-uppercase mt-0 float-left text-white-50">Orders</h6>
                      <h4 class="mb-3 mt-0 float-right">1,587</h4>
                  </div>
                  <div>
                      <span class="badge badge-light text-info"> +11% </span> <span class="ml-2">From previous period</span>
                  </div>
                  
              </div>
              <div class="p-3">
                  <div class="float-right">
                      <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                  </div>
                  <p class="font-14 m-0">Last : 1447</p>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6">
          <div class="card bg-info mini-stat">
              <div class="p-3 mini-stat-desc">
                  <div class="clearfix">
                      <h6 class="text-uppercase mt-0 float-left text-white-50">Revenue</h6>
                      <h4 class="mb-3 mt-0 float-right">$46,785</h4>
                  </div>
                  <div>
                      <span class="badge badge-light text-danger"> -29% </span> <span class="ml-2">From previous period</span>
                  </div>
              </div>
              <div class="p-3">
                  <div class="float-right">
                      <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                  </div>
                  <p class="font-14 m-0">Last : $47,596</p>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-md-6">
          <div class="card bg-pink mini-stat">
              <div class="p-3 mini-stat-desc">
                  <div class="clearfix">
                      <h6 class="text-uppercase mt-0 float-left text-white-50">Average Price</h6>
                      <h4 class="mb-3 mt-0 float-right">15.9</h4>
                  </div>
                  <div>
                      <span class="badge badge-light text-primary"> 0% </span> <span class="ml-2">From previous period</span>
                  </div>
              </div>
              <div class="p-3">
                  <div class="float-right">
                      <a href="#" class="text-white-50"><i class="mdi mdi-tag-text-outline h5"></i></a>
                  </div>
                  <p class="font-14 m-0">Last : 15.8</p>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6">
          <div class="card bg-success mini-stat">
              <div class="p-3 mini-stat-desc">
                  <div class="clearfix">
                      <h6 class="text-uppercase mt-0 float-left text-white-50">Product Sold</h6>
                      <h4 class="mb-3 mt-0 float-right">1890</h4>
                  </div>
                  <div>
                      <span class="badge badge-light text-info"> +89% </span> <span class="ml-2">From previous period</span>
                  </div>
              </div>
              <div class="p-3">
                  <div class="float-right">
                      <a href="#" class="text-white-50"><i class="mdi mdi-briefcase-check h5"></i></a>
                  </div>
                  <p class="font-14 m-0">Last : 1776</p>
              </div>
          </div>
      </div>
  </div>  
  <!-- end row -->

  {{-- <div class="row">
      <div class="col-xl-9">
          <div class="card">
              <div class="card-body">
                  <h4 class="mt-0 header-title">Sales Report</h4>
                  <div class="row">
                      <div class="col-lg-8">
                          <div id="morris-line-example" class="morris-chart" style="height: 300px"></div>
                      </div>
                      <div class="col-lg-4">
                          <div>
                              <h5 class="font-14 mb-5">Yearly Sales Report</h5>

                              <div>
                                  <h5 class="mb-3">2018 : $19523</h5>
                                  <p class="text-muted mb-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis atque quos dolores et</p>
                                  <a href="#" class="btn btn-primary btn-sm">Read more <i class="mdi mdi-chevron-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3">
          <div class="card">
              <div class="card-body">
                  <h4 class="mt-0 header-title">Sales Analytics</h4>
                  <div id="morris-donut-example" class="morris-chart" style="height: 300px"></div>
              </div>
          </div>
      </div>
  </div> --}}
  <!-- end row -->


</div><!-- container fluid -->
@endsection
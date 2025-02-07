<!doctype html>
<html lang="en" data-bs-theme="semi-dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Honda|Admin</title>
  <!--favicon-->
  <link rel="icon" href="{{asset('assets5/images/logo.png')}}" type="image/png">
  <!-- loader-->
	<link href="{{asset('assets5/css/pace.min.css')}}" rel="stylesheet">
	<script src="{{asset('assets5/js/pace.min.js')}}"></script>

  <!--plugins-->
  <link href="{{asset('assets5/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('assets5/plugins/metismenu/metisMenu.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets5/plugins/metismenu/mm-vertical.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets5/plugins/simplebar/css/simplebar.css')}}">
  <!--bootstrap css-->
  <link href="{{asset('assets5/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <!--main css-->
  <link href="{{asset('assets5/css/bootstrap-extended.css')}}" rel="stylesheet">
  <link href="{{asset('sass/main.css')}}" rel="stylesheet">
  <link href="{{asset('sass/dark-theme.css')}}" rel="stylesheet">
  <link href="{{asset('sass/blue-theme.css')}}" rel="stylesheet">
  <link href="{{asset('sass/semi-dark.css')}}" rel="stylesheet">
  <link href="{{asset('sass/bordered-theme.css')}}" rel="stylesheet">
  <link href="{{asset('sass/responsive.css')}}" rel="stylesheet">

</head>

<body>

  <!--start header-->
  @include('layouts.admin.navbar')
  <!--end top header-->


   <!--start sidebar-->
   @include('layouts.admin.sidebar')
<!--end sidebar-->

  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Prima Mandiri</div>
				</div>
				<!--end breadcrumb-->
     
        <div class="row">
          <div class="col-xxl-8 d-flex align-items-stretch">
            <div class="card w-100 overflow-hidden rounded-4">
              <div class="card-body position-relative p-4">
                <div class="row">
                  <div class="col-12 col-sm-7">
                    <div class="d-flex align-items-center gap-3 mb-5">
                        <img src="{{asset('assets5/images/gallery/logo.png')}}" class="rounded-circle bg-grd-info p-1"  width="60" height="60" alt="">
                      <div class="">
                        <p class="mb-0 fw-semibold">Welcome back</p>
                        <h4 class="fw-semibold mb-0 fs-4 mb-0">Prima Mandiri!</h4>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-5">
                      <div class="">
                        <h4 class="mb-1 fw-semibold d-flex align-content-center">$65.4K<i class="ti ti-arrow-up-right fs-5 lh-base text-success"></i>
                        </h4>
                        <p class="mb-3">Today's Sales</p>
                        <div class="progress mb-0" style="height:5px;">
                          <div class="progress-bar bg-grd-success" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="vr"></div>
                      <div class="">
                        <h4 class="mb-1 fw-semibold d-flex align-content-center">78.4%<i class="ti ti-arrow-up-right fs-5 lh-base text-success"></i>
                        </h4>
                        <p class="mb-3">Growth Rate</p>
                        <div class="progress mb-0" style="height:5px;">
                          <div class="progress-bar bg-grd-danger" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-5">
                    <div class="welcome-back-img pt-4">
                       <img src="{{asset('assets5/images/gallery/service1.png')}}" height="180" alt="">
                    </div>
                  </div>
                </div><!--end row-->
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-xxl-2 d-flex align-items-stretch">
            <div class="card w-100 rounded-4">
              <div class="card-body">
                <div class="d-flex align-items-start justify-content-between mb-1">
                  <div class="">
                    <h5 class="mb-0">42.5K</h5>
                    <p class="mb-0">Active Users</p>
                  </div>
                  <div class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                      data-bs-toggle="dropdown">
                      <span class="material-icons-outlined fs-5">more_vert</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <div class="chart-container2">
                  <div id="chart1"></div>
                </div>
                <div class="text-center">
                  <p class="mb-0 font-12">24K users increased from last month</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-xxl-2 d-flex align-items-stretch">
            <div class="card w-100 rounded-4">
              <div class="card-body">
                <div class="d-flex align-items-start justify-content-between mb-3">
                  <div class="">
                    <h5 class="mb-0">97.4K</h5>
                    <p class="mb-0">Total Users</p>
                  </div>
                  <div class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                      data-bs-toggle="dropdown">
                      <span class="material-icons-outlined fs-5">more_vert</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <div class="chart-container2">
                  <div id="chart2"></div>
                </div>
                <div class="text-center">
                  <p class="mb-0 font-12"><span class="text-success me-1">12.5%</span> from last month</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-xxl-4 d-flex align-items-stretch">
            <div class="card w-100 rounded-4">
              <div class="card-body">
                <div class="text-center">
                  <h6 class="mb-0">Monthly Revenue</h6>
                </div>
                <div class="mt-4" id="chart5"></div>
                <p>Avrage monthly sale for every author</p>
                <div class="d-flex align-items-center gap-3 mt-4">
                  <div class="">
                    <h1 class="mb-0 text-primary">68.9%</h1>
                  </div>
                  <div class="d-flex align-items-center align-self-end">
                    <p class="mb-0 text-success">34.5%</p>
                    <span class="material-icons-outlined text-success">expand_less</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-xxl-4 d-flex align-items-stretch">
            <div class="card w-100 rounded-4">
              <div class="card-body">
                <div class="d-flex flex-column gap-3">
                  <div class="d-flex align-items-start justify-content-between">
                    <div class="">
                      <h5 class="mb-0">Device Type</h5>
                    </div>
                    <div class="dropdown">
                      <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                        data-bs-toggle="dropdown">
                        <span class="material-icons-outlined fs-5">more_vert</span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="position-relative">
                    <div class="piechart-legend">
                      <h2 class="mb-1">68%</h2>
                      <h6 class="mb-0">Total Views</h6>
                    </div>
                    <div id="chart6"></div>
                  </div>
                  <div class="d-flex flex-column gap-3">
                    <div class="d-flex align-items-center justify-content-between">
                      <p class="mb-0 d-flex align-items-center gap-2 w-25"><span
                          class="material-icons-outlined fs-6 text-primary">desktop_windows</span>Desktop</p>
                      <div class="">
                        <p class="mb-0">35%</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <p class="mb-0 d-flex align-items-center gap-2 w-25"><span
                          class="material-icons-outlined fs-6 text-danger">tablet_mac</span>Tablet</p>
                      <div class="">
                        <p class="mb-0">48%</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <p class="mb-0 d-flex align-items-center gap-2 w-25"><span
                          class="material-icons-outlined fs-6 text-success">phone_android</span>Mobile</p>
                      <div class="">
                        <p class="mb-0">27%</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-4">
            <div class="row">
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="card w-100 rounded-4">
                  <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-1">
                      <div class="">
                        <h5 class="mb-0">82.7K</h5>
                        <p class="mb-0">Total Clicks</p>
                      </div>
                      <div class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                          data-bs-toggle="dropdown">
                          <span class="material-icons-outlined fs-5">more_vert</span>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                          <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                          <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="chart-container2">
                      <div id="chart3"></div>
                    </div>
                    <div class="text-center">
                      <p class="mb-0 font-12"><span class="text-success me-1">12.5%</span> from last month</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-stretch">
                <div class="card w-100 rounded-4">
                  <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-1">
                      <div class="">
                        <h5 class="mb-0">68.4K</h5>
                        <p class="mb-0">Total Views</p>
                      </div>
                      <div class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                          data-bs-toggle="dropdown">
                          <span class="material-icons-outlined fs-5">more_vert</span>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                          <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                          <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="chart-container2">
                      <div id="chart4"></div>
                    </div>
                    <div class="text-center">
                      <p class="mb-0 font-12">35K users increased from last month</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card rounded-4">
              <div class="card-body">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="">
                    <h3 class="mb-0">85,247</h3>
                  </div>
                  <div class="flex-grow-0">
                    <p
                      class="dash-lable d-flex align-items-center gap-1 rounded mb-0 bg-success text-success bg-opacity-10">
                      <span class="material-icons-outlined fs-6">arrow_downward</span>23.7%
                    </p>
                  </div>
                </div>
                <p class="mb-0">Total Accounts</p>
                <div id="chart7"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-xxl-4 d-flex align-items-stretch">
            <div class="card w-100 rounded-4">
              <div class="card-body">
                <div class="d-flex align-items-start justify-content-between mb-3">
                  <div class="">
                    <h6 class="mb-0 fw-bold">Campaign Stats</h6>
                  </div>
                  <div class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                      <span class="material-icons-outlined fs-5">more_vert</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                 </div>

                  <ul class="list-group list-group-flush">
                      <li class="list-group-item px-0 bg-transparent">
                        <div class="d-flex align-items-center gap-3">
                          <div class="wh-42 d-flex align-items-center justify-content-center rounded-3 bg-grd-primary">
                            <span class="material-icons-outlined text-white">calendar_today</span>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">Campaigns</h6>
                          </div>
                          <div class="d-flex align-items-center gap-3">
                            <p class="mb-0">54</p>
                            <p class="mb-0 fw-bold text-success">28%</p>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item px-0 bg-transparent">
                        <div class="d-flex align-items-center gap-3">
                          <div class="wh-42 d-flex align-items-center justify-content-center rounded-3 bg-grd-success">
                            <span class="material-icons-outlined text-white">email</span>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">Emailed</h6>
                          </div>
                          <div class="d-flex align-items-center gap-3">
                            <p class="mb-0">245</p>
                            <p class="mb-0 fw-bold text-danger">15%</p>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item px-0 bg-transparent">
                        <div class="d-flex align-items-center gap-3">
                          <div class="wh-42 d-flex align-items-center justify-content-center rounded-3 bg-grd-branding">
                            <span class="material-icons-outlined text-white">open_in_new</span>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">Opened</h6>
                          </div>
                          <div class="d-flex align-items-center gap-3">
                            <p class="mb-0">54</p>
                            <p class="mb-0 fw-bold text-success">30.5%</p>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item px-0 bg-transparent">
                        <div class="d-flex align-items-center gap-3">
                          <div class="wh-42 d-flex align-items-center justify-content-center rounded-3 bg-grd-warning">
                            <span class="material-icons-outlined text-white">ads_click</span>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">Clicked</h6>
                          </div>
                          <div class="d-flex align-items-center gap-3">
                            <p class="mb-0">859</p>
                            <p class="mb-0 fw-bold text-danger">34.6%</p>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item px-0 bg-transparent">
                        <div class="d-flex align-items-center gap-3">
                          <div class="wh-42 d-flex align-items-center justify-content-center rounded-3 bg-grd-info">
                            <span class="material-icons-outlined text-white">subscriptions</span>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">Subscribed</h6>
                          </div>
                          <div class="d-flex align-items-center gap-3">
                            <p class="mb-0">24,758</p>
                            <p class="mb-0 fw-bold text-success">53%</p>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item px-0 bg-transparent">
                        <div class="d-flex align-items-center gap-3">
                          <div class="wh-42 d-flex align-items-center justify-content-center rounded-3 bg-grd-danger">
                            <span class="material-icons-outlined text-white">inbox</span>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">Spam Message</h6>
                          </div>
                          <div class="d-flex align-items-center gap-3">
                            <p class="mb-0">548</p>
                            <p class="mb-0 fw-bold text-danger">47%</p>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item px-0 bg-transparent">
                        <div class="d-flex align-items-center gap-3">
                          <div class="wh-42 d-flex align-items-center justify-content-center rounded-3 bg-grd-deep-blue">
                            <span class="material-icons-outlined text-white">visibility</span>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">Views Mails</h6>
                          </div>
                          <div class="d-flex align-items-center gap-3">
                            <p class="mb-0">9845</p>
                            <p class="mb-0 fw-bold text-success">68%</p>
                          </div>
                        </div>
                      </li>
                  </ul>

              </div>
            </div>
          </div>
          <div class="col-xl-6 col-xxl-4 d-flex align-items-stretch">
            <div class="card w-100 rounded-4">
              <div class="card-body">
                <div id="chart8"></div>
                <div class="d-flex align-items-center gap-3 mt-4">
                  <div class="">
                    <h1 class="mb-0">36.7%</h1>
                  </div>
                  <div class="d-flex align-items-center align-self-end gap-2">
                    <span class="material-icons-outlined text-success">trending_up</span>
                    <p class="mb-0 text-success">34.5%</p>
                  </div>
                </div>
                <p class="mb-4">Visitors Growth</p>
                <div class="d-flex flex-column gap-3">
                  <div class="">
                    <p class="mb-1">Cliks <span class="float-end">2589</span></p>
                    <div class="progress" style="height: 5px;">
                      <div class="progress-bar bg-grd-primary" style="width: 65%"></div>
                    </div>
                  </div>
                  <div class="">
                    <p class="mb-1">Likes <span class="float-end">6748</span></p>
                    <div class="progress" style="height: 5px;">
                      <div class="progress-bar bg-grd-warning" style="width: 55%"></div>
                    </div>
                  </div>
                  <div class="">
                    <p class="mb-1">Upvotes <span class="float-end">9842</span></p>
                    <div class="progress" style="height: 5px;">
                      <div class="progress-bar bg-grd-info" style="width: 45%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-xxl-4 d-flex align-items-stretch">
            <div class="card w-100 rounded-4">
              <div class="card-body">
                <div class="d-flex align-items-start justify-content-between mb-3">
                  <div class="">
                    <h5 class="mb-0 fw-bold">Social Leads</h5>
                  </div>
                  <div class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                      data-bs-toggle="dropdown">
                      <span class="material-icons-outlined fs-5">more_vert</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                 </div>
                <div class="d-flex flex-column justify-content-between gap-4">
                  <div class="d-flex align-items-center gap-4">
                    <div class="d-flex align-items-center gap-3 flex-grow-1">
                      <img src="{{asset('assets5/images/apps/17.png')}}" width="32" alt="">
                      <p class="mb-0">Facebook</p>
                    </div>
                    <div class="">
                      <p class="mb-0 fs-6">55%</p>
                    </div>
                    <div class="">
                      <p class="mb-0 data-attributes">
                        <span
                          data-peity='{ "fill": ["#0d6efd", "rgb(255 255 255 / 10%)"], "innerRadius": 14, "radius": 18 }'>5/7</span>
                      </p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center gap-4">
                    <div class="d-flex align-items-center gap-3 flex-grow-1">
                      <img src="{{asset('assets5/images/apps/18.png')}}" width="32" alt="">
                      <p class="mb-0">LinkedIn</p>
                    </div>
                    <div class="">
                      <p class="mb-0 fs-6">67%</p>
                    </div>
                    <div class="">
                      <p class="mb-0 data-attributes">
                        <span
                          data-peity='{ "fill": ["#fc185a", "rgb(255 255 255 / 10%)"], "innerRadius": 14, "radius": 18 }'>5/7</span>
                      </p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center gap-4">
                    <div class="d-flex align-items-center gap-3 flex-grow-1">
                      <img src="{{asset('assets5/images/apps/19.png')}}" width="32" alt="">
                      <p class="mb-0">Instagram</p>
                    </div>
                    <div class="">
                      <p class="mb-0 fs-6">78%</p>
                    </div>
                    <div class="">
                      <p class="mb-0 data-attributes">
                        <span
                          data-peity='{ "fill": ["#02c27a", "rgb(255 255 255 / 10%)"], "innerRadius": 14, "radius": 18 }'>5/7</span>
                      </p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center gap-4">
                    <div class="d-flex align-items-center gap-3 flex-grow-1">
                      <img src="{{asset('assets5/images/apps/20.png')}}" width="32" alt="">
                      <p class="mb-0">Snapchat</p>
                    </div>
                    <div class="">
                      <p class="mb-0 fs-6">46%</p>
                    </div>
                    <div class="">
                      <p class="mb-0 data-attributes">
                        <span
                          data-peity='{ "fill": ["#fd7e14", "rgb(255 255 255 / 10%)"], "innerRadius": 14, "radius": 18 }'>5/7</span>
                      </p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center gap-4">
                    <div class="d-flex align-items-center gap-3 flex-grow-1">
                      <img src="{{asset('assets5/images/apps/05.png')}}" width="32" alt="">
                      <p class="mb-0">Google</p>
                    </div>
                    <div class="">
                      <p class="mb-0 fs-6">38%</p>
                    </div>
                    <div class="">
                      <p class="mb-0 data-attributes">
                        <span
                          data-peity='{ "fill": ["#0dcaf0", "rgb(255 255 255 / 10%)"], "innerRadius": 14, "radius": 18 }'>5/7</span>
                      </p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center gap-4">
                    <div class="d-flex align-items-center gap-3 flex-grow-1">
                      <img src="{{asset('assets5/images/apps/08.png')}}" width="32" alt="">
                      <p class="mb-0">Altaba</p>
                    </div>
                    <div class="">
                      <p class="mb-0 fs-6">15%</p>
                    </div>
                    <div class="">
                      <p class="mb-0 data-attributes">
                        <span
                          data-peity='{ "fill": ["#6f42c1", "rgb(255 255 255 / 10%)"], "innerRadius": 14, "radius": 18 }'>5/7</span>
                      </p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center gap-4">
                    <div class="d-flex align-items-center gap-3 flex-grow-1">
                      <img src="{{asset('assets5/images/apps/07.png')}}" width="32" alt="">
                      <p class="mb-0">Spotify</p>
                    </div>
                    <div class="">
                      <p class="mb-0 fs-6">12%</p>
                    </div>
                    <div class="">
                      <p class="mb-0 data-attributes">
                        <span
                          data-peity='{ "fill": ["#ff00b3", "rgb(255 255 255 / 10%)"], "innerRadius": 14, "radius": 18 }'>5/7</span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
          </div>
          <div class="col-xl-6 col-xxl-4 d-flex align-items-stretch">
            <div class="card w-100 rounded-4">
              <div class="card-header border-0 p-3 border-bottom">
                <div class="d-flex align-items-start justify-content-between">
                  <div class="">
                    <h5 class="mb-0">New Users</h5>
                  </div>
                  <div class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                      <span class="material-icons-outlined fs-5">more_vert</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="user-list p-3">
                  <div class="d-flex flex-column gap-3">
                    <div class="d-flex align-items-center gap-3">
                      <img src="{{asset('assets5/images/gallery/foto1.jpg')}}" width="45" height="45" class="rounded-circle" alt="">
                      <div class="flex-grow-1">
                        <h6 class="mb-0">Elon Jonado</h6>
                        <p class="mb-0">elon_deo</p>
                      </div>
                      <div class="form-check form-check-inline me-0">
                        <input class="form-check-input ms-0" type="checkbox">
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                      <img src="{{asset('assets5/images/gallery/foto2.png')}}" width="45" height="45" class="rounded-circle" alt="">
                      <div class="flex-grow-1">
                        <h6 class="mb-0">Alexzender Clito</h6>
                        <p class="mb-0">zli_alexzender</p>
                      </div>
                      <div class="form-check form-check-inline me-0">
                        <input class="form-check-input ms-0" type="checkbox">
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                      <img src="{{asset('assets5/images/gallery/foto3.jpeg')}}" width="45" height="45" class="rounded-circle" alt="">
                      <div class="flex-grow-1">
                        <h6 class="mb-0">Michle Tinko</h6>
                        <p class="mb-0">tinko_michle</p>
                      </div>
                      <div class="form-check form-check-inline me-0">
                        <input class="form-check-input ms-0" type="checkbox">
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                      <img src="{{asset('assets5/images/gallery/foto5.png')}}" width="45" height="45" class="rounded-circle" alt="">
                      <div class="flex-grow-1">
                        <h6 class="mb-0">KailWemba</h6>
                        <p class="mb-0">wemba_kl</p>
                      </div>
                      <div class="form-check form-check-inline me-0">
                        <input class="form-check-input ms-0" type="checkbox">
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                      <img src="{{asset('assets5/images/gallery/foto6.png')}}" width="45" height="45" class="rounded-circle" alt="">
                      <div class="flex-grow-1">
                        <h6 class="mb-0">Henhco Tino</h6>
                        <p class="mb-0">Henhco_tino</p>
                      </div>
                      <div class="form-check form-check-inline me-0">
                        <input class="form-check-input ms-0" type="checkbox">
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                      <img src="{{asset('assets5/images/gallery/foto7.jpeg')}}" width="45" height="45" class="rounded-circle" alt="">
                      <div class="flex-grow-1">
                        <h6 class="mb-0">Gonjiko Fernando</h6>
                        <p class="mb-0">gonjiko_fernando</p>
                      </div>
                      <div class="form-check form-check-inline me-0">
                        <input class="form-check-input ms-0" type="checkbox">
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                      <img src="{{asset('assets5/images/gallery/foto8.png')}}" width="45" height="45" class="rounded-circle" alt="">
                      <div class="flex-grow-1">
                        <h6 class="mb-0">Specer Kilo</h6>
                        <p class="mb-0">specer_kilo</p>
                      </div>
                      <div class="form-check form-check-inline me-0">
                        <input class="form-check-input ms-0" type="checkbox">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent p-3">
                <div class="d-flex align-items-center justify-content-between gap-3">
                  <a href="javascript:;" class="sharelink"><i class="material-icons-outlined">share</i></a>
                  <a href="javascript:;" class="sharelink"><i class="material-icons-outlined">textsms</i></a>
                  <a href="javascript:;" class="sharelink"><i class="material-icons-outlined">email</i></a>
                  <a href="javascript:;" class="sharelink"><i class="material-icons-outlined">attach_file</i></a>
                  <a href="javascript:;" class="sharelink"><i class="material-icons-outlined">event</i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-xxl-8 d-flex align-items-stretch">
            <div class="card w-100 rounded-4">
              <div class="card-body">
               <div class="d-flex align-items-start justify-content-between mb-3">
                  <div class="">
                    <h5 class="mb-0">Recent Orders</h5>
                  </div>
                  <div class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                      data-bs-toggle="dropdown">
                      <span class="material-icons-outlined fs-5">more_vert</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <div class="order-search position-relative my-3">
                  <input class="form-control rounded-5 px-5" type="text" placeholder="Search">
                  <span class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50">search</span>
                </div>
                 <div class="table-responsive">
                     <table class="table align-middle">
                       <thead>
                        <tr>
                          <th>Item Name</th>
                          <th>Amount</th>
                          <th>Buyer</th>
                          <th>Status</th>
                          <th>Rating</th>
                        </tr>
                       </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                 <div class="">
                                  <img src="{{asset('assets5/images/gallery/Piston Kit HGP.png')}}" class="rounded-circle" width="50" height="50" alt="">
                                 </div>
                                 <p class="mb-0">Piston Kit HGP</p>
                              </div>
                            </td>
                            <td>Rp. 173.000,-</td>
                            <td>Firman Hermansyah</td>
                            <td><p class="dash-lable mb-0 bg-success bg-opacity-10 text-success rounded-2">Completed</p></td>
                            <td>
                              <div class="d-flex align-items-center gap-1">
                                <p class="mb-0">5.0</p>
                                <i class="material-icons-outlined text-warning fs-6">star</i>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                 <div class="">
                                  <img src="{{asset('assets5/images/gallery/Disk Cluctch Friction.png')}}" class="rounded-circle" width="50" height="50" alt="">
                                 </div>
                                 <p class="mb-0">Disk Cluctch Friction</p>
                              </div>
                            </td>
                            <td>Rp. 82.500,-</td>
                            <td>Tuti Lestari</td>
                            <td><p class="dash-lable mb-0 bg-success bg-opacity-10 text-success rounded-2">Completed</p></td>
                            <td>
                              <div class="d-flex align-items-center gap-1">
                                <p class="mb-0">5.0</p>
                                <i class="material-icons-outlined text-warning fs-6">star</i>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                 <div class="">
                                  <img src="{{asset('assets5/images/gallery/Gearset HGP.png')}}" class="rounded-circle" width="50" height="50" alt="">
                                 </div>
                                 <p class="mb-0">Gearset HGP</p>
                              </div>
                            </td>
                            <td>Rp. 193.500,-</td>
                            <td>Abang Nando Pratama</td>
                            <td><p class="dash-lable mb-0 bg-warning bg-opacity-10 text-warning rounded-2">Pending</p></td>
                            <td>
                              <div class="d-flex align-items-center gap-1">
                                <p class="mb-0">4.0</p>
                                <i class="material-icons-outlined text-warning fs-6">star</i>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                 <div class="">
                                  <img src="{{asset('assets5/images/gallery/Aki HGP.png')}}" class="rounded-circle" width="50" height="50" alt="">
                                 </div>
                                 <p class="mb-0">Aki HGP</p>
                              </div>
                            </td>
                            <td>Rp. 302.000,-</td>
                            <td>Akmal Firdaus</td>
                            <td><p class="dash-lable mb-0 bg-success bg-opacity-10 text-success rounded-2">Completed</p></td>
                            <td>
                              <div class="d-flex align-items-center gap-1">
                                <p class="mb-0">3.0</p>
                                <i class="material-icons-outlined text-warning fs-6">star</i>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                 <div class="">
                                  <img src="{{asset('assets5/images/gallery/BAN.png')}}" class="rounded-circle" width="50" height="50" alt="">
                                 </div>
                                 <p class="mb-0">BAN</p>
                              </div>
                            </td>
                            <td>Rp. 412.000,-</td>
                            <td>Jaenal Nurdiyansyah</td>
                            <td><p class="dash-lable mb-0 bg-danger bg-opacity-10 text-danger rounded-2">Canceled</p></td>
                            <td>
                              <div class="d-flex align-items-center gap-1">
                                <p class="mb-0">2.0</p>
                                <i class="material-icons-outlined text-warning fs-6">star</i>
                              </div>
                            </td>
                          </tr>

                        </tbody>
                     </table>
                 </div>
              </div>
            </div>
          </div>
        </div>



    </div>
  </main>
  <!--end main wrapper-->

  <!--start overlay-->
     <div class="overlay btn-toggle"></div>
  <!--end overlay-->

   <!--start footer-->
   @include('layouts.admin.footer')
  <!--end footer-->

  <!--start cart-->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart">
    <div class="offcanvas-header border-bottom h-70">
      <h5 class="mb-0" id="offcanvasRightLabel">8 New Orders</h5>
      <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
        <i class="material-icons-outlined">close</i>
      </a>
    </div>
    <div class="offcanvas-body p-0">
      <div class="order-list">
        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="https://placehold.co/200x150/png')}" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">White Men Shoes</h5>
            <p class="mb-0 order-price">$289</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="https://placehold.co/200x150/png')}" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Red Airpods</h5>
            <p class="mb-0 order-price">$149</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="https://placehold.co/200x150/png')}" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Men Polo Tshirt</h5>
            <p class="mb-0 order-price">$139</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="https://placehold.co/200x150/png')}" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Blue Jeans Casual</h5>
            <p class="mb-0 order-price">$485</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="https://placehold.co/200x150/png')}" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Fancy Shirts</h5>
            <p class="mb-0 order-price">$758</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="https://placehold.co/200x150/png')}" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Home Sofa Set </h5>
            <p class="mb-0 order-price">$546</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="https://placehold.co/200x150/png')}" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Black iPhone</h5>
            <p class="mb-0 order-price">$1049</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="https://placehold.co/200x150/png')}" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Goldan Watch</h5>
            <p class="mb-0 order-price">$689</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>
      </div>
    </div>
    <div class="offcanvas-footer h-70 p-3 border-top">
      <div class="d-grid">
        <button type="button" class="btn btn-grd btn-grd-primary" data-bs-dismiss="offcanvas">View Products</button>
      </div>
    </div>
  </div>
  <!--end cart-->
  
  <!--start switcher-->
  <button class="btn btn-grd btn-grd-primary position-fixed bottom-0 end-0 m-3 d-flex align-items-center gap-2" id="custom-bg"
        type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop">
        <i class="material-icons-outlined">tune</i>Customize
    </button>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="staticBackdrop">
        <div class="offcanvas-header border-bottom h-70">
            <div class="">
                <h5 class="mb-0">Theme Customizer</h5>
                <p class="mb-0">Customize your theme</p>
            </div>
            <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
                <i class="material-icons-outlined">close</i>
            </a>
        </div>
        <div class="offcanvas-body">
            <div>
                <p>Theme variation</p>

                <div class="row g-3">
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="BlueTheme" checked>
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="BlueTheme">
                            <span class="material-icons-outlined">contactless</span>
                            <span>Blue</span>
                        </label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="LightTheme">
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="LightTheme">
                            <span class="material-icons-outlined">light_mode</span>
                            <span>Light</span>
                        </label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="DarkTheme">
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="DarkTheme">
                            <span class="material-icons-outlined">dark_mode</span>
                            <span>Dark</span>
                        </label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="SemiDarkTheme">
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="SemiDarkTheme">
                            <span class="material-icons-outlined">contrast</span>
                            <span>Semi Dark</span>
                        </label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="BoderedTheme">
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="BoderedTheme">
                            <span class="material-icons-outlined">border_style</span>
                            <span>Bordered</span>
                        </label>
                    </div>
                </div>
                <!--end row-->

            </div>
        </div>
    </div>
    <!-- end switcher -->

  <!--bootstrap js-->
  <script src="{{asset('assets5/js/bootstrap.bundle.min.js')}}"></script>

  <!--plugins-->
  <script src="{{asset('assets5/js/jquery.min.js')}}"></script>
  <!--plugins-->
  <script src="{{asset('assets5/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  <script src="{{asset('assets5/plugins/metismenu/metisMenu.min.js')}}"></script>
  <script src="{{asset('assets5/plugins/apexchart/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets5/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{asset('assets5/plugins/peity/jquery.peity.min.js')}}"></script>
  <script>
    $(".data-attributes span").peity("donut")
  </script>
  <script src="{{asset('assets5/js/main.js')}}"></script>
  <script src="{{asset('assets5/js/dashboard1.js')}}"></script>
  <script>
	   new PerfectScrollbar(".user-list")
  </script>

</body>

</html>

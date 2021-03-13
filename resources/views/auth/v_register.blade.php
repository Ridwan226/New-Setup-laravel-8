<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Register | Antri</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ asset('member/assets/images/favicon.ico') }}">

        <link href="{{ asset('member/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('member/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('member/assets/css/style.css') }}" rel="stylesheet" type="text/css">


    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div class="home-btn d-none d-sm-block">
            <a href="index.html" class="text-dark"><i class="mdi mdi-home h1"></i></a>
        </div>

        <div class="account-pages">
            

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div>
                            <div >
                                <a href="index.html" class="logo logo-admin"><img src="{{ asset('member/assets/images/logo.png') }}" height="28" alt="logo"></a>
                            </div>
                            @if ($errors->any())
                            @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                              <strong>Oh snap!</strong> {{ $error }}
                            </div>
                            @endforeach
                            @endif
                            <h5 class="font-14 text-muted mb-4">Responsive Bootstrap 4 Admin Dashboard</h5>
                            <p class="text-muted mb-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>

                            <h5 class="font-14 text-muted mb-4">Terms :</h5>
                            <div>
                                <p><i class="mdi mdi-arrow-right text-primary mr-2"></i>At solmen va esser necessi far uniform paroles.</p>
                                <p><i class="mdi mdi-arrow-right text-primary mr-2"></i>Donec sapien ut libero venenatis faucibus.</p>
                                <p><i class="mdi mdi-arrow-right text-primary mr-2"></i>Nemo enim ipsam voluptatem quia voluptas sit .</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="p-2">
                                    <h4 class="text-muted float-right font-18 mt-4">Register</h4>
                                    <div>
                                        <a href="index.html" class="logo logo-admin"><img src="{{ asset('member/assets/images/logo.png')}}" height="28" alt="logo"></a>
                                    </div>
                                </div>
        
                                <div class="p-2">
                                    <form method="POST" action="{{ route('register') }}">
                                      @csrf
                                      
                                      <div class="form-group row">
                                        <div class="col-12">
                                            <input class="form-control @error('name') is-invalid @enderror" type="text" required="" placeholder="Name Outlet"  name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                        </div>
                                   
                                      </div>
        
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" type="email" required="" placeholder="Email"  autocomplete="email" >
                                            </div>
                                        </div>
            
            
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control @error('password') is-invalid @enderror" type="password" required="" placeholder="Password" name="password" autocomplete="new-password" >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                          <div class="col-12">
                                              <input class="form-control" type="password" required="" placeholder="Password"  name="password_confirmation" required autocomplete="new-password" >
                                          </div>
                                        </div>
                                      
            
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label font-weight-normal" for="customCheck1">I accept <a href="#" class="text-primary">Terms and Conditions</a></label>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="form-group text-center row m-t-20">
                                            <div class="col-12">
                                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button>
                                            </div>
                                        </div>
                                      </form>
            
                                        <div class="form-group m-t-10 mb-0 row">
                                            <div class="col-12 m-t-20 text-center">
                                                <a href="{{ url('/login') }}" class="text-muted">Already have account?</a>
                                            </div>
                                        </div>

                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>


              <!-- jQuery  -->
              <script src="{{ asset('member/assets/js/jquery.min.js') }}"></script>
              <script src="{{ asset('member/assets/js/bootstrap.bundle.min.js') }}"></script>
              <script src="{{ asset('member/assets/js/modernizr.min.js') }}"></script>
              <script src="{{ asset('member/assets/js/detect.js') }}"></script>
              <script src="{{ asset('member/assets/js/fastclick.js') }}"></script>
              <script src="{{ asset('member/assets/js/jquery.slimscroll.js') }}"></script>
              <script src="{{ asset('member/assets/js/jquery.blockUI.js') }}"></script>
              <script src="{{ asset('member/assets/js/waves.js') }}"></script>
              <script src="{{ asset('member/assets/js/jquery.nicescroll.js') }}"></script>
              <script src="{{ asset('member/assets/js/jquery.scrollTo.min.js') }}"></script>
      
              <!-- App js -->
              <script src="{{ asset('member/assets/js/app.js') }}"></script>

    </body>
</html>
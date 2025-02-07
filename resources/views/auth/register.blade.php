<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Company Profile Bengkel Motor</title>
  <!--favicon-->
	<link rel="icon" href="assets5/images/gallery/logo.png" type="image/png">
  <style>
    body {
        background: linear-gradient(135deg, #ffffff, #f1f1f1); /* Light to lighter white gradient */
        color: #333; /* Dark text for better contrast on light background */
    }
    .container {
        margin-top: 50px;
    }
    .card {
        background: rgba(255, 255, 255, 0.9); /* White card with slight transparency */
        border: none;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .btn-white {
        background-color: #ffffff; /* White button */
        border-color: #cccccc; /* Light border color for contrast */
        color: #333; /* Dark text color */
    }
    .btn-white:hover {
        background-color: #f1f1f1; /* Lighter white on hover */
        border-color: #cccccc;
    }
</style>

  <!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet">
	<script src="assets/js/pace.min.js"></script>

  <!--plugins-->
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/metisMenu.min.css">
  <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/mm-vertical.css">
  <!--bootstrap css-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <!--main css-->
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="sass/main.css" rel="stylesheet">
  <link href="sass/dark-theme.css" rel="stylesheet">
  <link href="sass/blue-theme.css" rel="stylesheet">
  <link href="sass/responsive.css" rel="stylesheet">

  </head>

<body>


  <!--authentication-->

  <div class="section-authentication-cover">
    <div class="">
      <div class="row g-0">

        <div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex border-end bg-transparent">

          <div class="card rounded-0 mb-0 border-0 shadow-none bg-transparent bg-none">
            <div class="card-body">
            <img src="{{asset('assets5/images/gallery/register2.png')}}" class="img-fluid auth-img-cover-login" width="800"
                alt="">
            </div>
          </div>

        </div>

        <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
          <div class="card rounded-0 m-3 border-0 shadow-none bg-none">
            <div class="card-body p-sm-5">
            <center><img src="{{asset('assets5/images/gallery/Honda.png')}}" class="mb-4" width="145" alt=""></center>
              <h4 class="fw-bold">Welcome to Prima Mandiri</h4>
              <p class="mb-0">Please enter your identity to register your account</p>

              <div class="row g-3 my-4">
                <div class="col-12 col-lg-6">
                  <button class="btn btn-filter py-2 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img src="assets/images/apps/05.png" width="20" class="me-2" alt="">Google</button>
                </div>
                <div class="col col-lg-6">
                  <button class="btn btn-filter py-2 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img src="assets/images/apps/17.png" width="20" class="me-2" alt="">Facebook</button>
                </div>
              </div>

              <div class="separator section-padding">
                <div class="line"></div>
                <p class="mb-0 fw-bold">OR</p>
                <div class="line"></div>
              </div>

              <div class="form-body mt-4">
                <form class="row g-3" action="{{route('register')}}" method="POST">
                  @csrf
                  <div class="col-12">
                    <label for="inputUsername" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="inputUsername" placeholder="Name">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror

                  </div>
                  <div class="col-12">
                    <label for="inputEmailAddress" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="inputEmailAddress" placeholder="Enter your account">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror

                  </div>
                  <div class="col-12">
                    <label for="inputChoosePassword" class="form-label">Password</label>
                    <div class="input-group" id="show_hide_password">
                      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="inputChoosePassword"  placeholder="Enter password" required autocomplete="new-password">
                      @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        
                      @enderror
                       <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="inputChoosePassword" class="form-label">Confirm Password</label>
                    <div class="input-group" id="show_hide_password">
                      <input type="password" name="password_confirmation" class="form-control" id="inputChoosePassword"  placeholder="Enter Password" required autocomplete="new-password">
                       <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                      <label class="form-check-label" for="flexSwitchCheckChecked">I read and 
                        agree to Terms &amp; Conditions</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button type="submit" class="btn btn-success">Register</button>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="text-start">
                      <p class="mb-0">Already have an account? <a href="{{url('login')}}">Sign in here</a></p>
                    </div>
                  </div>
                </form>
              </div>

          </div>
          </div>
        </div>

      </div>
      <!--end row-->
    </div>
  </div>

  <!--authentication-->




  <!--plugins-->
  <script src="assets/js/jquery.min.js"></script>

  <script>
    $(document).ready(function () {
      $("#show_hide_password a").on('click', function (event) {
        event.preventDefault();
        if ($('#show_hide_password input').attr("type") == "text") {
          $('#show_hide_password input').attr('type', 'password');
          $('#show_hide_password i').addClass("bi-eye-slash-fill");
          $('#show_hide_password i').removeClass("bi-eye-fill");
        } else if ($('#show_hide_password input').attr("type") == "password") {
          $('#show_hide_password input').attr('type', 'text');
          $('#show_hide_password i').removeClass("bi-eye-slash-fill");
          $('#show_hide_password i').addClass("bi-eye-fill");
        }
      });
    });
  </script>

</body>

</html>
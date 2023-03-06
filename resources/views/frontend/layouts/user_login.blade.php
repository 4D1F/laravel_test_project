@extends('base')

<section class="vh-100 gradient-custom">
  @include('flash')
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4">

              <form class="login-container" action="{{route('signin')}}" method="post">
                @csrf
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Please enter your login and password!</p>

                <!-- Error mesasge is shown at the login function inside the controller -->

                <div class="form-outline form-white mb-4">
                  <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" placeholder="Email" />
                </div>
                @error('email')
                <div class="alert alert-danger"> {{$message}} </div>
                @enderror

                <div class="form-outline form-white mb-4">
                  <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" placeholder="Password" />
                </div>
                @error('password')
                <div class="alert alert-danger"> {{$message}} </div>
                @enderror

               

                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
              </form>

            </div>
            <div>
              <p class="mb-0">Don't have an account? <a href="{{route('user_create')}}" class="fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .gradient-custom {
    /* fallback for old browsers */
    background: #6a11cb;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
  }
  button{
    position:relative;
  }
  section{
    position: relative;
  }
</style>
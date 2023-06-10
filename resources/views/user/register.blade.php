<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

 <!-- Bootstrap core CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
 integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
 integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
</script>
    <title>Register</title>

    <style>

        .gradient-custom-3 {
        /* fallback for old browsers */
        background: #84fab0;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
        }
        .gradient-custom-4 {
        /* fallback for old browsers */
        background: #84fab0;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
        }
    </style>
</head>
<body>
    

    <section class="vh-100 bg-image"
    style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Create an account</h2>
  
                <form  action ="/user" method="POST" enctype="multipart/form-data">
                    @csrf
  
                  <div class="form-outline mb-4">
                    <input type="text" name="name" id="form3Example1cg" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example1cg">Your Name</label>

                    @error('name')
                        {{$message}}
                    @enderror
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="email" id="form3Example3cg"  name="email" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example3cg">Your Email</label>
                    @error('email')
                        {{$message}}
                    @enderror
                  </div>

                  <div class="form-outline mb-4">
                    <input type="tel" id="form3Example3cg"  name="phone" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example3cg">Phone number</label>
                    @error('phone')
                        {{$message}}
                    @enderror
                  </div>
                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example3cg"  name="city" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example3cg">City</label>
                    @error('city')
                        {{$message}}
                    @enderror
                  </div>

                  <div class="form-outline mb-4">
                    <input type="file" id="form3Example3cg"  name="avatar" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example3cg">Your image</label>
                    @error('avatar')
                        {{$message}}
                    @enderror
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4cg"  name="password"class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example4cg">Password</label>
                    @error('password')
                        {{$message}}
                    @enderror
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4cdg" name="password_confirmation" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                  </div>
  
                  {{-- <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                    <label class="form-check-label" for="form2Example3g">
                      I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                    </label>
                  </div>
   --}}
                  <div class="d-flex justify-content-center">
                    <button type="submit"
                      class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                  </div>
  
                  <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/login"
                      class="fw-bold text-body"><u>Login here</u></a></p>
  
                </form>
  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





</body>
</html>
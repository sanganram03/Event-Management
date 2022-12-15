<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  @include('logincss')

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="{{url('api/register')}}">Sign Up</a></li>
        <li class="tab"><a href="{{url('api/login')}}">Log In</a></li>
      </ul>

      <div class="tab-content">
        <div id="signup">
          <h1>Sign Up for Free</h1>

          <form action="{{url('api/userregister')}}" method="POST" enctype="multipart/form-user">


            <div class="field-wrap">
                <label>
                  Name<span class="req">*</span>
                </label>
                <input type="name" name="name" required autocomplete="off"/>
              </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Phone No<span class="req">*</span>
            </label>
            <input type="number" name="phone" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              <span class="req">*</span>
            </label>
            <select name="gender" required autocomplete="off">
                <option value="">Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Transgender">Transgender</option>
            </select>
          </div>

          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password"required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Confirm Password<span class="req">*</span>
            </label>
            <input type="password" name="c_password"required autocomplete="off"/>
          </div>

          <button type="submit" class="button button-block"/>Get Started</button>

          </form>

        </div>

        <div id="login">
          <h1>Welcome Back!</h1>

          <form action="/" method="post">

            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>

          <p class="forgot"><a href="#">Forgot Password?</a></p>

          <button class="button button-block"/>Log In</button>

          </form>

        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
<!-- partial -->
 @include('loginscript')
</body>
</html>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SignUp/LogIn | AniDoc</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="signupLogin/signupLoginCSS.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">SignUp</a></li>
        <li class="tab"><a href="#login">LogIn</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>SignUp</h1>
          
          <form method="POST" action="{{ route('register') }}">

          <input id="usertype" type="hidden" name="usertype" value="user">
          
          <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input id="username" type="text" name="username" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Full Name<span class="req">*</span>
            </label>
            <input id="name" type="text" name="name" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Phone<span class="req">*</span>
            </label>
            <input id="phone" type="phone" name="phone" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input id="email" type="email" name="email" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Address<span class="req">*</span>
            </label>
            <input id="address" type="text" name="address" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input id="password" type="password" name="passowrd" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block">SignUp</button>
          <a class="button button-block" href="{{ url('/dashboard') }}">Cancel</a>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>LogIn</h1>
          
          <form action="/" method="">
          
            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input id="username" type="text" name="username" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input id="password" type="password" name="password" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>LogIn</button>
          <a class="button button-block" href="{{ url('/dashboard') }}">Cancel</a>
          
          </form>

        </div>
        
      </div>
      
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="signupLogin/signupLoginJS.js"></script>

</body>
</html>

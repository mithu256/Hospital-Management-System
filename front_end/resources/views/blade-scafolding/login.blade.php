
@extends('blade-scafolding.layout.content')

@section('content')

<!--login form-->
<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/login.jpg');
  }
</style>
<div id="login" class="form" >
   <h3 class="text-center text-white pt-5">Welcome Back!</h3>
        <div class="container">
        
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <p class="forgot"><a href="#">Forgot Password?</a></p>
                                <button class="button button-block"/>Log In</button>
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="/regi" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
</div>

@endsection 
      <!--end login form-->
     
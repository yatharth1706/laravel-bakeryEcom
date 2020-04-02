
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('css/authpage.css')}}">
    <!-- script-->
    
</script>
  </head>
  <body>
  
    <div class="wrapper">

      <div class="first"></div>
      <div class="second"></div>
      <div class="form-box">

        <!--login-->
        <div class="login">
          <button class="login-heading">LOG IN</button>
          <form action="checkLogin" method="post">
             @csrf
             @if($message=Session::get('error'))
             
               <span class="error">{{$message}}</span>
             
             @endif
            <div>
              <label for="">email:</label><span class="error">@error('email'){{$message}}@enderror</span><br />
              <input
                type="email"
                name="email"
                placeholder="please enter your email"
              />
             
            </div>

            <div>
              <label for="">Password:</label><span class="error">@error('password'){{$message}}@enderror</span><br />
              <input
                type="password"
                name="password"
                placeholder="please enter your password"
              />
              
            </div>

            <div class="login-button">
              <button class="btn btn-success btn-block" type="submit">
                LOG IN
              </button>
            </div>
           
          </form>
        </div>

        <div class="switcher">
        <div class="signup-switcher">
            <p>If you don't have any account, please sign up</p>
            <button > <a href="{{url('signup')}}">SIGN UP</a>  </button>
          </div>
            
        </div>
      </div>
    </div>
  </body>
</html>

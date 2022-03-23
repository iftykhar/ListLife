{{-- @extends(theme.header) --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset('bootstrap/css/bootstrap.min.css')}}> {{-- bootstrap 5 CSS used in the link tag  --}}
    <link rel="stylesheet" href="{{asset('bootstrap/js/bootstrap.min.js')}}"> {{-- bootstrap 5 JS used in the link tag --}}
    <title>Users Document</title>
</head>


<body>
  <div class="container">
    <div class="header ">
      <div class="col-4"></div>
      <div class="col-4 " style="margin: 20px">
        <p >Welcome User</p>
      </div>
      <div class="col-4"></div>
    </div>
    <div class="main-body">
      <div class="col-1"></div>
      <div class="col-10 justify-content-between">
        @yield('content')
      </div>
      <div class="col-1"></div>
    </div>
  </div>
</body>
</html>
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset('bootstrap/css/bootstrap.min.css')}}>
    <title>Users Document</title>
</head> --}}
@extends('theme.header')

<body>
    <div class="container">
        <div class="heading">
            <div class="col-3"></div>
            <div class="col-3" style="color: brown">
                <strong><h1>Users Document</h1></strong>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="main">
            <div class="col-2"></div>
            <div class="col-4">
                <table class="table">
                    <thead>
                      ...
                    </thead>
                    <tbody>
                      <tr class="table-active">
                        ...
                      </tr>
                      <tr>
                        ...
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2" class="table-active">Larry the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
                  
            </div>
            <div class="col-2"></div>
        </div>
    </div>
  
</body>
</html>
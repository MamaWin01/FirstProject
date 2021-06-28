<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>New</title>
    <style>
        body {
        background-image: url("https://image.freepik.com/free-vector/tree-mountain-landscape_1048-9294.jpg");
            height: 100%;
            width: 100%
            position: fixed;
            background-position: center;
            background-size: cover;
        }
    </style>
  </head>
  <body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!--  jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active popup" aria-current="page" href="/create">Created</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/links">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/add">Add</a>
                  </li>
              </div>
            </div>
          </nav>
    </div>

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="mt-2">
                    <h1 class="mt-1" style="font-family:Arial opacity: 50%;">Create New Data
                        <form method="post" action="/add">
                            @csrf
                            <div class="form-group">
                                <label for="name" style="font-family:Arial; opacity:85%; color:rgba(170, 170, 170, 0.925);">Name</label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Insert Name" style="font-family:Arial; opacity:85%;" value="{{ old('name')}}">
                                @error('name')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback" style="font-size:15px">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="id" style="font-family:Arial; opacity:90%; color:rgba(170, 170, 170, 0.925);">ID</label>
                                <input type="text" name="id" id="id" class="form-control @error('id') is-invalid @enderror" placeholder="Insert ID" style="font-family:Arial; opacity:85%;" value="{{ old('id')}}">
                                @error('id')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback" style="font-size:15px">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="date" style="font-family:Arial; opacity:90%; color:rgba(170, 170, 170, 0.925);">Date</label>
                                <input class="form-control @error('date') is-invalid @enderror" id="date" name="date" placeholder="DD/MM/YYY" type="text" style="font-family:Arial; opacity:90%; color:rgba(170, 170, 170, 0.925);"value="{{ old('date')}}">
                                @error('date')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback" style="font-size:15px">{{ $message }}</div>
                                @enderror
                            </div>
                                <button class="btn btn-primary " name="submit" type="submit" style="font-family:Arial; opacity:90%;">Submit</button>
                        </form>
                    </h1>
                </div>
            </div>
        </div>
    </div>

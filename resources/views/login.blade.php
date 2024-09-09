<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>KLK VENTURES - Login</title>
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
  body {
   background-color: rgb(211, 255, 254);
   /* min-height: 100vh; */
   overflow: hidden;
   padding: 50px;
  }

  @media screen and (max-width: 768px) {
   body {
    overflow: auto;
    padding: 10px;
   }
  }

  @media screen and (max-width: 464px) {
   .heading {
    font-size: 15px;
   }


  }
 </style>
</head>

<body>
 <div style="background-color: rgb(211, 255, 254);;"> <img src="{{asset('dist/img/klk.png')}}" style="height: 60px;">
  <span class="heading" style="font-weight: bold; letter-spacing: 1px; font-size:22px;" class="text-center">KLK <span
    style="color: brown;">Ventures</span> Pvt
   Ltd.</span>
 </div>
 <div style="background-color: rgb(211, 255, 254);">
  <div class="row">
   <div class="col-md-6 col-12 mt-2 md:mt-0"
    style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <h1 style="justify-self: flex-start; "> <i class="fa fa-user-circle-o mr-3" aria-hidden="true"></i>User Login</h1>
      <form action="{{route('loginuser')}}" method="post"  enctype="multipart/form-data" style="width: 80%; margin-top: 20px; font-weight: bold;" >
        @csrf
     <div class="form-group">
      <label for="username">Username</label>
       <input type="email" class="form-control" name="email" id="mail" onkeydown="updateMail()" placeholder="Enter User Id" style="height: 45px;">
     </div>
     <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" id="pass" onkeydown="updatePass()" placeholder="Enter Password" style="height: 45px;" >

     </div>
     <button type="submit" id="dimak"  class="btn  btn-block text-white  "
      style="background-color: blue; font-weight: bold; margin-top: 20px;">Log-in</button>
    </form>
   </div>
   <div class="col-md-6 col-12 md:mt-0 mt-2">
    <img src="{{asset('dist/img/sideLogin.avif')}}" style="mix-blend-mode: darken; height: 100%;width: 100%;">
   </div>
  </div>

 </div>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

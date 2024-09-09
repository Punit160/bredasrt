<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  @media screen and (max-width:768px) {

    .margi {
      margin-top: -65px;
      padding-top: 30px;
      padding-bottom: 30px;
    }
  }
</style>

<body style="background-color: rgb(230, 227, 227);">

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="row" style="height: 100vh;">
          <div class="col-md-6 col-12   md-mt-0 p-md-5 p-2 text-center">
            <img src="{{asset('images/signup.jpg')}}" class="" style="width: 90%; margin: auto; height: 100%; mix-blend-mode: darken;">

          </div>
          <div class="col-md-6 col-12 px-md-5 p-3 margi"
            style="display: flex; flex-direction: column; justify-content: center; align-items: center;height: 100%;">
            <div class="px-md-5 p-3"
              style="box-shadow: 2px 2px 4px black; border-radius: 10%; width: 100%; min-height: 500px; background-color: white;margin: auto;">
              <h2 class="text-center" style="font-weight: bold;margin-top: 10px; "><i class="fa fa-user-circle-o"
                  aria-hidden="true"></i>
                Login As Guest</h2>
              <form >
                <div
                  style="display: flex; flex-direction: row;   align-items: center; margin-top: 30px; width: 100%; gap: 5px;">
                  <div class="p-3"
                    style="position: relative;  box-shadow: 2px 2px 4px grey; border-radius: 50px; background-color: white;flex-grow: 1; ">
                    <input type="tel" placeholder="Enter Phone Number"
                      style="width: calc(100% - 40px); padding-left: 40px; border: none; outline: none;">
                    <i class="fa fa-phone-square" aria-hidden="true"
                      style="position: absolute; top: 50%; left: 10px; transform: translateY(-50%); font-size: 20px; margin-left: 10px;"></i>
                  </div>
                  <button class="p-3" id="otpHideBtn" type="button"
                    style="background-color: blue; color: white; font-weight: 900; border-radius: 50px;">Get
                    OTP</button>
                </div>
              </form>
              <form>
                <div class="p-3 " id="otpInput"
                  style="position: relative;  box-shadow: 2px 2px 4px grey; border-radius: 50px; background-color: white;flex-grow: 1; display: none; margin-top: 20px;">
                  <input type="text" placeholder="Enter OTP" style="width: calc(100% );  border: none; outline: none;">

                </div>
                <div class="p-3"
                  style="position: relative; margin-top: 30px; box-shadow: 2px 2px 4px grey; border-radius: 50px; background-color: white; ">
                  <input type="text" placeholder="Enter Name"
                    style="width: calc(100% - 40px); padding-left: 40px; border: none; outline: none;">
                  <i class="fa fa-user" aria-hidden="true"
                    style="position: absolute; top: 50%; left: 10px; transform: translateY(-50%); font-size: 20px; margin-left: 10px;"></i>
                </div>
                <div class="p-3"
                  style="position: relative; margin-top: 30px; box-shadow: 2px 2px 4px grey; border-radius: 50px; background-color: white; ">
                  <input type="text" placeholder="Enter E-mail"
                    style="width: calc(100% - 40px); padding-left: 40px; border: none; outline: none;">
                  <i class="fa fa-envelope" aria-hidden="true"
                    style="position: absolute; top: 50%; left: 10px; transform: translateY(-50%); font-size: 20px; margin-left: 10px;"></i>
                </div>




                <p style="margin-top:20px ; font-size: 18px;">Already have an Account <a href="{{url('/')}}"
                    style="font-weight: bold; color: blue;">? Login</a>
                </p>
                <button
                  style="background-color: blue; color: white; width: 100%; padding: 10px; font-size: 20px;  margin-top: 10px; box-shadow: 2px 2px 4px blue; border-radius: 50px;margin-bottom: 10px;   ">Register-Now</button>
              </form>
             
             



            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    const OtpInput = document.getElementById('otpInput')
    document.getElementById('otpHideBtn').addEventListener('click', (e) => {

      OtpInput.style.display = 'block'
    })
  </script>
</body>

</html>
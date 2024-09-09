<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>State</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    body {
      background-color: cadetblue;
      min-height: 100vh;
    }

    .hoverItem:hover {
      box-shadow: 2px 2px rgb(153, 25, 25);
      scale: 0.98;
    }

    @media screen and (max-width: 768px) {
      body {
        overflow: auto;
      }

      .card {
        margin: 0;
      }

      .map {
        display: none;
      }
    }


    .card {
      min-height: auto;
    }

    .hoverItem {
      width: 100%;
    }

    .hoverItem img {
      width: 20%;
      border-radius: 10px;
      height: 100%;
    }

    .hoverItem p {
      font-weight: bold;
      color: white;
      font-size: 17px;
      flex: 1;

    }
  </style>
</head>

<body>

 <div class="container-fluid">
  <div class="row justify-content-center">
   <div class="col-12 login-container">
    <div class="card  mt-4 md:mb-0 mb-3">
     <div class="card-header" style="background-color: rgb(255, 250, 243);">
        <div class="row">
           <div class="col-md-6">
                    <img src="{{asset('dist/img/klk.png')}}"
       style="height: 60px;"> <span class="heading" style="font-weight: bold; letter-spacing: 1px; font-size:22px;"
       class="text-center">KLK <span style="color: brown;">Ventures</span> Pvt
       Ltd.</span>
           </div> 
            <div class="col-md-6">
            
                <div class="d-flex justify-content-end align-items-center h-100">
                     <?php if($role == '0'){ ?>
                        <div class="dropdown mx-2">
                          <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Choose ...
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('vendor-dashboard')}}">Vendor Portal</a>
                            <a class="dropdown-item" href="{{route('complaint-dashboard')}}">Complaint</a>
                          </div>
                        </div>
                           <?php } ?>
                    <a class="d-flex justify-content-end align-items-center h-100" style="text-decoration: none;" href="{{route('logout')}}">
                       <i style="font-size: 28px !important; color : #7d0101; height: max-content;" class="nav-icon fa fa-fw fa-power-off text-center"></i>
                     </a>
                </div>
       
            </div> 
        </div>
   </div>
     <div class="card-body" style="background-color: rgb(232, 245, 246);">
      <div class="row">
       <div class="col-md-6 col-12 md:mt-0 mt-2 map" style="height: 600px;">
        <img src="{{asset('dist/img/map.png')}}" style="mix-blend-mode: darken; height: 100%;width: 100%;">
       </div>
       <div class="col-md-6 col-12" style="display: flex; flex-direction: column;align-items: center;">
        <h1 style="justify-self: flex-start; margin-left: -5px; font-weight: bold; font-size: 25px;"><i
          class="fa fa-map-marker mr-3 " aria-hidden="true" style="color: black;"></i>Select <span
          style="color: brown;">State</span></h1>
        
        <div class="mt-2 hoverItem"
        
            <?php if($role != '0'){ if($state != 'kashmir'){ if($state == 'jammu' && $role == '1'){  ?>
         style="height: 80px; width: 80%; display: flex; flex-direction: row;  align-items: center; gap: 10px; background : linear-gradient(to right ,rgb(102, 102, 230),skyblue); border-radius: 10px; padding: 10px;"
          <?php }else{ ?>
           style="height: 80px; width: 80%; display: flex; flex-direction: row;  align-items: center; gap: 10px; background : linear-gradient(to right ,rgb(102, 102, 230),skyblue); border-radius: 10px; padding: 10px; filter: grayscale(1)"
           <?php } }else{ ?> 
           style="height: 80px; width: 80%; display: flex; flex-direction: row;  align-items: center; gap: 10px; background : linear-gradient(to right ,rgb(102, 102, 230),skyblue); border-radius: 10px; padding: 10px;"
         <?php } }else{ ?>
           style="height: 80px; width: 80%; display: flex; flex-direction: row;  align-items: center; gap: 10px; background : linear-gradient(to right ,rgb(102, 102, 230),skyblue); border-radius: 10px; padding: 10px;"
        <?php  } ?> >
         <img src="{{asset('dist/img/j&K.jpg')}}" style="height: 100%; width: 20%; border-radius: 10px;">
         <a <?php if($role != '0'){ if($state != 'kashmir'){ if($state == 'jammu' && $role == '1'){  ?> href="{{route('kashmir-solartype')}}"  <?php }else{ ?>    href="#" <?php } }else{ ?> href="{{route('kashmir-solartype')}}" <?php } }else{ ?>  href="{{route('kashmir-solartype')}}" <?php  }  ?> style="font-weight: bolder; color: white; font-size: 17px;">Kashmir</a>
        </div>
       <div class="mt-2 hoverItem"
       <?php if($role != '0'){ if($state != 'jammu'){ if($state == 'kashmir' && $role == '1'){ ?>
         style="height: 80px; width: 80%; display: flex; flex-direction: row;  align-items: center; gap: 10px; background : linear-gradient(to right ,green,yellowgreen); border-radius: 10px; padding: 10px;"
         <?php }else{ ?>
          style="height: 80px; width: 80%; display: flex; flex-direction: row;  align-items: center; gap: 10px; background : linear-gradient(to right ,green,yellowgreen); border-radius: 10px; padding: 10px; filter: grayscale(1)"
        <?php } }else{ ?>  style="height: 80px; width: 80%; display: flex; flex-direction: row;  align-items: center; gap: 10px; background : linear-gradient(to right ,green,yellowgreen); border-radius: 10px; padding: 10px;"
         <?php } }else{  ?>
         style="height: 80px; width: 80%; display: flex; flex-direction: row;  align-items: center; gap: 10px; background : linear-gradient(to right ,green,yellowgreen); border-radius: 10px; padding: 10px"
        <?php }  ?> >
         <img src="{{asset('dist/img/j&K.jpg')}}" style="height: 100%; width: 20%; border-radius: 10px;">
         <a <?php if($role != '0'){ if($state != 'jammu'){ if($state == 'kashmir' && $role == '1'){  ?> href="{{route('jammu-solartype')}}"  <?php }else{ ?>    href="#" <?php } }else{ ?> href="{{route('jammu-solartype')}}" <?php } }else{ ?>  href="{{route('jammu-solartype')}}" <?php   } ?>  style="font-weight: bolder; color: white; font-size: 17px;">Jammu</a>
        </div>
        
        <div class="mt-2 hoverItem"
         style="height: 80px; width: 80%; display: flex; flex-direction: row;  align-items: center; gap: 10px; background:linear-gradient(to right ,rgb(102, 102, 230),skyblue) ; border-radius: 10px; padding: 10px; filter: grayscale(1)">
         <img src="{{asset('dist/img/hp.jpg')}}" style="height: 100%; width: 20%; border-radius: 10px;">
         <p style="font-weight: bolder; color: white; font-size: 17px;">Himachal Pradesh</p>
        </div>
        
        <div class="mt-2 hoverItem"
         style="height: 80px; width: 80%; display: flex; flex-direction: row;  align-items: center; gap: 10px; background:linear-gradient(to right ,red,brown) ; border-radius: 10px; padding: 10px; filter: grayscale(1)">
         <img src="{{asset('dist/img/hr.jpg')}}" style="height: 100%; width: 20%; border-radius: 10px;">
         <p style="font-weight: bolder; color: white; font-size: 17px;">Haryana</p>
        </div>
        
        
        <div class="mt-2 hoverItem"
          <?php if($role != '0'){ if($state != 'up'){ ?>
         style="height: 80px; width: 80%; display: flex; flex-direction: row;  align-items: center; gap: 10px;background:linear-gradient(to right ,orange,rgb(253, 198, 96)) ; border-radius: 10px; padding: 10px; filter: grayscale(1)"
        <?php }else{ ?> style="height: 80px; width: 80%; display: flex; flex-direction: row;  align-items: center; gap: 10px;background:linear-gradient(to right ,orange,rgb(253, 198, 96)) ; border-radius: 10px; padding: 10px;"
         <?php } }else{ ?>
             style="height: 80px; width: 80%; display: flex; flex-direction: row;  align-items: center; gap: 10px;background:linear-gradient(to right ,orange,rgb(253, 198, 96)) ; border-radius: 10px; padding: 10px;"
        <?php  }  ?>
        >
         <img src="{{asset('dist/img/up.jpg')}}" style="height: 100%; width: 20%; border-radius: 10px;">
          <a <?php if($role != '0'){ if($state != 'up'){ ?> href="#" <?php }else{ ?> href="{{route('up-solartype')}}" <?php } }else{ ?>  href="{{route('up-solartype')}}" <?php  }  ?> style="font-weight: bolder; color: white; font-size: 17px;">Uttar Pradesh</a>
        </div>
        
        <div class="mt-2 hoverItem"
                  <?php if($role != '0'){ if($state != 'bihar'){ ?>
         style="height: 80px; width: 80%; display: flex; flex-direction: row;  align-items: center; gap: 10px;background:linear-gradient(to right ,green,brown); border-radius: 10px; padding: 10px; filter: grayscale(1)"
        <?php }else{ ?> style="height: 80px; width: 80%; display: flex; flex-direction: row;  align-items: center; gap: 10px;background:linear-gradient(to right ,green,brown); border-radius: 10px; padding: 10px;"
         <?php } }else{ ?>
             style="height: 80px; width: 80%; display: flex; flex-direction: row;  align-items: center; gap: 10px;background:linear-gradient(to right ,green,brown) ; border-radius: 10px; padding: 10px;"
        <?php  }  ?> >
         <img src="{{asset('dist/img/bh.jpg')}}" style="height: 100%; width: 20%; border-radius: 10px;">
         <a <?php if($role != '0'){ if($state != 'bihar'){ ?> href="#" <?php }else{ ?> href="{{asset('/bihar/solartype')}}" <?php } }else{ ?>  href="{{asset('/bihar/solartype')}}" <?php  }  ?> style="font-weight: bolder; color: white; font-size: 17px;">Bihar</a>
        </div>
        
        
        <div class="mt-2 hoverItem"
                   <?php if($role != '0'){ if($state != 'karnataka'){ ?>
         style="height: 80px; width: 80%; display: flex; flex-direction: row;  align-items: center; gap: 10px;background:linear-gradient(to right ,blue,rgb(147, 119, 214)); border-radius: 10px; padding: 10px; filter: grayscale(1)"
        <?php }else{ ?> style="height: 80px; width: 80%; display: flex; flex-direction: row;  align-items: center; gap: 10px;background:linear-gradient(to right ,blue,rgb(147, 119, 214)); border-radius: 10px; padding: 10px;"
         <?php } }else{ ?>
             style="height: 80px; width: 80%; display: flex; flex-direction: row;  align-items: center; gap: 10px;background:linear-gradient(to right ,blue,rgb(147, 119, 214)); border-radius: 10px; padding: 10px;"
        <?php  }  ?> >
         <img src="{{asset('dist/img/tr.jpg')}}" style="height: 100%; width: 20%; border-radius: 10px;">
         <a <?php if($role != '0'){ if($state != 'karnataka'){ ?> href="#" <?php }else{ ?> href="{{route('Karnataka-solartype')}}" <?php } }else{ ?>  href="{{route('Karnataka-solartype')}}" <?php  }  ?> style="font-weight: bolder; color: white; font-size: 17px;">Karnataka</a>
        </div>
        
       </div>

      </div>

     </div>
    </div>
   </div>
  </div>
 </div>


 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
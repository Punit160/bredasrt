<!DOCTYPE html>
 <html lang="en">

 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>State</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
  * {
    font-family: 'Sen', sans-serif !important;
}
   body {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;

   }

   .chat-word {
    margin-right: 7px;
    margin-top: 5px;
   }

   .cardHover:hover {
    opacity: 0.8;
    scale: 0.98;
   }

   @media screen and (max-width:800px) {

    .notUse {
     display: none;
    }
   }
  </style>
 </head>

 <body>

  <div class="container-fluid">
   <div class="row">
    <div class="col-12">
     <h2 class="text-center pt-3  md:text-xl text-sm"
      style="font-family: Georgia, 'Times New Roman', Times, serif; font-weight: bold;">
      Project Under <span style="color: brown; text-shadow: 1px 1px black;text-transform:uppercase">UP</span> Government
     </h2>
     <div class="row mt-3 p-2">
      <div class="col-md-6 col-12">

       <div class="row mt-3 mb-3">
          
        <div class="col-md-6 col-12  ">
         <div class="card cardHover">
             <a  href="{{route('kusumb-dash')}}"  style="text-decoration:none;color:black">
          <img src="{{asset('dist/img/rooftop.avif')}}" style="width: 100%; height: 260px;">
          <p class="text-center"
           style="font-weight: bold; font-family: Georgia, 'Times New Roman', Times, serif; padding-top: 10px;">Kusum B</p>
           </a>
         </div>
        </div>
        <div class="col-md-6 col-12   ">
         <div class="card cardHover">
              <a href="{{route('kusumc-dash')}}" style="text-decoration:none;color:black">
          <img src="{{asset('dist/img/pump.webp')}}" style="width: 100%; height: 260px;">
          <p class="text-center"
           style="font-weight: bold; font-family: Georgia, 'Times New Roman', Times, serif; padding-top: 10px;">Kusum C</p>
            </a>
         </div>
        </div>
        <div class="col-md-6 col-12 mt-3">
         <div class="card cardHover">
         <a href="#"style="text-decoration:none;color:black">
          <img src="{{asset('dist/img/street.webp')}}" style="width: 100%; height: 260px;"> 
          <p class="text-center"
           style="font-weight: bold; font-family: Georgia, 'Times New Roman', Times, serif; padding-top: 10px;">On Grid</p>
            </a>
         </div>
        </div>
        <div class="col-md-6 col-12  mt-3">
         <div class="card cardHover">
          <img src="{{asset('dist/img/portable.jpg')}}" style="width: 100%; height: 260px;">
          <p class="text-center"
           style="font-weight: bold; font-family: Georgia, 'Times New Roman', Times, serif; padding-top: 10px;">Off Grid</p>
         </div>
        </div>
       </div>

      </div>
      <div class="col-md-6 col-12 mt-3 notUse">
       <div class="card p-3" style="min-height: 640px;position:relative">
        <h3 class="text-center mt-2 mb-4 p-2" style="display: inline; font-weight: bold;  ">
         सौर ऊर्जा:
         प्राकृतिक
         संसाधनों का उत्तम उपयोग</h3>
        <p id="content" style="display: flex; flex-direction: row; flex-wrap: wrap; font-weight: bold;"> </p>
        <div style="background-color: rgb(255, 250, 243); position: absolute; bottom: 1%;right: 5%; ">

                  <img src="{{asset('dist/img/klk.png')}}" style="height: 60px;"> <span class="heading"
                    style="font-weight: bold; letter-spacing: 1px; font-size:22px;" class="text-center">KLK <span
                      style="color: brown;">Ventures</span> Pvt
                    Ltd.</span>


                </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
   let detail = `हम गर्व से प्रस्तुत करते हैं एक साथी इनोवेटिव सौर ऊर्जा समाधान, जो आपके व्यवसाय और निवास को स्वच्छ, सामर्थ्यशाली, और भविष्य में सुरक्षित बनाने के लिए बनाया गया है। सौर ऊर्जा, सूर्य के प्रकाश का उपयोग करते हुए ऊर्जा उत्पन्न करती है और यह हमें अपने पर्यावरण के प्रति जिम्मेदारी संभालने के लिए मदद करती है।

हमारा सौर ऊर्जा समाधान एक समृद्ध विकल्प है, जो आपके व्यवसाय की ऊर्जा संभालने की जिम्मेदारी को स्वीकार करता है और आपको आर्थिक लाभ भी प्रदान करता है। हमारी तकनीक और सौर पैनल उत्पादन क्षमता हमें एक अग्रणी सौर ऊर्जा प्रदाता बनाती हैं, जो आपके व्यवसाय की ऊर्जा संभालने की जरूरतों को पूरा करती हैं।

सौर ऊर्जा के प्रयोग में हम सरकारी पहलों का समर्थन करते हैं, जो वायु प्रदूषण को कम करने और सामर्थ्यशाली ऊर्जा स्रोतों के प्रयासों को बढ़ावा देने के लिए कई योजनाएं शुरू कर रही है। सरकारी एनर्जी नीतियों और योजनाओं का समर्थन करके, हम भारतीय समुदाय को ऊर्जा स्वतंत्रता की दिशा में एक महत्वपूर्ण कदम बढ़ाने में सहायक हो रहे हैं।

सौर ऊर्जा एक सुरक्षित, सामर्थ्यशाली, और अग्रणी ऊर्जा स्रोत है जो हमें विकास के मार्ग पर ले जाता है और हमारे पर्यावरण को संरक्षित रखने में मदद करता है। हम आपके साथ हैं, आपके व्यवसाय और निवास को सुरक्षित, साफ, और स्थायी ऊर्जा स्रोतों की दिशा में आगे बढ़ाने के लिए।

आइये सौर ऊर्जा के साथ हमारे भविष्य को उजागर करें!`

   let content = document.getElementById('content');
   let splitted = detail.split(' ');
   let index = 0;

   function printNextWord() {
    if (index < splitted.length) {
     let wordElement = document.createElement('div');
     wordElement.classList.add('chat-word');
     wordElement.textContent = splitted[index];

     let space = document.createTextNode(' ');
     content.appendChild(wordElement);
     content.appendChild(space);
     console.log(wordElement + space)

     index++;

    } else {
     clearInterval(printInterval);
     setTimeout(() => {
      index = 0;
      content.innerHTML = '';
      printInterval = setInterval(printNextWord, 100);
     }, 12000);
    }

   }

   let printInterval = setInterval(printNextWord, 100);


  </script>
 </body>

 </html>
</body>

</html>
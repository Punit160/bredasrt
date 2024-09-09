@include('kusum.component.sidebar')

@include('kusum.component.header')

          <!-- / Navbar -->
          <style>
            @media(min-width: 486px) {
              .col-sm-6:not(:last-child) {
                border-right: 1px solid #8a8a91;
                margin-right: -1px;
              }
            }
          </style>
          <!-- Content wrapper -->
          <div class="container-fluid px-5 mt-4">
            <div class="crumb d-flex align-items-center">
              <h4 class="text-muted fw-normal">Home / &nbsp;</h4>
              <h4 class="fw-bold"> Help and Support</h4>
            </div>
          </div>
            <div class="container-fluid px-5 mt-4 mb-5">
              <div class="row bg-white rounded pb-3">
                <div class="col-12 pb-3">
                  <h2 class="text-center fw-normal mb-4" style="color: #8a8a91;">Help and Support</h2>
                  <hr>
                </div>
                <div class="col-12 col-sm-6">
                  <!-- <p class="ms-3">For any queries please feel free to contact us at.</p> -->
                  
                  <h3 class="ms-3 fw-bold" style="color:blue;">REGISTERED OFFICE</h3>
                  <p class="ms-3 fw-bold" style="color:blue;">BASIX</p>
                  <p class="ms-3"><i class="fas fa-location-dot"></i> &ensp;F-5, Ground Floor, Kailash Colony, Greater Kailash Part I, New Delhi -110 048</p>
                  <p><i class="fa-solid fa-phone-volume ms-3 mb-4"></i> &ensp;011 4173 0252, 4173 0540</p>

                  
                </div>


                <div class="col-12 col-sm-6 mt-4 mt-sm-0 mb-5">
                  <h3 class="ms-3 fw-bold" style="color:blue;">BASIX HEAD OFFICE</h3>
                  <p class="ms-3 mt-3"><i class="fa-solid fa-location-dot "></i> &ensp;3rd Floor, Surabhi Arcade, Troop Bazar, Bank Street, Koti, Hyderabad - 500 001, Telangana</p>
                  <p><i class="fa-solid fa-phone-volume ms-3"></i> &ensp;+ 91 – 40 – 6658 5800/01</p>
                  <p><i class="fa-solid fa-envelope ms-3"></i> &ensp; info@basixindia.com</p>
                  <p><i class="fa-solid fa-globe ms-3"></i> &ensp;<a target="_blank" href="https://basixindia.com/">www.basixindia.com</a></p>

                  <!-- <h3 class=" fw-bold" style="color: blue;">Get in touch with us</h3>
                  <form action="#" class="row me-2">
                      <div class="col-12 col-sm-6">
                          <div class="form-group">
                            <input type="text" name="name" id="Fname" class="w-full form-control" placeholder="First Name">
                          </div>
                      </div>
                      <div class="col-12 col-sm-6 mt-2 mt-sm-0">
                          <div class="form-group">
                            <input type="text" name="name" id="Lname" class="w-full form-control" placeholder="Last Name">
                          </div>
                      </div>
                      <div class="col-12 ">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                      </div>
                      
                      <div class="col-12 mt-3">
                        <input type="number" name="contact" id="contact" class="form-control" placeholder="Phone">
                      </div>
                      <div class="col-12 mt-3">
                        <textarea name="message" id="message" rows="5" class="form-control" placeholder="Message"></textarea>
                      </div>
                      <div class="col-12 mt-3"><button type="submit" class="btn btn-primary w-px-100">Submit</button></div>
                  </form> -->
                </div>
              </div>
            </div>
            <!-- Footer -->
@include('kusum.component.footer')
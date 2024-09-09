@include('component.head')
@include('component.header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <form action="{{route('save-ssl-complaint')}}" method="Post" enctype='multipart/form-data'>
        @csrf
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"><strong> Add SSL Complaint</strong></h3>
          </div>
          @if(session()->has('status'))
          <div class="alert my-3 p-3 alert-success">
            {{session('status')}}
          </div>
          @endif
          @if ($errors->any())
          @foreach ($errors->all() as $error)
          <div class="alert alert-danger" role="alert">
            {{ $error }}
          </div>
          @endforeach
          @endif
          <div class="card-body">
            <div class="row">

              <div class="form-group col-md-3">
                <label for="">District</label>
                <select class="form-control" name="district" id="district">
                  <option value="">Select</option>
                  @foreach($district as $districts)
                  <option value="{{$districts->district}}"> {{$districts->district}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="">Block</label>
                <select class="form-control" name="block" id="block">
                  
                                </select>
              </div>
             
              <div class="col-12 col-md-3 mb-3">
                <div class="form-group">
                  <label for="panchyat">Panchyat</label>
                  <select class="form-control" name="panchyat" id="panchyat">
                  
                  </select>
                </div>
              </div>
               
              <div class="col-12 col-md-3 mb-3">
                <div class="form-group">
                  <label for="panchyat">Ward No</label>
                  <select class="form-control" name="ward_no" id="ward_no">
                  
                  </select>
                </div>
              </div>
               
              <div class="col-12 col-md-3 mb-3">
                <div class="form-group">
                  <label for="panchyat">Pole No</label>
                  <select class="form-control" name="pole_no" id="pole_no">
                  
                  </select>
                </div>
              </div>
           

              <div class="col-12 col-md-3 mb-3">
                <div class="form-group">
                  <label for="beneficiaryName">Beneficiary Name</label>
                  <input type="text" name="beneficiary_name" id="beneficiary_name" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-3 mb-3">
                <div class="form-group">
                  <label for="contactNo">Contact No.</label>
                  <input type="number" min="1" name="contact_no" id="contact_no" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-3 mb-3">
                <div class="form-group">
                  <label for="latitude">Latitude</label>
                  <input type="text" name="latitude" id="latitude" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-3 mb-3">
                <div class="form-group">
                  <label for="longitude">Longitude</label>
                  <input type="text" name="longitude" id="longitude" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-3 mb-3">
                <div class="form-group">
                  <label for="alongWithPole">Along With Pole</label>
                  <input type="text" name="along_with_pole" id="along_with_pole" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-3 mb-3">
                <div class="form-group">
                  <label for="luminaryNo">Luminary No.</label>
                  <input type="text" name="luminary_no" id="luminary_no" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-3 mb-3">
                <div class="form-group">
                  <label for="simNo">SIM No.</label>
                  <input type="text" name="sim_no" id="sim_no" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-3 mb-3">
                <div class="form-group">
                  <label for="batterySerialNo">Battery Serial No.</label>
                  <input type="text" name="battery_serial_no" id="battery_serial_no" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-3 mb-3">
                <div class="form-group">
                  <label for="moduleNo">Module No.</label>
                  <input type="text" name="module_no" id="module_no" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-3  mb-3">
                <div class="form-group">
                  <label for="dateOfInstallation">Date of Installation</label>
                  <input type="text" name="date_of_installation" id="date_of_installation" class="form-control">
                </div>
              </div>
             
              <div class="col-12 col-md-3  mb-3">
                <div class="form-group">
                  <label for="installedBy">Upload File</label>
                  <input type="file" name="file" id="file" class="form-control">
                </div>
              </div>
              <div class="form-group col-md-12">
                <label for="">Complaint</label>
                <textarea class="form-control" name="complaint" rows="4" cols="50" required></textarea>
              </div>
              <div class="form-group col-md-4">
                <label for="">Send SMS</label><br>
                <input type="radio" id="s1_yes" name="sms" value="Yes">
                <label for="s1_yes">Yes</label>&nbsp;&nbsp;&nbsp;
                <input type="radio" id="s1_no" name="sms" value="No">
                <label for="s1_no">No</label><br>
              </div>


            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-primary px-3">Submit</button>
            <button class="btn btn-default px-3 float-right">Cancel</button>
          </div>
        </div>
      </form>
    </div>
  </section>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  $(document).ready(function() {
  $('#district').change(function() {
    var district = $(this).val();
    if (district) {
      $.ajax({
        url: 'getblocks/' + district,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
          var $blockSelect = $('#block');
          
          // Clear previous options
          $blockSelect.empty().append('<option value="">Select</option>');
          
          // Add new options
          $.each(data, function(index, block) {
            $blockSelect.append('<option value="' + block + '">' + block + '</option>');
          });
        },
        error: function(xhr, status, error) {
          console.error('Error fetching blocks:', error);
        }
      });
    } else {
      // Clear block select if no district selected
      $('#block').empty().append('<option value="">Select</option>');
    }
  });
});

</script>


<script>
  $(document).ready(function() {
    $('#block').change(function() {
      var district = $('#district').val();
      var block = $(this).val();

      if (district && block) {
        $.ajax({
          url: 'getpanchyats', 
          type: 'GET',
          data: {
            'district': district,
            'block': block
          },
          dataType: 'json',
          success: function(data) {
            var $pSelect = $('#panchyat');
            
            // Clear previous options
            $pSelect.empty().append('<option value="">Select</option>');
            
            // Add new options
            $.each(data, function(index, panchyat) {
              $pSelect.append('<option value="' + panchyat + '">' + panchyat + '</option>');
            });
          },
          error: function(xhr, status, error) {
            console.error('Error fetching panchyat:', error);
          }
        });
      } else {
        // Clear panchyat select if no district or block selected
        $('#panchyat').empty().append('<option value="">Select</option>');
      }
    });
  });
</script>

<script>
  $(document).ready(function() {
    $('#panchyat').change(function() {
      var district = $('#district').val();
      var block = $('#block').val();

      var panchyat = $(this).val();

      if (panchyat && block) {
        $.ajax({
          url: 'getwards', 
          type: 'GET',
          data: {
            'district': district,
            'block': block,
            'panchyat': panchyat

          },
          dataType: 'json',
          success: function(data) {
            var $pSelect = $('#ward_no');
            
            // Clear previous options
            $pSelect.empty().append('<option value="">Select</option>');
            
            // Add new options
            $.each(data, function(index, ward_no) {
              $pSelect.append('<option value="' + ward_no + '">' + ward_no + '</option>');
            });
          },
          error: function(xhr, status, error) {
            console.error('Error fetching ward_no:', error);
          }
        });
      } else {
        // Clear panchyat select if no district or block selected
        $('#ward_no').empty().append('<option value="">Select</option>');
      }
    });
  });
</script>
<script>
  $(document).ready(function() {
    $('#ward_no').change(function() {
      var district = $('#district').val();
      var block = $('#block').val();
      var panchyat = $('#panchyat').val();
      var ward_no = $(this).val();

      if (ward_no && panchyat) {
        $.ajax({
          url: 'getpoles', 
          type: 'GET',
          data: {
            'district': district,
            'block': block,
            'panchyat': panchyat,
            'ward_no': ward_no,

         },
          dataType: 'json',
          success: function(data) {
            var $poleSelect = $('#pole_no');
            
            // Clear previous options
            $poleSelect.empty().append('<option value="">Select</option>');
            
            // Add new options
            $.each(data, function(index, pole_no) {
              $poleSelect.append('<option value="' + pole_no + '">' + pole_no + '</option>');
            });
          },
          error: function(xhr, status, error) {
            console.error('Error fetching ward_no:', error);
          }
        });
      } else {
        // Clear panchyat select if no district or block selected
        $('#ward_no').empty().append('<option value="">Select</option>');
      }
    });
  });
</script>



<script>
  $(document).ready(function() {
      $('#pole_no').change(function() {
          var district = $('#district').val();
          var block = $('#block').val();
          var panchyat = $('#panchyat').val();
          var ward_no = $('#ward_no').val();
          var pid = $(this).val();
          
          $.ajax({
              type: "GET",
              url: "/getpoledatas", 
              data: {
                  'district': district,
                  'block': block,
                  'panchyat': panchyat,
                  'ward_no': ward_no,
                  'pid': pid
              },
              success: function(response) {
                  console.log(response);

                  if (response) {
                      $("#beneficiary_name").val(response.beneficiary_name);
                      $("#contact_no").val(response.contact_no);
                      $("#latitude").val(response.latitude);
                      $("#longitude").val(response.longitude);
                      $("#along_with_pole").val(response.along_with_pole);
                      $("#luminary_no").val(response.luminary_no);
                      $("#sim_no").val(response.sim_no);
                      $("#battery_serial_no").val(response.battery_serial_no);
                      $("#module_no").val(response.module_no);
                      $("#date_of_installation").val(response.date_of_installation);
                      $("#installed_by").val(response.installed_by);
                  }
              },
              error: function(xhr, status, error) {
                  console.error('Error:', error);
              }
          });
      });
  });
</script>

@include('component.footer')
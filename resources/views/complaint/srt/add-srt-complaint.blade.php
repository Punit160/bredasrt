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
      <form action="{{route('save-srt-complaint')}}" method="Post" enctype='multipart/form-data'>
        @csrf
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"><strong> Add Bihar Srt Complaint</strong></h3>
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
              <div class="form-group col-md-6">
                <label for="">District</label>
                <select class="form-control select2" name="district" id="district">
                  <option value="">Select</option>
                  @foreach($district as $districts)
                  <option value="{{$districts->district}}"> {{$districts->district}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="">Name of the Site</label>
                <div class="controls">
                  <select class="form-control select2" name="site_name" id="site_name"></select>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="">DISCOM</label>
                <div class="controls">
                  <input type="text" class="form-control" name="discom" id="discom">
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="">Department</label>
                <div class="controls">
                  <input type="text" class="form-control" name="dept_name" id="dept_name">
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="">Location</label>
                <div class="controls">
                  <input type="text" class="form-control" name="location" id="location">
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="">Firm Name</label>
                <div class="controls">
                  <input type="text" class="form-control" name="firm_name" id="firm_name">
                </div>
              </div>


              <div class="form-group col-md-6">
                <label for="">CA no.</label>
                <div class="controls">
                  <input type="text" class="form-control" name="ca_no" id="ca_no">
                </div>
              </div>

              <div class="form-group col-md-6">
                <label for="">Sanction load in kwp</label>
                <div class="controls">
                  <input type="text" class="form-control" name="sanction_load" id="sanction_load">
                </div>
              </div>

              <div class="form-group col-md-6">
                <label for="">PLANT SPP Capacity</label>
                <div class="controls">
                  <input type="text" class="form-control" name="plant_sc" id="plant_sc">
                </div>
              </div>

              <div class="form-group col-md-6">
                <label for="">Work Order No.</label>
                <div class="controls">
                  <input type="text" class="form-control" name="wo_no" id="wo_no">
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="">Phase</label>
                <div class="controls">
                  <input type="text" class="form-control" name="phase" id="phase">
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="">Vendor</label>
                <div class="controls">
                  <input type="text" class="form-control" name="vendor" id="vendor">
                </div>
              </div>
          
              <div class="col-12 col-md-12  mb-3">
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
          url: 'getsitenames/' + district,
          type: 'GET',
          dataType: 'json',
          success: function(data) {
            var $siteSelect = $('#site_name');

            // Clear previous options
            $siteSelect.empty().append('<option value="">Select</option>');

            // Add new options
            $.each(data, function(index, site_name) {
              $siteSelect.append('<option value="' + site_name + '">' + site_name + '</option>');
            });
          },
          error: function(xhr, status, error) {
            console.error('Error fetching blocks:', error);
          }
        });
      } else {
        // Clear block select if no district selected
        $('#site_name').empty().append('<option value="">Select</option>');
      }
    });
  });
</script>
<script>
  $(document).ready(function() {
    $('#site_name').change(function() {
      var district = $('#district').val();

      var sid = $(this).val();
      $.ajax({
        type: "GET",
        url: "getsrtsites",
        data: {
          'district': district,
          'sid': sid,

        },
        success: function(response) {
          console.log(response);
          $("#discom").val(response.discom);
          $("#dept_name").val(response.dept_name);
          $("#location").val(response.location);
          $("#firm_name").val(response.firm_name);
          $("#ca_no").val(response.ca_no);
          $("#sanction_load").val(response.sanction_load);
          $("#plant_sc").val(response.plant_sc);
          $("#wo_no").val(response.wo_no);
          $("#phase").val(response.phase);
          $("#vendor").val(response.vendor);
        },
        error: function(xhr, status, error) {
          console.error('Error:', error);
        }
      });
    });
  });
</script>

@include('component.footer')
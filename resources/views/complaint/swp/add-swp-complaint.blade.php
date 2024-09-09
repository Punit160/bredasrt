@include('component.head')
@include('component.head')
@if($state == 'bihar')
@include('component.header')
@elseif($state == 'up')
@include('component.upksb-header')
@else
@include('component.jammu-header')
@endif
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add {{ strtoupper($state) }} SWP Complaint</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Complaint Request</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header bg-dark">
                    <h3 class="card-title text-white">Add Complaints</h3>

                    <div class="card-tools text-white">
                        <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button> -->
                        <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button> -->
                    </div>
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
                <form method="Post" Action="{{route('save-swp-complaint')}}">
                    @csrf
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            @if($state != 'up')
                            <div class="form-group col-md-4">
                                <label for="">Customer No</label>
                                <select class="form-control" name="customer_no" id="vendors">
                                    <option value="">Select</option>
                                    @foreach($jammu as $jammus)
                                    <option value="{{$jammus->f_customer_no}}">{{$jammus->state}} - {{$jammus->f_customer_no}}</option>
                                    @endforeach

                                </select>
                            </div>
                             <div class="form-group col-md-4">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" id="f_farmer_name">
                            </div>
                            @else
                                <div class="form-group col-md-4">
                                <label for="">Customer Name</label>
                                <select class="form-control select2" name="customer_no" id="customer_detail">
                                    <option value="">Select</option>
                                    @foreach($jammu as $jammus)
                                    <option value="{{$jammus->beneficiary}}">{{$jammus->beneficiary}}</option>
                                    @endforeach

                                </select>
                            </div>
                            
                            @endif

                            <div class="form-group col-md-4">
                                <label for="">Mobile</label>
                                <input type="text" class="form-control" name="mobile" id="contact_number">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group col-md-4">
                                <label for=""> Father Name</label>
                                <input type="text" class="form-control" name="father_name" id="f_father_name">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="">District</label>
                                <input type="text" class="form-control" name="district" id="district">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Post</label>
                                <input type="text" class="form-control" name="post" id="post">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Village</label>
                                <input type="text" class="form-control" name="village" id="village">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Tehsil</label>
                                <input type="text" class="form-control" name="tehsil" id="tehsil">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Pin</label>
                                <input type="text" class="form-control" name="pin" id="f_pin">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Pump Capacity/Kw</label>
                                <input type="text" class="form-control" name="pump_capacity" id="p_pump_capacity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Pump Type</label>
                                <input type="text" class="form-control" name="pump_type" id="p_pump_type">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Pump Subtype</label>
                                <input type="text" class="form-control" name="pump_subtype" id="p_pump_subtype">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Complaint Date</label>
                                <input type="date" class="form-control" name="start_date" id="start_date">
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
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <button type="reset" class="btn btn-default float-right">Cancel</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#vendors').change(function() {
            var vid = $(this).val();
            $.ajax({
                type: "GET",
                url: "/swp/vendors",
                data: {
                    vid: vid,
                },
                success: function(response) {
                    console.log(response);
                    $("#f_farmer_name").val(response.f_farmer_name);
                    $("#f_father_name").val(response.f_father_name);
                    $("#contact_number").val(response.contact_number);
                    $("#district").val(response.district);
                    $("#post").val(response.post);
                    $("#village").val(response.village);
                    $("#tehsil").val(response.tehsil);
                    $("#f_pin").val(response.f_pin);
                    $("#p_pump_capacity").val(response.p_pump_capacity);
                    $("#p_pump_type").val(response.p_pump_type);
                    $("#p_pump_subtype").val(response.p_pump_subtype);
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });
    });
</script>



<script>
    $(document).ready(function() {
        $('#customer_detail').change(function() {
            var vid = $(this).val();
            $.ajax({
                type: "GET",
                url: "/kusumb/customer",
                data: {
                    vid: vid,
                },
                success: function(response) {
                    console.log(response);
                    $("#f_farmer_name").val(response.beneficiary);
                    $("#f_father_name").val(response.father_name);
                    $("#contact_number").val(response.mobile);
                    $("#district").val(response.district);
                    $("#village").val(response.village);
                    $("#p_pump_capacity").val(response.pump_capacity);
                    $("#p_pump_type").val(response.required_pump);
                    $("#p_pump_subtype").val(response.pump_sub_type);
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });
    });
</script>

@include('component.footer')
@include('component.table-head')
@include('component.header')
<style>
    table p {
        margin-bottom: 0;
    }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Vendor Complaints</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">View Vendor Complaints</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card  card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Open</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Closed</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-two-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                                    <table id="example1" class="table table-bordered table-striped text-center d-block " style="overflow-x: auto;">
                                        <thead>
                                            <tr>
                                                <th>Sr. no.</th>
                                                <th>Complaint ID</th>
                                                <th>Complaint Date</th>
                                                <th>Complaint</th>
                                                <th>State</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>District</th>
                                                <th>Location</th>
                                                <th>Site</th>
                                                <th>Work Order</th>
                                                <th>Document</th>
                                                <th>Created By</th>
                                                <th>Assigned To</th>
                                                <th>Action</th>
                                                <th>Assign</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $number = 1; ?>
                                            @foreach($open as $complaint)
                                            <tr>
                                                <td>{{ $number }}</td>
                                                <td>{{ $complaint->complaint_id }}</td>
                                                <td>{{ $complaint->start_date }}</td>
                                                <td>{{ $complaint->complaint }}</td>
                                                <td>{{ $complaint->state }}</td>
                                                <td>{{ $complaint->name }}</td>
                                                <td>{{ $complaint->mobile }}</td>
                                                <td>{{ $complaint->district }}</td>
                                                <td>{{ $complaint->location }}</td>
                                                <td>{{ $complaint->site }}</td>
                                                <td>{{ $complaint->workorder }}</td>

                                                <td>
                                                    @if ($complaint->image)
                                                    @php
                                                    $filePath = asset('uploads/image/' .$complaint->image);
                                                    $fileInfo = pathinfo($filePath);
                                                    $extension = strtolower($fileInfo['extension'] ?? '');
                                                    @endphp

                                                    @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                                                    <p><span style="font-weight:bold"> File</span>&nbsp-&nbsp<a href="{{ $filePath }}" target="_blank" alt=" file">
                                                            <img src="{{ $filePath }}" alt=" Image" class="hidden-image" style="width: 100px; height: 50px;">
                                                        </a></p>
                                                    @else
                                                    <a href="{{ $filePath }}" download>
                                                        <i class="fas fa-download"></i> {{($extension) }}
                                                    </a>
                                                    @endif
                                                    @else
                                                    <p>No file available</p>
                                                    @endif
                                                </td>
                                                <td>{{ $complaint->created_by }}</td>
                                                <td>{{ $complaint->assigned_to }}</td>
                                                <td>
                                                    <a href="{{ route('edit-vendor-complaint', ['id' => $complaint->id]) }}">
                                                        <i class="fas fa-pencil" style="color:blue"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg" data-id="{{$complaint->id}}">
                                                        <i class="fas fa-pencil" style="color:blue"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <?php $number++; ?>
                                            @endforeach

                                            </tfoot>
                                    </table>

                                </div>
                                <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                                    <table id="example3" class="table table-bordered table-striped d-block d-md-table " style="overflow-x: auto;">
                                        <thead>
                                            <tr>
                                                <th>Sr. no.</th>
                                                <th>Complaint Details</th>
                                                <th>Complaint Closing Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $number = 1; ?>
                                            @foreach($data as $complaint)
                                            <tr>

                                                <td>{{ $number }}</td>
                                                <td>
                                                    <p><span style="font-weight:bold">Complaint Id</span>&nbsp - &nbsp {{ $complaint->complaint_id }}</p>
                                                    <p><span style="font-weight:bold">Complaint Date</span>&nbsp - &nbsp {{ $complaint->start_date }}</p>
                                                    <p><span style="font-weight:bold">State</span>&nbsp - &nbsp {{ $complaint->state }}</p>
                                                    <p><span style="font-weight:bold">District</span>&nbsp - &nbsp {{ $complaint->district }}</p>
                                                    <p><span style="font-weight:bold">Site</span>&nbsp - &nbsp {{ $complaint->site }}</span></p>
                                                    <p><span style="font-weight:bold">Name</span>&nbsp - &nbsp {{ $complaint->name }}/{{$complaint->mobile }}</span></p>
                                                    <p><span style="font-weight:bold">Assigned To</span>&nbsp - &nbsp {{ $complaint->assigned_to }}</span></p>
                                                    @if ($complaint->image)
                                                    @php
                                                    $filePath = asset('uploads/image/' .$complaint->image);
                                                    $fileInfo = pathinfo($filePath);
                                                    $extension = strtolower($fileInfo['extension'] ?? '');
                                                    @endphp

                                                    @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                                                    <p><span style="font-weight:bold"> File</span>&nbsp-&nbsp<a href="{{ $filePath }}" target="_blank" alt=" file">
                                                            <img src="{{ $filePath }}" alt=" Image" class="hidden-image" style="width: 100px; height: 50px;">
                                                        </a></p>
                                                    @else
                                                    <a href="{{ $filePath }}" download>
                                                        <i class="fas fa-download"></i> {{($extension) }}
                                                    </a>
                                                    @endif
                                                    @else
                                                    <p>No file available</p>
                                                    @endif
                                                </td>
                                                <td class="">
                                                    <p><span style="font-weight:bold">Closing Date</span>&nbsp - &nbsp {{ $complaint->close_date }}</p>
                                                    <p><span style="font-weight:bold">Complaint</span>&nbsp - &nbsp {{ $complaint->complaint }}</p>
                                                    <p><span style="font-weight:bold">Resolved By</span>&nbsp - &nbsp {{ $complaint->resolved_by }}</p>
                                                    <p><span style="font-weight:bold"> Resolver Mobile No</span>- &nbsp - &nbsp{{ $complaint->r_mobile }}/{{ $complaint->r_email }}</p>
                                                    @if ($complaint->r_file)
                                                    @php
                                                    $filePath = asset('uploads/image/' .$complaint->r_file);
                                                    $fileInfo = pathinfo($filePath);
                                                    $extension = strtolower($fileInfo['extension'] ?? '');
                                                    @endphp

                                                    @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                                                    <p><span style="font-weight:bold"> File</span>&nbsp-&nbsp<a href="{{ $filePath }}" target="_blank" alt=" file">
                                                            <img src="{{ $filePath }}" alt=" Image" class="hidden-image" style="width: 100px; height: 50px;">
                                                        </a></p>
                                                    @else
                                                    <a href="{{ $filePath }}" download>
                                                        <i class="fas fa-download"></i> {{($extension) }}
                                                    </a>
                                                    @endif
                                                    @else
                                                    <p>No file available</p>
                                                    @endif
                                                </td>
                                            </tr>
                                            <?php $number++; ?>
                                            @endforeach

                                            </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!-- /.card -->
                    </div>

                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>

        <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Assign Vendor Complaint </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- <form action="{{route('save-assignvendor-complaint')}}">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Select Vendor</label>
                                    
                                        <select name="vendor" id="vendor" class="form-control select2" style="width: 100%;">
                                            @foreach($vendor as $vendors)
                                            <option value="{{$vendors->vendor_id}}">{{$vendors->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Assign Remarks</label>
                                        <textarea name="assign_remarks" id="" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form> -->

                    <form action="{{route('save-assignvendor-complaint')}}">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Select Vendor</label>
                                        <select name="vendor" id="vendor" class="form-control select2" style="width: 100%;">
                                            <option value="">Select</option>
                                            @foreach($vendor as $vendors)
                                            <option value="{{$vendors->vendor_id}}">{{$vendors->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Assign Remarks</label>
                                        <textarea name="assign_remarks" id="" class="form-control"></textarea>
                                    </div>
                                </div>
                                <!-- Hidden input field to store the data-id -->
                                <input type="hidden" name="complaint_id" id="complaint_id">
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </section>
    <!-- /.content -->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // When the modal is shown
        $('#modal-lg').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var complaintId = button.data('id'); // Extract info from data-id attribute

            // Update the hidden input field in the modal
            var modal = $(this);
            modal.find('#complaint_id').val(complaintId);
        });
    });
</script>
<!-- /.content-wrapper -->
@include('component.table-footer')
@include('component.table-head')
@include('component.kusum-header')
<!-- / Navbar -->
<!-- Content wrapper -->
<div class="content-wrapper formBack">
    <section class="content-header">
        <div class="container-fluid bg-white rounded p-0 mt-0">
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card" style=" margin-top: -10px;">
                    @if(session()->has('status'))
                    <div class="alert my-3 p-3 alert-success">
                    {{session('status')}}
                    </div>
                    @endif
                        <form class="card-body form-row d-flex flex-md-row flex-column align-items-center  " method="post" action="{{route('import-farmer')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="file" class="form-control  col-lg-4 col-12 mr-2 "name="farmerexcel">
                            <button class="btn btn-dark  mt-2 col-lg-2   mt-lg-0 col-12" style="border-radius: 10px; font-size: 17px;">Update
                                farmers
                                List</button>
                        </form>
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="card shadow-none">
                        <div class="card-header newHead">
                            <h3 class="card-title" style="font-weight: bold;">
                                farmers Report
                            </h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped d-block d-md-table" style=" overflow-x: scroll">
                                <thead>
                                    <tr>
                                        <th>Sr NO</th>
                                        <th>District</th>
                                        <th>Solar Pump</th>
                                        <th>Register No</th>
                                        <th>Name</th>
                                        <th>Father's Name</th>
                                        <th>Block</th>
                                        <th>Village</th>
                                        <th>Mobile</th>
                                        </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    @foreach($farmer as $farmers)
                                    <tr>
                                        <td>{{ $i++}}</td>
                                        <td>{{ $farmers->district }}</td>
                                        <td>{{ $farmers->solar_pump }}</td>
                                        <td>{{ $farmers->register_no }}</td>
                                        <td>{{ $farmers->name }}</td>
                                        <td>{{ $farmers->father_name }}</td>
                                        <td>{{ $farmers->block }}</td>
                                        <td>{{ $farmers->village }}</td>
                                        <td>{{ $farmers->mobile }}</td>
                                         </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- / Content -->
<!-- Footer -->
@include("component.table-footer");
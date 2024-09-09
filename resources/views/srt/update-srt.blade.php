@include('component.head')
@include('component.header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add User</li>
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
                    <h3 class="card-title text-white">Add User</h3>

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
                <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">DISCOM</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->discom}}" name="discom">
                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">District</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->district}}" name="district">
                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Department</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->dept_name}}" name="dept_name">
                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Name of the Site</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->site_name}}" name="site_name">
                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Location</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->location}}" name="location">
                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Firm Name</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->firm_name}}" name="firm_name">
                                </div>
                            </div>


                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">CA no.</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->ca_no}}" name="ca_no">
                                </div>
                            </div>

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Sanction load in kwp</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->sanction_load}}" name="sanction_load">
                                </div>
                            </div>

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">PLANT SPP Capacity</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->plant_sc}}" name="plant_sc">
                                </div>
                            </div>

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Work Order No.</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->wo_no}}" name="wo_no">
                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Phase</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->phase}}" name="phase">
                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Vendor</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->vendor}}" name="vendor">
                                </div>
                            </div>

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Date</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->date}}" name="date">
                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Material Inspection Date</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->material_i_date}}" name="material_i_date">
                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Material Bill Invoice</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->mb_invoice}}" name="mb_invoice">
                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Material Payment</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->material_payment}}" name="material_payment">
                                </div>
                            </div>

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Installation Status</label>
                                <div class="controls">
                                    <!-- <input type="text" class="form-control" value="{{$srt->installation_status}}" name="installation_status"> -->
                                    <select class="form-control" name="installation_status">
                                        <option value=" " <?php if ($srt->installation_status == ' ' || $srt->installation_status == null) echo 'selected'; ?>>select</option>
                                        <option value="Installed" <?php if ($srt->installation_status == 'Installed') echo 'selected'; ?>>Installed</option>
                                        <option value="Pending" <?php if ($srt->installation_status == 'Pending') echo 'selected'; ?>>Pending</option>
                                    </select>
                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Installation Remarks</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->inst_remarks}}" name="inst_remarks">
                                </div>
                            </div>

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">I & C Bill Submitted</label>
                                <div class="controls">
                                    <!-- <input type="text" class="form-control" value="{{$srt->ic_bill_submit}}" name="ic_bill_submit"> -->
                                    <select class="form-control" name="ic_bill_submit">
                                        <option value=" " <?php if ($srt->ic_bill_submit == ' ' || $srt->ic_bill_submit == null) echo 'selected'; ?>>select</option>
                                        <option value="Yes" <?php if ($srt->ic_bill_submit == 'Yes') echo 'selected'; ?>>Yes</option>
                                        <option value="No" <?php if ($srt->ic_bill_submit == 'No') echo 'selected'; ?>>No</option>
                                    </select>
                                </div>
                            </div>

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Bill Invoice No</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->bill_i_no}}" name="bill_i_no">
                                </div>
                            </div>

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">I & C Payment</label>
                                <div class="controls">
                                    <select class="form-control" name="ic_payment">
                                        <option value=" " <?php if ($srt->ic_payment == ' ' || $srt->ic_payment == null) echo 'selected'; ?>>select</option>
                                        <option value="Yes" <?php if ($srt->ic_payment == 'Yes') echo 'selected'; ?>>Yes</option>
                                        <option value="No" <?php if ($srt->ic_payment == 'No') echo 'selected'; ?>>No</option>
                                    </select>
                                    <!-- <input type="text" class="form-control" value="{{$srt->ic_payment}}" name="ic_payment"> -->
                                </div>
                            </div>

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Date</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->ic_date}}" name="ic_date">
                                </div>
                            </div>

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Net Meter Submission Date</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->net_meter_submit_date}}" name="net_meter_submit_date">
                                </div>
                            </div>

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Metering Status</label>
                                <div class="controls">

                                    <select class="form-control" name="metering_status">
                                        <option value=" " <?php if ($srt->metering_status == ' ' || $srt->metering_status == null) echo 'selected'; ?>>select</option>
                                        <option value="Installed" <?php if ($srt->metering_status == 'Installed') echo 'selected'; ?>>Installed</option>
                                        <option value="Pending" <?php if ($srt->metering_status == 'Pending') echo 'selected'; ?>>Pending</option>
                                    </select>
                                    <!-- <input type="text" class="form-control" value="{{$srt->metering_status}}" name="metering_status"> -->
                                </div>
                            </div>

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Smart Meter</label>
                                <div class="controls">
                                    <!-- <input type="text" class="form-control" value="{{$srt->metering_status}}" name="metering_status"> -->
                                    <select class="form-control" name="smart_meter">
                                        <option value=" " <?php if ($srt->smart_meter == ' ' || $srt->smart_meter == null) echo 'selected'; ?>>select</option>
                                        <option value="Yes" <?php if ($srt->smart_meter == 'Yes') echo 'selected'; ?>>Yes</option>
                                        <option value="No" <?php if ($srt->smart_meter == 'No') echo 'selected'; ?>>No</option>
                                    </select>
                                </div>
                            </div>


                            <!--  <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Metering Status</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->metering_status}}" name="metering_status">
                                </div>
                            </div> -->

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Convert to Net Meter</label>
                                <div class="controls">
                                    <!-- <input type="text" class="form-control" value="{{$srt->convert_nm}}" name="convert_nm"> -->
                                    <select class="form-control" name="convert_nm">
                                        <option value=" " <?php if ($srt->convert_nm == ' ' || $srt->convert_nm == null) echo 'selected'; ?>>select</option>

                                        <option value="Yes" <?php if ($srt->convert_nm == 'Yes') echo 'selected'; ?>>Yes</option>
                                        <option value="No" <?php if ($srt->convert_nm == 'No') echo 'selected'; ?>>No</option>
                                    </select>
                                </div>
                            </div>


                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Net Meter Required</label>
                                <div class="controls">
                                    <!-- <input type="text" class="form-control" value="{{$srt->nm_required}}" name="nm_required">
                                 -->
                                    <select class="form-control" name="nm_required">
                                        <option value=" " <?php if ($srt->nm_required == ' ' || $srt->nm_required == null) echo 'selected'; ?>>select</option>

                                        <option value="Yes" <?php if ($srt->nm_required == 'Yes') echo 'selected'; ?>>Yes</option>
                                        <option value="No" <?php if ($srt->nm_required == 'No') echo 'selected'; ?>>No</option>
                                    </select>
                                </div>
                            </div>

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Net Meter Installed</label>
                                <div class="controls">
                                    <!-- <input type="text" class="form-control" value="{{$srt->nm_install}}" name="nm_install"> -->
                                    <select class="form-control" name="nm_install">
                                        <option value=" " <?php if ($srt->nm_install == ' ' || $srt->nm_install == null) echo 'selected'; ?>>select</option>
                                        <option value="Yes" <?php if ($srt->nm_install == 'Yes') echo 'selected'; ?>>Yes</option>
                                        <option value="No" <?php if ($srt->nm_install == 'No') echo 'selected'; ?>>No</option>
                                    </select>
                                </div>
                            </div>

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Testing Slip (Y/N)</label>
                                <div class="controls">
                                    <select class="form-control" name="test_slip">
                                        <option value=" " <?php if ($srt->test_slip == ' ' || $srt->test_slip == null) echo 'selected'; ?>>select</option>

                                        <option value="Yes" <?php if ($srt->test_slip == 'Yes') echo 'selected'; ?>>Yes</option>
                                        <option value="No" <?php if ($srt->test_slip == 'No') echo 'selected'; ?>>No</option>
                                    </select>

                                </div>
                            </div>

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Testing Slip(PHOTO)</label>
                                <div class="controls">
                                    <input type="file" class="form-control" value="{{$srt->ts_image}}" name="ts_image">
                                </div>
                            </div>

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Fixing Slip (Y/N)</label>
                                <div class="controls">
                                    <!-- <input type="text" class="form-control" value="{{$srt->fix_slip}}"> -->
                                    <select class="form-control" name="fix_slip">
                                        <option value=" " <?php if ($srt->fix_slip == ' ' || $srt->fix_slip == null) echo 'selected'; ?>>select</option>

                                        <option value="Yes" <?php if ($srt->fix_slip == 'Yes') echo 'selected'; ?>>Yes</option>
                                        <option value="No" <?php if ($srt->fix_slip == 'No') echo 'selected'; ?>>No</option>
                                    </select>
                                </div>
                            </div>


                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Fixing Slip(photo)</label>
                                <div class="controls">
                                    <input type="file" class="form-control" value="{{$srt->fs_image}}" name="fs_image">
                                </div>
                            </div>

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Meter Installation Date</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->meter_i_date}}" name="meter_i_date">
                                </div>
                            </div>

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">RMS URL</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->rms_url}}" name="rms_url">
                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">RMS Status</label>
                                <div class="controls">
                                    <select class="form-control" name="rms_status">
                                        <option value=" " <?php if ($srt->rms_status == ' ' || $srt->rms_status == null) echo 'selected'; ?>>select</option>
                                        <option value="Installed" <?php if ($srt->rms_status == 'Installed') echo 'selected'; ?>>Installed</option>
                                        <option value="Not Installed" <?php if ($srt->rms_status == 'Not Installed') echo 'selected'; ?>>Not Installed</option>
                                    </select>
                                </div>
                            </div>

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Geo tag Photo (Y/N)</label>
                                <div class="controls">
                                    <select class="form-control" name="geo_image_status">
                                    <option value=" " <?php if ($srt->geo_image_status == ' ' || $srt->geo_image_status == null) echo 'selected'; ?>>select</option>
                                        <option value="Yes" <?php if ($srt->geo_image_status == 'Yes') echo 'selected'; ?>>Yes</option>
                                        <option value="No" <?php if ($srt->geo_image_status == 'No') echo 'selected'; ?>>No</option>
                                    </select>
                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Geo tag Photo</label>
                                <div class="controls">
                                    <input type="file" class="form-control" value="{{$srt->geo_image1}}" name="geo_image1">
                                </div>
                            </div>
                            <!-- <div class="form-group col-md-6">-->
                            <!--    <label for="exampleInputUsername1">Geo tag Photo</label>-->
                            <!--    <div class="controls">-->
                            <!--        <input type="file" class="form-control" value="{{$srt->geo_image2}}" name="geo_image2">-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!-- <div class="form-group col-md-6">-->
                            <!--    <label for="exampleInputUsername1">Geo tag Photo</label>-->
                            <!--    <div class="controls">-->
                            <!--        <input type="file" class="form-control" value="{{$srt->geo_image3}}" name="geo_image3">-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!-- <div class="form-group col-md-6">-->
                            <!--    <label for="exampleInputUsername1">Geo tag Photo</label>-->
                            <!--    <div class="controls">-->
                            <!--        <input type="file" class="form-control" value="{{$srt->geo_image4}}" name="geo_image4">-->
                            <!--    </div>-->
                            <!--</div>-->

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1"> ABC Format</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->abc_format}}" name="abc_format">

                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">ABC Photo</label>
                                <div class="controls">
                                    <input type="file" class="form-control" value="{{$srt->abc_photo}}" name="abc_photo">
                                </div>
                            </div>


                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Commision Report</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->comm_report}}" name="comm_report">

                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Commision Report document</label>
                                <div class="controls">
                                    <input type="file" class="form-control" value="{{$srt->cr_doc}}" name="cr_doc">
                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1"> IV Curv </label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->iv_curv}}" name="iv_curv">

                                </div>
                            </div>
                            <!-- <div class="form-group col-md-6">-->
                            <!--    <label for="exampleInputUsername1">IV Curv Doc</label>-->
                            <!--    <div class="controls">-->
                            <!--        <input type="file" class="form-control" value="{{$srt->iv_curv_doc}}" name="iv_curv_doc">-->
                            <!--    </div>-->
                            <!--</div>-->

                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Inspection Photo</label>
                                <div class="controls">
                                    <!-- <input type="file" class="form-control" value="{{$srt->inspect_image}}" name="inspect_image"> -->
                                    <select class="form-control" name="inspect_image">
                                    <option value=" " <?php if ($srt->inspect_image == ' ' || $srt->inspect_image == null) echo 'selected'; ?>>select</option>

                                        <option value="Yes" <?php if ($srt->inspect_image == 'Yes') echo 'selected'; ?>>Yes</option>
                                        <option value="No" <?php if ($srt->inspect_image == 'No') echo 'selected'; ?>>No</option>
                                    </select>
                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1"> Insurance</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->insurance}}" name="insurance">

                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Insurance Copy</label>
                                <div class="controls">
                                    <input type="file" class="form-control" value="{{$srt->insurance_copy}}" name="insurance_copy">
                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1"> WMS</label>
                                <div class="controls">
                                    <!-- <input type="text" class="form-control" value="{{$srt->wms}}" name="wms"> -->
                                    <select class="form-control" name="wms">
                                    <option value=" " <?php if ($srt->wms == ' ' || $srt->wms == null) echo 'selected'; ?>>select</option>

                                        <option value="Yes" <?php if ($srt->wms == 'Yes') echo 'selected'; ?>>Yes</option>
                                        <option value="No" <?php if ($srt->wms == 'No') echo 'selected'; ?>>No</option>
                                    </select>

                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1"> WMS Login Detail</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->wms_login}}" name="wms_login">

                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="exampleInputUsername1"> Final Inspection Dt.</label>
                                <div class="controls">
                                    <!-- <input type="text" class="form-control" value="{{$srt->final_i_dt}}" name="final_i_dt"> -->
                                    <select class="form-control" name="final_i_dt">
                                    <option value=" " <?php if ($srt->final_i_dt == ' ' || $srt->final_i_dt == null) echo 'selected'; ?>>select</option>

                                        <option value="Yes" <?php if ($srt->final_i_dt == 'Yes') echo 'selected'; ?>>Yes</option>
                                        <option value="No" <?php if ($srt->final_i_dt == 'No') echo 'selected'; ?>>No</option>
                                    </select>

                                </div>
                            </div>
                             <div class="form-group col-md-12">
                                <label for="exampleInputUsername1"> Agency Remarks</label>
                                <div class="controls">
                                    <input type="text" class="form-control" value="{{$srt->agency_remarks}}" name="agency_remarks">

                                </div>
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

@include('component.footer')
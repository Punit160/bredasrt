@include('component.table-head')
@include('component.upksc-header')
<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-2"><span class="text-muted fw-light">Home /</span> View Complaints
    </h4>

    <!-- Static Table Start -->
    <style>
      @media (max-width: 767px) {
        #topl2 {
          margin-top: 15px !important;
        }
      }

      @media (max-width: 992px) {
        #topl1 {
          margin-top: 15px !important;
        }
      }

      .btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
        border-right: 1px solid #dadada;
      }

      :not(.btn-group):not(.input-group)>.btn-group>.btn:not([class*=btn-outline-]):first-child {
        border-left: 1px solid #dadada;
      }
    </style>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    @if(session()->has('status'))
    <div class="alert my-3 p-3 alert-success">
      {{session('status')}}
    </div>
    @endif
    <div class="data-table-area mg-b-15 card">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!--<h4 style="color: #8a8a91; font-weight: 400; margin-left:10px;">View All Bc Sakhi Transaction</h4>-->
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline13-list">
              <div class="sparkline13-hd">
                <div class="main-sparkline13-hd">
                  <!-- <h4 style="color: #8a8a91; font-weight: 500;">Month Wise Data</h4> -->
                </div>
              </div>
              <div class="sparkline13-graph">
                <div class="datatable-dashv1-list custom-datatable-overright">
                <table id="table" class="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                    
                   <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Site Details</th>
                    <th>Engineer Remarks</th>
                    <th>Final Remarks</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 @foreach($data as $Complaint)
                        <td>{{ $data->firstItem()+$loop->index}}</td>
                    <td>
                      <p><span style="font-weight: 600;">District:</span>  {{$Complaint->district}} </p>
                      <p><span style="font-weight: 600;">Block:</span> {{$Complaint->block}} </p>
                      <p><span style="font-weight: 600;">Village:</span> {{$Complaint->village}} </p>
                      <p><span style="font-weight: 600;">Complaint:</span>  {{$Complaint->complaint}} </p>
                    </td>
                    @php $engine = DB::table('engineers')->where('id', $Complaint->engineer_assign)->first();  @endphp
                    <td>
                      <p><span style="font-weight: 600;">Engineer Name: {{$engine->engineer ??  '' }}</span> </p>
                      <p><span style="font-weight: 600;">Status: Completed</span> </p>
                      <p><span style="font-weight: 600;">Remarks:</span> {{$Complaint->solved_remark ??  '' }} </p>
                      <div>
                          @if($Complaint->image)
                          @php
                          $filePath = asset('uploads/image/' .$Complaint->image);
                          $fileInfo = pathinfo($filePath);
                          $extension = strtolower($fileInfo['extension'] ?? '');
                          @endphp

                          @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                          <a href="{{ $filePath }}" target="_blank" alt=" file">
                            <img src="{{ $filePath }}" alt=" Image" class="hidden-image" style="width: 100px; height: auto;">
                          </a>

                          @else
                          <a href="{{ $filePath }}" download>
                            <i class="fas fa-download"></i> {{($extension) }}
                          </a>
                          @endif

                          @else
                          <p>No file available</p>
                          @endif
                      </div>
                    </td>
                    <td>
                      <p><span style="font-weight: 600;">Status:</span> @if($Complaint->final_status == 0)
                          <span>Open</span>
                        @else
                          <span style="color:red">Closed </span>
                        @endif   </p>
                      <p><span style="font-weight: 600;">Remarks:</span> {{$Complaint->final_remarks}} </p>
                    </td>
                    <td style="text-wrap: nowrap;">
                        <a href="{{ route('final-kusumc-approve', ['id' => $Complaint->id]) }}" class="btn btn-secondary" role="button" ><i class="fa-solid fa-pen-to-square"></i></a> &nbsp; 
                      <!--<a href="javascript:void(0)" class="btn btn-danger" role="button"><i class="fa-solid fa-trash-can" style="cursor:pointer;" role="button"></i></a>-->
                    </td>
                  </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Site Details</th>
                    <th>Engineer Remarks</th>
                    <th>Final Remarks</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                  </table>
                  <div class="pagination d-flex flex-row-reverse">
                    {{ $data->links('vendor.pagination.bootstrap-4') }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Static Table End -->
  </div>
  <!-- / Content -->

  <!-- Footer -->

  @include('component.table-footer')
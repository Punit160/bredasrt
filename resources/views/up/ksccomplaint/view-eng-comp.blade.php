@include('component.head')
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

          <!--<hr class="mt-4" style="width: 97.5%;">-->

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
                        <th data-field="S.NO">Sr. no.</th>
                        <th data-field="complaindate" data-editable="true">Complaint Date</th>
                        <th data-field="District" data-editable="true">District</th>
                        <th data-field="Block" data-editable="true">Block</th>
                        <th data-field="Village" data-editable="true">Village</th>
                        <th data-field="Complaint" data-editable="true">Complaint Detail</th>
                        <th data-field="Complaint BY" data-editable="true">Complaint BY</th>
                        <th data-field="File" data-editable="true">File</th>
                        <th data-field="eng remarks" data-editable="true">Engineer Remarks</th>
                        <th data-field="file_sub" data-editable="true">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach($data as $Complaint)
                        <td>{{ $data->firstItem()+$loop->index}}</td>
                        <td>{{$Complaint->complain_date}}</td>
                        <td>{{$Complaint->district}}</td>
                        <td>{{$Complaint->block}}</td>
                        <td>{{$Complaint->village}}</td>
                        <td>{{$Complaint->complaint}}</td>
                        <td>{{$Complaint->created_by}}</td>
                        <td class="file-container">
                          @if ($Complaint->image)
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
                        </td>
                         <td>{{$Complaint->solved_remark}}</td>
                        @if($Complaint->status == 0)

                        <td>
                          <a href="{{ route('close-kusumc', ['id' => $Complaint->id]) }}">
                            <i class="fa fa-pencil-square-o" style="color:blue"></i>
                          </a>

                        </td>
                        @else
                        <td>
                          <span>Completed</span>
                        </td>
                        @endif
                      </tr>
                      @endforeach

                    </tbody>
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
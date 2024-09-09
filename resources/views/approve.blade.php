@include('component.sidebar')

@include('component.header')
<!-- / Navbar -->
<!-- / Navbar -->



<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> Add Complaints</h4> -->

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
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

                    <div class="card-body">
                        <h4 style="font-weight: 500; color:#8a8a91;"> Approve Complaint Closing</h4>

                        <form method="post" action="{{ route('approve-closing') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <input type="hidden" name="id" value="{{$complaint->id}}">

                                <div class="form-group col-md-12 my-2 col-sm-12">
                                    @php
                          $filePath = asset('uploads/image/' .$complaint->image);
                          $fileInfo = pathinfo($filePath);
                          $extension = strtolower($fileInfo['extension'] ?? '');
                          @endphp

                          @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                          <a href="{{ $filePath }}" target="_blank" alt=" file">
                            <img src="{{ $filePath }}" alt=" Image" class="hidden-image" >
                          </a>
                          @endif
                                </div>
                                <div class="form-group col-md-12 my-2 col-sm-12">
                                    <label>Approval</label>
                                    <select name="approve"  class="form-control select2">
                                        <option value="Approved">Approve</option>
                                        <option value="Rejected">Reject</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12 my-2 col-sm-12">
                                    <label>Remarks</label>
                                    <textarea class="form-control" name="remarks" required></textarea>
                                </div>

                                <div class=" col-md-4 my-4 col-sm-12">
                                    <button type="submit" class="btn btn-primary" style="width: 25% !important ;">Submit</button>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->

<!-- Footer -->
<script>
    function initMap() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {}
    }

    function showPosition(position) {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        document.getElementsByName("latitude")[0].value = latitude;
        document.getElementsByName("longitude")[0].value = longitude;
    }
    window.onload = function() {
        initMap();
    };
</script>
@include('component.footer')
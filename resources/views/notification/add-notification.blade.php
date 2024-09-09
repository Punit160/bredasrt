@include('component.head')
@if($state == 'bihar')
@include('component.header')
@elseif($state == 'up')
@include('component.kusum-header')
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
                    <h1>Add Notification</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Notification</li>
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
                    <h3 class="card-title text-white">Add Notification</h3>

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
                <form method="post" action="{{route('save-notification')}}">
                            @csrf
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            
                                          <div class="form-group col-md-6 my-2 col-sm-12">
                  <label for="ware">Email *</label>
                  <select name="userId"  class="form-control" id="emailSelect" required>
                     <option value="dis">Select...</option>
                      @foreach($user as $users)
                      <option value="{{$users->id}}">{{$users->email}}</option>
                      @endforeach
                    </select>
                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="userName" name="name" required>
                                </div> 
                                
                 
                
               <div class="form-group col-md-12 my-2 col-sm-12">
                  <label for="ware">Task Type</label>
                  <select name="task_type" id='task'  class="form-control" required>
                     <option disabled>Select...</option>
                     <option value="1">One Time</option>
                     <option value="2">Recurring</option>
                    </select>
                </div>
                
                      
               <div class="form-group col-md-12 my-2 col-sm-12" id='frequency' style="display:none">
                  <label>Frequency</label>
                  <select name="frequency"  class="form-control">
                     <option value="">Select...</option>
                     <option value="1">Daily</option>
                     <option value="2">Weekly</option>
                     <option value="3">Monthly</option>
                    </select>
                </div>


                          <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Task</label> 
                                 <textarea class="form-control" name="task"  rows="4" cols="50"required></textarea>
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Instruction</label> 
                                 <textarea class="form-control" name="instruction"  rows="4" cols="50"required></textarea>
                            </div>
                            
                             <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Deadline Date</label>
                                <input type="date" class="form-control" name="date" required>
                            </div>
                            
                             <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Deadline Time</label>
                                <input type="time" class="form-control" name="time" required>
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

<script>
    const taskfun =   document.querySelector('#task').addEventListener('change', function(){
       const taskVal = document.querySelector('#task').value
       if(taskVal === '2'){
           document.querySelector('#frequency').style.display = 'block'
       }
       else{
           document.querySelector('#frequency').style.display = 'none'
       }
   })
   
</script>

@include('component.footer')

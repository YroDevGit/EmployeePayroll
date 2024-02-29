@extends('pages.partials.body')

@section('content')

<script>document.getElementById('mainTitle').innerHTML = "Payroll:: Employee";</script>

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">New Employee</h4>
                <p class="card-description">Please fill up the form. </p>
                <form class="forms-sample" method="post" action="{{route('addEmployee')}}">
                  @csrf

                  
                  <div class="form-group">
                    <label for="exampleInputUsername1">Fullname @error('fullname') <span class="text-danger">{{" *Please fill up this field"}}</span> @enderror</label>
                    
                    <input type="text" class="form-control" name="fullname" id="exampleInputUsername1" placeholder="Username" value="{{old('fullname')}}">
                  </div>
                  

                  <div class="form-group">
                    <label for="exampleInputUsername1">Birth Date @error('birth') <span class="text-danger">{{" *Please fill up this field"}}</span> @enderror</label>
                    <input type="date" class="form-control" onclick="this.showPicker()" id="exampleInputUsername1" name="birth" placeholder="Birth Date" value="{{old('birth')}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputUsername1">Contact @error('contact') <span class="text-danger">{{" *Please fill up this field"}}</span> @enderror</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" name="contact" placeholder="Contact" value="{{old('contact')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Address @error('address') <span class="text-danger">{{" *Please fill up this field"}}</span> @enderror</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" name="address" placeholder="Address" value="{{old('address')}}">
                  </div>


                  <div class="form-group">
                    <label for="">Role</label>
                    <div id="selector">
                    
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputUsername1">Hire Date @error('hire') <span class="text-danger">{{" *Please fill up this field"}}</span> @enderror</label>
                    <input type="date" class="form-control" id="exampleInputUsername1" onclick="this.showPicker()" name="hire" placeholder="Birth Date" value="{{old('hire')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address @error('email') <span class="text-danger">{{$message}}</span> @enderror</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" value="{{old('email')}}">
                  </div>
                  
                  <div align='center'>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </div>

                  @if (Session('success'))
                      <div id="successModax"></div>
                  @endif

                  @if (Session('deleted'))
                  <div id="deleteSuccess"></div>
                  @endif
                  
                </form>
              </div>
            </div>
          </div>

          <div class="col-lg-9 grid-margin stretch-card" id="employeeTable">
           

            
          </div>


      </div>
    </div>
</div>


@endsection
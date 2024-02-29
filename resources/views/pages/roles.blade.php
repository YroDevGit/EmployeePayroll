@extends('pages.partials.body')

@section('content')

<script>document.getElementById('mainTitle').innerHTML = "Payroll:: Roles";</script>


<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">New Role</h4>
                <p class="card-description">Please fill up the form. </p>
                <form class="forms-sample" method="post" action="{{route('addRole')}}">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputUsername1">Job @error('job') <span class="text-danger">{{" *Please fill up this field"}}</span> @enderror</label>
                    
                    <input type="text" class="form-control" name="job" id="exampleInputUsername1" placeholder="Username" value="{{old('fullname')}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputUsername1">Salary @error('salary') <span class="text-danger">{{" *Please fill up this field"}}</span> @enderror</label>
                    
                    <input type="number" class="form-control" name="salary" id="exampleInputUsername1" placeholder="Username" value="{{old('fullname')}}">
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

          <div class="col-lg-9 grid-margin stretch-card" id="jobRoles">
           

            
          </div>


      </div>
    </div>
</div>




@endsection
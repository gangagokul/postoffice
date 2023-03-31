@extends('admin.header_footer')
@section('index_body')
<div class="row g-0">
                <div class="col-lg-3"></div>
                <div class="col-lg-8">
<div class="mx-5 my-5"> 

      <br><br><br><br>
      
          <!-- Horizontal Form -->
          <div class="card card-info">
            
            <div class="card-header">
              <h3 class="card-title">ADMIN PROFILE</h3>
            </div>
           
                
                
            <!-- /.card-header -->
            <!-- form start -->
            
            @foreach($profile as $value)
            <form class="form-horizontal" method="post" action="/adminprofileaction" >
            @csrf
              <div class="card-body">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email"   value="{{$value->email}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-4 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" value="{{$value->password}}" >
                  </div>
                </div>
                <div class="form-group row">
                  <div class="offset-sm-2 col-sm-10">

                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info">Update</button>
                
              <!-- /.card-footer -->
            </form>
            @endforeach
          </div>
          <!-- /.card -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
      </div>
</div>

      </div>
           
  
@endsection
  
@extends('admin.header_footer')
@section('index_body')

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-6">

          <div class="card-b-0">
            <div class="card-header">
              <h3 class="card-title">View User</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body-0">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Date of Birth </th>
                    <th>Address</th>
                    <th>Pincode</th>
                    <th>Contact Number</th>
                    <th>State</th>
                    <th>City</th>
                    <th>District</th>
                    <th>User Name</th>
                    <th>Password</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach($views as $value)
                  <tr>
                    <td>{{$value->firstname}}</td>
                    <td>{{$value->lastname}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->date}}</td>
                    <td>{{$value->address}}</td>
                    <td>{{$value->pincode}}</td>
                    <td>{{$value->contactno}}</td>
                    <td>{{$value->state}}</td>
                    <td>{{$value->city}}</td>
                    <td>{{$value->district}}</td>
                    <td>{{$value->username}}</td>
                    <td>{{$value->password}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

</section>

@endsection
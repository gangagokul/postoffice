@extends('admin.header_footer')
@section('index_body')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">

          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>
                </tr>
              </thead>
              <tbody>
                @foreach($result as $value)
                <tr>
                  <td>{{$value->name}}</td>
                  <td>{{$value->email}}</td>
                  <td>{{$value->subject}}</td>
                  <td>{{$value->message}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
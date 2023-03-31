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
                  <th>Title</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
                @foreach($res as $value)
                <tr>
                  <td>{{$value->title}}</td>
                  <td>{{$value->description}}</td>
                  <td><a href="/editabout/{{$value->id}}">edit</a></td>
                  <td><a href="/deleteabout/{{$value->id}}">delete</a></td>
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
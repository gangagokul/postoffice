@extends('admin.header_footer')
@section('index_body')

<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="row g-0">
       
      <div class="col-lg-3"></div>
      <div class="col-lg-8">
       
      

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">TELEGRAM</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>

                                    <th> ADDRESS </th>
                                    
                                    <th>PINCODE</th>
                                    <th>MESSAGE</th>
                                    <th>STATUS</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tel as $value)
                                <tr>
                                    
                                    <td>{{$value->address}}</td>
                                    <td>{{$value->pincode}}</td>
                                    <td>{{$value->message}}</td>
                                    <td>{{$value->status}}</td>
                                    <td><a href="/send/{{$value->id}}">Send</a></td>
                                   
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
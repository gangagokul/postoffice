@extends('admin.header_footer')
@section('index_body')

<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="row g-0">
                <div class="col-lg-2"></div>
                <div class="col-lg-6">
        
      

                <div class="card-b-0">
                    <div class="card-header">
                        <h3 class="card-title">View Fixed Deposit</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body-0">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th> NAME</th>
                                    <th>AGE</th>
                                    <th>GENDER</th>
                                    <th> ADDRESS </th>
                                    <th>CONTACT NUMBER</th>
                                    <th>PLACE</th>
                                    <th>DEPOSIT AMOUNT</th>
                                    <th> NUMBER OF YEARS</th>
                                    <th>RECEIVED AMOUNT</th>
                                    <th>RECEIPT</th>
                                    <th>CURRENT DATE</th>
                                    <th>RECEIVED DATE</th>
                                    <th>STATUS</th>
                                    <th>USER ID</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($view as $value)
                                <tr>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->age}}</td>
                                    <td>{{$value->gender}}</td>
                                    <td>{{$value->address}}</td>
                                    <td>{{$value->contact}}</td>
                                    <td>{{$value->place}}</td>
                                    <td>{{$value->amount}}</td>
                                    <td>{{$value->years}}</td>
                                    <td>{{$value->receivedamount}}</td>
                                    <td><a href="/publicreceipt/{{$value->receipt}}">{{$value->receipt}}<a</td>
                                    <td>{{$value->currentdate}}</td>
                                    <td>{{$value->receiveddate}}</td>
                                    <td>{{$value->status}}</td>
                                    <td>{{$value->userid}}</td>
                                    <td><a href="/approve/{{$value->id}}">Approve</a></td>
                                    <td><a href="/decline/{{$value->id}}">Decline</a></td>
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
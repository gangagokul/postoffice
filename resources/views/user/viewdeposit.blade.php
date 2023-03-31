@extends('user.header-foot')
@section('index_head')


<div class="container">

    <h2>Fixed Deposit</h2>
    <div class="row">


        @foreach($view as $value)

        <div class="col-sm-4  mx-3">
            <div class="card " style="width:400px">
                <div class="card-body ">


                    <table>
                        <tr class="card-title">
                            <th>NAME:</th>
                            <td>
                                <h4>{{$value->name}}</h4>
                            </td>
                        </tr>
                        <tr class="card-title">
                            <th>AGE:</th>
                            <td>
                                <p>{{$value->age}}</p>
                            </td>
                        </tr>
                        <tr class="card-title">
                            <th>GENDER:</th>
                            <td>
                                <p>{{$value->gender}}</p>
                            </td>
                        </tr>
                        <tr class="card-title">
                            <th>ADDRESS:</th>
                            <td>
                                <p>{{$value->address}}</p>
                            </td>
                        </tr>
                        <tr class="card-title">
                            <th>CONTACT NUMBER:</th>
                            <td>
                                <p>{{$value->contact}}</p>
                            </td>
                        </tr>
                        <tr class="card-title">
                            <th>PLACE:</th>
                            <td>
                                <p>{{$value->place}}</p>
                            </td>
                        </tr>
                        <tr class="card-title">
                            <th>DEPOSIT AMOUNT:</th>
                            <td>
                                <p>{{$value->amount}}</p>
                            </td>
                        </tr>
                        <tr class="card-title">
                            <th>NUMBER OF YEARS:</th>
                            <td>
                                <p>{{$value->years}}</p>
                            </td>
                        </tr>
                        <tr class="card-title">
                            <th>RECEIVED AMOUNT:</th>
                            <td>
                                <p>{{$value->receivedamount}}</p>
                            </td>
                        </tr>
                        <tr class="card-title">
                            <th>RECEIPT:</th>
                            <td><a href="/publicreceipt/{{$value->receipt}}">
                                    <p>{{$value->receipt}}</p>
                                </a>
                            </td>
                        </tr>
                        <tr class="card-title">
                            <th>CURRENT DATE:</th>
                            <td>
                                <p>{{$value->currentdate}}</p>
                            </td>
                        </tr>
                        <tr class="card-title">
                            <th>RECEIVED DATE:</th>
                            <td>
                                <p>{{$value->receiveddate}}</p>
                            </td>
                        </tr>
                        <tr class="card-title">
                            <th>STATUS:</th>
                            <td>
                                <p>{{$value->status}}</p>
                            </td>
                        </tr>
                        <tr class="card-title">
                            <th>USER ID:</th>
                            <td>
                                <p>{{$value->userid}}</p>
                            </td>
                        </tr>
                        @if($value->receipt=='pending')
                        <tr class="card-title">
                       
                            <td>
                               
                                <p><a href="/uploadreceipt/{{$value->id}}" class="btn btn-primary stretched-link">Upload Receipt</a>
                                </p>
                                
                            </td>
                        </tr>
                        @endif
                    </table>


                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
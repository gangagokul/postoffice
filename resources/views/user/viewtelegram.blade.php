@extends('user.header-foot')
@section('index_head')


<div class="container">

    <h2>TELEGRAM</h2>
    <div class="row">


        @foreach($tel as $value)

        <div class="col-sm-4  mx-3">
            <div class="card " style="width:400px">
                <div class="card-body ">


                    <table>

                        <tr class="card-title">
                            <th>ADDRESS:</th>
                            <td>
                                <p>{{$value->address}}</p>
                            </td>
                        </tr>

                        <tr class="card-title">
                            <th>PINCODE:</th>
                            <td>
                                <p>{{$value->pincode}}</p>
                            </td>
                        </tr>

                        <tr class="card-title">
                            <th>MESSAGE:</th>
                            <td>
                                <p>{{$value->message}}</p>
                            </td>
                        </tr>

                       
                       
                        </tr>
                        <tr class="card-title">
                            <th>STATUS:</th>
                            <td>
                                <p>{{$value->status}}</p>
                            </td>
                       
                        </tr>
                        
                    </table>


                </div>
            </div>
          
        </div>
        @endforeach
    </div>
</div>
@endsection
@extends('header-register')
@section('index_reg')
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 pb-4 pb-lg-0">
                <img class="img-fluid w-100" src="img/about.jpg" alt="">
                <div class="bg-primary text-dark text-center p-4">
                </div>
            </div>
            
            <div class="col-lg-7">
                <h6 class="text-primary text-uppercase font-weight-bold">About Us</h6>
                @foreach($res as $value)
                <tr>
              
                    <h1><td>{{$value->title}}</td></h1><br>
                    <td>{{$value->description}}</td>
                    
          
                </tr>
                @endforeach
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
@endsection
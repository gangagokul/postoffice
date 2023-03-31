@extends('user.header-foot')
@section('index_head')
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 pb-4 pb-lg-0">


            </div>

            <div class="col-lg-7">
                <h1 class="text-primary text-uppercase font-weight-bold">Fixed Deposit</h1>

                <div class="register-form bg-secondary" style="padding: 30px;">
                    <div id="success"></div>
                    @foreach($rec as $value)
       
                    <form action="/uploadaction/{{$value->id}}" enctype="multipart/form-data" method="post" name="upload" id="upload">
                        @csrf
                        <div class="control-group">
                            RECEIPT:* <input type="file" class="form-control border-0 p-4" id="receipt" name="receipt" />
                            <p class="help-block text-danger"></p>
                        </div>
                        
                        <button class="btn btn-primary py-3 px-4" type="submit" id="submit" name="submit">Upload
                            </button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
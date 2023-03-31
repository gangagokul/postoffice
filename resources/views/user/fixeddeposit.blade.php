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
                    @foreach($fixed as $value)
                    <form action="/depositaction" method="post" name="deposit" id="deposit">

                        @csrf
                        <div class="control-group">
                            NAME: <input type="text" class="form-control border-0 p-4" id="name" name="name" value="{{$value->firstname}} {{$value->lastname}}"  data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            AGE: <input type="number" class="form-control border-0 p-4" min=18 id="age" name="age" placeholder="Your age should be minimum 18 "  data-validation-required-message="Please enter your age" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            GENDER: <input type="radio" id="gender" name="gender" value="male"  data-validation-required-message="Please enter your gender" />Male
                            <input type="radio" id="gender" name="gender" value="female" required="required" data-validation-required-message="Please enter your gender" />Female
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="control-group">
                            ADDRESS: <textarea class="form-control border-0 py-3 px-4" rows="3" id="address" name="address" value="{{$value->address}}"  data-validation-required-message="Please enter your address">{{$value->address}}</textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            CONTACT NUMBER : <input type="text" class="form-control border-0 p-4" id="contact" name="contact" value="{{$value->contactno}}"  data-validation-required-message="Please enter your contact number" />
                            <p class="help-block text-danger"></p>
                        </div>
                        
                        <div class="control-group">
                            PLACE :<input type="text" class="form-control border-0 p-4" id="place" name="place" placeholder="Your place " data-validation-required-message="Please enter your place" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            DEPOSIT AMOUNT :<input type="text" class="form-control border-0 p-4" id="amount" name="amount" placeholder="Your deposit amount "  data-validation-required-message="Please enter your deposit amount" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            NUMBER OF YEARS :<input type="text" class="form-control border-0 p-4" min=1 id="years" name="years" placeholder="Your deposit  should be more than 1 year "  data-validation-required-message="Please enter your deposit years" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-3 px-4" type="submit" id="submit" name="submit">Submit
                            </button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
		.error{
			color: red
		}
	</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
<script type="text/javascript">
    
    $('#deposit').validate({
        rules: {
            name: {
                required: true,
                minlength: 3
            },
            age: {
                required: true,
            minAge:18
            },
            email: {
                required: true,
                email: true
            },
            gender: {
                required: true,
                
            },
            address: {
                required: true,
            },
            
            contact: {
                required: true,
            },
            place: {
                required: true,
            },
            amount: {
                required: true,
            },
            years: {
                required: true
            },
           
        }
    })
</script>
@endsection
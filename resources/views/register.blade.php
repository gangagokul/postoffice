@extends('header-register')
@section('index_reg')


<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 pb-4 pb-lg-0">


            </div>

            <div class="col-lg-7">
                <h1 class="text-primary text-uppercase font-weight-bold">Registration form</h1>

                <div class="register-form bg-secondary" style="padding: 30px;">
                    <div id="success"></div>
                    <form action="/registeraction" method="post" name="register" id="register">
                        @csrf
                        <div class="control-group">
                            FIRST NAME: <input type="text" class="form-control border-0 p-4" id="firstname" name="firstname" placeholder="Your Name"  data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            LAST NAME: <input type="text" class="form-control border-0 p-4" id="lastname" name="lastname" placeholder="Your Last name"  data-validation-required-message="Please enter your last name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            EMAIL: <input type="email" class="form-control border-0 p-4" id="email" name="email" placeholder="Your Email"  data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            DATE OF BIRTH: <input type="date" class="form-control border-0 p-4" id="date" name="date" placeholder="Your Date of birth"  data-validation-required-message="Please enter your date of birth" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            ADDRESS: <textarea class="form-control border-0 py-3 px-4" rows="3" id="address" name="address" placeholder="address"  data-validation-required-message="Please enter your address"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            PINCODE: <input type="number" class="form-control border-0 p-4" id="pincode" name="pincode" placeholder="Your Pincode"  data-validation-required-message="Please enter your Pincode" />
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="control-group">
                            CONTACT NUMBER: <input type="number" class="form-control border-0 p-4" id="contactno" name="contactno" placeholder="Your contact number"  data-validation-required-message="Please enter your contact number" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            STATE: <input type="text" class="form-control border-0 p-4" id="state" name="state" placeholder="Your State"  data-validation-required-message="Please enter your state" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            CITY: <input type="text" class="form-control border-0 p-4" id="city" name="city" placeholder="Your city"  data-validation-required-message="Please enter your city" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            DISTRICT: <input type="text" class="form-control border-0 p-4" id="district" name="district" placeholder="Your District"  data-validation-required-message="Please enter your district" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            USER NAME: <input type="TEXT" class="form-control border-0 p-4" id="username" name="username" placeholder="Your username"  data-validation-required-message="Please enter your username" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            PASSWORD:<input type="password" class="form-control border-0 p-4" id="password" name="password" placeholder="Your password"  data-validation-required-message="Please enter your password" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-3 px-4" type="submit" id="submit" name="submit">Submit
                            </button>
                        </div>
                    </form>

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
    
    $('#register').validate({
        rules: {
            firstname: {
                required: true,
                minlength: 3
            },
            lastname: {
                required: true,
                minlength: 1
            },
            email: {
                required: true,
                email: true
            },
            date: {
                required: true,
                
            },
            address: {
                required: true,
            },
            pincode: {
                required: true,
            },
            contactno: {
                required: true,
            },
            state: {
                required: true,
            },
            city: {
                required: true,
            },
            district: {
                required: true
            },
            username: {
   					required: true,
   					minlength: 4
   				},
                   password:{
   					required:true,
   					minlength:5
   				}
        }
    })
</script>
    @endsection

       
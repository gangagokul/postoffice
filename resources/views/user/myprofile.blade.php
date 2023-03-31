@extends('user.header-foot')
@section('index_head')
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 pb-4 pb-lg-0">


            </div>

            <div class="col-lg-7">
                <h1 class="text-primary text-uppercase font-weight-bold">My Profile</h1>

                <div class="register-form bg-secondary" style="padding: 30px;">
                    <div id="success"></div>
                    @foreach($profile as $value)
                    <form action="/profileaction/{{$value->id}}" method="post" name="profile" id="profile">
                        @csrf
                        <div class="control-group">
                            FIRST NAME: <input type="text" class="form-control border-0 p-4" id="firstname" name="firstname" value="{{$value->firstname}}" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            LAST NAME: <input type="text" class="form-control border-0 p-4" id="lastname" name="lastname" value="{{$value->lastname}}" required="required" data-validation-required-message="Please enter your last name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            EMAIL <input type="email" class="form-control border-0 p-4" id="email" name="email" value="{{$value->email}}" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            DATE OF BIRTH <input type="date" class="form-control border-0 p-4" id="date" name="date" value="{{$value->date}}" required="required" data-validation-required-message="Please enter your date of birth" />
                            <p class="help-block text-danger"></p>
                        </div>
                        ADDRESS <div class="control-group">
                            <textarea class="form-control border-0 py-3 px-4" rows="3" id="address" name="address" value="{{$value->address}}" required="required" data-validation-required-message="Please enter your address">{{$value->address}}</textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        PINCODE<div class="control-group">
                            <input type="number" class="form-control border-0 p-4" id="pincode" name="pincode" value="{{$value->pincode}}" required="required" data-validation-required-message="Please enter your Pincode" />
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="control-group">
                            CONTACT NUMBER: <input type="number" class="form-control border-0 p-4" id="contactno" name="contactno" value="{{$value->contactno}}" required="required" data-validation-required-message="Please enter your contact number" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            STATE: <input type="text" class="form-control border-0 p-4" id="state" name="state" value="{{$value->state}}" required="required" data-validation-required-message="Please enter your state" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            CITY: <input type="text" class="form-control border-0 p-4" id="city" name="city" value="{{$value->city}}" required="required" data-validation-required-message="Please enter your city" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            DISTRICT: <input type="text" class="form-control border-0 p-4" id="district" name="district" value="{{$value->district}}" required="required" data-validation-required-message="Please enter your district" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            USER NAME <input type="TEXT" class="form-control border-0 p-4" id="username" name="username" value="{{$value->username}}" required="required" data-validation-required-message="Please enter your username" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            PASSWORD<input type="password" class="form-control border-0 p-4" id="password" name="password" value="{{$value->password}}" required="required" data-validation-required-message="Please enter your password" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-3 px-4" type="submit" id="submit" name="submit">UPDATE
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
@extends('header-register')
@section('index_reg')

<div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 pb-4 pb-lg-0">

                    
                </div>
              
                <div class="col-lg-7">
                    <h1 class="text-primary text-uppercase font-weight-bold">User login form</h1>
                  
                    <div class="register-form bg-secondary" style="padding: 30px;">
                        <div id="success"></div>
                        <form action="/loginaction" method="post" name="login" id="login">
                            @csrf
                            <div class="control-group">
                            USER NAME <input type="TEXT" class="form-control border-0 p-4" id="username" name="username" placeholder="Your username"
                                    required="required" data-validation-required-message="Please enter your username" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                               PASSWORD<input type="password" class="form-control border-0 p-4" id="password" name="password" placeholder="Your password"
                                    required="required" data-validation-required-message="Please enter your password" />
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
  
    @endsection
  

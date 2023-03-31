@extends('user.header-foot')
@section('index_head')
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 pb-4 pb-lg-0">


            </div>

            <div class="col-lg-7">
                <h1 class="text-primary text-uppercase font-weight-bold">apply for Telegram</h1>

                <div class="telegram-form bg-secondary" style="padding: 30px;">
                    <div id="success"></div>
                  
                    <form action="/telegramaction" method="post" name="telegram" id="telegram">
                        @csrf
                        <div class="control-group">
                       ADDRESS:  <textarea class="form-control border-0 py-3 px-4" rows="3" id="address" name="address" placeholder="address" required="required" data-validation-required-message="Please enter your address"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                        PINCODE: <input type="number" class="form-control border-0 p-4" id="pincode" name="pincode" placeholder="Your Pincode " required="required" data-validation-required-message="Please enter your Pincode" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            CONTACT NUMBER: <input type="number" class="form-control border-0 p-4" id="contactno" name="contactno" placeholder="Your contact number" required="required" data-validation-required-message="Please enter your contact number" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            MESSAGE:<textarea class="form-control border-0 py-3 px-4" rows="3" id="message" name="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>

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

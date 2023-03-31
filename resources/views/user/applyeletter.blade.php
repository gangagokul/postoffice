@extends('user.header-foot')
@section('index_head')
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 pb-4 pb-lg-0">


            </div>

            <div class="col-lg-7">
                <h1 class="text-primary text-uppercase font-weight-bold"> Apply E Letter</h1>

                <div class="register-form bg-secondary" style="padding: 30px;">
                    <div id="success"></div>
                    <form action="/applyaction" method="post" name="apply" id="apply">
                        @csrf
                        <div class="control-group">
                       ADDRESS:  <textarea class="form-control border-0 py-3 px-4" rows="3" id="address" name="address" placeholder="address" required="required" data-validation-required-message="Please enter your address"></textarea>
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

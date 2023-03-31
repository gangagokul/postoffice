@extends('header-register')
@section('index_reg')
<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container-fluid">
        <div class="bg-primary text-dark text-center p-4">

            <div class="col-lg-10">
                <h6 class="text-primary text-uppercase font-weight-bold">Contact Us</h6>
                <h1 class="mb-4">Contact For Any Queries</h1>
                <div class="contact-form bg-secondary" style="padding: 30px;">
                    <div id="success"></div>

                    <form action="/contactaction" method="post">
                        @csrf
                        <div class="control-group">
                            <input type="text" class="form-control border-0 p-4" id="name" name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control border-0 p-4" id="email" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control border-0 p-4" id="subject" name="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control border-0 py-3 px-4" rows="3" id="message" name="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton" name="sendmessage">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
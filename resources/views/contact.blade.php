@extends('layouts.websiteApp')
@section('content')





<section id="sct_contact_form" class="slice slice-lg" data-delimiter-before="1">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-lg-6">
            <h3>Contact us</h3>
            <p class="lead">If there's something we can help you with, jut let us know. We'll be more than happy to offer you our help</p>
            <form class="mt-5">
              <div class="form-group">
                <label class="sr-only">Your name</label>
                <input class="form-control form-control-lg" placeholder="Your name" type="text">
              </div>
              <div class="form-group">
                <label class="sr-only">Email address</label>
                <input class="form-control form-control-lg" placeholder="Email address" type="text">
              </div>
              <div class="form-group">
                <label class="sr-only">Type your message</label>
                <textarea class="form-control form-control-lg textarea-autosize" rows="5" placeholder="Type your message"></textarea>
              </div>
              <button type="submit" class="btn btn-dark rounded-pill mt-4">Send message</button>
            </form>
          </div>
          <div class="col-lg-5 ml-lg-auto">
            <h3>Wazir Akbar khan district , 15th street<br>Kabul, Afghanistal</h3>
            <p class="lead my-4">E: <a href="">haris.qurishi123@gmail.com</a><br>T: 0782589600</p>
          </div>
        </div>
      </div>
    </section>


@endsection
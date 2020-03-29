@extends('layout.app')

@section('title', 'Page Title')


@section('content')
    <div id="offers-page">
        <div class="content-box">
          <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Sign Up To Recieve Notifications For Deals</h1>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstnameimput">First Name</label>
                                <input type="email" class="form-control" name="fname" id="firstnameinput" placeholder="James">
                              </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastnameinput">Last Name</label>
                                <input name="lname"ype="text" class="form-control" id="lastnameinput" placeholder="Dizzy">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emailinput">Email address</label>
                                <input type="email" class="form-control" name="email" id="emailinput" placeholder="name@example.com">
                              </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phoneinput">Phone Number</label>
                                <input name="phone"ype="text" class="form-control" id="phoneinput" placeholder="785-553-4822">
                            </div>
                        </div>
                    </div>

                      <div class="row">
                          <div class="col-md-6">
                            <p>In signing up I acknowledge that I am 18 years of age or older, want to recieve email offers from Abi Tasties and, if I select to join Dine Rewards, agree to the terms and conditons of the program.</p>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                              </div>
                          </div>
                      </div>
                  </form>
        </div>
     </div>
   </div>
</div>
@endsection


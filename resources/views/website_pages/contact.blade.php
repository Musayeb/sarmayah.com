@extends('master')
 @section('title')
 Contact us - Sarmayah.com
 @endsection

@section('css')

@endsection

@section('styles')
ul{
list-style-type:none !important;  
}
[data-validation-required-message]{
   color:red;
}
@endsection

@section('content')

  <!-- Contact Us -->
      <section class="py-5" style="list-style-type: ">
         <div class="container">
              <nav class="bg-white" aria-label="breadcrumb">
                <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="http://localhost/Sarmaya.com">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Business lists</li>
                </ol>
             </nav>

            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <h3 class="mt-1 mb-4">Get In Touch</h3>
                  <h6 class="text-dark"><i class="mdi mdi-home-map-marker"></i> Address :</h6>
                  <p>House 42, Street 5, Kart-e-Say, Passport Street,
					Kabul, Afghanistan</p>
                  <h6 class="text-dark"><i class="mdi mdi-phone"></i> Phone :</h6>
                  <p>(+93)792-991-991</p>
         
                  <h6 class="text-dark"><i class="mdi mdi-email"></i> Email :</h6>
                  <p>info@sarmayah.com</p>

                  <div class="footer-social mb-4"><span>Follow : </span>
                     <a href="#"><i class="mdi mdi-facebook"></i></a>
                     <a href="#"><i class="mdi mdi-twitter"></i></a>
                     <a href="#"><i class="mdi mdi-instagram"></i></a>
                     <a href="#"><i class="mdi mdi-google"></i></a>
                  </div>
               </div>
               <div class="col-lg-8 col-md-8">
                  <div class="card">
                     <div class="card-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6576.190455611477!2d69.139283!3d34.50047!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x32deede1021e4b19!2sThe%20Hub%20-%20CoWorking%20Space%20in%20Kabul%2C%20Afghanistan!5e0!3m2!1sen!2sus!4v1603271093972!5m2!1sen!2sus" width="700" height="450" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Contact Us -->
      <!-- Contact Me -->
      <section class="py-5">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 section-title text-left mb-4">
                  <h2>Contact Us</h2>
               </div>
               <form name="sentMessage" class="col-lg-12 col-md-12" id="contactForm" novalidate>
                  <div class="control-group form-group">
                     <div class="controls">
                        <label>Full Name <small class="text-danger">*</small></label>
                        <input type="text" placeholder="Ex.Mandeep Osahan" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="control-group col form-group">
                        <div class="controls">
                           <label>Phone Number <small class="text-danger">*</small></label>
                           <input type="tel" placeholder="1-800-643-4500" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                     </div>
                     <div class="control-group col form-group">
                        <div class="controls">
                           <label>Email Address <small class="text-danger">*</small></label>
                           <input type="email" placeholder="youremail@gmail.com" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                     </div>
                  </div>
                  <div class="control-group form-group">
                     <div class="controls">
                        <label>Message <small class="text-danger">*</small></label>
                        <textarea placeholder="Hi there, I would like to ..." rows="4" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                     </div>
                  </div>
                  <div id="success"></div>
                  <!-- For success/fail messages -->
                  <div class="text-right">
                     <button type="submit" class="btn btn-success" id="sendMessageButton">Send Message</button>
                  </div>
               </form>
               
            </div>
         </div>
      </section>


@endsection


@section('jquery')
@endsection
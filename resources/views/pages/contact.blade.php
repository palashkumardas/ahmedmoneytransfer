@extends('master')
@section('content')
    @section('title','Home')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2 style="color:#3c9bc1;">Contact</h2>
                    
                </div>
                <p><a href="{{url('/')}}" style="color:black;">Home /</a> <a href="#">Contact Us</a></p>
            </div>
        </section>
        <!-- End Breadcrumbs -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-header">
                    <h2>Contact Us</h2>
                </div>
                <div class="row info gy-5">
                    <div class="col-lg-6 col-12">
                        <div class="info-item" >
    
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4 style="color:#3c9bc1;">Our Address</h4>
                                <p>{!! $contact->address !!}</p>
                                
                            </div>
                        </div><!-- End Info Item -->
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="info-item ">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4 style="color:#3c9bc1;">Email</h4>
                                <p><a href="#"style="color:black;">{!! $contact->email_one !!}</a></p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="info-item ">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4 style="color:#3c9bc1;">Call</h4>
                                <p><a href="#" style="color: black;">{!! $contact->phone_one !!}
                                   </a>
                                </p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>

                </div>
            </div>

         
            <!--start contact form and map-->
            <div class="container">

                <div class="row gy-5">

                    <div class="col-lg-6">
                            <div class="map mt-2">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.676796448494!2d-0.06103699999999998!3d51.51914529999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ccdc8e0f21f%3A0x89a9b7e6cea26974!2s3%2C%20241A%20Whitechapel%20Rd%2C%20London%20E1%201DB%2C%20UK!5e0!3m2!1sen!2sbd!4v1665055631690!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                            </div>
                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                           placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                       placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                             <textarea class="form-control" name="message" placeholder="Message"
                                       required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main><!-- End #main -->

@endsection

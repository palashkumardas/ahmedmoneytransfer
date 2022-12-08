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
                    <h2 style="color:#3c9bc1;">Services</h2>
                 
                </div>
                <p><a href="{{url('/')}}" style="color:black;">Home / </a><a href="#">Services</a></p>
            </div>
        </section>
        <!-- End Breadcrumbs -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Services</h2>
                </div>

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item h-100">
                            <div class="img">
                                <img src="{{ asset('fontend/assets/img/barakah/deposit.png') }}" class="img-fluid"
                                     alt="" style="height: 313px; object-fit:cover">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-bank"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Bank Deposit</h3>
                                </a>
                                <p>With this service,you can transfer money to bank accounts in over 90 countries instantly.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item h-100">
                            <div class="img">
                                <img src="{{ asset('fontend/assets/img/barakah/pickup.png') }}" class="img-fluid" alt=""
                                     style="height: 313px; object-fit:cover">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-cash"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Cash Pickup</h3>
                                </a>
                                <p>You can send money to over 250,000
                                    pick-up locations. </p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item h-100">
                            <div class="img">
                                <img src="{{ asset('fontend/assets/img//barakah/wallet.png') }}" class="img-fluid"
                                     alt="" style="height: 313px; object-fit:cover">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-wallet2"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Mobile Wallet</h3>
                                </a>
                                <p>If you want to send money directly to a mobile money account,you can do so by using a mobile money transfer service.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section>

        <!-- End Services Section -->

    </main><!-- End #main -->

@endsection

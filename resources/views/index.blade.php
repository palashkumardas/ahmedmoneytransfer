@extends('master')
@section('content')
    @section('title','Home')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp

<style>

.cal-ifr iframe{
  width: 100%;
}
@media screen and (min-width:767px) and (max-width:991px) {
  
  .cal-ifr iframe{
    width: 100%;
  }
}
@media screen and (max-width:767px) {
  
  .cal-ifr iframe{
    width: 100%;
  }
}
@media (min-width: 576px) { 
  .cal-ifr iframe{
    width: 100%;
  }
}  
</style>
    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center"> 
                <div class="col-md-8 col-lg-8 col-12 calc-img">
                    <div class="container d-flex flex-column  position-relative" data-aos="zoom-out">
                        {{-- <img src="{{ asset('fontend/assets/img/quick.png') }}"> --}}
                       <div class="welcome-content">
                       <h2>Pay Anyone, Anywhere</h2>
                        <p>This new payment option allows you to pay anyone,anywhere in the world,without having to deal with bank fees or conversion rates,Simply choose pay anyone anywhere when you make your payment, and the payment will</p>
                        {{-- <p>Send & Receive money to your loved ones in minutes with great rates and low fees.</p> --}}
                        <div class="d-flex align-items-start">
                        <a href="http://worldwide.ahmedmoneytransfer.co.uk/" class="btn-get-started scrollto">Get Started</a>
                       </div>
                        </div>
                    </div>
                </div>
                    <div class="col-md-4 col-lg-4 col-12">
                        <iframe src="https://worldwidesvc.co.uk/shacal/indexv2.php?aid=6ca8c12f-2eb9-42cd-a99a-b6378a42c118" style="border:0px # none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="430px" width="100%" allowfullscreen></iframe>
                        {{-- <iframe src="https://www.worldwidesvc.co.uk/shacal/?aid=6ca8c12f-2eb9-42cd-a99a-b6378a4d9609" style="border:0px  #ffffff none float:left;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="345px" width="100%" allowfullscreen></iframe>  --}}
                        <div class="text-center">
                            <p class="text-black" style="font-size:14px"><strong>Powered By</strong> <img src="fontend/assets/img/barakah/Powered-by-Worldwide1.png" class="img-fluid" width="200" alt="Worldwide"></p>
                        </div>
                    </div> 
            </div>
        </div>
    
    </section>
    
    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-graph-up"></i></div>
                            <h4><a href="" class="stretched-link">TO GET BEST RATES</a></h4>
                            <p>The amount the recipient will receive is transparent.</p>
                        </div>
                    </div><!-- End Service Item -->
 
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-shield-lock"></i></div>
                            <h4><a href="" class="stretched-link">SECURE & SAFE</a></h4>
                            <p>Our priority is secured,so we check every transaction for identify and authentication.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-arrow-repeat"></i></div>
                            <h4><a href="" class="stretched-link">QUICK TRANSFER</a></h4>
                            <p>The money will be transferred to a bank in a couple of days.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-chat-square-dots"></i></div>
                            <h4><a href="" class="stretched-link">PAYMENT NOTIFICATIONS</a></h4>
                            <p>The sender of the transaction will be notified when the recipient collects it.</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Featured Services Section -->

     <!--start another feature section-->
        <section class="business_section" style="background-color:#f7fafb;" data-aos="zoom-out">
            <div class="container">
                <div class="row  g-5 align-items-top">
                    <div class="col-md-4 col-12">
                        <img class="d-block m-auto mb-5" src="{{asset('fontend/assets/img/barakah/phone.png')}}" alt=""style="height:310px;object-fit:contain">
                            <h3 class="mb-4" style="color:#3c9bc1;padding-top:7%;">MOBILE APP</h3>
                            <p class="mt-4 mb-4">We developed a mobile app that will allow you to send money in the comfort of your own home. 
                                </p>
                                <p>
                                    The interface is user-friendly which will allow you to navigate the features withease.The goal is to help you execute tasks or enjoy our services remotely and conveniently.</p>
                                    <div class="mt-4 d-flex">
                                <img class="me-3" src="{{asset('fontend/assets/img/barakah/playstore.png')}}" alt="" style="width:150px;object-fit:contain">
                                <img class="" src="{{asset('fontend/assets/img/barakah/apple.png')}}" alt=""style="width:150px;object-fit:contain">
                            </div>
                          
                        </div>
                        <div class="col-md-4 col-12 tex-start">
                        <img class=" mb-5" src="{{asset('fontend/assets/img/barakah/laptop.png')}}" alt=""style="width:100%;height:330px;object-fit:contain">
                        <h3 class="mb-4" style="color:#3c9bc1;">WEBSITE</h3>
                            <p>We created an interactive and dynamic website where you can make transactions locally and internationally.We also customize the website design to cater to your specific needs and requirements.The aim is to fuse aesthetics and functionality in one.</p>
                            
                        </div>
                        <div class="col-md-4 col-12 tex-start">
                        <img class="mb-5" src="{{asset('fontend/assets/img/barakah/shop.png')}}" alt=""style="width:100%;height:330px;object-fit:contain">
                        <h3 style="color:#3c9bc1;">SHOP</h3>
                            <p class="mb-4 mt-4">Some customers might not be comfortable making the transaction themselves,so we also set up an Agent Portal Shop where we can process the transaction on the customer’s behalf and their beneficiary will receive the payment in real-time.</p>
                            <p>The goal of these 3 platforms – mobile app, website, and Agent Portal Shop is to provide top-rate service and convenience to our customers.</p>
                        </div>
                    </div>
        
                </div>
            </section>
                    {{-- <div class="col-md-4 col-12 order-2 order-md-1  ">
                        <div class="hero-content-site">

                        <h3 style="color:#3c9bc1;">MOBILE APP</h3>
                        <div class="col-md-4 col-12 text-center order-1 order-md-2">
                            <img class="img-fluid d-block"src="{{asset('fontend/assets/img/barakah/phone.png')}}" alt="">
                        </div>
                        <p class="mt-4 mb-4">We developed a mobile app that will allow you to send money in the comfort of your own home. 
                            </p>
                            <p>
                                The interface is user-friendly which will allow you to navigate the features withease.The goal is to help you execute tasks or enjoy our services remotely and conveniently.</p>
                        <div class="mt-5">
                            <img class="img-fluid me-5" src="{{asset('fontend/assets/img/barakah/playstore.png')}}" alt="">
                            <img class="img-fluid " src="{{asset('fontend/assets/img/barakah/apple.png')}}" alt="">
                        </div>
                        </div>
                    </div> --}}
                   <!--website start-->
                    {{-- <div class="col-md-4 col-12 order-2 order-md-1 ">
                    <div class="hero-content-site h-100">
                        <h3 style="color:#3c9bc1;">WEBSITE</h3>
                        <div class="col-md-4 col-12 text-start order-1 order-md-2">
                            <img class="img-fluid d-block"  src="{{asset('fontend/assets/img/barakah/laptop.png')}}" alt="">
                        </div>
                        <p class="mt-4 mb-4">We created an interactive and dynamic website where you can make transaction locally and internationally. We also customize the website design to cater to your specific needs and requirements.The aim is to fuse aesthetics and functionality in one.
                        </p>
                    </div> --}}
                    <!--website end-->
                    <!--start shop-->
                    {{-- <div class="col-md-4 col-12 order-2 order-md-1 ">
                        <div class="hero-content-site h-100">
                            <h3 style="color:#3c9bc1;">WEBSITE</h3>
                            <div class="col-md-4 col-12 text-start order-1 order-md-2">
                                <img class="img-fluid d-block"  src="{{asset('fontend/assets/img/barakah/laptop.png')}}" alt="">
                            </div>
                            <p class="mt-4 mb-4">We created an interactive and dynamic website where you can make transaction locally and internationally. We also customize the website design to cater to your specific needs and requirements.The aim is to fuse aesthetics and functionality in one.
                            </p>
                        </div> --}}
                    <!-- end of shop-->
                </div>
                </div>
            </section>
                {{-- <div class="row gx-4 gy-0 align-items-center justify-content-center mt-5">
                    <div class="col-md-6 col-12 order-2 order-md-1 m-auto ">
                        <div class="hero-content-site">
                        <h3 style="color:#3c9bc1;">SHOP</h3>
                        <div class="col-md-6 col-12 order-1 order-md-2">
                            <img class="img-fluid "  src="{{asset('fontend/assets/img/barakah/shop.png')}}" alt="">
                        </div>
                        <p class="mb-4 mt-4">Some customers might not be comfortable making the transaction themselves,so we also set up an Agent Portal Shop where we can process the transaction on the customer’s behalf and their beneficiary will receive the payment in real-time.</p>
                        <p>The goal of these 3 platforms – mobile app, website, and Agent Portal Shop is to provide top-rate service and convenience to our customers.</p>
                    </div>
                   
                </div>
                </div>
            </div>
        </section> --}}
        <!-- end of feature section -->
        <!-- ======= Call To Action Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-out">

                <div class="row g-5">

                    <div
                        class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                        <h3><span>The most secure, easy and fast way to transfer money is to use a money transfer service.</span>
                        </h3>
                        <p> A money transfer specialist with
                            thousands of locations across Bangladesh
                            for cash pick-up, Mobile wallet (Bkash) and bank deposit.</p>
                        <a class="cta-btn align-self-start" href="#">Send Money</a>
                    </div>

                    <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                        <div class="img">
                            <img src="{{ asset('fontend/assets/img/barakah/money_transfer.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Call To Action Section -->

    </main><!-- End #main -->

@endsection

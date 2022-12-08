@extends('master')
@section('content')
    @section('title','About')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp



    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2 >{{$about->title}}</h2>
                    {{-- <li><a href="{{url('/')}}" style="color:#36976a;">Home</a></li>
                        <li style="color:#3c9bc1;">About Us</li> --}}

                </div>
                <p><a href="{{url('/')}}" style="color:black;">Home/</a><a href="#">About Us</a></p>

            </div>
        </section>
        <!-- End Breadcrumbs -->


        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2 style="color: #3c9bc1;">{{$about->title}}</h2>
                </div>

                <div class="row g-4" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-5">
                        <div class="about-img">
                            <img src="{{ asset('fontend/assets/img/barakah/about_us.png') }}"  alt="">
                        </div>
                    </div>

                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                    {!! $about->description !!}

                        

                    </div>

                </div>

            </div>
        </section>


    </main><!-- End #main -->

@endsection

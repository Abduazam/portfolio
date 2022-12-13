@extends('layouts.site')

@section('title', 'Home')

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>Abduazam <br> Makhsudov</h1>
            <p>I'm <span class="typed" data-typed-items="Developer, Freelancer, Influencer"></span></p>
        </div>
    </section>

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container px-5">
                <div class="section-title">
                    <h2>About</h2>
                    <p>Hey! How are you? I'm Abduazam and backend developer. <br><br> I have experience performing websites on the front and back sides. Worked for about 2 years on companies as a PHP programmer. <br><br> Currently, I'm not working anywhere, just focused on studying at university and improving my current skills. I'm making self-study on learning new PHP frameworks. Moreover, in university, I'm learning Python. <br><br> In the future, I want to learn machine and deep learning. Because I'm really interested in AI. So, maybe in the future, I may continue my job with Python as the main programming language.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="{{ asset('/frontend/assets/img/profile-img.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>Software Engineer.</h3>
                        <p class="">
                            Specifically, my major is backend.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong class="font-outfit">Website:</strong>
                                        <span>
                                            <a href="abduazam.uz">abduazam.uz</a>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong class="font-outfit">Phone:</strong>
                                        <span>
                                            <a href="tel:+998970006234">+998 97 000 62 34</a>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong class="font-outfit">E-mail:</strong>
                                        <span>
                                            <a href="mailto:maxdov00a@gmail.com">maxdov00a@gmail.com</a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong class="font-outfit">Birthday:</strong> <span>6 July 2003</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong class="font-outfit">Age:</strong> <span>19</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong class="font-outfit">Degree:</strong> <span>Foundation</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

@endsection

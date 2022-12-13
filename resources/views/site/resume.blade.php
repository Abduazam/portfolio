@extends('layouts.site')

@section('title', 'Resume')

@section('content')

    <main id="main">

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container px-5">

                <div class="section-title pb-1">
                    <h2>Resume</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>General Education</h4>
                            <h5>2010 - 2021</h5>
                            <p><em>228-school, Tashkent</em></p>
                            <p>I had finished school successfully, in almost every subject with high grades. I participated in many subjects Olimpiada and got several certificates.</p>
                        </div>
                        <div class="resume-item">
                            <h4>Computer Science</h4>
                            <h5>2021 - Present</h5>
                            <p><em>Cambridge International University, Toshkent</em></p>
                            <p>I studied the Foundation course at CIU in my first year and finished successfully. Now, I'm continuing my study in the Computer Science faculty.</p>
                        </div>

                        <h3 class="resume-title">Course</h3>
                        <div class="resume-item pb-0">
                            <h4>Web Development</h4>
                            <h5>May. 2018 - Aug. 2018</h5>
                            <p><em>Code Leader academy, Toshkent</em></p>
                            <p>My first step in programming was at Code Leader academy. I studied from 0. I finished successfully and stayed working with them as a frontend developer.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>Frontend Developer</h4>
                            <h5>Aug. 2018 - Nov. 2019</h5>
                            <p><em>Innovate Technology</em></p>
                            <ul>
                                <li><p class="mb-0">Creating, implementing, and preparing for backend, web-sites</p></li>
                                <li><p class="mb-0">Worked on several real projects</p></li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Backend developer</h4>
                            <h5>June 2020 - March 2021</h5>
                            <br>
                            <h5>Jan. 2022 - June 2022</h5>
                            <p><em>ITGO</em></p>
                            <ul>
                                <li><p class="mb-0">Creating, implementing telegram bots</p></li>
                                <li><p class="mb-0">Implementing admin dashboard on ready web-sites</p></li>
                                <li><p class="mb-0">Creating admin dashboard, CRM, RP</p></li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Backend developer</h4>
                            <h5>Aug. 2022 - Sep. 2022</h5>
                            <p><em>Aiva Group</em></p>
                            <ul>
                                <li><p class="mb-0">Creating web-sites</p></li>
                                <li><p class="mb-0">Supporting web-sites which were by WordPress</p></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section>

         <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container px-5">
                <div class="section-title">
                    <h2>Skills</h2>
                </div>

                <div class="row skills-content">
                    <div class="col-lg-6" data-aos="fade-up">
                        <div class="progress">
                            <h4 class="skill">HTML</h4>
                        </div>

                        <div class="progress">
                            <h4 class="skill">CSS / Bootstrap</h4>
                        </div>

                        <div class="progress">
                            <h4 class="skill">JavaScript / Jquery</h4>
                        </div>

                        <div class="progress">
                            <h4 class="skill">Telegram bot</h4>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        <div class="progress">
                            <h4 class="skill">PHP / OOP</h4>
                        </div>

                        <div class="progress">
                            <h4 class="skill">YII2 / Laravel</h4>
                        </div>

                        <div class="progress">
                            <h4 class="skill">MySql / PostgreSql</h4>
                        </div>

                        <div class="progress">
                            <h4 class="skill">Git / RestApi</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection

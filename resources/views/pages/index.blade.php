@extends('layouts.app')

@section('meta')
    <meta name="description" content="Kelvin Mgbemele is a Senior Software Engineer. He is currently undertaking a post-graduate studies in IT Project Management at Conestoga College in Canada. He Had his first degree in Computer Science from the University of Technology Owerri, Imo State, Nigeria." />
    <meta property="og:image" content="{{ asset('assets/img/logo/favicon.png') }}">
@endsection

@section('style')
@endsection

@section('content')
    <div class="hero-section">
        <div class="hero-single">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="hero-content">
                            <h6 class="hero-sub-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">Introduction</h6>
                            <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                                Hi,<br>
                                I'm Kelvin Chibuikem Mgbemele.
                            </h1>
                            <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                                A passionate and experienced senior software engineer. With 7 years of hands-on experience in the industry,
                                I have honed my skills in desktop, mobile and web application
                                (software) design, development, deployment, database, project management and software product marketing.
                            </p>
                            <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                <a href="https://drive.google.com/file/d/10dVdKyyZkfVEnxKGlRofn_nglfilryyL/view?usp=sharing" class="theme-btn">Download Resume<i class="far fa-download"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="hero-img-single">
                            <img src="{{ asset('assets/img/slider/02.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="site-heading">
                        <span class="site-title-tagline"><i class="far fa-bring-forward"></i> My Services</span>
                        <h2 class="site-title">What I Do</h2>
                    </div>
                </div>
            </div>
            <div class="service-slider owl-carousel owl-theme">
                @foreach($services as $service)
                <div class="service-item">
                    <div class="service-icon">
                        <img src="{{ asset('assets/img/icon/'.$service->flaticon) }}" alt="">
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">
                            <a href="javascript:;">{{ $service->name }}</a>
                        </h3>
                        <div class="service-list">
                            {{ $service->short_detail }}
                        </div>
                        <div class="service-arrow">
                            <a href="{{ route('service',[$service->meta_name]) }}">Read More <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="expert-area bg-2 py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="expert-content-info">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline"><i class="far fa-bring-forward"></i> My Expert Areas</span>
                            <h2 class="site-title">
                                Why Hire Me For Your <span>Next</span> Project/Position
                            </h2>
                        </div>

                        <div class="faq-area">
                            <div class="container">
                                <div class="accordion" id="accordionExample">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="faq-right">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne" style="color: white;">
                                                            Extensive Expertise and Experience
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse"
                                                         aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            With years of experience in the software engineering industry, I bring a wealth of knowledge and hands-on expertise to every project.
                                                            I have successfully delivered a wide range of projects, from small-scale applications to complex enterprise solutions.
                                                            My experience equips me with the skills to tackle various challenges and deliver high-quality results.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo" style="color: white;">
                                                            Strong Back-End Development Skills
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                                         aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            As a back-end engineer, I specialize in crafting efficient and scalable server-side solutions.
                                                            I possess in-depth knowledge of back-end technologies, frameworks, and databases, allowing me to build robust and performant applications that meet your specific requirements.
                                                            With my expertise, you can trust that your back-end infrastructure will be solid and reliable.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingThree">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-controls="collapseThree" style="color: white;">
                                                            Problem-Solving Mindset
                                                        </button>
                                                    </h2>
                                                    <div id="collapseThree" class="accordion-collapse collapse"
                                                         aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            I thrive on solving complex technical challenges. With a deep understanding of software architecture and system design,
                                                            I can quickly analyze project requirements, identify potential roadblocks, and provide innovative solutions that align with your goals.
                                                            I approach problem-solving with a structured and systematic mindset, ensuring efficient and effective resolution.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading4">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-controls="collapse4" style="color: white;">
                                                            Attention to Detail and Quality
                                                        </button>
                                                    </h2>
                                                    <div id="collapse4" class="accordion-collapse collapse"
                                                         aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            I have a keen eye for detail and a strong commitment to delivering high-quality work.
                                                            I meticulously review code, conduct thorough testing, and follow best practices to ensure that the final product meets the highest standards of reliability, security, and performance.
                                                            You can rely on me to deliver a polished and dependable solution.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading5">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-controls="collapse5" style="color: white;">
                                                            Collaborative Approach
                                                        </button>
                                                    </h2>
                                                    <div id="collapse5" class="accordion-collapse collapse"
                                                         aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            I believe in fostering strong partnerships with my clients and team members.
                                                            I actively engage in open and transparent communication, ensuring that everyone involved is aligned on project goals, timelines, and deliverables.
                                                            I value feedback and collaboration, making me an effective team player who can seamlessly integrate into your existing workflow.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="faq-right">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading6">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-controls="collapse6" style="color: white;">
                                                            Strong Analytical and Problem-Solving Skills
                                                        </button>
                                                    </h2>
                                                    <div id="collapse6" class="accordion-collapse collapse"
                                                         aria-labelledby="heading6" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            I possess excellent analytical skills, enabling me to quickly grasp complex concepts and troubleshoot issues effectively.
                                                            Whether it's optimizing performance bottlenecks or resolving technical challenges, I approach problem-solving with a structured and systematic mindset.
                                                            My ability to think critically and find innovative solutions sets me apart.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading7">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-controls="collapse7" style="color: white;">
                                                            Adaptable and Continuous Learner
                                                        </button>
                                                    </h2>
                                                    <div id="collapse7" class="accordion-collapse collapse"
                                                         aria-labelledby="heading7" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            The rapidly evolving landscape of software engineering excites me, and I am committed to staying up-to-date with the latest technologies and industry trends.
                                                            I embrace new tools, frameworks, and methodologies to continuously enhance my skills and deliver cutting-edge solutions.
                                                            My adaptability ensures that I can readily adapt to changing project requirements.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading8">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-controls="collapse8" style="color: white;">
                                                            Strong Focus on User Experience
                                                        </button>
                                                    </h2>
                                                    <div id="collapse8" class="accordion-collapse collapse"
                                                         aria-labelledby="heading8" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            I understand the importance of creating applications that provide a seamless and enjoyable user experience.
                                                            I pay attention to usability, responsiveness, and accessibility, ensuring that end-users have a positive interaction with the software.
                                                            By prioritizing user experience, I create solutions that are intuitive, user-friendly, and impactful.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading9">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-controls="collapse9" style="color: white;">
                                                            Professionalism and Reliability
                                                        </button>
                                                    </h2>
                                                    <div id="collapse9" class="accordion-collapse collapse"
                                                         aria-labelledby="heading9" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            I pride myself on my professionalism, reliability, and adherence to deadlines.
                                                            You can count on me to deliver projects on time and within budget, while maintaining clear and transparent communication throughout the entire process.
                                                            I am dedicated to providing a smooth and reliable experience, ensuring your peace of mind.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading10">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-controls="collapse10" style="color: white;">
                                                            Passion for Software Engineering
                                                        </button>
                                                    </h2>
                                                    <div id="collapse10" class="accordion-collapse collapse"
                                                         aria-labelledby="heading10" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            Above all, I am genuinely passionate about software engineering. It's not just a job for me; it's a craft that I continuously strive to master.
                                                            My enthusiasm for creating elegant and innovative solutions translates into the dedication and commitment I bring to every project or position.
                                                            I genuinely enjoy what I do and am always eager to take on new challenges.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="site-heading">
                        <span class="site-title-tagline"><i class="far fa-bring-forward"></i> My Resume</span>
                        <h2 class="site-title">Education</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img src="{{ asset('assets/img/blog/02.jpg') }}" alt="Thumb">
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="https://www.conestogac.on.ca/international" target="_blank">Conestoga College</a></li>
                                    <li><a href="https://www.conestogac.on.ca/international" target="_blank"><i class="far fa-location"></i> Kitchener, Ontario, Canada</a></li>
                                    <li><a href="https://www.conestogac.on.ca/international" target="_blank"><i class="far fa-calendar-alt"></i> 2023 - Ongoing</a></li>
                                </ul>
                            </div>
                            <h5 class="blog-title">
                                <a href="javascript:;">
                                    (Post-Graduate) <br>Information Technology Project Management
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img src="{{ asset('assets/img/blog/01.jpg') }}" alt="Thumb">
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="https://futo.edu.ng/" target="_blank">Federal University Of Technology Owerri</a></li>
                                    <li><a href="https://futo.edu.ng/" target="_blank"><i class="far fa-location"></i> Imo State, Nigeria</a></li>
                                    <li><a href="https://futo.edu.ng/" target="_blank"><i class="far fa-calendar-alt"></i> 2010 - November 26, 2015</a></li>
                                </ul>
                            </div>
                            <h5 class="blog-title">
                                <a href="javascript:;">
                                    B.Tech (First Degree) <br>Computer Science
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-area py-120" style="background: rgba(128,128,128,0.09);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="site-heading">
                        <h2 class="site-title">Work Experience</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <a href="http://www.conceptgroup-ng.com/" target="_blank">
                                <img src="{{ asset('assets/img/blog/03.jpg') }}" alt="Thumb">
                            </a>
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="http://www.conceptgroup-ng.com/" target="_blank">The Concept Group Nigeria Ltd</a></li>
                                    <li><a href="http://www.conceptgroup-ng.com/" target="_blank"><i class="far fa-location"></i> 32 Montgomery Rd, Sabo yaba 101245, Lagos, Nigeria.</a></li>
                                    <li><a href="http://www.conceptgroup-ng.com/" target="_blank"><i class="far fa-calendar-alt"></i>  From November 1, 2022</a></li>
{{--                                    <li><a href="http://www.conceptgroup-ng.com/" target="_blank"><i class="far fa-calendar-alt"></i> November 1, 2022 - Ongoing</a></li>--}}
                                </ul>
                            </div>
                            <h5 class="blog-title">
                                <a href="javascript:;">Senior Software Engineer (Backend)</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <a href="https://systemtech-ng.com/" target="_blank">
                                <img src="{{ asset('assets/img/blog/04.jpg') }}" alt="Thumb">
                            </a>
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="https://systemtech-ng.com/" target="_blank">Systemtech Group</a></li>
                                    <li><a href="https://systemtech-ng.com/" target="_blank"><i class="far fa-location"></i> 126, Ogunalana Dr. Surulere, Lagos Nigeria.</a></li>
                                    <li><a href="https://systemtech-ng.com/" target="_blank"><i class="far fa-calendar-alt"></i>  From May 27, 2017</a></li>
{{--                                    <li><a href="https://systemtech-ng.com/" target="_blank"><i class="far fa-calendar-alt"></i>  May 27, 2017 - October, 2022</a></li>--}}
                                </ul>
                            </div>
                            <h5 class="blog-title">
                                <a href="javascript:;">Senior Software Engineer (Full Stack)</a>
                            </h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="blog-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading">
                        <h2 class="site-title">My Skills</h2>
                        <p>
                            I specialize in back-end development, leveraging my expertise in Node.js, Laravel (PHP), and Python.
                            With a strong command of these technologies, I build robust and scalable server-side solutions that power the core functionality of applications.
                            My deep understanding of back-end development allows me to craft efficient code, design effective APIs, and ensure seamless integration with databases and third-party services.
                        </p>
                        <p>
                            In addition to my back-end skills, I possess a well-rounded skill set that extends to other areas of software engineering.
                            I have experience in devOps practices, ensuring smooth deployment and continuous integration of applications.
                            I also have proficiency in front-end development, allowing me to create intuitive user interfaces and seamless user experiences.
                            Furthermore, I have knowledge in mobile application development, enabling me to build native or cross-platform mobile apps using frameworks such as React Native or Flutter.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-2 col-4">
                    <div class="blog-item" style="gap: 1px !important;">
                        <div class="blog-item-img">
                            <a href="javascript:;" target="_blank">
                                <img src="{{ asset('assets/img/blog/5.jpg') }}" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="blog-item" style="gap: 1px !important;">
                        <div class="blog-item-img">
                            <a href="javascript:;" target="_blank">
                                <img src="{{ asset('assets/img/blog/6.jpg') }}" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="blog-item" style="gap: 1px !important;">
                        <div class="blog-item-img">
                            <a href="javascript:;" target="_blank">
                                <img src="{{ asset('assets/img/blog/7.jpg') }}" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="blog-item" style="gap: 1px !important;">
                        <div class="blog-item-img">
                            <a href="javascript:;" target="_blank">
                                <img src="{{ asset('assets/img/blog/8.jpg') }}" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="blog-item" style="gap: 1px !important;">
                        <div class="blog-item-img">
                            <a href="javascript:;" target="_blank">
                                <img src="{{ asset('assets/img/blog/9.jpg') }}" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="blog-item" style="gap: 1px !important;">
                        <div class="blog-item-img">
                            <a href="javascript:;" target="_blank">
                                <img src="{{ asset('assets/img/blog/10.jpg') }}" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="blog-item" style="gap: 1px !important;">
                        <div class="blog-item-img">
                            <a href="javascript:;" target="_blank">
                                <img src="{{ asset('assets/img/blog/11.jpg') }}" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="blog-item" style="gap: 1px !important;">
                        <div class="blog-item-img">
                            <a href="javascript:;" target="_blank">
                                <img src="{{ asset('assets/img/blog/12.jpg') }}" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="blog-item" style="gap: 1px !important;">
                        <div class="blog-item-img">
                            <a href="javascript:;" target="_blank">
                                <img src="{{ asset('assets/img/blog/13.jpg') }}" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="blog-item" style="gap: 1px !important;">
                        <div class="blog-item-img">
                            <a href="javascript:;" target="_blank">
                                <img src="{{ asset('assets/img/blog/14.jpg') }}" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="blog-item" style="gap: 1px !important;">
                        <div class="blog-item-img">
                            <a href="javascript:;" target="_blank">
                                <img src="{{ asset('assets/img/blog/15.jpg') }}" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="blog-item" style="gap: 1px !important;">
                        <div class="blog-item-img">
                            <a href="javascript:;" target="_blank">
                                <img src="{{ asset('assets/img/blog/16.jpg') }}" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="blog-item" style="gap: 1px !important;">
                        <div class="blog-item-img">
                            <a href="javascript:;" target="_blank">
                                <img src="{{ asset('assets/img/blog/17.jpg') }}" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="blog-item" style="gap: 1px !important;">
                        <div class="blog-item-img">
                            <a href="javascript:;" target="_blank">
                                <img src="{{ asset('assets/img/blog/18.jpg') }}" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="blog-item" style="gap: 1px !important;">
                        <div class="blog-item-img">
                            <a href="javascript:;" target="_blank">
                                <img src="{{ asset('assets/img/blog/19.jpg') }}" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="blog-item" style="gap: 1px !important;">
                        <div class="blog-item-img">
                            <a href="javascript:;" target="_blank">
                                <img src="{{ asset('assets/img/blog/20.jpg') }}" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(!empty($portfolios) && count($portfolios) > 0)
    <div class="portfolio-area bg-2 py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="site-heading">
                        <span class="site-title-tagline"><i class="far fa-bring-forward"></i> Portfolio</span>
                        <h2 class="site-title">Explore Some of My Work</h2>
                    </div>
                </div>
            </div>
            <div class="portfolio-slider owl-carousel owl-theme">
                @foreach($portfolios as $portfolio)
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="{{ asset('assets/img/portfolio/'.$portfolio->image1) }}" alt="">
                        </div>
                        <div class="portfolio-content">
                            <a href="#">
                                <h4 class="portfolio-title">{{ $portfolio->name }}</h4>
                            </a>
                            <ul class="portfolio-category">
                                <li><a href="#">{{ $portfolio->technologies }}</a></li>
                                <li><a href="#">{{ $portfolio->category }}</a></li>
                            </ul>
                        </div>
                        <div class="service-arrow">
                            <a href="{{ route('portfolio',[$portfolio->meta_name]) }}" style="color: white;">Read More <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    @if(!empty($testimonies) && count($testimonies) > 0)
    <div class="testimonial-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="site-heading">
                        <span class="site-title-tagline"><i class="far fa-bring-forward"></i> Testimonials</span>
                        <h2 class="site-title">Valuable Feedback <span>From My</span> Clients</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider owl-carousel owl-theme">
                @foreach($testimonies as $testimony)
                <div class="testimonial-single">
                    <div class="testimonial-img">
                        <img src="{{ asset('assets/img/testimonial/'.$testimony->image1) }}" alt="">
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-quote-icon">
                            <img src="{{ asset('assets/img/icon/quote.svg') }}" alt="">
                        </div>
                        <div class="testimonial-quote">
                            <p>{{ $testimony->message }}</p>
                        </div>
                        <div class="testimonial-author-info">
                            <h4>{{ $testimony->name }}</h4>
                            <p>{{ $testimony->company }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
@endsection

@section('script')
@endsection

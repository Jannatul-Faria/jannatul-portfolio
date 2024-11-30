<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Jannatul Faria</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Jannatul Faria" name="keywords">
    <meta content="Jannatul Faria" name="description">

    <!-- Favicon -->
    <link href="{{ asset('frontend') }}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend') }}/css/style.css" rel="stylesheet">

    {{-- animation css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5"><span class="text-dark">Free</span>Folio</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#qualification" class="nav-item nav-link">Quality</a>
                <a href="#skill" class="nav-item nav-link">Skill</a>
                <a href="#service" class="nav-item nav-link">Service</a>
                <a href="#portfolio" class="nav-item nav-link">Portfolio</a>
                <a href="#testimonial" class="nav-item nav-link">Review</a>
                <a href="#blog" class="nav-item nav-link">Blog</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="https://www.linkedin.com/in/jannatul-faria/" class="btn btn-outline-primary d-none d-lg-block">Hire Me</a>
            {{-- @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif --}}
        </div>
    </nav>
  


  
    <div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0">
                    <img class="img-fluid w-100 rounded-circle " src="{{ asset('frontend') }}/img/about1.png" alt="">
                </div>
                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="text-white font-weight-normal mb-3">I'm</h3>
                    <h1 class="display-3 text-uppercase  mb-2" style="-webkit-text-stroke: 1px #ffffff; text-color:#8b55f0">Jannatul Faria</h1>
                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <div class="typed-text d-none">Backend Developer, PHP And Laravel Developer, Web Developer</div>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="https://mygoogle.000.pe/jannatul_PHP_&_Laravel_developer_CV.pdf" class="btn btn-outline-light mr-5">Download CV</a>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
                <h1 class="position-absolute text-uppercase ">About Me</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded-circle  w-100" src="{{ asset('frontend') }}/img/about.png" alt="">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4"> PHP & Laravel Developer</h3>
                    <p>Hello, I am Jannatul Faria. I am a PHP & Laravel Application Developer. I have 1+ years experience in PHP, Laravel based application development field. With expertise in JavaScript, Git, GitHub, HTML, CSS, Bootstrap, Tailwind CSS, and MySQL, I am dedicated to delivering robust and innovative web solutions.</p>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2"><h6>Name: <span class="text-secondary">Jannatul Faria</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Language: <span class="text-secondary">Bangla, English, Hindi-spoken</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Degree: <span class="text-secondary">HSC </span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Phone: <span class="text-secondary">+8801629004612</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Email: <span class="text-secondary">kairasana8@gmail.com</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Address: <span class="text-secondary">Keranigonj-Dhaka</span></h6></div>
                    </div>
                    <a href="https://www.linkedin.com/in/jannatul-faria/" class="btn btn-outline-primary mr-4">Hire Me</a>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Qualification Start -->
    <div class="container-fluid py-5" id="qualification">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Quality</h1>
                <h1 class="position-absolute text-uppercase">Education & Expericence</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="mb-4">My Education</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Bachelor of Business Administration</h5>
                            <p class="mb-2"><strong>BEGUM BADRUNNESSA GOVT. GIRLS COLLEGE</strong> | <small>2022-2023</small></p>
                            
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Business Studies In HSC</h5>
                            <p class="mb-2"><strong>BEGUM BADRUNNESSA GOVT. GIRLS COLLEGE</strong> | <small>2021</small></p>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">My Expericence</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">PawFinder</h5>
                            <p>Pet adoption platform with shelter registration, animal profiles, adoption applications, admin dashboard, and secure user accounts.
                                </p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Job Pulse Application</h5>
                            <p> Job portal with user authentication, job search, candidate profiles, and backend modules for job postings, blogs, and company management.
                                </p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">POS Application</h5>
                            <p>Point-of-sale system for sales, invoicing, multi-user business profiles, and reporting. Built with Laravel, MySQL, Axios, and Bootstrap.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Qualification End -->


    <!-- Skill Start -->
    <div class="container-fluid py-5" id="skill">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Skills</h1>
                <h1 class="position-absolute text-uppercase">My Skills</h1>
            </div>
            <div class="row align-items-center">
                
                    <div class="col-md-4  animate__animated animate__fadeInLeft">
                        <div class="skill mb-4 btn btn-outline-primary d-none d-block ">
                            <div class="d-flex justify-content-center  bg-black">
                                <i> PHP</i>
                            </div>                            
                        </div>

                       
                        <div class="skill mb-4 btn btn-outline-primary d-none d-block">
                            <div class="d-flex justify-content-center ">
                                <i> Tailwind CSS</i>
                            </div>                            
                        </div>
                        <div class="skill mb-4 btn btn-outline-primary d-none d-block">
                            <div class="d-flex justify-content-center ">
                                <i>  HTML</i>
                            </div>                            
                        </div>
                    </div>
                    <div class="col-md-4  animate__animated animate__fadeInUp">
                        <div class="skill mb-4 btn btn-outline-primary d-none d-block">
                            <div class="d-flex justify-content-center ">
                                <i> Laravel</i>
                            </div>                            
                        </div>
                        <div class="skill mb-4 btn btn-outline-primary d-none d-block">
                            <div class="d-flex justify-content-center ">
                                <i> Bootstrap 5</i>
                            </div>                            
                        </div>
                        <div class="skill mb-4 btn btn-outline-primary d-none d-block">
                            <div class="d-flex justify-content-center ">
                                <i>CSS3</i>
                            </div>                            
                        </div>
                        
                    </div>
                    <div class="col-md-4  animate__animated animate__fadeInRight">
                        <div class="skill mb-4 btn btn-outline-primary d-none d-block">
                            <div class="d-flex justify-content-center ">
                                <i>  JavaScript</i>
                            </div>                            
                        </div>
                        <div class="skill mb-4 btn btn-outline-primary d-none d-block">
                            <div class="d-flex justify-content-center ">
                                <i> 
                                    Git & GITHUB</i>
                            </div>                            
                        </div>
                        <div class="skill mb-4 btn btn-outline-primary d-none d-block">
                            <div class="d-flex justify-content-center ">
                                <i>  Notion</i>
                            </div>                            
                        </div>
                    </div>
                    
               
            </div>
        </div>
    </div>
    <!-- Skill End -->


    <!-- Services Start -->
    <div class="container-fluid pt-5" id="service">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Service</h1>
                <h1 class="position-absolute text-uppercase">My Services</h1>
            </div>
            <div class="row pb-3 justify-content-center">
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-laptop service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Custom Web Application Development</h4>
                    </div>
                    <p>Build dynamic web applications tailored to your business needs.
                        Expertise in Laravel features like routing, middleware, Eloquent ORM, and queues.</p>
                   
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-laptop-code service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">API Development and Integration</h4>
                    </div>
                    <p>Build RESTful APIs for seamless data exchange between systems.
                        Integrate third-party APIs (e.g., payment gateways, social logins).</p>
                   
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fab fa-2x fa-android service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">E-Commerce Development</h4>
                    </div>
                    <p>Create feature-rich online stores with product catalogs, payment processing, and order management.
                        Integrate analytics and inventory systems for better control.</p>
                   
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-laptop-code service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Bug Fixing and Performance Optimization</h4>
                    </div>
                    <p>Debug existing PHP and Laravel projects.
                        Optimize code and database queries for faster performance.</p>
                   
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-laptop-code service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Database Design & Management</h4>
                    </div>
                    <p>Create and optimize relational databases using MySQL.
                        Implement secure and efficient database connections.</p>
                   
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fab fa-2x fa-apple service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Authentication and Security</h4>
                    </div>
                    <p>Implement secure user authentication systems using Laravel Breeze or JWTTOKEN.
                        Apply best practices in data encryption, validation, and session management.</p>
                   
                </div>
                
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-laptop-code service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Web Application Modernization</h4>
                    </div>
                    <p>Refactor legacy PHP applications to modern Laravel frameworks.
                        Improve application speed and usability.</p>
                   
                </div>
                
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid pt-5 pb-3" id="portfolio">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Gallery</h1>
                <h1 class="position-absolute text-uppercase">My Portfolio</h1>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active"  data-filter="*">All</li>
                      
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="{{ asset('frontend') }}/img/project3.png" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="https://drive.google.com/file/d/1X5hTzswmBkdeWcQpkjLoD-oPtDEe-_b2/view?usp=sharing" >
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="{{ asset('frontend') }}/img/project2.png" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="https://github.com/Jannatul-Faria/Job_Pulse" >
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="{{ asset('frontend') }}/img/project1.png" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="https://github.com/Jannatul-Faria/POS_Application" >
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Portfolio End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5" id="testimonial">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Review</h1>
                <h1 class="position-absolute text-uppercase">Clients Say</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">   
                            <h5 class="font-weight-light mb-4"> <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                It's indeed a satisfying experience when you receive the service you paid for. Highly
                                recommend this team for their dedication and professional behavior. Look to collaborate in
                                the future also. Thanks.
                                </h5>
                            <img class="img-fluid rounded-circle mx-auto mb-3" src="{{ asset('frontend') }}/img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                            <h5 class="font-weight-bold m-0">John Larson</h5>
                            <span>client</span>
                        </div>
                        <div class="text-center">
                           
                            <h4 class="font-weight-light mb-4"> <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                At first there was confusion and I did not understand the work to be done. After some
                                conversations she finally delivered correctly.
                                </h4>
                            <img class="img-fluid rounded-circle mx-auto mb-3" src="{{ asset('frontend') }}/img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                            <h5 class="font-weight-bold m-0">Sara Wilsson</h5>
                            <span>client</span>
                        </div>
                        <div class="text-center">
                            
                            <h4 class="font-weight-light mb-4"> <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                She is experienced and tries to understand the problem in depth. She is a great researcher
                                and has excellent problem and bug fixing skills. She solved my issue quickly and I am happy
                                working with hem. I will definitely use her next time.
   
                                </h4>
                            <img class="img-fluid rounded-circle mx-auto mb-3" src="{{ asset('frontend') }}/img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                            <h5 class="font-weight-bold m-0">Jena Karlis</h5>
                            <span>client</span>
                        </div>
                        <div class="text-center">
                            
                            <h4 class="font-weight-light mb-4"> <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                             Fast and high-quality work from an excellent developer. completes orders quickly and
                             competently. She has my highest recommendation, and I'll use her again if I have any more
                             work to do.</h4>
                            <img class="img-fluid rounded-circle mx-auto mb-3" src="{{ asset('frontend') }}/img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                            <h5 class="font-weight-bold m-0">Matt Brandon</h5>
                            <span>client</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid pt-5" id="blog">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Choose Me</h1>
                <h1 class="position-absolute text-uppercase">Why Choose Me?</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                           <p class="mb-2"> <h6 class="font-weight-bold mb-1">Clean & Optimized Code: </h6>I follow best practices to ensure code quality and maintainability.</p>
                            
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h6 class="font-weight-bold mb-1">Quick Learner: </h6>
                            <p class="mb-2">Continuously improving my skills and adapting to project needs.</p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h6 class="font-weight-bold mb-1">Quality Assurance: </h6>
                            <p class="mb-2">Quality Assurance: Deliver clean, maintainable, and well-documented code.</p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h6 class="font-weight-bold mb-1">Timely Delivery: </h6>
                            <p class="mb-2"> Ensure projects are completed on time without compromising quality.</p>
                        </div>
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5" id="contact">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Contact</h1>
                <h1 class="position-absolute text-uppercase">Contact Me</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form text-center">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Your Name"
                                        required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Your Email"
                                        required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="container text-center py-5">
            <div class="d-flex justify-content-center mb-4">
                
                <a class="btn btn-light btn-social mr-2" href="https://www.facebook.com/jannatulfaria78/"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="https://www.linkedin.com/in/jannatul-faria/"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-light btn-social" href="https://github.com/Jannatul-Faria"><i class="fab fa-github"></i></a>
            </div>
           
            <p class="m-0">&copy; <a class="text-white font-weight-bold" href="https://jannatulfaria.xyz/">Jannatul Faria</a>. All Rights Reserved. Designed by <a class="text-white font-weight-bold" href="https://jannatulfaria.xyz/">Jannatul Faria</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/typed/typed.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('frontend') }}/mail/jqBootstrapValidation.min.js"></script>
    <script src="{{ asset('frontend') }}/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend') }}/js/main.js"></script>
</body>

</html>

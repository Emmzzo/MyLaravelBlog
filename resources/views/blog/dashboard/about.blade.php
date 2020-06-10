@extends('frontend.app')
@section('title') DevBlog  @endsection
@section('content')
<article class="resume-wrapper text-center position-relative">
    <div class="resume-wrapper-inner mx-auto text-left bg-white shadow-lg">
        <header class="resume-header pt-4 pt-md-0">
            <div class="media flex-column flex-md-row">
                <img class="mr-3 img-fluid picture mx-auto" src="{{asset('frontend/images/passport.png')}}" alt="" style="max-height: 220px;">
                <div class="media-body p-4 d-flex flex-column flex-md-row mx-auto mx-lg-0">
                    <div class="gudea-font-blog-name gudea-font-weight">
                        <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">Emmanuel.S</h1>
                        <div class="title mb-3">Full Stack Developer</div>
                        <ul class="list-unstyled ">
                            <li class="mb-2"><a href="#"><i class="far fa-envelope fa-fw mr-2" data-fa-transform="grow-3"></i>siboruremanuel@gmail.com</a></li>
                            <li><a href="#"><i class="fas fa-mobile-alt fa-fw mr-2" data-fa-transform="grow-6"></i>+250 782 234 029</a></li>
                        </ul>
                    </div><!--//primary-info-->
                    <div class="secondary-info ml-md-auto mt-2">
                        <ul class="resume-social list-unstyled gudea-font-social gudea-font-weight">
                            <li class="mb-3"><a href="https://www.linkedin.com/in/siborurema-emmanuel-822569152" target="_blank"><span class="fa-container text-center mr-1"><i class="fab fa-linkedin-in fa-fw"></i></span>linkedin.com/in/siborurema-emmanuel-822569152</a></li>
                            <li class="mb-3"><a href="https://github.com/Emmzzo" target="_blank"><span class="fa-container text-center mr-2"><i class="fab fa-github-alt fa-fw"></i></span>github.com/Emmzzo</a></li>
                            <li class="mb-3"><a href="https://gitlab.com/EmmaSibo" target="_blank" ><span class="fa-container text-center mr-2"><i class="fab fa-gitlab fa-fw"></i></span>gitlab.com/EmmaSibo</a></li>
                            <li class="mb-3"><a href="https://twitter.com/SiboruremaEmma1" target="_blank"><span class="fa-container text-center mr-2"><i class="fab fa-twitter fa-fw"></i></span>twitter.com/SiboruremaEmma1</a></li>
                            <li style="margin-top: -8px;"><a href="https://cleancode.herokuapp.com/" target="_blank"><span class="fa-container text-center mr-2"><i class="fas fa-globe"></i></span>cleancode.herokuapp.com/</a></li>
                        </ul>
                    </div><!--//secondary-info-->
                    
                </div><!--//media-body-->
            </div><!--//media-->
        </header>
        <div class="resume-body p-5">
            <section class="resume-section summary-section mb-5">
                <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3 gudea-font-weight">Career Summary</h2>
                <div class="resume-section-content gudea-font-weight gudea-font-color">
                    <p class="gudea-font-color mb-0">Self-directed and motivated Software Engineer experienced working effectively in dynamic environments. Fluent in Java and PHP programming languages, including Spring and Laravel frameworks specifically. Loves to write on different programming technologies with an equally useful skill to make some sense out of it.</p>
                </div>
            </section><!--//summary-section-->
            <div class="row">
                <div class="col-lg-9">
                    <section class="resume-section experience-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3 gudea-font-weight">Work Experience</h2>
                        <div class="resume-section-content">
                            <div class="resume-timeline position-relative">
                                <article class="resume-timeline-item position-relative pb-5">
                                    
                                    <div class="resume-timeline-item-header mb-2">
                                        <div class="d-flex flex-column flex-md-row">
                                            <h3 class="resume-position-title font-weight-bold mb-1 gudea-font-weight">Software Engineer,Trust Engineering Solution (TRES)</h3>
                                            <div class="resume-company-name ml-auto gudea-font-weight">Startup Hub</div>
                                        </div><!--//row-->
                                        <div class="resume-position-time gudea-font-weight">2018 - 2019</div>
                                    </div><!--//resume-timeline-item-header-->
                                    <div class="resume-timeline-item-desc gudea-font-weight">
                                        <p>Worked as full stack developer responsible for the entire flow of the application.</p>
                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
                                        <ul>
                                            <li>Built valuable final product application.</li>
                                            <li>Learnt the agile model of software development processes and took ownership of all coding, testing, and collaboration.</li>
                                            <li>Contributed to the team’s solutions in order to finish stories and meet goals to exceed client expectations.</li>
                                            <li>Communicated with team members to produce the highest-quality deliverables within deadline parameters.</li>
                                        </ul>
                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">Java</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">JSF</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">jQuery</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">Hibernate</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">HTML/CSS/JS</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">MYSQL</span></li>
                                        </ul>
                                    </div><!--//resume-timeline-item-desc-->

                                </article><!--//resume-timeline-item-->
                                
                                <article class="resume-timeline-item position-relative pb-5">
                                    
                                    <div class="resume-timeline-item-header mb-2">
                                        <div class="d-flex flex-column flex-md-row">
                                            <h3 class="resume-position-title font-weight-bold mb-1">Senior Software Developer</h3>
                                            <div class="resume-company-name ml-auto">Google</div>
                                        </div><!--//row-->
                                        <div class="resume-position-time">2014 - 2018</div>
                                    </div><!--//resume-timeline-item-header-->
                                    <div class="resume-timeline-item-desc">
                                        <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel.</p>
                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements</h4>
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">React</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">Redux</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">Django</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">Webpack</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">HTML/SASS</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">MySQL</span></li>
                                        </ul>
                                    </div><!--//resume-timeline-item-desc-->

                                </article><!--//resume-timeline-item-->
                                
                                <article class="resume-timeline-item position-relative pb-5">
                                    
                                    <div class="resume-timeline-item-header mb-2">
                                        <div class="d-flex flex-column flex-md-row">
                                            <h3 class="resume-position-title font-weight-bold mb-1">Co-Founder & Lead Developer</h3>
                                            <div class="resume-company-name ml-auto">To-do Lists</div>
                                        </div><!--//row-->
                                        <div class="resume-position-time">2012 - 2014</div>
                                    </div><!--//resume-timeline-item-header-->
                                    <div class="resume-timeline-item-desc">
                                        <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">Django</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">JavaScript</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">Node.js</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">Require.js</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">HTML/SASS</span></li>
                                        </ul>
                                    </div><!--//resume-timeline-item-desc-->

                                </article><!--//resume-timeline-item-->
                                
                                <article class="resume-timeline-item position-relative">
                                    
                                    <div class="resume-timeline-item-header mb-2">
                                        <div class="d-flex flex-column flex-md-row">
                                            <h3 class="resume-position-title font-weight-bold mb-1">Web Developer <small class="text-muted">(Intern)</small></h3>
                                            <div class="resume-company-name ml-auto">Amazon</div>
                                        </div><!--//row-->
                                        <div class="resume-position-time">2011 - 2012</div>
                                    </div><!--//resume-timeline-item-header-->
                                    <div class="resume-timeline-item-desc">
                                        <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum.</p>
                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">Ruby on Rails</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">jQuery</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">HTML/LESS</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">MongoDB</span></li>
                                        </ul>
                                    </div><!--//resume-timeline-item-desc-->

                                </article><!--//resume-timeline-item-->
                                
                                
                            </div><!--//resume-timeline-->
                            
                            
                            
                            
                            
                            
                        </div>
                    </section><!--//experience-section-->
                </div>
                <div class="col-lg-3">
                    <section class="resume-section skills-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
                        <div class="resume-section-content">
                            <div class="resume-skill-item">
                                <h4 class="resume-skills-cat font-weight-bold">Frontend</h4>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <div class="resume-skill-name">Angular</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="resume-skill-name">React</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="resume-skill-name">JavaScript</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    
                                    <li class="mb-2">
                                        <div class="resume-skill-name">Node.js</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="resume-skill-name">HTML/CSS/SASS/LESS</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div><!--//resume-skill-item-->
                            
                            <div class="resume-skill-item">
                                <h4 class="resume-skills-cat font-weight-bold">Backend</h4>
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <div class="resume-skill-name">Python/Django</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="resume-skill-name">Ruby/Rails</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="resume-skill-name">PHP</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 86%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="resume-skill-name">WordPress/Shopify</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 82%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div><!--//resume-skill-item-->
                            
                            <div class="resume-skill-item">
                                <h4 class="resume-skills-cat font-weight-bold">Others</h4>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><span class="badge badge-light">DevOps</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">Code Review</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">Git</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">Unit Testing</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">Wireframing</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">Sketch</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">Balsamiq</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">WordPress</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">Shopify</span></li>
                                </ul>
                            </div><!--//resume-skill-item-->
                        </div><!--resume-section-content-->
                    </section><!--//skills-section-->
                    <section class="resume-section education-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
                        <div class="resume-section-content">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <div class="resume-degree font-weight-bold">MSc in Computer Science</div>
                                    <div class="resume-degree-org">University College London</div>
                                    <div class="resume-degree-time">2010 - 2011</div>
                                </li>
                                <li>
                                    <div class="resume-degree font-weight-bold">BSc Maths and Physics</div>
                                    <div class="resume-degree-org">Imperial College London</div>
                                    <div class="resume-degree-time">2007 - 2010</div>
                                </li>
                            </ul>
                        </div>
                    </section><!--//education-section-->
                    <section class="resume-section reference-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
                        <div class="resume-section-content">
                            <ul class="list-unstyled resume-awards-list">
                                <li class="mb-2 pl-4 position-relative">
                                    <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
                                    <div class="resume-award-name">Award Name Lorem</div>
                                    <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</div>
                                </li>
                                <li class="mb-0 pl-4 position-relative">
                                    <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
                                    <div class="resume-award-name">Award Name Ipsum</div>
                                    <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque.</div>
                                </li>
                            </ul>
                        </div>
                    </section><!--//interests-section-->
                    <section class="resume-section language-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Language</h2>
                        <div class="resume-section-content">
                            <ul class="list-unstyled resume-lang-list">
                                <li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal">(Native)</small></li>
                                <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold">French</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
                                <li><span class="resume-lang-name font-weight-bold">Spanish</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
                            </ul>
                        </div>
                    </section><!--//language-section-->
                    <section class="resume-section interests-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
                        <div class="resume-section-content">
                            <ul class="list-unstyled">
                                <li class="mb-1">Climbing</li>
                                <li class="mb-1">Snowboarding</li>
                                <li class="mb-1">Cooking</li>
                            </ul>
                        </div>
                    </section><!--//interests-section-->
                    
                </div>
            </div><!--//row-->
        </div><!--//resume-body-->
        
        
    </div>
</article>  

@endsection

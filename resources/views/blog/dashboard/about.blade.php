@extends('frontend.app')
@section('title') DevBlog  @endsection
@section('content')
<article class="resume-wrapper text-center position-relative">
    <div class="resume-wrapper-inner mx-auto text-left bg-white shadow-lg">
        <header class="resume-header pt-4 pt-md-0">
            <div class="media flex-column flex-md-row">
                <img class="mr-3 img-fluid picture mx-auto" src="{{asset('frontend/images/emma.jpg')}}" alt="" style="max-height: 220px;">
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
                                    <div class="resume-timeline-item-desc gudea-font-weight gudea-font-color">
                                        <p>Worked as full stack developer responsible for the entire flow of the application.</p>
                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
                                        <ul>
                                            <li>Built valuable final product application (VFP).</li>
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
                                    
                                    <div class="resume-timeline-item-header mb-2 gudea-font-weight">
                                        <div class="d-flex flex-column flex-md-row">
                                            <h3 class="resume-position-title font-weight-bold mb-1">Software Engineer</h3>
                                            <div class="resume-company-name ml-auto">ITEME SDA LTD</div>
                                        </div><!--//row-->
                                        <div class="resume-position-time">2019-PRESENT</div>
                                    </div><!--//resume-timeline-item-header-->
                                    <div class="resume-timeline-item-desc gudea-font-weight gudea-font-color">
                                        <p>Work as backend developer responsible for debugging code, as well as designing systems for how the user will interact with the application.</p>
                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements</h4>
                                        <ul>
                                            <li>Designed and coded application components in an Agile environment utilizing a test driven development approach.</li>
                                            <li>Worked in close cooperation with project managers and other functional team members to form a team effort in development.</li>
                                            <li>Collaborated with other members of the product development team.</li>
                                            <li>Contributed on web application for site access tracking and management system (BTS).</li>
                                        </ul>
                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">PHP</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">Laravel</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">Vue js</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">Webpack</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">jQuery</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">HTML/CSS/JS</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">MYSQL</span></li>
                                        </ul>
                                    </div><!--//resume-timeline-item-desc-->

                                </article><!--//resume-timeline-item-->
                                
                               
                                
                            </div><!--//resume-timeline-->
                            
                            
                            
                            
                            
                            
                        </div>
                    </section><!--//experience-section-->
                </div>
                <div class="col-lg-3">
                    <section class="resume-section skills-section mb-5 gudea-font-weight gudea-font-color">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
                        <div class="resume-section-content">
                            <div class="resume-skill-item">
                                <h4 class="resume-skills-cat font-weight-bold">Frontend</h4>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <div class="resume-skill-name">Vue js</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="resume-skill-name">React</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="resume-skill-name">JavaScript</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width:75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    
                                    <li class="mb-2">
                                        <div class="resume-skill-name">Node.js</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <div class="resume-skill-name">Java</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="resume-skill-name">C#</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="resume-skill-name">PHP</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="resume-skill-name">WordPress</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 82%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div><!--//resume-skill-item-->
                            
                            <div class="resume-skill-item">
                                <h4 class="resume-skills-cat font-weight-bold">Others</h4>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><span class="badge badge-light">Agile development environment</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">Web services</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">Git</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">Unit Testing</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">MSQL</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">PostgreSQL</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">React Native</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">Java</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">Spring framework</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">JSF</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">JSP</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">PHP</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">Laravel</span></li>
                                </ul>
                            </div><!--//resume-skill-item-->
                        </div><!--resume-section-content-->
                    </section><!--//skills-section-->
                    <section class="resume-section education-section mb-5 gudea-font-weight gudea-font-color">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
                        <div class="resume-section-content">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <div class="resume-degree font-weight-bold">A2 diploma in Computer Science</div>
                                    <div class="resume-degree-org">GROUPE SCOLAIRE DU MONT KIGALI (APACE)</div>
                                    <div class="resume-degree-time">2011 - 2013</div>
                                </li>
                                <li>
                                    <div class="resume-degree font-weight-bold">Bachelor degree in Information Technology</div>
                                    <div class="resume-degree-org">ADVENTIST UNIVERSITY OF CENTRAL AFRICA (AUCA)</div>
                                    <div class="resume-degree-time">2014 - 2018</div>
                                </li>
                            </ul>
                        </div>
                    </section><!--//education-section-->
                    <section class="resume-section language-section mb-5 gudea-font-weight gudea-font-color">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Language</h2>
                        <div class="resume-section-content">
                            <ul class="list-unstyled resume-lang-list">
                                <li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal">(Fluent)</small></li>
                                <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold">French</span> <small class="text-muted font-weight-normal">(Good)</small></li>
                                <li><span class="resume-lang-name font-weight-bold">Kinyarwanda</span> <small class="text-muted font-weight-normal">(Native)</small></li>
                            </ul>
                        </div>
                    </section><!--//language-section-->
                    <section class="resume-section interests-section mb-5 gudea-font-weight gudea-font-color">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
                        <div class="resume-section-content">
                            <ul class="list-unstyled">
                                <li class="mb-1">Religion</li>
                                <li class="mb-1">Soccer</li>
                                <li class="mb-1">Documentary</li>
                            </ul>
                        </div>
                    </section><!--//interests-section-->
                    
                </div>
            </div><!--//row-->
        </div><!--//resume-body-->
        
        
    </div>
</article>  

@endsection

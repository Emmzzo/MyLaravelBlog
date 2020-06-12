<header class="header text-center">	    
    <h1 class="blog-name pt-lg-4 mb-0"><a href="{{route('index')}}" class="gudea-font-blog-name gudea-font-weight">Emma's Blog</a></h1>
    
    <nav class="navbar navbar-expand-lg navbar-dark" >
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navigation" class="collapse navbar-collapse flex-column">
            <div class="profile-section pt-3 pt-lg-0">
                <img class="profile-image mb-3 rounded-circle mx-auto" src="{{asset('frontend/images/passport.png')}}" alt="image" >			
                
            <div class="bio mb-3 gudea-font gudea-font-weight">Emmanuel Siborurema is self-directed and motivated software engineer experienced working effectively in dynamic environments.<br><a href="{{route('about')}}">Find out more about me</a></div><!--//bio-->
                <ul class="social-list list-inline py-3 mx-auto">
                    <li class="list-inline-item"><a href="https://twitter.com/SiboruremaEmma1" target="_blank"><i class="fab fa-twitter fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/siborurema-emmanuel-822569152" target="_blank"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="https://github.com/Emmzzo" target="_blank"><i class="fab fa-github-alt fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="https://stackoverflow.com/users/9629430/emmzzo" target="_blank"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="https://gitlab.com/EmmaSibo" target="_blank"><i class="fab fa-gitlab fa-fw"></i></a></li>
                </ul><!--//social-list-->
                <hr> 
            </div><!--//profile-section-->
            
            <ul class="navbar-nav flex-column text-left gudea-font-blog-name gudea-font-weight">
                <li class="nav-item active">
                <a class="nav-link" href="{{route('index')}}"><i class="fas fa-home fa-fw mr-2"></i>Blog Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index')}}"><i class="fas fa-bookmark fa-fw mr-2"></i>Blog Post</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}"><i class="fas fa-user fa-fw mr-2"></i>About Me</a>
                </li>
            </ul>
            
            <div class="my-2 my-md-3 gudea-font-weight">
                <a class="btn btn-primary" href="#" target="_blank">Get in Touch</a>
            </div>
        </div>
    </nav>
</header>
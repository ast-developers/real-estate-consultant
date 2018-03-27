
<nav class="topmenu navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand  col-md-4 col-sm-6 col-9" href="#">
        <img src="{{url('/public/images/logo.png')}}" class="img-responsive">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
        <ul class="navbar-nav  nav nav-tabs ">
            <li class="nav-item  {{ Request::path() ==  '/' ? 'active' : ''  }}">
                <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item {{ Request::path() ==  'zone' ? 'active' : ''  }}">
                <a class="nav-link" href="{{route('zone')}}">Zoning Report </a>
            </li>
            <li class="nav-item {{ Request::path() ==  'faq' ? 'active' : ''  }}">
                <a class="nav-link" href="{{route('faq')}}">FAQ </a>
            </li>
            <li class="nav-item {{ Request::path() ==  'about' ? 'active' : ''  }}">
                <a class="nav-link" href="{{route('about')}}">About </a>
            </li>
            <li class="nav-item {{ Request::path() ==  'updates' ? 'active' : ''  }}">
                <a class="nav-link" href="{{route('updates')}}">Updates </a>
            </li>
            <li class="nav-item {{ Request::path() ==  'blog' ? 'active' : ''  }}">
                <a class="nav-link" href="{{route('blog')}}">Blog </a>
            </li>
            <li class="nav-item {{ Request::path() ==  'contact' ? 'active' : ''  }}">
                <a class="nav-link" href="{{route('contact')}}">Contact </a>
            </li>
        </ul>
    </div>
</nav>

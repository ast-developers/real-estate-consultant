
<nav class="topmenu navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand  col-md-3 col-sm-3 col-9" href="{{route('home')}}">
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
            <li class="nav-item {{ (in_array(Request::path() ,  ['zone','zoneForm']) )? 'active' : ''  }}">
                <a class="nav-link" href="{{route('zone')}}">Zoning Report </a>
            </li>
            <li class="nav-item {{ Request::path() ==  'faq' ? 'active' : ''  }}">
                <a class="nav-link" href="{{route('faq')}}">FAQ </a>
            </li>
            <li class="nav-item {{ Request::path() ==  'about' ? 'active' : ''  }}">
                <a class="nav-link" href="{{route('about')}}">About </a>
            </li>
            <li class="nav-item {{ (in_array(Request::path() ,  ['updates','blog']) ) ? 'active' : ''  }} dropdown">
                <a class="nav-link dropdown-toggle" href="{{route('updates')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Updates
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('blog')}}">Blog</a>
                </div>
            </li>


            <li class="nav-item {{ Request::path() ==  'contact' ? 'active' : ''  }}">
                <a class="nav-link" href="{{route('contact')}}">Contact </a>
            </li>
        </ul>
    </div>
</nav>



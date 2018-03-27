@extends('layouts.app')

@section('content')
    <div class="contact-us">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{url('/public/images/logo.png')}}" class="img-responsive">
            </div>
            <div class="offset-lg-1 col-lg-5 contact-person">
                <h1>Michael Burk</h1>
                <span>Director of Business Development</span>
            </div>
        </div>
        <div class="row">
            <div class="offset-lg-7  col-lg-5 contact-details">
                <ul class="address-details mb-4">
                    <li>
                        <i class="fa fa-map-marker-alt"></i>
                        <address>
                            121 E Crogan St, Suite 16<br>
                            Lawrencevilla GA, 30046
                        </address>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <span>(470) 587-4198</span>
                    </li>
                    <li>
                        <i class="fa fa-globe"></i>
                        <a href="www.reliantduediligence.com"
                           title="Reliantdue Diligence">www.reliantduediligence.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
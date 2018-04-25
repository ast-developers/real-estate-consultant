@extends('layouts.app')

@section('content')
        <h1>About</h1>
        <div class="row justify-content-start flex-sm-column-reverse flex-lg-row">
            <div class="col-lg-7">
                <p>Reliant Due Diligence is based in Lawrenceville GA, a suburb of Atlanta GA. Atlanta is one of the largest metropolitan areas in the United States. We have brought in some of the most experienced developers and municipal planners from the area that encompasses 39 counties and houses over 6.5 million residents.</p>
                <p>The Atlanta metro has counties and cities across the development spectrum. From bedroom communities and farm towns to high rise condominiums, sprawling subdivisions, and walkable mixed used communities. Atlanta is one of the most diverse places to do business. Zoning has played a role in most of all of this development and has supplied our consultants with a diverse set experiences to draw from when it comes to evaluating your subject property.</p>
                <p>Reliant Due Diligence Provides its core product, the Essential Zoning Report. This is our only product. Other companies have tried to extend their business and offer other consulting services or offer Zoning Reports as a supplement to their existing business however we want to be the best at one thing. This benefits our customer because our experience in this one thing is and will be unmatched among our competition. We can provide referrals to other consultants if our products do not fit your needs.</p>
                <div style="background: url('{!! url('public/images/rec-map.png') !!}') center no-repeat;height:400px;margin-bottom:30px">&nbsp;</div>
            </div>
            <div class="col-lg-5">
                <img class="img-responsive mb-3" src="{!! url('public/images/about.jpg') !!}">
            </div>
        </div>
@endsection
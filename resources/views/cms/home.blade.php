@extends('layouts.app')

@section('content')

    <h1>Home</h1><br>
    <div>
        <p>Request an Essential Zoning Page -><a class="nav-link zonereport" href="{{route('zone')}}">Zoning Page </a></p>
        <p>Reliant Due Diligence provides a core product that is the Essential Zoning Report. This report is designed to provide the critical information for surveyors, lenders, attorneys and property purchasers the most up to date reliable information regarding land use and zoning.</p>
        <p>Our office in Lawrenceville Georgia, a suburb of Atlanta, can accommodate Zoning Report requests for municipalities all over the United States.</p>
        <img class="img-responsive mb-3 hero-banner" src="{!! url('public/images/homepage.jpg') !!}">
        <p>Reliant Due Diligence engages collegiate educated researchers from the world’s top universities and report reviewers that are current and previous land developers and municipal planners. This 2 step process ensures that multiple people review each report to minimize errors and avoid bias in the analysis. We look at each case objectively and provide clear and concise conclusions.</p>
        <p>Our Essential Zoning report contains ALTA Table A, 6a and 6b items and meets ALTA 3.0/3.1 Fannie Mae and Freddie Mac Zoning Endorsement Requirements</p>
        <p>Sample Report</p>
        <p>A sample Essential Zoning Report can be found <a href="{!! url('public/assets/sample-report.pdf') !!}">here</a></p>
    </div>
@endsection
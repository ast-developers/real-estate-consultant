@extends('layouts.app')

@section('content')

    <h1>Reliant Due Diligence LLC</h1><br>
    <div>
        <p>Already Familiar with our process? --><a class="nav-link zonereport" href="{{route('services')}}">Order your Essential Zoning Report Now </a></p>

        <p>Reliant Due Diligence provides a core product, the <strong>Essential Zoning Report</strong>. This report is designed to provide critical information for surveyors, lenders, attorneys and property purchasers the most up to date reliable information regarding land use and zoning.</p>

        <div class="row">
            <div class="col-md-6">
                <p>Each Essential Zoning Report Includes:</p>
                <ul>
                    <li>An executive summary with conclusions provided by our Zoning Consultants</li>
                    <li>An easy to read and concise 10 to 12 page report containing the pertinent information on the subject property</li>
                    <li>A copy of the zoning map including the area around the subject property</li>
                    <li>A copy of the zoning ordinance relevant to the subject property</li>
                    <li>A copy of a Zoning Verification Letter From the municipality (if provided)</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img class="img-responsive mb-3 hero-banner" src="{!! url('public/images/homepage.jpg') !!}">
            </div>
        </div>
        <p>Our office in Lawrenceville Georgia, a suburb of Atlanta, can accommodate Zoning Report requests for municipalities all over the United States.</p>
        <p>Reliant Due Diligence utilizes researchers from the world's top universities along with experienced land developers and municipal planners to create and review the Essential Zoning Report. This two step process ensures that multiple people review each report to minimize errors and avoid bias in the analysis. We look at each case objectively and provide clear and concise conclusions.</p>
        <p>Our Essential Zoning report contains ALTA Table A, 6a and 6b items and meets ALTA 3.0/3.1 Fannie Mae and Freddie Mac Zoning Endorsement Requirements</p>
        <p>Sample Report</p>
        <p>Download a full sample report <a href="{!! url('public/assets/sample-report.pdf') !!}">here</a>.</p>
    </div>
@endsection
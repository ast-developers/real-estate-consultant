@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Zoning Page</h1><br>

                <p>Request to the Zoning Report Page -><a class="nav-link zonereport" href="{{route('zoneForm')}}">Zoning Report Page </a></p>

                <p>Reliant Due Diligence engages collegiate educated researchers from the world’s top universities and report reviewers that are current and previous land developers and municipal planners. This 2 step process ensures that multiple people review each report to minimize errors and avoid bias in the analysis. We look at each case objectively and provide clear and concise conclusions.</p>
                <p>Initial drafts of the Essential Zoning Reports are completed by researchers that are graduates of some of the world’s top universities. These researchers comb through hundreds of pages of municipal documents and extract only the relevant information to the subject property.</p>
                <img class="img-responsive mb-3 hero-banner" src="{!! url('public/images/zoning-report.jpg') !!}">
                <p>Reliant’s Zoning Consultants review the results of the research to ensure completeness, accuracy and request further information if needed. These consultants come from private development companies or are seasoned municipal planners. The consultants take an objective look at each case and provide clear and concise conclusions based their years of experience. These consultants will be your point of contact should you have questions regarding your report or the information it contains.</p>
                <p>Reports can be ordered online and a draft report is ready in a little as 48 hours and a completed report in 5-7 business days.</p>
                <p>Each Essential Zoning Report is back by $2,000,000 in Errors and Omissions Insurance to provide piece of mind and ensure the reports reliability.</p>
                <p>Each Essential Zoning Report Includes:</p>
                <ul>
                    <li>An executive summary of the findings in the report</li>
                    <li>An easy to read concise 10 to 12 page report containing the pertinent information on the subject property</li>
                    <li>A copy of the zoning map around the area of the subject property</li>
                    <li>A copy of the zoning ordinance relevant to the subject property</li>
                    <li>A copy of a Zoning Verification Letter From the municipality (if provided)</li>
                </ul>
                <p>Sample Report</p>
                <p>A sample Essential Zoning Report can be found <a href="{!! url('public/assets/sample-report.pdf') !!}">here</a></p>
            </div>
        </div>
    </div>

@endsection
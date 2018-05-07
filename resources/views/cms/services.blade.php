@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <h1>Services</h1><br>

                <strong>Essential Zoning Report</strong>
                <p>Already Familiar with our process? --><a class="nav-link zonereport" href="{{route('zoneForm')}}">Order
                        your Essential Zoning Report Now</a></p>

                <p>Reliant Due Diligence utilizes researchers from the world's top universities along with experienced land developers and municipal planners to create and review the Essential Zoning Report. This two step process ensures that multiple people review each report to minimize errors and avoid bias in the analysis. We look at each case objectively and provide clear and concise conclusions.</p>
                <div class="row">
                    <div class="col-md-6">
                        <strong>Step One: Research and Report Creation</strong>
                        <p>Initial drafts of the Essential Zoning Reports are completed by researchers from some of the world’s top universities. They examine hundreds
                            of pages of municipal documents and extract only the relevant information to the subject
                            property.</p>
                        <strong>Step Two: Information Validation and Report Conclusions</strong>
                        <p>Reliant’s Zoning Consultants review the results of the research to ensure completeness,
                            accuracy and request further information if needed. These consultants come from private
                            development companies or are seasoned municipal planners. The consultants take an objective
                            look at each case and provide clear and concise conclusions.
                            These consultants will be your point of contact should you have questions regarding your
                            report or the information it contains.</p>
                        <p>Reports can be ordered online. A draft report is available in a little as 48 hours with a
                            completed report emailed to the customer in 5-7 business days.</p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive mb-3 hero-banner"
                             src="{!! url('public/images/zoning-report.jpg') !!}">
                    </div>
                </div>
                <p>Each Essential Zoning Report is backed by $2,000,000 of Errors and Omissions Insurance. This provides peace of mind and ensure the reports reliability.</p>
                <p>Each Essential Zoning Report Includes:</p>
                <ul>
                    <li>An executive summary with conclusions provided by our Zoning Consultants</li>
                    <li>An easy to read and concise 10 to 12 page report containing the pertinent information on the subject property</li>
                    <li>A copy of the zoning map including the area around the subject property</li>
                    <li>A copy of the zoning ordinance relevant to the subject property</li>
                    <li>A copy of a Zoning Verification Letter From the municipality (if provided)</li>
                </ul>
                <strong>Pricing:</strong>
                <p>Reliant Due Diligence offers one product. That is the Essential Zoning Report. We find that this is
                    the best combination of reports available. This has allowed us to streamline our process, and eliminate items that are not relevant to your needs. This keeps
                    our costs down while still
                    utilizing the most talented researchers and reviewers available.</p>
                <strong>Each report is $450.00. You do not pay until you are satisfied
                    with the results.</strong>
                <p>If you have a project that includes multiple parcels that share the many of the same characteristics
                    please contact us through our contact page and we can discuss reduced pricing for those types of
                    projects.</p>

                <strong>Sample Report</strong>
                <p>We are confident that our reports will satisfy your needs however if you would like to see a full
                    sample Essential Zoning Report before you can make a purchase you can download one <a
                            href="{!! url('public/assets/sample-report.pdf') !!}"><u>here</u></a>.</p>
            </div>
        </div>

@endsection

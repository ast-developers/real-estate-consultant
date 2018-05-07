@extends('layouts.app')

@section('content')
    <h1>FAQ's</h1><br>

    <p>We attempt to make our reports and systems as easy to use as possible. If you have questions see the below Frequently Asked Questions of our reports and process. We update them regularly to help keep our customers informed. If you still have questions or suggestions please contact us through our contact page and someone will respond to you as soon as possible.</p>

    <img class="img-responsive mb-3 hero-banner" src="{!! url('public/images/faq.jpg') !!}">
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <button class="btn btn-link">
                        Why is zoning important?
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    Since the supreme court case of Village of Euclid v. Amber Realty Co. in 1926, zoning has become more and more prevalent in the United States. In that case the Village of Euclid had 6 zoning classes that were affirmed by the supreme court. The court cited that zoning provided for the “general health and welfare” of the public. The intent of the ordinance was to separate noxious or undesired uses from neighboring residential properties that could change the character of the neighborhood. The city of Atlanta GA has over 60 zoning classes with restrictions including land use, parking, building heights, build setbacks, tree canopy coverage, building materials, lighting. These 60 zoning classes can also be affected by overlay districts and historic districts that can add complexity to each property exponentially.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <button class="btn btn-link">
                        Who needs a zoning report?
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    Many different organizations and individuals use Zoning reports. Attorneys, lenders, surveyors, property investors and commercial property purchases looking to locate their business at a certain location
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0 collapsed"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <button class="btn btn-link">
                        Why should I consider a zoning report?
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    A zoning report is a tool that is used to make decisions regarding risk and the feasibility of a property before significant investments are made. Some groups need a report to verify the zoning of a property and verify that their proposed use for the property is allowed. Some groups need a report to verify that the current use of the property will be allowed when the property changes hands or is damaged due to fire, flood or accidental destruction. Some groups use our reports as an augmentation to their own research to minimize their risk of providing information that may not be their core competency. Reliant specializes in Zoning research and can do it efficiently and completely. Zoning research is all we do.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading4">
                <h5 class="mb-0 collapsed"  data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                    <button class="btn btn-link">
                        Why Reliant?
                    </button>
                </h5>
            </div>
            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                <div class="card-body">
                    As land developers and former municipal planners, Reliant looks at zoning differently. We can provide insights on what are potentially risky or expensive issues that and what issues can be ignored. Often municipalities intend for their zoning ordinances to be very clear however many have vague clauses that can leave its meaning up to interpretation<br><br>
                    Reliant Due Diligence only uses top educated reviewers that have degrees in land use or real estate or many years of experience as municipal planners.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading5">
                <h5 class="mb-0 collapsed"  data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                    <button class="btn btn-link">
                        Why reliant reports are better?
                    </button>
                </h5>
            </div>
            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                <div class="card-body">
                    Reliant utilizes researchers that have obtained bachelors and masters degrees from some of the best universities in the world. After the research is completed experienced developers and planners review the results of the research and verify the information to be accurate and complete. This two-stage process insures that the complexities of the zoning code are looked at by multiple people to help avoid errors omissions and inaccuracies
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading6">
                <h5 class="mb-0 collapsed"  data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                    <button class="btn btn-link">
                        How do I know the information provided is accurate?
                    </button>
                </h5>
            </div>
            <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                <div class="card-body">
                    Reliant obtains the most recent zoning ordinance from the municipality when you request your report. Some of the other organizations utilize libraries of ordinances that have been collected from years of being in business and never renewed. Each report is also accompanied by a zoning verification letter (if available) provided by the municipality that further ensures that you are getting the most accurate and up to date information. Each essential zoning and land use report is covered by $2,000,000 of in errors and omissions insurance to show commitment in our reports and give you peace of mind that the information provided is reliable.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading7">
                <h5 class="mb-0 collapsed"  data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                    <button class="btn btn-link">
                        In what municipalities does Reliant Due Diligence provide reports?
                    </button>
                </h5>
            </div>
            <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
                <div class="card-body">
                    Reliant can produce reports from almost every municipality in the United States. Rarely, a small municipality may not have digitized their ordinances. If this happens it may take a few days longer to complete the report. In that case we ensure the customer is notified of the delay as soon as it is discovered.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading8">
                <h5 class="mb-0 collapsed"  data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                    <button class="btn btn-link">
                        What information is needed from me to produce a report?
                    </button>
                </h5>
            </div>
            <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
                <div class="card-body">
                    The more information that you can provide the better. The very minimum needed is a tax parcel ID number or street address and the name of the municipality. Providing the most information available will aide us in turning around the report faster and with greater accuracy.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading9">
                <h5 class="mb-0 collapsed"  data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                    <button class="btn btn-link">
                        How long will it take to get the report?
                    </button>
                </h5>
            </div>
            <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion">
                <div class="card-body">
                    Reliant Due Diligence can provide a draft in as little as 48 hours. There are many factors that affect the timing of the reports completion. The most significant predictor of the time to complete the report is the responsiveness of the municipality. Once contact has been made with the municipality and the ordinance has been obtained the final report can be completed in 5 - 7 business days.
                </div>
            </div>
        </div>
    </div>
@endsection
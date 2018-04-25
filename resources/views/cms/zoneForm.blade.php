@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>To place an order please fill out the following four forms. The more information you can provide regarding the subject property the faster the report creation process will be completed. The absolute minimum for a report is the subject property address, or survey showing the subject property.
                    A confirmation email will be sent to the email address provided in the customer information page.
                </p>
                <p>If you have multiple unrelated projects please fill out a form for each property. For projects that contain multiple parcels that share similar characteristics please contact us before submitting forms via our contact page.</p>
            </div>
            <section class="col-md-12">
                <div class="wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs setup-panel" role="tablist">
                            <li role="presentation" class="active stepwizard-step">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab"
                                   title="Customer Information" class="btn btn-primary">
                            <span class="round-tab">
                                <i class="fa fa-user"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="stepwizard-step">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab"
                                   title="Bill Information" class="disabled btn btn-default">
                            <span class="round-tab">
                                <i class="fa fa-pencil-alt"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="stepwizard-step">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"
                                   title="Site Information" class="disabled btn btn-default">
                            <span class="round-tab">
                                <i class="fa fa-globe"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="stepwizard-step">
                                <a href="#step4" data-toggle="tab" aria-controls="step3" role="tab"
                                   title="Upload Documents" class="disabled btn btn-default">
                            <span class="round-tab">
                                <i class="fa fa-check"></i>
                            </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <form role="form" method="post" name="submitForm" id="submitForm" action="{{route('postZone')}}"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="tab-content">
                            <div class="tab-pane active setup-content" role="tabpanel" id="step1">
                                @include('cms.customerInfo')
                                <div class="btn-toolbar justify-content-end">
                                    <button type="button" class="btn btn-default nextBtn next-step align-self-end">
                                        Next
                                    </button>
                                </div>
                            </div>
                            <div class="tab-pane setup-content" role="tabpanel" id="step2">
                                @include('cms.billInfo')
                                <div class="clearfix">&nbsp;</div>

                                <div class="btn-toolbar justify-content-between">
                                    <button type="button" class="btn btn-default prev-step">Previous</button>
                                    <button type="button" class="btn btn-default btn-info-full nextBtn next-step">Next
                                    </button>
                                </div>
                            </div>
                            <div class="tab-pane setup-content" role="tabpanel" id="step3">
                                @include('cms.siteInfo')
                                <div class="btn-toolbar justify-content-between">
                                    <button type="button" class="btn btn-default prev-step">Previous</button>
                                    <button type="button" class="btn btn-default btn-info-full nextBtn next-step">Next
                                    </button>
                                </div>

                            </div>
                            <div class="tab-pane setup-content" role="tabpanel" id="step4">
                                @include('cms.fileUpload')
                                <div class="clearfix">&nbsp;</div>

                                <div class="btn-toolbar justify-content-between">
                                    <button type="button" class="btn btn-default prev-step">Previous</button>
                                    <button type="submit" value="Submit" class="btn btn-default btn-info-full next-step"
                                            name="submitBtn" id="submitBtn">Save and continue
                                    </button>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

@endsection
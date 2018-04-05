@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-md-12">
                <div class="wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="fa fa-user"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="fa fa-globe"></i>
                            </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="fa fa-pencil-alt"></i>
                            </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step4" data-toggle="tab" aria-controls="step3" role="tab" title="Step 4">
                            <span class="round-tab">
                                <i class="fa fa-check"></i>
                            </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <form role="form"  method="post" name="submitForm" id="submitForm" action="{{route('postZone')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel" id="step1">
                                <h3>Step 1</h3>
                                @include('cms.customerInfo')
                                <div class="btn-toolbar justify-content-end"><button type="button" class="btn btn-default next-step align-self-end">Next</button></div>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step2">
                                <h3>Step 2</h3>
                                @include('cms.siteInfo')
                                <div class="btn-toolbar justify-content-between">
                                    <button type="button" class="btn btn-default prev-step" >Previous</button>
                                    <button type="button" class="btn btn-default btn-info-full next-step">Next</button>
                                </div>

                            </div>

                            <div class="tab-pane" role="tabpanel" id="step3">
                                <h3>Step 3</h3>
                                @include('cms.billInfo')
                                <div class="clearfix">&nbsp;</div>

                                <div class="btn-toolbar justify-content-between">
                                    <button type="button" class="btn btn-default prev-step" >Previous</button>
                                    <button type="button" class="btn btn-default btn-info-full next-step" >Next</button>
                                </div>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step4">
                                <h3>Step 4</h3>
                                @include('cms.fileUpload')
                                <div class="clearfix">&nbsp;</div>

                                <div class="btn-toolbar justify-content-between">
                                    <button type="button" class="btn btn-default prev-step" >Previous</button>
                                    <button type="submit" value="Submit" class="btn btn-default btn-info-full next-step" name="submitBtn" id="submitBtn">Save and continue</button>
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
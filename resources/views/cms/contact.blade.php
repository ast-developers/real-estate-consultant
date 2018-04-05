@extends('layouts.app')

@section('content')

    @if (\Session::has('success'))
        <div class="alert alert-success" role="alert" id="success-alert">
            {!! \Session::get('success') !!}
            {{--<button type="button" class="close" data-dismiss="alert">x</button>--}}
            <button type="button" class="close" aria-label="Close">
                <span data-dismiss="alert">&times;</span>
            </button>
        </div>
    @elseif (\Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {!! \Session::get('error') !!}
            <button type="button" class="close" aria-label="Close">
                <span data-dismiss="alert">&times;</span>
            </button>
        </div>
    @endif


    <div class="contact-us">
        <div class="row">
            <div class="col-lg-6">
                <form method="post" action="{{route('postContact')}}">
                    {{ csrf_field() }}
                    <div class="card">
                        <h5 class="card-header">
                            Contact Us
                        </h5>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-lg-3 col-sm-3 col-form-label">Name *</label>
                                <div class="col-lg-9 col-sm-9">
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="subject" class="col-lg-3 col-sm-3 col-form-label">Subject *</label>
                                <div class="col-lg-9 col-sm-9">
                                    <input type="text" name="subject" id="subject" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="message" class="col-lg-3 col-sm-3 col-form-label">Message *</label>
                                <div class="col-lg-9 col-sm-9">
                                    <textarea name="message" id="message" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">&nbsp;</div>

                    <div class="row">
                        <div class="col-sm-12 pb-5">
                            <input type="submit" value="Submit" id="submitForm" class="btn btn-default">
                        </div>
                    </div>

                </form>
            </div>
            <div class="offset-lg-1 col-lg-5 contact-person">
                <h1>Michael Burk</h1>
                <span>Director of Business Development</span>
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
        {{--<div class="row">
            <div class="offset-lg-7  col-lg-5 contact-details">

            </div>
        </div>--}}
    </div>
@endsection
@extends('layouts.app')

@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success" role="alert">
            {!! \Session::get('success') !!}
        </div>
    @elseif (\Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {!! \Session::get('error') !!}
        </div>
    @endif
    <form method="post" action="{{route('postZone')}}">
        {{ csrf_field() }}
        <div class="card">
            <h5 class="card-header">
                Customer Info
            </h5>
            <div class="card-body">
                <div class="form-group row">
                    <label for="customerInfo.first_name" class="col-lg-2 col-sm-3 col-form-label">First Name</label>
                    <div class="col-lg-10 col-sm-9">
                        <input type="text" name="customerInfo[first_name]" id="customerInfo.first_name"
                               class="form-control"
                               placeholder="First Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="customerInfo.last_name" class="col-lg-2 col-sm-3 col-form-label">Last Name</label>
                    <div class="col-lg-10 col-sm-9">
                        <input type="text" name="customerInfo[last_name]" id="customerInfo.last_name"
                               class="form-control"
                               placeholder="Last Name">
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>

        <div class="card">
            <h5 class="card-header">
                Site Info
            </h5>
            <div class="card-body">
                <div class="form-group row">
                    <label for="siteInfo.name" class="col-lg-2 col-sm-3 col-form-label">Site Name</label>
                    <div class="col-lg-10 col-sm-9">
                        <input type="text" name="siteInfo[name]" id="siteInfo.name"
                               class="form-control"
                               placeholder="Site Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="siteInfo.url" class="col-lg-2 col-sm-3 col-form-label">URL</label>
                    <div class="col-lg-10 col-sm-9">
                        <input type="text" name="siteInfo[url]" id="siteInfo.url" class="form-control"
                               placeholder="URL">
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="card">
            <h5 class="card-header">
                Billing Info
            </h5>
            <div class="card-body">
                <div class="form-group row">
                    <label for="billingInfo.first_name" class="col-lg-2 col-sm-3 col-form-label">First Name</label>
                    <div class="col-lg-10 col-sm-9">
                        <input type="text" name="billingInfo[first_name]" id="billingInfo.first_name"
                               class="form-control"
                               placeholder="First Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="billingInfo.last_name" class="col-lg-2 col-sm-3 col-form-label">Last Name</label>
                    <div class="col-lg-10 col-sm-9">
                        <input type="text" name="billingInfo[last_name]" id="billingInfo.last_name" class="form-control"
                               placeholder="Last Name">
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="row">
            <div class="col-sm-12">
                <input type="submit" value="Submit" class="btn btn-primary">
            </div>
        </div>
    </form>

@endsection
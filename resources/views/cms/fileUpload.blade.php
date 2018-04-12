<div class="card">
    <h5 class="card-header">
        Upload Documents
    </h5>
    <div class="card-body">
        <div class="form-group row">
            <label for="fileInfo" class="col-lg-2 col-sm-3 col-form-label">File Upload</label>
            <div class="col-lg-10 col-sm-9">
                <input type="file" name="fileInfo[]" id="fileInfo"
                       class="form-control" multiple>
            </div>
        </div>
        <div  class="form-group row">
            <label class="checkbox-inline col-lg-8 col-sm-4 col-form-label"><input type="checkbox" value="0" name="terms" id="terms">&nbsp I agree with the <a href="{{route('termsCondition')}}">Terms of service</a> and <a href="{{route('policy')}}">Privacy policy</a> .</label>
        </div>
       </div>
</div>
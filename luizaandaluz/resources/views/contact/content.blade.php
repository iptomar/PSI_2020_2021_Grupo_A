<div class="row">
    <div class="img-container">
        <div class="img-title">
            <span>@lang('frontoffice.contact')<span>
        </div>
    </div>
</div>

<div class="row justify-content-md-center">
    <div class="col-12 col-md-4 d-flex align-items-stretch">
        <div class="card contact card-contact">
            <div class="card-header text-center">
                <h5>@lang('frontoffice.titleContact')</h5>
            </div>
            <div class="card-body">
                <p class="card-text">@lang('frontoffice.infContact')</p>
                <p class="card-text">@lang('frontoffice.infMail')</p>
                <p class="card-text">@lang('frontoffice.infAddress')</p>
                <p class="card-text">@lang('frontoffice.infPostal')</p>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div id="map" style="height: 250px"></div>
    </div>

</div>


<div class="row">
    <div class="col-6">
        <h1>@lang('frontoffice.detailsTitle')</h1>
        <h4>@lang('frontoffice.detailsDescription')</h4>
    </div>
    <div class="col-12">
        <form >
            <div class="form-group">
                <label for="fName">@lang('frontoffice.fName'):</label>
                <input type="text" id="fName" name="fName">

                <label for="lName">@lang('frontoffice.lName'):</label>
                <input type="text" id="lName" name="lName">
            </div>
            <div class="form-group">
                <label for="age">@lang('frontoffice.age'):</label>
                <input type="number" id="age" name="age">
            </div>
            <div class="form-group">
                <label for="gender">@lang('frontoffice.gender'):</label>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">@lang('frontoffice.male')</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">@lang('frontoffice.female')</label>
            </div>
            <div class="form-group">
                <label for="mobileContact">@lang('frontoffice.mobileContact'):</label>
                <input type="text" id="mobileContact" name="mobileContact">

                <label for="email">@lang('frontoffice.email'):</label>
                <input type="email" id="email" name="email">
            </div>
            <button type="submit" class="btn btn-primary">@lang('frontoffice.submit')</button>
        </form>
    </div>
</div>

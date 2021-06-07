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


<div>
    <div>
        <h1>@lang('frontoffice.detailsTitle')</h1>
        <h4>@lang('frontoffice.detailsDescription')</h4>
    </div>
    <form >
        <label for="fName">@lang('frontoffice.fName'):</label><br>
        <input type="text" id="fName" name="fName"><br>
        
        <label for="lName">@lang('frontoffice.lName'):</label><br>
        <input type="text" id="fName" name="fName"><br>
        
        <label for="age">@lang('frontoffice.age'):</label><br>
        <input type="number" id="age" name="age"><br>
        
        <label for="gender">@lang('frontoffice.gender'):</label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">@lang('frontoffice.male')</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">@lang('frontoffice.female')</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">@lang('frontoffice.other')</label><br>
        
        <label for="mobileContact">@lang('frontoffice.mobileContact'):</label><br>
        <input type="text" id="mobileContact" name="mobileContact"><br>
        
        <label for="email">@lang('frontoffice.email'):</label><br>
        <input type="email" id="email" name="email"><br><br>
        
        <input type="submit" value="@lang('frontoffice.submit')">
    </form>
</div>

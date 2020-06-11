@extends('layouts.app')

@section('content')
<div class="container bg-primary">
	<div class="border border-primary m-3 p-3 rounded">
<form action="https://chglobal.work/mail/index.php/lists/rx5672cyp1075/subscribe" method="post">
<div class="box box-primary borderless">
<div class="box-header">
<h3 class="box-title">models subscribers</h3>
</div>

<div class="box-body">
<div class="callout callout-info">We're happy you decided to subscribe to our email list.<br/>
Please take a few seconds and fill in the list details in order to subscribe to our list.<br/>
You will receive an email to confirm your subscription, just to be sure this is your email address.</div>

<div class="form-group field-text wrap-email">
    <label for="ListFieldValue_value" class="required">Email <span class="required">*</span></label>    <input class="form-control field-email field-type-text" placeholder="Email" type="text" value="" name="EMAIL" id="EMAIL"/></div>
<div class="form-group field-text wrap-fname">
    <label for="ListFieldValue_value">First name</label>    <input class="form-control field-fname field-type-text" placeholder="First name" type="text" value="" name="FNAME" id="FNAME"/></div>
<div class="form-group field-text wrap-lname">
    <label for="ListFieldValue_value">Last name</label>    <input class="form-control field-lname field-type-text" placeholder="Last name" type="text" value="" name="LNAME" id="LNAME"/></div>
<div class="form-group field-phonenumber wrap-phone">
    <label for="ListFieldValue_value">Phone</label>    <input class="form-control field-phone field-type-phonenumber" placeholder="Phone" type="text" value="" name="PHONE" id="PHONE"/><div class="js-error-message errorMessage" style="display:none;"/>
    </div>
<div class="form-group field-text wrap-instagram">
    <label for="ListFieldValue_value">Instagram</label>    <input data-title="Instagram" data-container="body" data-toggle="popover" data-content="add your instagram id" class="form-control has-help-text field-instagram field-type-text" placeholder="Instagram" data-placement="top" type="text" value="" name="INSTAGRAM" id="INSTAGRAM"/></div></div>

<div class="box-footer">
<div class="pull-right"><input type="submit" class="btn btn-primary btn-flat" name="yt0" value="Subscribe"/></div>

<div class="clearfix"> </div>
</div>
</div>
        </form>
    </div>
    </div>
@endsection

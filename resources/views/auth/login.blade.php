@extends('layouts.app')

@section('style')
<style>
    .btn-blues,#btnnewreview,.nd-button {
        position: relative;
        display: inline-block;
        padding: 15px 28px;
        line-height: normal;
        border: 1px solid #000;
        text-transform: uppercase;
        font-size: 14px;
        text-align: center;
        font-weight: 400;
        font-style: normal;
        background-color: #000;
        color: #fff;
        border-radius: 10px
    }
</style>
@endsection

@section('content')
<div class="container margin-bottom-40 margin-top-40">
	<div class="row justify-content-md-center">
		<div class="col-lg-7 col-md-12">
			<div class="page-login account-box-shadow">
				<div id="login" class="row">
					<div class="col-lg-12 col-md-12 account-content order-lg-last order-md-last order-sm-first order-first">
						<ul class="auth-block__menu-list">
							<li class="active">
								<a href="#" title="Log in">Log in</a>
							</li>
							<li>
								<a href="/register" title="Sign">Sign up</a>
							</li>
						</ul>
						<div id="nd-login">
							<form method="post" action="/login" id="customer_login" accept-charset="UTF-8" class="has-validation-callback"><input name="FormType" type="hidden" value="customer_login"><input name="utf8" type="hidden" value="true">
							<div class="form-signup">
								
							</div>
							<div class="form-signup clearfix">
								<fieldset class="form-group margin-bottom-10">
									<label>Email<span class="required">*</span></label>
									<input autocomplete="off" placeholder="Enter your email address" type="email" class="form-control form-control-lg" value="" name="email" id="customer_email" required="" data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation-error-msg="Email sai định dạng">
								</fieldset>
								<fieldset class="form-group margin-bottom-0">
									<label>Password<span class="required">*</span></label>
									<input autocomplete="off" placeholder="Enter your password" type="password" class="form-control form-control-lg" value="" name="password" id="customer_password" data-validation-error-msg="Không được để trống" data-validation="required">
								</fieldset>
								<div class="clearfix"></div>
								<p class="text-right recover">
									<a href="#recover" class="btn-link-style" onclick="showRecoverPasswordForm();" title="Quên mật khẩu?">Forgot your password?</a>
								</p>
								<div class="pull-xs-left text-center" style="margin-top: 15px;">
									<button class="btn btn-style btn-blues" type="submit" value="Log in">Log in</button>
								</div>
								<p class="login--notes">Halafruit.vn is committed to confidentiality and will never post <br>or share information without your consent.</p>
							</div>
							</form>
							<div class="clearfix"></div>
							<div class="line-break">
								<span>or login via</span>
							</div>
							<div class="social-login text-center">
								<script>function loginFacebook(){var a={client_id:"947410958642584",redirect_uri:"https://store.mysapo.net/account/facebook_account_callback",state:JSON.stringify({redirect_url:window.location.href}),scope:"email",response_type:"code"},b="https://www.facebook.com/v3.2/dialog/oauth"+encodeURIParams(a,!0);window.location.href=b}function loginGoogle(){var a={client_id:"997675985899-pu3vhvc2rngfcuqgh5ddgt7mpibgrasr.apps.googleusercontent.com",redirect_uri:"https://store.mysapo.net/account/google_account_callback",scope:"email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",access_type:"online",state:JSON.stringify({redirect_url:window.location.href}),response_type:"code"},b="https://accounts.google.com/o/oauth2/v2/auth"+encodeURIParams(a,!0);window.location.href=b}function encodeURIParams(a,b){var c=[];for(var d in a)if(a.hasOwnProperty(d)){var e=a[d];null!=e&&c.push(encodeURIComponent(d)+"="+encodeURIComponent(e))}return 0==c.length?"":(b?"?":"")+c.join("&")}</script> 
								<a href="javascript:void(0)" class="social-login--facebook" onclick="loginFacebook()"><img width="129px" height="37px" alt="facebook-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"></a> 
								<a href="javascript:void(0)" class="social-login--google" onclick="loginGoogle()"><img width="129px" height="37px" alt="google-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"></a>
							</div>
						</div>
						<div id="recover-password" class="form-signup" style="display:none;">
							<div class="fix-sblock text-center">
								Have you forgotten your password? Enter your email address to retrieve a new one in your inbox.
							</div>					
							<form method="post" action="/account/recover" id="recover_customer_password" accept-charset="UTF-8" class="has-validation-callback"><input name="FormType" type="hidden" value="recover_customer_password"><input name="utf8" type="hidden" value="true">
							<div class="form-signup">
								
							</div>
							
							<div class="form-signup clearfix">
								<fieldset class="form-group">
									<label>Email<span class="required">*</span></label>
									<input type="email" class="form-control form-control-lg" value="" name="Email" id="recover-email" placeholder="Enter your email address" data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation-error-msg="Email sai định dạng" required="">
								</fieldset>
							</div>
							<div class="action_bottom text-center">
								<button class="btn btn-style btn-blues" style="margin-top: 10px;" type="submit" value="Retrieve your password">Retrieve your password</button>
							</div>
							<div class="text-login text-center">
								<p>Go back to <a href="javascript:;" class="btn-link-style btn-register" onclick="hideRecoverPasswordForm();" title="Back">the login screen.</a></p>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

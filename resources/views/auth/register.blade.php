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
							<li>
								<a href="/login" title="Log in">Log in</a>
							</li>
							<li class="active">
								<a href="#" title="Sign up">Sign up</a>
							</li>
						</ul>
						<form 
                        method="post" 
                        action="/register" 
                        id="customer_register" 
                        accept-charset="UTF-8" 
                        class="has-validation-callback"
                        >
                            <div class="form-signup clearfix">
                                <div class="row">
                                    <div class="col-md-12">
                                        <fieldset class="form-group">
                                            <label>Last name<span class="required">*</span></label>
                                            <input placeholder="Enter your last name" type="text" class="form-control form-control-lg" value="" name="lastName" id="lastName" required="" data-validation-error-msg="Last name is required" data-validation="required">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset class="form-group">
                                            <label>First name<span class="required">*</span></label>
                                            <input placeholder="Enter your first name" type="text" class="form-control form-control-lg" value="" name="firstName" id="firstName" required="" data-validation-error-msg="First name is required" data-validation="required">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset class="form-group">
                                            <label>Telephone number<span class="required">*</span></label>
                                            <input placeholder="Enter your telephone number" type="tel" class="number-phone form-control form-control-lg" value="" name="phone" id="phone" required="" data-validation-error-msg="Phone number required" data-validation="required">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset class="form-group">
                                            <label>Email<span class="required">*</span></label>
                                            <input placeholder="Enter your email" type="email" class="form-control form-control-lg" data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation-error-msg="Invalid email format" value="" name="email" id="email" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset class="form-group">
                                            <label>Password<span class="required">*</span></label>
                                            <input placeholder="Enter Password" type="password" class="form-control form-control-lg" value="" name="password" id="password" required="" data-validation-error-msg="Password is required" data-validation="required">
                                        </fieldset>
                                    </div>
                                    
                                    <div class="col-md-12 text-center margin-top-10">
                                        <button type="submit" value="Sign up" class="btn btn-style btn-blues">Create your account</button>
                                    </div>
                                </div>
                            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

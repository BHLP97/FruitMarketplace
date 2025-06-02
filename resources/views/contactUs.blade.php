@extends('layouts.app')

@section('content')
<div class="container contact page-contacts">
	<div class="row contact-padding">
		<div class="col-12 order-md-1 order-3">
			<div class="contact-maps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.218052295667!2d105.8042514152679!3d21.06395148597932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aae74d040b51%3A0xe45f068b9c898081!2zOTUgWHXDom4gTGEsIFTDonkgSOG7kywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1636444884710!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12 leave-your-message order-md-2 order-1">
			<h3>Contact Information</h3>
			<p class="p-bottom">
				Imported fruit system, especially hand-carried fruits directly from the US, Australia, Japan, Korea, New Zealand, Taiwan... such as Cherry, Milk Grape, fruit basket and full range of imported fruit products to meet all customer requirements. 100% standard quality, reasonable price
			</p>
			<div class="contact-box">
				
				<p class="add"><strong>Address 1: </strong>Số 95 Xuân La - Tây Hồ <br>- Hà Nội&nbsp;</p>
				<p class="add"><strong>Address 2: </strong>Số 97 Đào Tấn - Ba Đình - Hà Nội</p>
				<p class="add"><strong>Address 3: </strong>Số 24B7 Phạm Ngọc Thạch - Đống Đa - HN</p>
				<p class="add"><strong>Address 4: </strong>45 P. Chùa Láng, Láng Thượng, Đống Đa, Hà Nội</p>
			
			
				<p class="phone"><strong>Điện thoại: </strong><a href="tel:0862593599" title="0862593599">0862593599</a></p>
			
			
		
				<p class="mail"><strong>Email: </strong><a href="mailto:hoa263mta@gmail.com" title="hoa263mta@gmail.com">hoa263mta@gmail.com</a></p>
		
			</div>

		</div>
		<div class="col-lg-8 col-md-6 col-sm-12 leave-your-message order-md-3 order-2">
			<form method="post" action="/postcontact" id="contact" accept-charset="UTF-8" class="has-validation-callback"><input name="FormType" type="hidden" value="contact"><input name="utf8" type="hidden" value="true"><input type="hidden" id="Token-80704cc507b84a298f93951e01368da6" name="Token" value="03AFcWeA4tPHR_L2sNWLMLseTMhOHEknExnoGrpGB3yk2ZiIFUodNtt-eod8P18_sQ1kqUrrcbHjQwyF1MzikgVhBjL9XIc37roSsRU1188UPQVE28gtD-pUXP_fU55wbHtCf6yg_EUfnNC-Yris2x_yogxKbyV223zqhpEES48-RvSGEV5qr3hrrRqm1d8KdLoyt-IDleMOTAGcPleittmILi3XYYbTVrCHxh4pz2o21lveXH8fIIa2P_AK7PHOh-UphFicgidShwjpUONO7rZxGXZLkPqGAsmNz_TW5MOP1F7_m87YuSn_MmFx6eVVe52hc4HgDyskrjtG30YQ30GHtrH5XGYaKYoH4QfXzIBbzXhuLftap2LW3dFU9H8K2s1yS__Mz5GdAXB2Kbymn1vlAKPbQoPzd5Lz4xO2ZLvsCrHlvnWmu3uGLp6QKSUvwk-aaDQXwUH4kVhPi0e_yeq1MYJ6mLgfl67UYlBLP2yEt0BH2YXZBGhZ8Gfpjiu0ExELWy21eHUpzwr3Lm5OfoHBK2GrmpC5V95hXQRKMoibL6WF8_s_p6vA7AImDP7STbEoNWqn0-WAViyfzCHVVcu6LOun55cJoG6BzRixFPpPqKvCqxhaOoHAEqmW1pNW8N9d8ofE3_209PAaHjymmVPufntJ_Fd5bBEFuFQd9GL2ig71ODeggdbIx6nV5HwlGkBwaN7MOmjt4uTmarfwgWY04ITkZnVbKllGxtO7OPpsk1kCFxJ7v5i0tGiY2OOEThFmlZzjiJNCrIrMj-zrs97K433izVwCXBOtyD9SnvXeUzsWwvS_Vvg1kROY3pGa4w37V9qUf5KX5d3IL_3UqBxkh3qEIjPKgi2GlHjPpa-tFTY6Y2ak_jdCwwNJxJWnBoFHmglyxFRZkdMyD9OWlTuq74S_im6s3DcF6ypinFF-xm1DhQwwuDa8g"><script src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script><script>grecaptcha.ready(function() {grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {action: "contact"}).then(function(token) {document.getElementById("Token-80704cc507b84a298f93951e01368da6").value = token});});</script>
	
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<fieldset class="form-group">
						<label>Full name<span class="required">*</span></label>
						<input placeholder="Enter your full name" type="text" name="contact[name]" id="name" class="form-control  form-control-lg" data-validation-error-msg="This field cannot be empty" data-validation="required" required="">
					</fieldset>
				</div>
				<div class="col-sm-6 col-xs-12">
					<fieldset class="form-group">
						<label>Email<span class="required">*</span></label>
						<input placeholder="Enter your email" type="email" name="contact[email]" data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation-error-msg="Email sai định dạng" id="email" class="form-control form-control-lg" required="">
					</fieldset>
				</div>
				<div class="col-sm-12 col-xs-12">
					<fieldset class="form-group">
						<label>Telephone number<span class="required">*</span></label>
						<input placeholder="Enter your phone number" type="tel" name="contact[phone]" data-validation-error-msg="This field cannot be empty" data-validation="required" id="tel" class="number-phone form-control form-control-lg" required="">
					</fieldset>
				</div>
				<div class="col-sm-12 col-xs-12">
					<fieldset class="form-group">
						<label>Content<span class="required">*</span></label>
						<textarea placeholder="Contact content" name="contact[body]" id="comment" class="form-control form-control-lg" rows="5" data-validation-error-msg="This field cannot be empty" data-validation="required" required=""></textarea>
					</fieldset>
					<fieldset class="form-group">
						<button type="submit" class="btn btn-blues btn-style btn-style-active">Send message</button>
					</fieldset>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
@endsection
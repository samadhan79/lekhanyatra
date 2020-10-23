@extends('layouts.default')
@section('content')
<div class="contact-top">
	<div class="container">
		<h2>Contact</h2>		
		<div class="contact">
			<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below 
				for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum
				et Malorum" by Cicero are also reproduced in their exact original form, 
			accompanied by English versions from the 1914 translation by H. Rackham.</p>
			<div class="maps">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.182370726!2d-0.10159865000000001!3d51.52864165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sin!4v1423294537265" width="100%" height="153px" frameborder="0" style="border:0"></iframe> 
				</div>
			</div>
			<div class="contact-down">
				<div class="contact-right">
					<div class="col-md-6 contact-left">
						<h5>CONTACT-INFO</h5>
						<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below 
							for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum
							et Malorum" by Cicero are also reproduced in their exact original form, 
						accompanied by English versions from the 1914 translation by H. Rackham.</p>
						<address>
							<strong>The Company Name Inc.<br>
								9870 St Vincent Place,<br>
							Glasgow, DC 45 Fr 45.</strong><br>
							Telephone: +1 800 603 6035<br>
							FAX: +1 800 889 9898<br>
							E-mail: <a href="mailto:info@example.com">mail@example.com<script cf-hash="f9e31" type="text/javascript">
								/* <![CDATA[ */!function(){try{var t="currentScript"in document?document.currentScript:function(){for(var t=document.getElementsByTagName("script"),e=t.length;e--;)if(t[e].getAttribute("cf-hash"))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute("data-cfemail");if(a){for(e="",r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}}}catch(u){}}();/* ]]> */</script></a><br>
							</address>
						</div>
						<div class="col-md-6 contact-info">
							<form>
								<input type="text" name="your name" value="NAME" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'NAME';}">				
								<input type="text" name="your email" value="EMAIL" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'EMAIL';}">
								<textarea cols="70" rows="5" name="message" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'MESSAGE';}" >MESSAGE </textarea>
								<div class="clearfix"> </div>
								<input type="submit"value="SEND" />

							</form>					
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>	
		</div>
	</div>
	@stop


var hide_msg_time = 4500;
$(document).ready(function(e) {
	
	var timezone = moment.tz.guess();
	//console.log(timezone);
	$('#timezone').val(timezone);


	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	$('.alert').delay(hide_msg_time).slideUp('slow');
	$("#forgot_pass_form").validate({
		rules: {
			email: {
				remote: {
					url: 'employee/login/check_employee_email_exist',
					type: "post"
				}
			}
		},
		messages: {
			email : {
				required : "Please enter email address."
			}
		},
		submitHandler: function(form) {
			$("#forgot_pass_btn").attr('disabled',true).text('Submitting...');			
			$.ajax({
				url: 'employee/login/forgot_password',
				type: 'POST',
				data: { email : $('#email').val() },
				success: function(msg) {
					if(msg === 'TRUE') {
						$('#msg_success').show();							
						$('#forgot_pass_form')[0].reset();
						setTimeout(function() {
							$('#forgot_password').modal('toggle');
						}, 4500);
						$("#forgot_pass_btn").attr('disabled',false).text('Submit');;
					} else {
						$("#forgot_pass_btn").attr('disabled',false).text('Submit');;
						$('#msg_error').show();
					}
				}
			});	
		}
	});

	$('#forgot_password').on('hide.bs.modal', function (e) {
		$('#email').removeClass('error');
		$('.error').remove();  
		$('#email').val('');
		$('#msg_success').hide();
		$('#msg_error').hide();
	});
});
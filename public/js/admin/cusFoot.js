$(document).ready(function(e) {

	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
	
	$('#change_pass_form_modal').on('hide.bs.modal', function (e) {
		$('input[type=password]').each(function (e) {
			$(this).removeClass('error');
			$(this).val('');
		});
		$('.error').remove();
	});

	$('#change_pass_form').validate({
		rules: {
			old_password: {
				remote: {
					url: 'admin/login/check_admin_password',
					type: "post"
				},
				required : true
			},
			new_password: {
				required : true
			},
			confirm_password: {
				required : true,
				equalTo: "#new_password"
			}
		},
		messages: {
			old_password: {
				required : "Please enter old password."
			},
			new_password: {
				required : "Please enter new password."
			},
			confirm_password: {
				required : "Please enter confirm password.",
				equalTo : "Confirm password mismatched."
			}
		},
		submitHandler: function(form) {

			var frm_data = {
				old_password : $('#old_password').val(),
				new_password : $('#new_password').val()
			};

			$("#change_pass_btn").attr('disabled',true);
			$('.fa-spinner').removeClass('ds-none');

			$.ajax({
				url: 'admin/login/change_password',
				type: 'POST',
				data: frm_data,
				success: function(msg) {
					$('.fa-spinner').addClass('ds-none');
					$("#change_pass_btn").attr('disabled',false);
					$("#change_pass_form_modal").modal('toggle');
					if(msg == 'SUCCESS') {                                 
						$('#change_pass_form')[0].reset();
						notify('success', 'Password changed successfully');
					} else {
						notify('danger', 'Oops! something went wrong');
					}
				}
			});  
		}
	});

});






$(document).ready(function() {	

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
	
	$('.alert').delay(3500).fadeOut('slow');		

	$('#user-list').dataTable({
		aoColumns: [
			{"bSortable": false, "sWidth" : "5%"},
			{"bSortable": false},
			{"bSortable": false},
			{"bSortable": true},
			{"bSortable": true},
			{"bSortable": true},
			{"bSortable": false}
		],
		fnDrawCallback : function() {				
   			$('.table_ckbox').iCheck({
				checkboxClass: 'icheckbox_flat-grey',
				radioClass: 'iradio_flat-grey'
			});
		}
	});

	$('.table_ckbox_main').iCheck({
		checkboxClass: 'icheckbox_flat-grey',
		radioClass: 'iradio_flat-grey'
	});

    $(document).on('ifClicked', '[name="selectall"]', function() {
		$('[name="selectall"]').on('ifChecked', function(event) {
	 		$('[name^="chkdlt"]').prop('checked',false);
			$('[name^="chkdlt"]').iCheck('check');
		});
		$('[name="selectall"]').on('ifUnchecked', function(event) {
	 		$('[name^="chkdlt"]').prop('checked',true);
			$('[name^="chkdlt"]').iCheck('uncheck');
		});
	});

	$(document).on('ifChecked','[name^="chkdlt"]', function(e) {
        var k = 0;
        $('[name^="chkdlt"]:checked').each(function() {  
           	k++;
     	});

        if (k != 0)
           $(".hii").removeAttr('disabled');	           
        else
           $(".hii").attr('disabled','disabled');	           
    });

    $(document).on('ifUnchecked','[name^="chkdlt"]', function(e) {
        var j = 0;
        $('[name^="chkdlt"]:checked').each(function() {  
           	j++;
     	});

        if (j != 0)
           $(".hii").removeAttr('disabled');	           
        else
           $(".hii").attr('disabled','disabled');	           
    });

	$(document).on('click','.hii', function(e) {
		var allVals = []; 
     	$('[name^="chkdlt"]:checked').each(function() {  
        	allVals.push($(this).val());
     	});
     	if (allVals.length) {
     		var answer = confirm("Are you sure want to delete user ?");
            if (!answer)
                return false;

     		$('.fa-spinner').removeClass('ds-none');
     		//alert(allVals);	            	
        	$.ajax({
            	type : "POST",
            	url  : "user/delete_user",
            	data : { id : allVals },                 
            	dataType : 'JSON',
            	success: function(data) {
                	$('.fa-spinner').addClass('ds-none');
                	if (data.success == 1) {
                    	window.location.href = 'users/1';
                	} else {
                		notify('danger', data.message);
                	}                        
            	},
            	error: function(XMLHttpRequest, textStatus, errorThrown) {
                	notify('danger', 'Oops! Something went wrong');                  
            	}
        	});     
    	} else {
        	alert("Please select the user first");
    	}
	});

	$(document).on('click','.userDlt', function(e) {
		
		var allVals = $.trim($(this).attr('rel'));
     	var urlval 	= "user/delete_user";

     	if (allVals) {
     		var answer = confirm("Are you sure want to delete user ?");
            if (!answer)
                return false;

     		$('.fa-spinner').removeClass('ds-none');
     		//alert(allVals);	            	
        	$.ajax({
            	type : "POST",
            	url  : urlval + '/' +allVals,
            	data : { id : allVals },                 
            	dataType : 'JSON',
            	success: function(data) {
                	$('.fa-spinner').addClass('ds-none');
                	if (data.success == 1) {
                    	$('#rw_'+allVals).delay(1500).fadeOut('slow');
                    	notify('success', data.message);
                	} else {
                		notify('danger', data.message);
                	}                        
            	},
            	error: function(XMLHttpRequest, textStatus, errorThrown) {
                	notify('danger', 'Oops! Something went wrong');
            	}
        	});     
    	} else {
        	alert("Please select the user first");
    	}
	});
	
});
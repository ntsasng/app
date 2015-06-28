var baseurl = "http://local.dev/php/app";
$(function() {
	$('#selectlv').change(function(){
		level_id = $('#selectlv').val();
		$.ajax ({
			url: baseurl + "/index.php?controller=ajax&action=listuser",
			type: 'get',
			data: "id=" +level_id,
			async: true,
			success: function ( result ) {
				$('#level').html( result );
			}
		});
	});
});
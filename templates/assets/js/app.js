$(function() {
	$('#selectlv').change(function(){
		level_id = $('#selectlv').val();
		$.ajax ({
			url: 'index.php?controller=ajax&action=listuser',
			type: 'get',
			data: "id=" +level_id,
			async: true,
			success: function ( result ) {
				$('#level').html( result );
			}
		});
	});
});
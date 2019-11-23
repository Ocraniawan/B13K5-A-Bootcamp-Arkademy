
$(document).ready(function() {
	$('div.alert').not('.alert-important').delay(3000).slideUp(300);

	$("#form-pencarian").submit(function(){
		$("#id_kelas option[value='']")
		.attr("disabled","disabled");
		$("#jenis_kelamin option[value='']")
		.attr("disabled","disabled");

		//pastikan proses submit masih diteruskan
		return true;
	});

 }
);
function landscapePrint() {
	var css = '@page { size: 29.7cm 21cm;}',
	    head = document.head || document.getElementsByTagName('head')[0],
	    style = document.createElement('style');

	style.type = 'text/css';
	style.media = 'print';
	style.class = 'custom-margin-style';

	if (style.styleSheet){
	  style.styleSheet.cssText = css;
	} else {
	  style.appendChild(document.createTextNode(css));
	}

	head.appendChild(style);

	window.print();
}

function portraitPrint() {
	var css = '@page { size: 21cm 29.7cm;}',
	    head = document.head || document.getElementsByTagName('head')[0],
	    style = document.createElement('style');

	style.type = 'text/css';
	style.media = 'print';
	style.class = 'custom-margin-style';

	if (style.styleSheet){
	  style.styleSheet.cssText = css;
	} else {
	  style.appendChild(document.createTextNode(css));
	}

	head.appendChild(style);

	window.print();
}


//iCheck for checkbox and radio inputs
$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
	checkboxClass: 'icheckbox_minimal-blue',
	radioClass   : 'iradio_minimal-blue'
})

var datatableKH = {"decimal":        "",
										    "emptyTable":     "ពុំមានទិន្នន័យឡើយ",
										    "info":           "បង្ហាញ _START_ ដល់ _END_ នៃ _TOTAL_ ជួរ",
										    "infoEmpty":      "បង្ហាញ 0 ដល់ 0 នៃ 0 ជួរ",
										    "infoFiltered":   "(filtered ពី _MAX_ សរុប ជួរ)",
										    "infoPostFix":    "",
										    "thousands":      ",",
										    "lengthMenu":     "បង្ហាញ _MENU_ ជួរ",
										    "loadingRecords": "កំពុងដំណើរការ...",
										    "processing":     "កំពុងដំណើរការ...",
										    "search":         "ស្វែងរក:",
										    "zeroRecords":    "ពុំមានទិន្នន័យឡើយ",
										    "paginate": {
										        "first":      "ដំបូង",
										        "last":       "ចុងក្រោយ",
										        "next":       "បន្ទាប់",
										        "previous":   "ថយ"
										        }};


function isNumKeyup(value) {
	value.keyup(function () {
		value.val(value.val().replace(/[^\d.]/g,''));
	});
}

function isNumber(value) {
	value.val(value.val().replace(/[^\d.-]/g,''));
}

function isInteger(value) {
	value.val(value.val().replace(/[^\d]/g,''));
}

function formatNumber(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}

$('#dataTable-no-sorting').DataTable({
  "ordering": false
});

$('#dataTable-no-sorting-kh').DataTable( {
    "language": {
	    "decimal":        "",
	    "emptyTable":     "ពុំមានទិន្នន័យឡើយ",
	    "info":           "បង្ហាញ _START_ ដល់ _END_ នៃ _TOTAL_ ជួរ",
	    "infoEmpty":      "បង្ហាញ 0 ដល់ 0 នៃ 0 ជួរ",
	    "infoFiltered":   "(filtered ពី _MAX_ សរុប ជួរ)",
	    "infoPostFix":    "",
	    "thousands":      ",",
	    "lengthMenu":     "បង្ហាញ _MENU_ ជួរ",
	    "loadingRecords": "កំពុងដំណើរការ...",
	    "processing":     "កំពុងដំណើរការ...",
	    "search":         "ស្វែងរក:",
	    "zeroRecords":    "ពុំមានទិន្នន័យឡើយ",
	    "paginate": {
	        "first":      "ដំបូង",
	        "last":       "ចុងក្រោយ",
	        "next":       "បន្ទាប់",
	        "previous":   "ថយ"
	        }
  	},
	  "ordering": false,
    // buttons: true,
    "fnDrawCallback": function( oSettings ) {
    	$('.BtnDelete').click(function () {
				const swalWithBootstrapButtons = Swal.mixin({
				  confirmButtonClass: 'btn btn-success ml-2',
				  cancelButtonClass: 'btn btn-danger mr-2',
				  buttonsStyling: false,
				})

				swalWithBootstrapButtons.fire({
				  title: $('#deleteAlert').data('title'),
				  text: $('#deleteAlert').data('text'),
				  type: 'warning',
				  showCancelButton: true,
				  confirmButtonText: $('#deleteAlert').data('btnyes'),
				  cancelButtonText: $('#deleteAlert').data('btnno'),
				  reverseButtons: true
				}).then((result) => {
  				if (result.value) {
						$( "form" ).submit(function( event ) {
							$('button').attr('disabled','disabled');
						});

						$("#form-item-"+$(this).val()).submit();

					}
				})
    	});
    },
});


$( document ).ready(function() {

	$('#dataTable').DataTable();

	$('#dataTable-kh').DataTable( {
	    "language": {
		    "decimal":        "",
		    "emptyTable":     "ពុំមានទិន្នន័យឡើយ",
		    "info":           "បង្ហាញ _START_ ដល់ _END_ នៃ _TOTAL_ ជួរ",
		    "infoEmpty":      "បង្ហាញ 0 ដល់ 0 នៃ 0 ជួរ",
		    "infoFiltered":   "(filtered ពី _MAX_ សរុប ជួរ)",
		    "infoPostFix":    "",
		    "thousands":      ",",
		    "lengthMenu":     "បង្ហាញ _MENU_ ជួរ",
		    "loadingRecords": "កំពុងដំណើរការ...",
		    "processing":     "កំពុងដំណើរការ...",
		    "search":         "ស្វែងរក:",
		    "zeroRecords":    "ពុំមានទិន្នន័យឡើយ",
		    "paginate": {
		        "first":      "ដំបូង",
		        "last":       "ចុងក្រោយ",
		        "next":       "បន្ទាប់",
		        "previous":   "ថយ"
		        }
	  	},
	    // buttons: true,
	    "fnDrawCallback": function( oSettings ) {
	    	$('.BtnDelete').click(function () {
					const swalWithBootstrapButtons = Swal.mixin({
					  confirmButtonClass: 'btn btn-success ml-2',
					  cancelButtonClass: 'btn btn-danger mr-2',
					  buttonsStyling: false,
					})

					swalWithBootstrapButtons.fire({
					  title: $('#deleteAlert').data('title'),
					  text: $('#deleteAlert').data('text'),
					  type: 'warning',
					  showCancelButton: true,
					  confirmButtonText: $('#deleteAlert').data('btnyes'),
					  cancelButtonText: $('#deleteAlert').data('btnno'),
					  reverseButtons: true
					}).then((result) => {
	  				if (result.value) {
							$( "form" ).submit(function( event ) {
								$('button').attr('disabled','disabled');
							});

							$("#form-item-"+$(this).val()).submit();

						}
					})
	    	});
	    },
	});


	$('.BtnDelete').click(function () {
		const swalWithBootstrapButtons = Swal.mixin({
		  confirmButtonClass: 'btn btn-success ml-2',
		  cancelButtonClass: 'btn btn-danger mr-2',
		  buttonsStyling: false,
		})

		swalWithBootstrapButtons.fire({
		  title: $('#deleteAlert').data('title'),
		  text: $('#deleteAlert').data('text'),
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonText: $('#deleteAlert').data('btnyes'),
		  cancelButtonText: $('#deleteAlert').data('btnno'),
		  reverseButtons: true
		}).then((result) => {
			if (result.value) {
				$( "form" ).submit(function( event ) {
					$('button').attr('disabled','disabled');
				});

				$("#form-item-"+$(this).val()).submit();

			}
		})
	});

	//Initialize Select2 Elements
	$('.select2').select2()
});

//Date picker
$('#datepicker').datetimepicker({
    format: 'YYYY-MM-DD',
})

$( "form" ).submit(function( event ) {
	$('button').attr('disabled','disabled');
});


$('input[type="checkbox"]').change(function () {
  value = $(this).is(':checked');
  $(this).val(((value==true)? 1 : 0));
});

function formatNumber(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}

// Ajax Dynamic Select
function dynamicSelect(parent_field,child_table,parent_id,child_select) {

	$.ajaxSetup({
	  headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});
	$.ajax({
	  url: "/admin/ajax/dynamic_select",
	  method: 'post',
	  data: {
	     parent_field: parent_field,
	     child_table: child_table,
	     parent_id: parent_id,
	     child_select: child_select
	  },
	  success: function(data){
	  	console.log(data);
			$('[name="'+child_select+'"]').html(data);
		}
  });
}


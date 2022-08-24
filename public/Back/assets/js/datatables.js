$(function(e) {
	//file export datatable
	var table = $('#example').DataTable({
		paging: false,
		lengthChange: true,
		bInfo : false,
		buttons: [
			{
				extend: 'copyHtml5',
				orientation: 'landscape',
				pageSize: 'LEGAL',
				exportOptions: {
                    columns: [ 0, 1, 2, 3, 4,5,6,7 ]
                }
			},
			,
			{
				extend: 'excelHtml5',
				orientation: 'landscape',
				pageSize: 'LEGAL',
				exportOptions: {
                    columns: [ 0, 1, 2, 3, 4,5,6,7 ]
                }
			},
			 {
				extend: 'pdfHtml5',
				orientation: 'landscape',
				pageSize: 'LEGAL',
				exportOptions: {
                    columns: [ 0, 1, 2, 3, 4,5,6,7 ]
                }
			}, 
			  'colvis' ,
		],
		language: {
			searchPlaceholder: 'Axtarış edin...',
			scrollX: "100%",
			sSearch: '',
			lengthMenu: '_MENU_ ',
		},
		
	});
	

	window.table = table;
	
	table.buttons().container()
	.appendTo( '#example_wrapper .col-md-6:eq(0)' );		
	
	$('#example1').DataTable({
		language: {
			searchPlaceholder: 'Axtarış edin...',
			scrollX: "100%",
			sSearch: '',
			lengthMenu: '_MENU_',
		}
	});
	$('#example2').DataTable({
		language: {
			searchPlaceholder: 'Axtarış edin...',
			scrollX: "100%",
			sSearch: '',
			lengthMenu: '_MENU_',
		}
	});
	$('.datatable2').DataTable({
		language: {
			searchPlaceholder: 'Axtarış edin...',
			scrollX: "100%",
			sSearch: '',
			lengthMenu: '_MENU_',
		}
	});
	$('.datatable').DataTable({
		paging: true,
		lengthChange: true,
		bInfo : false,
		language: {
			searchPlaceholder: 'Axtarış edin...',
			scrollX: "100%",
			sSearch: '',
			lengthMenu: '_MENU_',
		}
	});
	$('#Invoicedatatable').DataTable({
		language: {
			searchPlaceholder: 'Axtarış edin...',
			scrollX: "100%",
			sSearch: '',
			lengthMenu: '_MENU_',
		}
	});
	//______Delete Data Table
	var table = $('#delete-datatable').DataTable({
		language: {
			searchPlaceholder: 'Axtarış edin...',
			sSearch: '',
		}
	}); 
    $('#delete-datatable tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
    $('#button').click( function () {
        table.row('.selected').remove().draw( false );
    } );
	
	//Details display datatable
	$('#example-1').DataTable( {
		language: {
			searchPlaceholder: 'Axtarış edin...',
			scrollX: "100%",
			sSearch: '',
			lengthMenu: '_MENU_',
		},
	} );
});
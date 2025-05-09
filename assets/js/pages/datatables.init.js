/*
Template Name: Velzon - Admin & Dashboard Template
Author: Themesbrand
Website: https://Themesbrand.com/
Contact: Themesbrand@gmail.com
File: datatables init js
*/

document.addEventListener('DOMContentLoaded', function () {
    let table = new DataTable('#example',
        {
            responsive: true,
            lengthChange: false,
            searching: false,
            language: {
                "lengthMenu": "_MENU_",
                "search": "",
                "searchPlaceholder": "Search records",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                "infoEmpty": "No entries found",
                "infoFiltered": "(filtered from _MAX_ total entries)",
                "zeroRecords": "No matching records found",
                "paginate": {
                    "first": '<i class="mdi mdi-chevron-left"></i>',
                    "last": '<i class="mdi mdi-chevron-right"></i>',
                    "next": '<i class="mdi mdi-chevron-right"></i>',
                    "previous": '<i class="mdi mdi-chevron-left"></i>'
                }
            },
        }
    );
    let table2 = new DataTable('#example_2',
        {
            responsive: true,
            lengthChange: false,
            searching: false,
            language: {
                "lengthMenu": "_MENU_",
                "search": "",
                "searchPlaceholder": "Search records",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                "infoEmpty": "No entries found",
                "infoFiltered": "(filtered from _MAX_ total entries)",
                "zeroRecords": "No matching records found",
                "paginate": {
                    "first": '<i class="mdi mdi-chevron-left"></i>',
                    "last": '<i class="mdi mdi-chevron-right"></i>',
                    "next": '<i class="mdi mdi-chevron-right"></i>',
                    "previous": '<i class="mdi mdi-chevron-left"></i>'
                }
            },
        }
    );
    let table3 = new DataTable('#example_3',
        {
            responsive: true,
            lengthChange: false,
            searching: false,
            language: {
                "lengthMenu": "_MENU_",
                "search": "",
                "searchPlaceholder": "Search records",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                "infoEmpty": "No entries found",
                "infoFiltered": "(filtered from _MAX_ total entries)",
                "zeroRecords": "No matching records found",
                "paginate": {
                    "first": '<i class="mdi mdi-chevron-left"></i>',
                    "last": '<i class="mdi mdi-chevron-right"></i>',
                    "next": '<i class="mdi mdi-chevron-right"></i>',
                    "previous": '<i class="mdi mdi-chevron-left"></i>'
                }
            },
        }
    );
});


document.addEventListener('DOMContentLoaded', function () {
  let table = new DataTable('#scroll-vertical', {
      "scrollY":        "210px",
      "scrollCollapse": true,
      "paging":         false
    });
    
});

document.addEventListener('DOMContentLoaded', function () {
  let table = new DataTable('#scroll-horizontal', {
      "scrollX": true
    });
});

document.addEventListener('DOMContentLoaded', function () {
  let table = new DataTable('#alternative-pagination', {
      "pagingType": "full_numbers"
    });
});

$(document).ready(function() {
    var t = $('#add-rows').DataTable();
    var counter = 1;
 
    $('#addRow').on( 'click', function () {
        t.row.add( [
            counter +'.1',
            counter +'.2',
            counter +'.3',
            counter +'.4',
            counter +'.5',
            counter +'.6',
            counter +'.7',
            counter +'.8',
            counter +'.9',
            counter +'.10',
            counter +'.11',
            counter +'.12'
        ] ).draw( false );
 
        counter++;
    } );
 
    // Automatically add a first row of data
    $('#addRow').click();
});


$(document).ready(function() {
    $('#example').DataTable();
});

//fixed header
document.addEventListener('DOMContentLoaded', function () {
  let table = new DataTable('#fixed-header', {
      "fixedHeader": true
    });
    
}); 

//modal data datables
document.addEventListener('DOMContentLoaded', function () {
  let table = new DataTable('#model-datatables', {
      responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for '+data[0]+' '+data[1];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
        }
    });
    
}); 

//buttons exmples
document.addEventListener('DOMContentLoaded', function () {
  let table = new DataTable('#buttons-datatables', {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'print', 'pdf'
        ]
    });
}); 

//buttons exmples
document.addEventListener('DOMContentLoaded', function () {
  let table = new DataTable('#ajax-datatables', {
        "ajax": '/static/json/datatable.json'
    });
}); 
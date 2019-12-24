/*DataTable Init*/

"use strict";

$(document).ready(function () {
    "use strict";
    $('#datable_1').DataTable();
    $('#datable_2').DataTable({"lengthChange": false});
    $('#datable_3').DataTable({
        lengthChange: true,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});
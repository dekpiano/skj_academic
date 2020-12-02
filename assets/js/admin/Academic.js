$(document).ready(function() {
    var ta = $('#tb-classroom').DataTable({
        "order": [
            [0, "desc"],
            [1, "asc"]
        ],

    });

    $('#ModalAddClassRoom').on('click', function() {
        $('#myModal').modal('show');
    });

    $('#AddClassRoom').on('submit', function(e) {
        e.preventDefault();
        var formadd = $('#AddClassRoom').serialize();
        $.ajax({
            type: 'post',
            url: "ConAdminClassRoom/AddClassRoom",
            data: formadd,
            beforeSend: function() {
                console.log("กำลังโหลด");
            },
            complete: function() {
                //console.log("คือไรว่ะ");
            },
            success: function(result) {
                $('#myModal').modal('hide');
                location.reload();
            }
        });

    });








});
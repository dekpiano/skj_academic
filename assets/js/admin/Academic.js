$(document).ready(function() {
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';

        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

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
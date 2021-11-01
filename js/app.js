$(document).ready(function() {

    $('#login-app').submit(function(event) {

        var username = $('input[name="username"]').val();
        var password = $('input[name="password"]').val();

        $.ajax({
            type: "POST",
            url: "api/login.php",
            data: {
                username: username,
                password: password
            },
            dataType: "json",
            encode: true,
        }).done(function(data) {
            $('#info-msg').html(data.message);

            if (data.success) {
                $(location).prop('href', 'home.php');
            }

        }).fail(function(data) {
            $('#info-msg').html('Invalid username and/or password.');
        });

        event.preventDefault();
    });

    $('#data-table-filter').submit(function(event) {

        var search = $('#data-table-filter-text').val();

        $.ajax({
            type: "POST",
            url: "api/get_data.php",
            data: {
                search: search
            },
            dataType: "json",
            encode: true,
        }).done(function(result) {

            $("#tbody-data-table").empty();

            var count = 1;

            result.data.forEach(element => {
                $("#tbody-data-table").append(`<tr><td>${count}</td><td>${element['country']}</td><td>Rp.${element['cost']},00</td><td>${element['include']}</td></tr>`);
                count++;
            });

            $('#infobox-total-data').html(result.total);
            $('#infobox-total-row').html((count - 1));

        }).fail(function(result) {

            $("#tbody-data-table").empty();

        });

        event.preventDefault();
    });

    setTimeout(() => {
        $('#btn-time').trigger('click');
    }, 1000);

    setTimeout(() => {
        $('#data-table-filter').trigger('submit');
    }, 1000);

});
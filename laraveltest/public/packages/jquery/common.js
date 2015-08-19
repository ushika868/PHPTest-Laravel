function searchData() {
    var searchtxt = $("#searchtext").val();
    $.ajax({
        url: 'hotel/searchdata',
        type: 'POST',
        dataType: 'JSON',
        data: {
            "searchtext": searchtxt
        },
        success: function (data) {
            $('#hoteldata').find('tbody').remove();
            if (data.message == 'error') {
                $('#search_error').show();
            } else {
                $('#search_error').hide();
                $(data.list).each(function (i, hotel) {
                    $('#hoteldata').append('<tr><th scope="row">' + hotel.id + '</th><td>' + hotel.name + '</td><td>' + hotel.address + '</td><td>' + hotel.location_name + '</td></tr>');
                });
            }
        }
    });

}

function searchSort() {
    var searchtxt = $("#searchtext").val();
    var sort = $("#sort").val();
    $.ajax({
        url: 'hotel/searchdatasort',
        type: 'POST',
        dataType: 'JSON',
        data: {
            "searchtext": searchtxt,
            "sort": sort
        },
        success: function (data) {
            $('#hoteldata').find('tbody').remove();
            if (data.message == 'error') {
                $('#search_error').show();
            } else {
                $('#search_error').hide();
                $(data.list).each(function (i, hotel) {
                    $('#hoteldata').append('<tr><th scope="row">' + hotel.id + '</th><td>' + hotel.name + '</td><td>' + hotel.address + '</td><td>' + hotel.location_name + '</td></tr>');
                });
            }
        }
    });

}


//Ajax request for user status update
$('.btn-user-update').click(function (e) {
    e.preventDefault();
    var $this = $(this);
    var type = $this.data('type');
    var sendUrl = url + '/admin/users/user-status';
    var id = $this.data('id');
    var sendData = {
        _token: token,
        type: type,
        id: id
    };

    $.post(sendUrl, sendData, function (result) {
        if (result.type == "Disabled") {
            $this.text('Enable').removeClass('btn-warning').addClass('btn-primary').data('type', 'disable');
        }
        if (result.type == "Enabled") {
            $this.text('Disable').removeClass('btn-primary').addClass('btn-warning').data('type', 'enable');
        }
    }).fail(function (err) {
        console.log(err);
    })

});

//Ajax request for add slide

// $('#addslide').click(function () {
//
//     $.ajax({
//        type: 'POST',
//         url: '/admin/users/manage/manage-home/upload-slide',
//         data:{
//            '_token': token,
//             'sliderimage':$('#slide').val(''),
//             'sliderdescription':$('#slideheading').val(''),
//             'slidersummary':$('#slidesummary').val('')
//         },
//         success: function(response){
//             alert(response.message);
//         }
//     });
//
// });
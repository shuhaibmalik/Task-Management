
function statusChange(id){
    var task_id = id;
    var status = $('#taskStatus').val();
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url:'/update_status',
        type: "PUT",
        data: {
            status : status,
            task_id : task_id
        },
        success: function (data) {
            window.location.reload();
        }
    })
}

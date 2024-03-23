var pageUrl = window.location.href.split('/');
$(document).on('change' , '#taskStatus', ()=> {
    var task_id =$(this).find("option:selected").attr("hidden-attr");
    var status = $('#taskStatus');
    $.ajax({
        url:pageUrl[0]+pageUrl[1]+pageUrl[2]+'/update_status',
        type: "PUT",
        data: {
            status : status
        },
        success: function (data) {
            window.location.reload();
        }
    })
})
function statusChange(id){
    var status = $('#taskStatus');
    $.ajax({
        url:pageUrl[0]+pageUrl[1]+pageUrl[2]+'/update_status',
        type: "PUT",
        data: {
            status : status
        },
        success: function (data) {
            window.location.reload();
        }
    })
}

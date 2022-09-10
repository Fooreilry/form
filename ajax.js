$('#form').on("submit", function() {
    
    let dataForm = $(this).serialize();
    
    request = $.ajax({
        url: '/inputData.php',
        method: 'post',
        dataType: 'html',
        data: dataForm,

    });
    request.done((data) => {
        console.log(data);
    })
    request.fail((textStatus, errorThrown) => {
        console.error(textStatus, errorThrown);
    })
    request.always(() => {
        $(this)[0].reset();
    })
    
})

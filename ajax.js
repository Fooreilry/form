$('#form').on("submit", function() {
    
    let dataForm = $(this).serialize();
    
    request = $.ajax({
        url: '/test.php',
        method: 'post',
        dataType: 'html',
        data: dataForm,
    });
    request.done(() => {
        console.log('запрос отправлен');
    })
    request.fail((textStatus, errorThrown) => {
        console.error(textStatus, errorThrown);
    })
    request.always(() => {
        $(this)[0].reset();
    })
    
})

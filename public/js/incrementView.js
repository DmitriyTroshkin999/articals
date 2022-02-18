//Счетчик посещений
$(document).ready(function(){
    setTimeout(function() {
        let article_id = $('#article_id').val();
        let token = $('input[name="_token"]').val();
        $.ajax({
            url: '/ajaxview/' + article_id,
            method: 'post',
            dataType: 'json',
            data: {
                "_token" : token
            },
            success: function(data){
                $('#article-views').html(data);
            }
        });
    }, 5000);
});



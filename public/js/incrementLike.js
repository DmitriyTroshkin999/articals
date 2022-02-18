//Установка лайка
$(document).ready(function() {
    let article_id = $('#article_id').val();
    let token = $('input[name="_token"]').val();
    $('#like').on('click', function() {


        console.log(this);
        if (!$(this).hasClass('clicked')) {
            $.ajax({
                url: '/ajaxlike/' + article_id,
                method: 'post',
                dataType: 'json',
                data: {
                    "_token": token
                },
                success: function (data2) {
                    $('#article-like').html(data2);
                }
            });
            $(this).addClass('clicked');

        } else { // если есть
            alert('Вы уже поставили лайк'); // код для второго клика
        }
    });

});

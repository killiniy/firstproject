

function get(){
    $.ajax({
        url: get.php,
        success: (function(req) { $('#message1').html(req) })
    });
}

function send(){
    $.ajax({
        url: add.php,
        data: data;
}
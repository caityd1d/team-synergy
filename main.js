$(function(){

    $('.ranger').change(function(){
        var value = $(this).val();
        $(this).next().text(value);
    });

    $('button').on('click', '.signOut', function(){
        window.location = "logout.php";
    });

});
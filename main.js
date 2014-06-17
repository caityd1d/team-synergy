$(function(){

    $('.ranger').change(function(){
        var value = $(this).val();
        $(this).next().text(value);
    });

    $('body').on('click', '.signOut', function(){
       
        window.location = '/Team-Synergy-Team/logout.php';

    });
    
});
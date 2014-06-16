$(function(){

    $('.ranger').change(function(){
        var value = $(this).val();
        $(this).next().text(value);
    });

    $('body').on('click', '.signOut', function(){
       
        window.location = 'http://jon.com/Team-Synergy-Team/logout.php';

    });
    
});
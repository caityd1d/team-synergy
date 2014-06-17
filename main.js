$(function(){

    $('.ranger').change(function(){
        var value = $(this).val();
        $(this).next().text(value);
    });

<<<<<<< HEAD
    $('button').on('click', '.signOut', function(){
        window.location = "logout.php";
=======
    $('body').on('click', '.signOut', function(){
       
        window.location = '/Team-Synergy-Team/logout.php';

>>>>>>> 11710586de0ebdfe42d172d1b845f9d468acf29b
    });

});
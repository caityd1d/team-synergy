$(function(){

    $('.first').change(function(){
       var item = $('.first');
        var value = item.val();
        $('.count').text(value);
    });
});
let nav = $('#navbar');
let backTop = $('#toTopBtn');
$(window).bind('scroll', function () {
    if  ($(window).scrollTop() >= nav.height())  {
        console.log('adad');
        backTop.addClass('top-btn-show');
    } else {
        console.log('hapus class');
        backTop.removeClass('top-btn-show');
    }
});
$('#toTopBtn').click(function(){
    $(document).scrollTop('0');
})

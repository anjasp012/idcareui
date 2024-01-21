// Show dropdown on hover
$(document).ready(function () {
    // Cek ukuran layar saat halaman dimuat
    if (window.innerWidth >= 992) {
        $('.dropdown').mouseover(function () {
            // Memeriksa apakah navbar-toggler tersembunyi
            if ($('.navbar-toggler').is(':hidden')) {
                $(this).addClass('show').attr('aria-expanded', 'true');
                $(this).find('.dropdown-menu').addClass('show');
            }
        }).mouseout(function () {
            // Memeriksa apakah navbar-toggler tersembunyi
            if ($('.navbar-toggler').is(':hidden')) {
                $(this).removeClass('show').attr('aria-expanded', 'false');
                $(this).find('.dropdown-menu').removeClass('show');
            }
        });
    }
});

// Menambahkan event listener untuk memantau perubahan ukuran layar
$(window).resize(function () {
    if (window.innerWidth >= 992) {
        // Reset event listener jika ukuran layar mencukupi
        $('.dropdown').off('mouseover').off('mouseout').on('mouseover', function () {
            if ($('.navbar-toggler').is(':hidden')) {
                $(this).addClass('show').attr('aria-expanded', 'true');
                $(this).find('.dropdown-menu').addClass('show');
            }
        }).on('mouseout', function () {
            if ($('.navbar-toggler').is(':hidden')) {
                $(this).removeClass('show').attr('aria-expanded', 'false');
                $(this).find('.dropdown-menu').removeClass('show');
            }
        });
    } else {
        // Hapus event listener jika ukuran layar tidak mencukupi
        $('.dropdown').off('mouseover').off('mouseout');
    }
});
// Go to the parent link on click
$('.dropdown > a').click(function(){
    location.href = '#';
});

$(document).ready(function () {
    var navbar = $('.navbar-nonscrolled');
    var navbar_scrolled = $('.navbar-scrolled');
    let nav = $('#navbar');
    let backTop = $('#toTopBtn');

    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            navbar_scrolled.removeClass('d-none');
            navbar_scrolled.addClass('fixed-navbar');
            navbar.addClass('d-none');
            navbar_scrolled.slideDown(250); // Durasi animasi dalam milidetik (0.5 detik)
        } else {
            // navbar_scrolled.addClass('d-none');
            navbar_scrolled.removeClass('fixed-navbar');
            navbar.removeClass('fixed-navbar');
            navbar_scrolled.slideUp(100, function () {
                navbar.removeClass('d-none');
                backTop.removeClass('top-btn-show');
            });
        }
    });

    $(window).bind('scroll', function () {
        if  ($(window).scrollTop() >= nav.height())  {
            backTop.addClass('top-btn-show');
        } else {
            console.log('hapus class');
            backTop.removeClass('top-btn-show');
        }
    });
    $('#toTopBtn').click(function(){
        $(document).scrollTop('0');
    })
});

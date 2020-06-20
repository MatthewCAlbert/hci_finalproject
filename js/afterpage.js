let disableLoader = true;
let delayLoader = 500;

if( disableLoader ) $('.loader-wrapper').css('display','none');

$(document).ready(()=>{
    setTimeout(()=>{
        $('.loader-wrapper').hide();
    },delayLoader);
})

$('header.mobile .nav-toggle').on('click',()=>{

});
$('header.mobile .search-toggle .init').on('click',()=>{
    if( $('header.mobile .search-bar').hasClass('active') ){
        $('header.mobile .search-bar').removeClass('active');
        $('body').css('overflow','auto');
        $('.dark-cover').hide();
    }else{
        $('header.mobile .search-bar').addClass('active');
        $('header.mobile .search-bar input').focus();
        $('body').css('overflow','hidden');
        $('.dark-cover').show();
    }
});

$('.dark-cover').on('click',()=>{
    $('header.mobile .search-toggle .init').click();
});


$('header.mobile .nav-toggle .init').on('click',()=>{
    if( $('header.mobile .menu-bar').hasClass('active') ){
        $('header.mobile .menu-bar').removeClass('active');
        $('body').css('overflow','auto');
    }else{
        $('header.mobile .menu-bar').addClass('active');
        $('body').css('overflow','hidden');
    }
});

$('header.mobile .nav-toggle .close').on('click',()=>{
    $('header.mobile .menu-bar').removeClass('active');
    $('body').css('overflow','auto');
});
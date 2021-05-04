import $ from 'jquery';

$('.header-navigation').on('mouseenter', '.menu-item-has-children', (e) =>{
    
    if(!$(e.currentTarget).parents('.sub-menu').length){
        $('.menu > .menu-item.open').find('> a > .menu-button').trigger('click');
    }
    $(e.currentTarget).addClass('open');
}).on('mouseleave', '.menu-item-has-children', (e) =>{
    $(e.currentTarget).removeClass('open');
})

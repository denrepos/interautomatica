
$('document').ready(function(){

    //correct content block height
    var content_height = $('.content').height();
    var aside_height =  $('aside').height();

    if(aside_height > content_height){
        $('.content').height(aside_height);
    }

    //close popaps when click on body and so
    $('body').click(function(event) {

        if(window.matchMedia("(max-width: 767px)").matches){
            $('.popup').not('.additional-contacts').fadeOut(200);
            $('.plus-before').removeClass('minus-before');
        }else{
            $('.popup').fadeOut(200);
        }
    });

    //show language popup
    $('.current-language').click(function(e){
        $('.language-switch-hidden').fadeIn(200);
        e.stopPropagation();
    });

    //show more contacts block
    $('#more-contacts').click(function(e){

        var selector = $(this).data('hide-show').slice(6);
        var block = $('.' + selector);

        if (block.is(':visible')) {
            $('.plus-before').removeClass('minus-before');
            block.fadeOut(200);
        } else {
            $('.plus-before').addClass('minus-before');
            block.fadeIn(200);
        }
        e.stopPropagation();
    });

    //show minimized menu
    $('#main-menu-button').click(function(e){

        $(this).next().slideToggle();
        $('.opacity').css('z-index','20').fadeIn();
        e.stopPropagation();
    })

    //show first block of catalog menu
    $('.catalog-menu').click(function(){

        var offset = $(this).offset();

        var y = offset.top + $(this).height() + 3;

        $('.opacity').fadeIn(200);

        makeSubmenu(false, offset.left, y);
        $('.submenu').fadeIn(200);

    });

    //add submenu to catalog menu
    $('.absolute-elements').on('click','.submenu-item',function(){

        var a = $(this).find('a');
        var x,y;

        if(a[0]){
            window.location = a.attr('href');
            return;
        }

        var offset = $(this).offset();

        var dp = $(this).closest('ul').data('path');

        var submenusDel = $('ul[data-path^='+dp+']').slice(1);

        var heightDel = 0;
        if(submenusDel[0]) {
            heightDel = $(submenusDel[0]).outerHeight();
        }

        submenusDel.fadeOut(300,function(){$(this).remove()});

        $(this).closest('ul').find('.active').removeClass('active');
        

        if(window.matchMedia("(max-width: 1099px)").matches){

            var ul = $(this).closest('ul');
            var leftIndent = 20;
            var width = ul.width() - leftIndent;

            x = offset.left + leftIndent;
            y = offset.top + $(this).outerHeight();
            
            var siblinSpace =  $(this).prevAll('.submenu-space');

            if(siblinSpace.length){
                y -= siblinSpace.outerHeight();
            }

            $(this).next().siblings('.submenu-space').slideToggle(function(){$(this).remove()});

            var sm_height = makeSubmenu(this,x,y,width).height();

            if(!$(this).next('.submenu-space')[0]) {
                $(this).after('<li class="submenu-space" style="height:' + sm_height + 'px;display:none"></li>').next().slideToggle();
            }
            
            var dpLength = String(dp).length;

            $('.submenu-space').each(function(){

                var currentPathLength = String($(this).closest('ul').data('path')).length
                if(currentPathLength<=dpLength) {
                    if ($(this).siblings('.submenu-space')[0]) {
                        heightDel = 0;
                    }
                    $(this).animate({height: $(this).outerHeight() + sm_height - heightDel + 'px'}, 100, function () {
                        $('.submenu').fadeIn(300);
                    });
                }
            });

        }else{

            x = offset.left + $(this).closest('ul').width() + 3;
            y = offset.top;

            makeSubmenu(this,x,y);
            $('.submenu').fadeIn(300);
        }
        $(this).addClass('active');
    });

    //click on opacity actions
    $('.absolute-elements').on('click','.opacity',function(){
        $('.submenu').fadeOut(300,function(){$('.submenu').remove();});
        $('.main-menu-items-for-button').fadeOut(200);
        $('.opacity').fadeOut();
    });

    // scroll to top
    $('.upstairs-button').click(function(){
        $('body,html').stop().animate({scrollTop:0}, '500', 'swing');
    });

    //
    $('.banner-carousel-img-wrap img').click(function(){
        $('#image-modal .modal0-dialog').width($(this).width());
        $('#image-modal .modal0-dialog .modal-content').width($(this).width());
        $(this).attr('src');
    });

    //
    $('.banner-carousel-img-wrap img').click(function(){

        var title = $(this).closest('.item').find('.banner-carousel-title a').text();

        $.colorbox({
            href:$(this).attr('src'),
            className: 'certificate',
            opacity: 0.5,
            close: '×',
            title: title
        });

    })

    //init preview slider

    PreviewSlider.init();



});

function makeSubmenu(context,x,y,width){

    var width = width != undefined ? 'width:'+width+'px;' : '';

    if(context){
        var i = $(context).data('i');
        var dataPath = 'data-path="';
        var path = String($(context).closest('ul').data('path'));
    }else{
        var i = '';
        var dataPath = 'data-path="1';
        var path = '';
    }

    dataPath += path + String(i);
    dataPath += '"';

    var style = ' style="display:none;position:absolute;top:'+y+'px;left:'+x+'px;'+width+'" ';
    var submenu = '<ul class="submenu" '+ dataPath + style + '>';

    var subArr = [0,0,'',arr];
    if(context){
        path = path + String($(context).data('i'));
        for (var i = 1; i < path.length; i++) {
            subArr = subArr[3][path[i]];
        }
    }
    if(!subArr[3]) return;
    subArr[3].forEach(function(item,i){

        var black = ' black', arrow = '', a1 = '', a2 = '';
        if(item[3] != undefined && arr.length){
            black = '';
            arrow = '<span class="submenu-item-arrow glyphicon glyphicon-menu-right"></span>';
        }else{
            a1 = '<a class="link-blue-text" href="'+item[2]+'">';
            a2 = '</a>';
        }
        submenu += '<li class="submenu-item" data-i='+i+'>' +
        a1 +
        '<span class="submenu-item-title">'+item[0]+'</span>' +
        '<div class="submenu-products-number">' +
        '<span class="submenu-item-number'+black+'">'+item[1]+'</span>' +
        arrow +
        '</div>' +
        a2 +
        '</li>';
    });
    submenu += '</ul>';
    submenu = $(submenu);
    $('.absolute-elements').append(submenu);

    return submenu;
}

arr = [
    ['Автоматика',75,'/'],
    ['Пневматика и гидравлика',34,'/',[
        ['Датчики',230,'/'],
        ['Коммутаторы Ethernet',75,'/'],
        ['Контроль, управление, питание',440,'/'],
        ['Преобразователи измерительных сигналов',5,'/'],
        ['Промышленная безопастность',75,'/'],
        ['Сигнальная арматура',34,'/',[
            ['Автоматика',75,'/'],
            ['Пневматика и гидравлика',34,'/',[
                ['Автоматика',75,'/'],
                ['Пневматика и гидравлика',34,'/'],
                ['Электроника',23,'/'],
                ['Производство ТЕНов',45,'/',[
                    ['Автоматика',75,'/'],
                    ['Пневматика и гидравлика',34,'/'],
                    ['Электроника',23,'/'],
                    ['Производство ТЕНов',45,'/'],
                    ['Наши разработки',56,'/'],
                ]],
                ['Наши разработки',56,'/'],
            ]],
            ['Электроника',23,'/'],
            ['Производство ТЕНов',45,'/',[
                ['Автоматика',75,'/'],
                ['Пневматика и гидравлика',34,'/'],
                ['Электроника',23,'/'],
                ['Производство ТЕНов',45,'/'],
                ['Наши разработки',56,'/'],
            ]],
            ['Наши разработки',56,'/'],
        ]],
        ['Система дистанционного управления',45,'/'],
        ['Электропривод',45,'/'],
        ['Энкодеры',12,'/'],
    ]],
    ['Электроника',34,'/'],
    ['Производство ТЕНов',45,'/',[
        ['Датчики',230,'/'],
        ['Коммутаторы Ethernet',75,'/'],
        ['Контроль, управление, питание',440,'/'],
        ['Преобразователи измерительных сигналов',5,'/'],
        ['Промышленная безопастность',75,'/'],
        ['Сигнальная арматура',34,'/',[
            ['Автоматика',75,'/'],
            ['Пневматика и гидравлика',34,'/'],
            ['Электроника',23,'/'],
            ['Производство ТЕНов',45,'/',[
                ['Автоматика',75,'/'],
                ['Пневматика и гидравлика',34,'/'],
                ['Электроника',23,'/'],
                ['Производство ТЕНов',45,'/'],
                ['Наши разработки',56,'/'],
            ]],
            ['Наши разработки',56,'/'],
        ]],
        ['Система дистанционного управления',45,'/'],
        ['Электропривод',45,'/'],
        ['Энкодеры',12,'/'],
    ]],
    ['Наши разработки',56,'/'],
];

function PreviewSlider(slider){

    this.window = $(slider);
    this.windowWidth = this.window.width();
    this.scrollStep = this.window.data('scroll-step');
    this.container = this.window.find('.slider-container');
    this.left = this.container.position().left;
    this.containerChildrens = this.container.children();
    this.previewWidth = this.containerChildrens.first().outerWidth(true);
    this.containerWidth = this.previewWidth * this.containerChildrens.length;
    this.numSections = Math.floor(this.windowWidth / this.previewWidth);
    this.scrollStep = this.scrollStep != undefined ? this.scrollStep : this.numSections;
    this.offset = this.previewWidth * this.scrollStep;
    this.previosPositionX = 0;
    this.swipeOffset = 0;

    this.nextBlock = function(speed,loop){

        loop = 'wheel';

        var speed = speed || 'slow';
        var loop = loop !== undefined ? loop : false;
        var offsetEnd = this.containerWidth + this.left;
        var left = this.left - this.offset;

        if(offsetEnd - this.offset  < this.windowWidth ){

            if(loop){

                if(loop == 'line') {

                    left = 0;

                }else if(loop == 'wheel'){

                    this.container.append(this.container.children().slice(0,this.scrollStep));
                    this.container.css('left',this.left + this.offset);
                    left += this.offset;

                }else {

                    left = this.offset - this.containerWidth;
                }
            }
        }

        this.container.animate({left:left+'px'},speed).queue(function(){
            $(this).clearQueue();
            $(this).dequeue();
        });
    }

    this.prevBlock = function(speed,loop){

        loop = 'wheel';

        var speed = speed || 'slow';
        var loop = loop !== undefined ? loop : false;
        var left = this.left + this.offset;

        if(this.left >= 0){

            if(loop){

                if(loop == 'line'){

                    left = 0 - this.containerWidth + this.offset;

                }else if(loop == 'wheel') {

                    this.container.prepend(this.container.children().slice( - this.scrollStep));
                    this.container.css('left',this.left - this.offset);
                    left -= this.offset;

                }else{

                    left = 0;
                }
            }
        }

        this.container.animate({left:left+'px'},speed).queue(function(){
            $(this).clearQueue();
            $(this).dequeue();
        });
    }

    this.changePosition = function(e) {

        if (this.previosPositionX){

            this.swipeOffset += e.changedTouches[0].clientX - this.previosPositionX;

            this.container.css({left:this.left + this.swipeOffset});
        }

        this.previosPositionX = e.changedTouches[0].clientX;

    }

}
PreviewSlider.init = function(){

    $('.slider-window').each(function(){

        var v_window = $(this);
        var windowWidth = v_window.width();
        var container = v_window.find('.slider-container');
        var containerChildrens = container.children();
        var previewWidth = containerChildrens.first().outerWidth(true);
        var containerWidth = previewWidth * containerChildrens.length;
        var numSections = Math.floor(windowWidth / previewWidth);
        var offset = previewWidth * numSections;

        if(containerWidth < windowWidth){
            v_window.nextAll('.right-rewind-blue, .right-rewind-grey, .left-rewind-blue, .left-rewind-grey').hide();
        }

        if(offset * 2 > containerWidth){

            container.append(container.children().clone());
            container.width(containerWidth * 2);
        }
    });

    $('.left-rewind-blue').click(function(){

        var slider = $(this).parent().find('.slider-window');

        var sp = new PreviewSlider(slider);
        sp.prevBlock();
    });

    $('.right-rewind-blue').click(function(){

        var slider = $(this).parent().find('.slider-window');

        var sp = new PreviewSlider(slider);
        sp.nextBlock();
    });

    $(".slider-window").on("touchstart swiperight swipeleft touchmove",function(e){

        if(e.type == 'touchstart'){

            previewSlider = new PreviewSlider(e.delegateTarget);

        }else
        if(e.type == 'touchmove'){

            previewSlider.changePosition(e);

        }else
        if(e.type == 'swiperight'){

            previewSlider.prevBlock('fast',false);

        }else
        if(e.type == 'swipeleft'){

            previewSlider.nextBlock('fast',false);
        }
    });

}
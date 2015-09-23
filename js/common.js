
$('document').ready(function(){

    //correct content block height
    var content_height = $('.content').height();
    var aside_height =  $('aside').height();
    console.log(aside_height);
    console.log(content_height);
    if(aside_height > content_height){
        $('.content').height(aside_height);
    }

    //close popaps when click on body and so
    $('body').click(function(event) {

        $('.popup').fadeOut(200);
        $('.plus-before').removeClass('minus-before');
    });

    //show language popup
    $('.language-switch-box').click(function(e){
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
        $('.opacity').fadeIn();
        e.stopPropagation();
    })

    //add submenu to catalog menu
    $('.absolute-elements').on('click','.submenu-item',function(){

        var a = $(this).find('a');
        if(a[0]){
            window.location = a.attr('href');
            return;
        }

        var offset = $(this).offset();

        var x = offset.left + $(this).closest('ul').width() + 3;

        var dp = $(this).closest('ul').data('path');

        $('ul[data-path^='+dp+']').slice(1).remove();

        $(this).closest('ul').find('.active').removeClass('active');
        addSubmenu(this,x,offset.top);
        $(this).addClass('active');
    });

    //click on opacity actions
    $('.absolute-elements').on('click','.opacity',function(){
        $('.submenu').fadeOut(300,function(){$('.submenu').remove();});
        $('.main-menu-items').fadeOut(200);
        $('.opacity').fadeOut();
    });

    //show first block of catalog menu
    $('.catalog-menu').click(function(){

        var offset = $(this).offset();

        var y = offset.top + $(this).height() + 3;

        $('.opacity').fadeIn(200);

        addSubmenu(false, offset.left, y);

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

});

function addSubmenu(context,x,y){

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

    var style = ' style="display:none;position:absolute;top:'+y+'px;left:'+x+'px" ';
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
        '<div class="float-right">' +
        '<span class="submenu-item-number'+black+'">'+item[1]+'</span>' +
        arrow +
        '</div>' +
        a2 +
        '</li>';
    });
    submenu += '</ul>';
    submenu = $(submenu);
    $('.absolute-elements').append(submenu);
    $('.submenu').fadeIn(200);
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
            ['Пневматика и гидравлика',34,'/'],
            ['Электроника',23,'/'],
            ['Производство ТЕНов',45,'/'],
            ['Наши разработки',56,'/'],
        ]],
        ['Система дистанционного управления',45,'/'],
        ['Электропривод',45,'/'],
        ['Энкодеры',12,'/'],
    ]],
    ['Электроника',34,'/'],
    ['Производство ТЕНов',45,'/'],
    ['Наши разработки',56,'/'],
];

function PreviewSlider(slider){

    this.window = self_window = $(slider);
    this.windowWidth = this.window.width();
    this.container = this.window.find('.slider-container');
    this.left = this.container.position().left;
    this.containerChildrens = this.container.children();
    this.previewWidth = this.containerChildrens.first().outerWidth(true);
    this.containerWidth = this.previewWidth * this.containerChildrens.length;
    this.numSections = Math.floor(this.windowWidth / this.previewWidth);
    this.offset = this.previewWidth * this.numSections;
    this.previosPositionX = 0;
    this.swioeOffset = 0;

    this.nextBlock = function(speed,loop){

        var speed = speed || 'slow';
        var loop = loop === false ? false : true;
        var offsetEnd = this.containerWidth +    this.left;
        var left = this.left - this.offset;

        if(offsetEnd  < this.windowWidth){

            if(loop){
                left = 0;
            }else{
                left = this.offset - this.containerWidth;
            }
        }

        this.container.animate({left:left+'px'},speed).queue(function(){
            $(this).clearQueue();
            $(this).dequeue();
        });
    }

    this.prevBlock = function(speed,loop){

        var speed = speed || 'slow';
        var loop = loop === false ? false : true;
        var left = this.left + this.offset;

        if(this.left >= 0){

            if(loop){
                left = 0 - this.containerWidth + this.offset;
            }else{
                left = 0;
            }

        }

        this.container.animate({left:left+'px'},speed).queue(function(){
            $(this).clearQueue();
            $(this).dequeue();
        });
    }

    this.changePosition = function(e) {

        if (this.previosPositionX){

            this.swioeOffset += e.changedTouches[0].clientX - this.previosPositionX;
            
            this.container.css({left:this.left + this.swioeOffset});
        }

        this.previosPositionX = e.changedTouches[0].clientX;

    }
}
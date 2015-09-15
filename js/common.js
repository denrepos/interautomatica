
$('document').ready(function(){

    $('.event').click(function(event){

        var jq_this = $(this);
        var jq_target = $(event.target);

        if(this.tagName.toLowerCase() == 'body'){
            $('.popup').fadeOut(200);
        }
        if(jq_this.hasClass('language-switch-box')){
            $('.language-switch-hidden').fadeIn(200);
        }
        if(jq_this.attr('id') == 'more-contacts'){

            var selector = jq_this.data('hide-show').slice(6);
            var block = $('.'+selector);
            
            if(block.is(':visible')){
                block.fadeOut(200);
            }else{
                block.fadeIn(200);
            }
        }
        event.stopPropagation();
    });

    $('#main-menu-button').click(function(event){
        console.log('@media (max-width: 1099px) {');
        $(this).next().slideToggle();
        $('.opacity').fadeIn();
        event.stopPropagation();
    })

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

    $('.absolute-elements').on('click','.opacity',function(){
        $('.submenu').fadeOut(300,function(){$('.submenu').remove();});
        $('.main-menu-items').fadeOut(200);
        $('.opacity').fadeOut();
    });

    $('.catalog-menu').click(function(){

        var offset = $(this).offset();

        var y = offset.top + $(this).height() + 5;

        $('.opacity').fadeIn(200);

        addSubmenu(false, offset.left, y);

    });

})

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
            arrow = '<span class="submenu-item-arrow">></span>';
        }else{
            a1 = '<a href="'+item[2]+'">';
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


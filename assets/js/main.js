(function ($) {
    "use strict";
/*--
    Commons Variables
-----------------------------------*/
var $window = $(window);
var $body = $('body');

/*--
    Adomx Dropdown (Custom Dropdown)
-----------------------------------*/
if ($('.adomx-dropdown').length) {
    var $adomxDropdown = $('.adomx-dropdown'),
        $adomxDropdownMenu = $adomxDropdown.find('.adomx-dropdown-menu');

    $adomxDropdown.on('click', '.toggle', function(e){
        e.preventDefault();
        var $this = $(this);
        if(!$this.parent().hasClass('show')) {
            $adomxDropdown.removeClass('show');
            $adomxDropdownMenu.removeClass('show');
            $this.siblings('.adomx-dropdown-menu').addClass('show').parent().addClass('show');
        } else {
            $this.siblings('.adomx-dropdown-menu').removeClass('show').parent().removeClass('show');
        }
    });
    /*Close When Click Outside*/
    $body.on('click', function(e){
        var $target = e.target;
        if (!$($target).is('.adomx-dropdown') && !$($target).parents().is('.adomx-dropdown') && $adomxDropdown.hasClass('show')) {
            $adomxDropdown.removeClass('show');
            $adomxDropdownMenu.removeClass('show');
        }
    });
}

/*--
    Header Search Open/Close
-----------------------------------*/
var $headerSearchOpen = $('.header-search-open'),
    $headerSearchClose = $('.header-search-close'),
    $headerSearchForm = $('.header-search-form');
$headerSearchOpen.on('click', function(){
    $headerSearchForm.addClass('show');
});
$headerSearchClose.on('click', function(){
    $headerSearchForm.removeClass('show');
});

/*--
    Side Header
-----------------------------------*/
var $sideHeaderToggle = $('.side-header-toggle'),
    $sideHeaderClose = $('.side-header-close'),
    $sideHeader = $('.side-header');

/*Add/Remove Show/Hide Class On Depending on Viewport Width*/
function $sideHeaderClassToggle() {
    var $windowWidth = $window.width();
    if( $windowWidth >= 1200 ) {
        $sideHeader.removeClass('hide').addClass('show');
    } else {
        $sideHeader.removeClass('show').addClass('hide');
    }
}
$sideHeaderClassToggle();
/*Side Header Toggle*/
$sideHeaderToggle.on('click', function(){
    if($sideHeader.hasClass('show')){
        $sideHeader.removeClass('show').addClass('hide');
    } else {
        $sideHeader.removeClass('hide').addClass('show');
    }
});
/*Side Header Close (Visiable Only On Mobile)*/
$sideHeaderClose.on('click', function(){
    $sideHeader.removeClass('show').addClass('hide');
});
    
/*--
    Side Header Menu
-----------------------------------*/
var $sideHeaderNav = $('.side-header-menu'),
    $sideHeaderSubMenu = $sideHeaderNav.find('.side-header-sub-menu');

/*Add Toggle Button in Off Canvas Sub Menu*/
$sideHeaderSubMenu.siblings('a').append('<span class="menu-expand"><i class="zmdi zmdi-chevron-down"></i></span>');

/*Close Off Canvas Sub Menu*/
$sideHeaderSubMenu.slideUp();

/*Category Sub Menu Toggle*/
$sideHeaderNav.on('click', 'li a, li .menu-expand', function(e) {
    var $this = $(this);
    if ( $this.parent('li').hasClass('has-sub-menu') || ($this.attr('href') === '#' || $this.hasClass('menu-expand')) ) {
        e.preventDefault();
        if ($this.siblings('ul:visible').length){
            $this.parent('li').removeClass('active').children('ul').slideUp().siblings('a').find('.menu-expand i').removeClass('zmdi-chevron-up').addClass('zmdi-chevron-down');
            $this.parent('li').siblings('li').removeClass('active').find('ul:visible').slideUp().siblings('a').find('.menu-expand i').removeClass('zmdi-chevron-up').addClass('zmdi-chevron-down');
        } else {
            $this.parent('li').addClass('active').children('ul').slideDown().siblings('a').find('.menu-expand i').removeClass('zmdi-chevron-down').addClass('zmdi-chevron-up');
            $this.parent('li').siblings('li').removeClass('active').find('ul:visible').slideUp().siblings('a').find('.menu-expand i').removeClass('zmdi-chevron-up').addClass('zmdi-chevron-down');
        }
    }
});

// Adding active class to nav menu depending on page
var pageUrl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
$('.side-header-menu a').each(function() {
    if ($(this).attr("href") === pageUrl || $(this).attr("href") === '') {
        $(this).closest('li').addClass("active").parents('li').addClass('active').children('ul').slideDown().siblings('a').find('.menu-expand i').removeClass('zmdi-chevron-down').addClass('zmdi-chevron-up');
    }
    else if (window.location.pathname === '/' || window.location.pathname === '/index.html') {
        $('.side-header-menu a[href="index.html"]').closest('li').addClass("active").parents('li').addClass('active').children('ul').slideDown().siblings('a').find('.menu-expand i').removeClass('zmdi-chevron-down').addClass('zmdi-chevron-up');
    }
})

/*--
    Tooltip, Popover & Tippy Tooltip
-----------------------------------*/
/*Bootstrap Tooltip*/
$('[data-toggle="tooltip"]').tooltip();
/*Bootstrap Popover*/
$('[data-toggle="popover"]').popover();
/*Tippy Tooltip*/
tippy('.tippy, [data-tippy-content], [data-tooltip]', {
    flipOnUpdate: true,
    boundary: 'window',
});

/*-- 
    Selectable Table
-----------------------------------*/
function tableSelectable() {
    var $tableSelectable = $('.table-selectable');
    $tableSelectable.find('tbody .selected').find('input[type="checkbox"]').prop('checked', true);
    $tableSelectable.on('click', 'input[type="checkbox"]', function(){
        var $this = $(this);
        if( $this.parent().parent().is('th')) {
            if( !$this.is(':checked') ) {
                $this.closest('table').find('tbody').children('tr').removeClass('selected').find('input[type="checkbox"]').prop('checked', false);
            } else {
                $this.closest('table').find('tbody').children('tr').addClass('selected').find('input[type="checkbox"]').prop('checked', true);
            }
        } else {
            if( !$this.is(':checked') ) {
                $this.closest('tr').removeClass('selected');
            } else {
                $this.closest('tr').addClass('selected');
            }
            if( $this.closest('tbody').children('.selected').length < $this.closest('tbody').children('tr').length ) {
                $this.closest('table').find('thead').find('input[type="checkbox"]').prop('checked', false);
            } else if( $this.closest('tbody').children('.selected').length === $this.closest('tbody').children('tr').length ) {
                $this.closest('table').find('thead').find('input[type="checkbox"]').prop('checked', true);
            }
        }
    });
}
tableSelectable();
    
/*-- 
    To Do List
-----------------------------------*/
function todoList() {
    // Variable
    var $todoList = $('.todo-list'),
        $todoListAddNew = $('.todo-list-add-new');
    //Todo List Check
    $todoList.find('.done').find('input[type="checkbox"]').prop('checked', true);
    $todoList.on('click', 'input[type="checkbox"]', function(){
        var $this = $(this);
        if( !$this.is(':checked') ) {
            $this.closest('li').removeClass('done');
        } else {
            $this.closest('li').addClass('done');
        }
    });
    //Todo List Status Stared
    $todoList.on('click', '.status', function() {
        var $this = $(this);
        if( !$this.hasClass('stared') ) {
            $this.addClass('stared').find('i').removeClass('zmdi-star-outline').addClass('zmdi-star');
        } else {
            $this.removeClass('stared').find('i').removeClass('zmdi-star').addClass('zmdi-star-outline');
        }
    });
    //Todo List Remove
    $todoList.on('click', '.remove', function() {
      $(this).closest('li').remove();
    });
    //Todo List Add New Status Stared
    $todoListAddNew.on('click', '.status input', function() {
        var $this = $(this);
        if( $this.prop('checked') === true ) {
            $this.siblings('.icon').removeClass('zmdi-star-outline').addClass('zmdi-star');
        } else {
            $this.siblings('.icon').removeClass('zmdi-star').addClass('zmdi-star-outline');
        }
    });
    //Todo List Add New
    $todoListAddNew.on("click", '.submit', function(e) {
        e.preventDefault();
        var $content = $(this).siblings('input.content').val(),
            $date = $(this).closest('.todo-list-add-new').data('date') === false ? 'd-none' : 'd-block',
            $status = $(this).siblings('.status').find('input'),
            $stared = $status.prop('checked') === true ? 'stared' : '',
            $staredIcon = $status.prop('checked') === true ? 'zmdi-star' : 'zmdi-star-outline';
        if ($content) {
            $todoList.prepend('<li> <div class="list-action"> <button class="status '+$stared+'"><i class="zmdi '+$staredIcon+'"></i></button> <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label> </div> <div class="list-content"><p>' + $content + '</p> <span class="time '+$date+'">'+moment(moment.utc().toDate()).format('h:mm a (YYYY-MM-DD)')+'</span> </div> <div class="list-action right"> <button class="remove"><i class="zmdi zmdi-delete"></i></button> </div></li>');
            $(this).siblings('input.content').val("");
            $status.prop('checked', false).siblings('.icon').removeClass('zmdi-star').addClass('zmdi-star-outline');
        }
    });
}
todoList();
    
/*--
    Chat Contact
-----------------------------------*/
var $chatContactOpen = $('.chat-contacts-open'),
    $chatContactClose = $('.chat-contacts-close'),
    $chatContacts = $('.chat-contacts');
$chatContactOpen.on('click', function(){
    $chatContacts.addClass('show');
});
$chatContactClose.on('click', function(){
    $chatContacts.removeClass('show');
});


// Common Resize function
function resize() {
    $sideHeaderClassToggle();
}
// Resize Window Resize
$window.on('resize', function(){
    resize();
});
    
/*--
    Custom Scrollbar (Perfect Scrollbar)
-----------------------------------*/ 
$('.custom-scroll').each( function() {
    var ps = new PerfectScrollbar($(this)[0]);
});
  

//-------Ajout Client-------------
   /* $('#ajtC').on('click', function() {
        $('#lstC').css('display','hidden');
    }
);*/
    
    $( document ).ready(function() {
			 $("#ajtC").click(function() {
			 		$("#lstC").css("display","none");
                    $("#formA").css("display","block");
                 
			 });
        });
    
    $( document ).ready(function() {
      /*  if($("#ck1").prop('checked') == true)
        {
           $('#vv').text('evaluee');
            alert('true');
        }
        if($("#ck1").prop('checked') == false)
        {
            $('#vv').text('no evaluee');
            alert('false');
        }*/
      
        
        $("#ck1").change(function(){
           //$("#ck1").attr('checked', false);
       // $("#ck1:checked").each(function(){
            if($("#ck1").prop('checked') == true) {
                $('#vv1').text('évaluée');
                $("#vv1").css("background-color","#29db2d");
                $("#vv1").css("border-color","#29db2d");
                $("#ck1").attr('checked', true);
                
            }
            else { 
                $("#ck1").attr('checked', false);
                $('#vv1').text('non évaluée');
                $("#vv1").css("background-color","#fd427c");
                $("#vv1").css("border-color","#fd427c");
            }
            
});
        $("#ck2").change(function(){
           //$("#ck1").attr('checked', false);
       // $("#ck1:checked").each(function(){
            if($("#ck2").prop('checked') == true) {
                $('#vv2').text('évaluée');
                $("#vv2").css("background-color","#29db2d");
                $("#vv2").css("border-color","#29db2d");
                $("#ck2").attr('checked', true);
            }
            else { 
                $("#ck2").attr('checked', false);
                $('#vv2').text('non évaluée');
                $("#vv2").css("background-color","#fd427c");
                $("#vv2").css("border-color","#fd427c");
            }
            
});
        $("#ck3").change(function(){
            if($("#ck3").prop('checked') == true) {
                $('#vv3').text('évaluée');
                $("#vv3").css("background-color","#29db2d");
                $("#vv3").css("border-color","#29db2d");
                $("#ck3").attr('checked', true);
                
            }
            else { 
                $("#ck3").attr('checked', false);
                $('#vv3').text('non évaluée');
                $("#vv3").css("background-color","#fd427c");
                $("#vv3").css("border-color","#fd427c");
            }
            
});
        $("#ck4").change(function(){
            if($("#ck4").prop('checked') == true) {
                $('#vv4').text('évaluée');
                $("#vv4").css("background-color","#29db2d");
                $("#vv4").css("border-color","#29db2d");
                $("#ck4").attr('checked', true);
                
            }
            else { 
                $("#ck4").attr('checked', false);
                $('#vv4').text('non évaluée');
                $("#vv4").css("background-color","#fd427c");
                $("#vv4").css("border-color","#fd427c");
            }
            
});
        $("#ck5").change(function(){
            if($("#ck5").prop('checked') == true) {
                $('#vv5').text('évaluée');
                $("#vv5").css("background-color","#29db2d");
                $("#vv5").css("border-color","#29db2d");
                $("#ck5").attr('checked', true);
                
            }
            else { 
                $("#ck5").attr('checked', false);
                $('#vv5').text('non évaluée');
                $("#vv5").css("background-color","#fd427c");
                $("#vv5").css("border-color","#fd427c");
            }
            
});
        
        $("#ck6").change(function(){
            if($("#ck6").prop('checked') == true) {
                $('#vv6').text('évaluée');
                $("#vv6").css("background-color","#29db2d");
                $("#vv6").css("border-color","#29db2d");
                $("#ck6").attr('checked', true);
                
            }
            else { 
                $("#ck6").attr('checked', false);
                $('#vv6').text('non évaluée');
                $("#vv6").css("background-color","#fd427c");
                $("#vv6").css("border-color","#fd427c");
            }
            
});
        
        $("#ck7").change(function(){
            if($("#ck7").prop('checked') == true) {
                $('#vv7').text('évaluée');
                $("#vv7").css("background-color","#29db2d");
                $("#vv7").css("border-color","#29db2d");
                $("#ck7").attr('checked', true);
                
            }
            else { 
                $("#ck7").attr('checked', false);
                $('#vv7').text('non évaluée');
                $("#vv7").css("background-color","#fd427c");
                $("#vv7").css("border-color","#fd427c");
            }
            
});
        
        $("#ck8").change(function(){
            if($("#ck8").prop('checked') == true) {
                $('#vv8').text('évaluée');
                $("#vv8").css("background-color","#29db2d");
                $("#vv8").css("border-color","#29db2d");
                $("#ck8").attr('checked', true);
                
            }
            else { 
                $("#ck8").attr('checked', false);
                $('#vv8').text('non évaluée');
                $("#vv8").css("background-color","#fd427c");
                $("#vv8").css("border-color","#fd427c");
            }
            
});
        
        $("#ck9").change(function(){
            if($("#ck9").prop('checked') == true) {
                $('#vv9').text('évaluée');
                $("#vv9").css("background-color","#29db2d");
                $("#vv9").css("border-color","#29db2d");
                $("#ck9").attr('checked', true);
                
            }
            else { 
                $("#ck9").attr('checked', false);
                $('#vv9').text('non évaluée');
                $("#vv9").css("background-color","#fd427c");
                $("#vv9").css("border-color","#fd427c");
            }
            
});
        $("#ck10").change(function(){
            if($("#ck10").prop('checked') == true) {
                $('#vv10').text('évaluée');
                $("#vv10").css("background-color","#29db2d");
                $("#vv10").css("border-color","#29db2d");
                $("#ck10").attr('checked', true);
                
            }
            else { 
                $("#ck10").attr('checked', false);
                $('#vv10').text('non évaluée');
                $("#vv10").css("background-color","#fd427c");
                $("#vv10").css("border-color","#fd427c");
            }
            
});
        
        $("#ck11").change(function(){
            if($("#ck11").prop('checked') == true) {
                $('#vv11').text('évaluée');
                $("#vv11").css("background-color","#29db2d");
                $("#vv11").css("border-color","#29db2d");
                $("#ck11").attr('checked', true);
                
            }
            else { 
                $("#ck11").attr('checked', false);
                $('#vv11').text('non évaluée');
                $("#vv11").css("background-color","#fd427c");
                $("#vv11").css("border-color","#fd427c");
            }
            
});
        
        $("#ck12").change(function(){
            if($("#ck12").prop('checked') == true) {
                $('#vv12').text('évaluée');
                $("#vv12").css("background-color","#29db2d");
                $("#vv12").css("border-color","#29db2d");
                $("#ck12").attr('checked', true);
                
            }
            else { 
                $("#ck12").attr('checked', false);
                $('#vv12').text('non évaluée');
                $("#vv12").css("background-color","#fd427c");
                $("#vv12").css("border-color","#fd427c");
            }
            
});
        
        $("#ck13").change(function(){
            if($("#ck13").prop('checked') == true) {
                $('#vv13').text('évaluée');
                $("#vv13").css("background-color","#29db2d");
                $("#vv13").css("border-color","#29db2d");
                $("#ck13").attr('checked', true);
                
            }
            else { 
                $("#ck13").attr('checked', false);
                $('#vv13').text('non évaluée');
                $("#vv13").css("background-color","#fd427c");
                $("#vv13").css("border-color","#fd427c");
            }
            
});
        
        
        
        });
    
})(jQuery);



var items_js = items_js || false;
var base_url = $("#base_url").val();

$(window).on('load', function () {
    var thisURL = document.location.href;
    if(thisURL.indexOf('eyeglasses/details')==-1){
        $('.header-index').show();
        $('.header-details').hide();
        $('.navbar-bottom').show(); 
        if($('#hd_from').val()=="view"){
                var now = $('#back_url').val();
                var i = 0, strLength = now.length;
                for(i; i < strLength; i++) {
                    now = now.replace('*','=');
                    now = now.replace('@','&');
                }
                now = now.replace('~','?');
            loadCatalogue(now);
        }
        else{
            loadHome();
        }
    }
    else{
        $('.header-index').hide();
        $('.header-details').show();
        $('.navbar-bottom').hide();    
    }
});

if( items_js == false ){
    // filters
    $( document ).ready( function() {
        $( document ).on( 'click', 'input[type=radio]', function() {
            var cate = (typeof($("input[name=category]:checked").val())==="undefined")?"none":$("input[name=category]:checked").val();
            var material = (typeof($("input[name=material]:checked").val())==="undefined")?"none":$("input[name=material]:checked").val();
            var brand = (typeof($("input[name=brand]:checked").val())==="undefined")?"none":$("input[name=brand]:checked").val();
            var price = (typeof($("input[name=price]:checked").val())==="undefined")?"none":$("input[name=price]:checked").val();
            material = material.replace(' ','-');
            brand = brand.replace(' ','-');
            loadView("view?cate="+cate+"&material="+material+"&brand="+brand+"&price="+price,"view");
        });
  
    });
    // search
    $( document ).on( 'keyup', '.search__text', function() {
        $('input[type=radio]').prop('checked', false);
        var keywords = $(this).val();
        if(keywords.replace(" ","")!==""){
            keywords=keywords.replace(' ','-');
            loadView("search?keywords="+keywords);
        }
        else{
            loadHome();
        }
    });
    // show or hide filter
    $( document ).on( 'change', '.check_filter', function() {
        if($(this)[0].checked){
            $('#filter_div').show();
        }
        else{
            $('#filter_div').hide();
        }
    });
    items_js = true; 
}
function loadCatalogue(param="view"){
    $('input[type=radio]').prop('checked', false);
    loadView(param);
    
}
function loadView(param="view"){
    var url = new URL(base_url+"eyeglasses/"+param);
    var brand = url.searchParams.get("brand");
    var category = url.searchParams.get("category");
    var material = url.searchParams.get("material");
    var price = url.searchParams.get("price");
    if(typeof(brand)!=="undefined"&&brand!==null){
        brand = brand.replace('-',' ');
    }
    $("#item-content-list").load(base_url+"eyeglasses/"+param, function (response, status, xhr) {
        $('.nav-menu-bottom a.active').removeClass('active');
        $('.icon-icon-catalogue').parent().addClass('active');
        $(function() {
            var $radios = $('input:radio[name=brand]');
            if($radios.is(':checked') === false) {
                $radios.filter('[value="'+brand+'"]').prop('checked', true);
            }
            $radios = $('input:radio[name=category]');
            if($radios.is(':checked') === false) {
                $radios.filter('[value="'+category+'"]').prop('checked', true);
            }    
            $radios = $('input:radio[name=material]');
            if($radios.is(':checked') === false) {
                $radios.filter('[value="'+material+'"]').prop('checked', true);
            }
            $radios = $('input:radio[name=price]');
            if($radios.is(':checked') === false) {
                $radios.filter('[value="'+price+'"]').prop('checked', true);
            }
        });
        
    });
}

function loadHome(){
    $('input[type=radio]').prop('checked', false);
    $("#item-content-list").load(base_url+"eyeglasses/home", function (response, status, xhr) {
        $('.nav-menu-bottom a.active').removeClass('active');
        $('.icon-icon-home').parent().addClass('active');
                        });
}

function loadCustomer(){
    $('input[type=radio]').prop('checked', false);
    $("#item-content-list").load(base_url+"customer/home", function (response, status, xhr) {
        $('.nav-menu-bottom a.active').removeClass('active');
        $('.icon-icon-customer').parent().addClass('active');
     });
}
function loadAbout(){
    $('input[type=radio]').prop('checked', false);
    $("#item-content-list").load(base_url+"about/home", function (response, status, xhr) {
        $('.nav-menu-bottom a.active').removeClass('active');
        $('.icon-icon-about').parent().addClass('active');
     });
}

function openNav() {
    document.getElementById("mySidenav").style.width = "340px";
    // document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "#f3f3f3";
}
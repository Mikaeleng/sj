

var _winWidth = $( window).width();
var _screen;
setDevice(_winWidth);

function setDevice(win){
  if(win <768 && win>568){
    _screen = "small";
  }else if(win<1024 && win>768) {
      _screen = "medium";
  }else if(win> 1024){
    _screen = "large";
  }
}

jQuery( document ).ready(function( $ ) {

    toggleElements();


    $( window ).resize(function() {

        _winWidth = $( window).width();
        setDevice(_winWidth);
        toggleElements();

    });


    $( "#news-button" ).click(function(event) {
    if(_winWidth<1024) {
        event.preventDefault();
        $("#sort-menu").removeClass("hidden");
        $("#sort-items").addClass("hidden");

        // toggle bacground color on buttons
        $("#news-button").addClass('active-tab');
        $("#work-button").removeClass('active-tab');

        // shows/hides green arrow
        $("#right-arrow img").addClass('hidden');
        $("#left-arrow img").removeClass('hidden');

        // animates the lists show/hidden
        $("#work-content").slideUp("fast", function () {
            // Animation complete.
        });
        $("#news-content").slideDown("fast", function () {
            // Animation complete.
        });
    }
    });

    $( "#work-button" ).click(function(event) {
        if(_winWidth<1024) {
            event.preventDefault();
            $("#sort-menu").removeClass("hidden");
            $("#sort-items").addClass("hidden");

            $("#news-button").removeClass('active-tab');
            $("#work-button").addClass('active-tab');

            $("#work").removeClass('hidden');

            // shows/hides green arrow
            $("#left-arrow img").addClass('hidden');
            $("#right-arrow img").removeClass('hidden');

            $("#news-content").slideUp("fast", function () {
                // Animation complete.
            });
            $("#work-content").slideDown("fast", function () {
                // Animation complete.
            });
        }
        });

    $( "#button-sort" ).click(function() {
        $("#sort-menu").addClass("hidden");
        $("#sort-items").removeClass("hidden");
    });

    $( "#sort-items button" ).click(function(event) {
        event.preventDefault();
        $("#sort-menu").removeClass("hidden");
        $("#sort-items").addClass("hidden");
    });


    $( ".cat-news, .cat-blog, .cat-subscribe, .cat-train, .cat-kpi" ).click(function(event) {
        event.preventDefault();
        $("#resetList-button").removeClass("hidden");
        var _class = event.target.classList[2];
        $( ".cat" ).each(function( index ) {
            if($(this).children().hasClass(_class)==false){
                $(this).addClass("hidden");
            }
        });102
    });

    $( "#resetList-button" ).click(function(event) {
        event.preventDefault();
        $(this).addClass("hidden");
        $( ".cat" ).each(function( index ) {
            $(this).removeClass("hidden");
        });

    });

    $( "#show-more-button" ).click(function(event) {
        event.preventDefault();
        $(this).hide();
        $( "#news-content" ).hide();
        if(_screen == "large")$( "#work-content" ).css("width","100%");
        $( "#work-content" ).css("background","#fff");

        if(_screen == "large")$( ".work" ).css("width","33%");
        if(_screen == "large")$( ".work-link" ).css("margin-left","0.9rem");
        if(_screen == "large")$( "#work-selectbar div" ).css("margin-left","2.4rem");
        $( ".work" ).removeClass("hidden");
        if(_screen == "large") $( "#news-button" ).hide();
        if(_screen == "large") $( "#arrowbar" ).hide();
        if(_screen == "large") $( "#news-selectbar" ).hide();
        $("#show-less-button").show();

    });
    $( "#show-less-button" ).click(function(event) {
        event.preventDefault();
        $("#show-more-button").show();
        $("#show-more-button").removeClass("hidden");
        if(_screen == "large")$( "#news-content" ).show();
        if(_screen == "large") $( "#work-content" ).css("width","50%");
        $( "#work-content" ).css("background","transparent");

        $( ".work" ).css("width","100%");
        $( ".work" ).each(function( index ) {
            if(index>6){
                $(this).addClass("hidden");
            }
        });
        $( ".work-link" ).css("margin-left","0");
        $( "#news-button" ).show();
        $( "#arrowbar" ).show();
        $("#show-less-button").hide();

        if(_screen == "large") $( "#news-selectbar" ).show();
        if(_screen == "large")$( "#work-selectbar div" ).css("margin-left","2.5rem");

    });

    $( ".fa-cog" ).click(function(event) {
        event.preventDefault();
        $(".work").css("display","none");
    });

    $( "#news-sortbar" ).click(function(event) {
        event.preventDefault();
        $(this).hide();
        $("#news-selectbar").show();
    });

    $( "#close-news-sort" ).click(function(event) {
        event.preventDefault();
        $("#news-selectbar").hide();
        $("#news-sortbar").show();
    });
});




// outside ready function / helper classes

function toggleElements(){
    /*if(_winWidth>568){
        $("#sort-items").removeClass("hidden");
        $("#work").removeClass("hidden");
    }else if(_winWidth<568){
        $("#sort-items").addClass("hidden");
        $("#work").addClass("hidden");

    }*/
}



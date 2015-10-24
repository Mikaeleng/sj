

var _winWidth = $( window).width();

jQuery( document ).ready(function( $ ) {

    toggleElements();

    $( window ).resize(function() {

        _winWidth = $( window).width();
        toggleElements();

    });


    $( "#news-tab" ).click(function(event) {
    if(_winWidth<568) {
        event.preventDefault();
        $("#sort-menu").removeClass("hidden");
        $("#sort-items").addClass("hidden");

        // toggle bacground color on buttons
        $("#news-tab").addClass('active-tab');
        $("#work-tab").removeClass('active-tab');

        // shows/hides green arrow
        $("#right-arrow img").addClass('hidden');
        $("#left-arrow img").removeClass('hidden');

        // animates the lists show/hidden
        $("#work").slideUp("fast", function () {
            // Animation complete.
        });
        $("#news").slideDown("fast", function () {
            // Animation complete.
        });
    }
    });

    $( "#work-tab" ).click(function(event) {
        if(_winWidth<568) {
            event.preventDefault();
            $("#sort-menu").removeClass("hidden");
            $("#sort-items").addClass("hidden");

            $("#news-tab").removeClass('active-tab');

            $("#work").removeClass('hidden');
            $("#work-tab").addClass('active-tab');

            // shows/hides green arrow
            $("#left-arrow img").addClass('hidden');
            $("#right-arrow img").removeClass('hidden');

            $("#news").slideUp("fast", function () {
                // Animation complete.
            });
            $("#work").slideDown("fast", function () {
                // Animation complete.
            });
        }
        });
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

    $( ".fa-cog" ).click(function(event) {
        event.preventDefault();
        console.info("go");
        $(".work").css("display","none");
    });


// outside ready function / helper classes

function toggleElements(){
    if(_winWidth>568){
        $("#sort-items").removeClass("hidden");
        $("#work").removeClass("hidden");
    }else if(_winWidth<568){
        $("#sort-items").addClass("hidden");
        $("#work").addClass("hidden");

    }
}



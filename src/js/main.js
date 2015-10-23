

jQuery( document ).ready(function( $ ) {

    $( "#news button" ).click(function() {
        console.info('clicked visa fler button');
    });

    $( "#news-tab" ).click(function() {
        $( "#news-tab" ).addClass('active-tab');
        $( "#work-tab" ).removeClass('active-tab');

        $( "#work" ).slideUp( "fast", function() {
            // Animation complete.
        });
        $("#news" ).slideDown( "fast", function() {
            // Animation complete.
        });
    });

    $( "#work-tab" ).click(function() {
        $( "#news-tab" ).removeClass('active-tab');

        $( "#work" ).removeClass('hidden');
        $( "#work-tab" ).addClass('active-tab');

        $( "#news" ).slideUp( "fast", function() {
            // Animation complete.
        });
        $("#work" ).slideDown( "fast", function() {
            // Animation complete.
        });
    });
});

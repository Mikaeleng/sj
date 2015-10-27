/**
 * Created by mikaelen on 27/10/15.
 */
jQuery( document ).ready(function( $ ) {


    // action for handling all elements that have to have a custom line-height

    $("#edit-panel, #extended-panel").hide();

    // -- Click in "redigera" in read panel --
    $("#read-panel .work-panel-header div:last-of-type").click(function() {
        $("#edit-panel").show();
        $("#read-panel").hide();
    });

    // -- Click on "close" in edit panel --
    $("#edit-panel .work-panel-header div:last-of-type").click(function() {
        $("#edit-panel").hide();
        $("#read-panel").show();
    });

    // show extended "Ditt arbete" panel
    $("#read-panel .pure-button").click(function() {
        $("#extended-panel").show();
        $("#read-panel").hide();
        $("#news-panel").hide();
        $("#work-panel").css("width","100%");
    });

    // hides extended "Ditt arbete" panel
    $("#extended-panel .pure-button").click(function() {
        $("#extended-panel").hide();
        $("#read-panel").show();
        $("#news-panel").show();
        $("#work-panel").css("width","300px");
    });
// -- End if ready function --
});

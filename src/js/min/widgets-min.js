jQuery(document).ready(function($){$("#edit-panel, #extended-panel").hide(),$("#read-panel .work-panel-header div:last-of-type").click(function(){$("#edit-panel").show(),$("#read-panel").hide()}),$("#edit-panel .work-panel-header div:last-of-type").click(function(){$("#edit-panel").hide(),$("#read-panel").show()}),$("#read-panel .pure-button").click(function(){window.scrollTo(0,0),$("#extended-panel").show(),$("#read-panel").hide(),$("#news-panel").hide(),$("#work-panel").css("width","100%")}),$("#extended-panel .pure-button").click(function(){window.scrollTo(0,0),$("#extended-panel").hide(),$("#read-panel").show(),$("#news-panel").show(),$("#work-panel").css("width","300px")})});
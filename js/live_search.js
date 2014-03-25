$(function(){
    $(".search").keyup(function(){ 
        var searchid = $(this).val();
        var dataString = "search=" + searchid;
        if(searchid != ""){
            $.ajax({
                type: "POST",
                url: "live_search_ajax.php",
                data: dataString,
                cache: false,
                success: function(html){
                    $("#result").html(html).show();
                }
            });
        }
        return false;    
    });

    jQuery("#result").bind("click",function(e){ 
        var $clicked = $(e.target);
        var $name = $clicked.find('.name').html();
        var decoded = $("<div/>").html($name).text();
        $('#searchid').val(decoded);

        //add new tag
        $("#tag").html($("#tag").html() + "<input type='button' value='" + $name + "' onclick='javascript:tag_del(this);'><input type='hidden' name='tag[]' value='" + $name + "'>");
    });

    jQuery(document).bind("click", function(e){ 
        var $clicked = $(e.target);
        if (! $clicked.hasClass("search")){
        jQuery("#result").fadeOut(); 
        }
    });

    $('#searchid').click(function(){
        jQuery("#result").fadeIn();
    });
});

function tag_del(obj){
    obj.remove();
    $("input[name='tag[]']").map(function(){
        if($(this).val() == obj.value){
            $(this).remove();
        }
    }).get();
}
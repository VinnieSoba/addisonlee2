(function($){
    $(document).ready(function () {
        $('.makeactive').click(function(){
            $('.makeactive').removeClass('selected');
            $(this).addClass('selected');
        });

        $("#get-all").click(function(e){
            $('#get-all').removeClass('selected');
            $(this).addClass('selected');
            e.preventDefault();
            $.ajax({
                url: my_ajax_object.ajaxurl,
                type: "GET",
                data : {
                    'action' : 'my_action'
                },
                success: function( data ) {
                    $("#card-row").html(data);
                },
            });
        });
    

    // get web
    $("#get-web").click(function(e){
        
        e.preventDefault();
        $.ajax({
            url: my_ajax_object.ajaxurl, 
            type: "GET",
            data : {
                'action' : 'get_web_results'
            },
            success: function( data ) {
                $("#card-row").html(data);
            },
        });

    });

    // get app 

    $("#get-app").click(function(e){
        e.preventDefault();
        $.ajax({
            url: my_ajax_object.ajaxurl,
            type: "GET",
            data : {
                'action' : 'get_app_results'
            },
            success: function( data ) {
                $("#card-row").html(data);
            },
        });

    });

    // get prism

    $("#get-prism").click(function(e){
        e.preventDefault();
        $.ajax({
            url: my_ajax_object.ajaxurl,
            type: "GET",
            data : {
                'action' : 'get_prism_results'
            },
            success: function( data ) {
                console.log(data);
                $("#card-row").html(data);
            },
        });

    });
    
});    


})(jQuery);

// search and filter by title
function search() {
    console.log('filter works');
    var input, filter, div,li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("card-row");
    li = div.getElementsByClassName("card");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
        } else {
        li[i].style.display = "none";
        }
    }
}
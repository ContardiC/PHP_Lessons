function loaddata(){
    var url="src/select-articles.php";
    var queryString='title='+$('#title').val();
    var content='';
    $.ajax({
        type: "POST",
        url: url,
        data: queryString,
        beforeSend: function(){
            $('body').append('<div id="loading">Loading...</div>');
            // effetto animato
        },
        complete: function(){
            $('#loading').remove();
            // togliere al completamento della richiesta
        },
        success: function(data){
            var obj=jQuery.parseJSON(data);
            $.each(obj,function(key,val){
                content+='<h3>'+val.title+'</h3>';
                content+='<p>'+val.body+'</p>';
            });
            $('#content').html(content);
        },
        fail: function(){
            $('#content').html('<div>Spiacenti, riporva più tardi</div>');
        }

    });

}
$('#fetch-data').click(function(){
    loaddata();
});
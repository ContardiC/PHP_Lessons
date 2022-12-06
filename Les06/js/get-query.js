function loadData(){
    var content=' ';
    $.getJSON('src/list-articles.php')
    .done(function(data){
        $.each(data,function(key,val){
            content+='<h3>'+val.title+'</h3>';
            content+='<p>'+val.body+'</p>';
        });
        $('#content').append(content);
    });
}
$('#fetch-data').on('click',function(){
    loadData();
});
function loadData(){
    var content=' ';
    $.getJSON('data/books.json')
        .done(function(data){
        $.each(data.books,function(key,val){
            content+='<h3>'+val.title+'</h3>';
            content+='<p>'+val.author+'</p>';
        });
        $('#content').html(content);
    });
}
$('#fetch-data').on('click',function(){
    loadData();
});

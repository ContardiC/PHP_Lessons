function getData(){
    var text=$('#content').val();
    var tags="<div id='bho'>Eccomi</div>";
    $('body').append(tags);
    console.log(text);
}

$('#get-data').on('click',function(){
    getData();
    //TODO: aggiungo cose
});


$('#delete').click(function (){
    $('#bho').remove();
});


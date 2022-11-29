function getBooks(){
    console.log('fetch data');
    var request=new XMLHttpRequest();
    request.onload=function (){
        if(request.status === 200){
            var response=JSON.parse(request.responseText);
            var data='';
            for(var i=0;i<response.length;i++){
                data+='<div>';
                data+='<h4>'+response[i].title+'</h4>';
                data+='<p>'+response[i].body+'</p>';
                data+='</div>';
            }
            document.getElementById('content').innerHTML=data;
        }
    };
    request.open('get','src/list-articles.php',true);
    request.send(null);
}
var elBtnfetchData=document.getElementById('fetch-data');
elBtnfetchData.addEventListener('click',getBooks,true);
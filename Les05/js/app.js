function getBooks(){
    console.log('fetch data');
    var request=new XMLHttpRequest();
    request.onload=function (){
        if(request.status === 200){
            var response=JSON.parse(request.responseText);
            var data='';
            for(var i=0;i<response.books.length;i++){
                data+='<div>';
                data+='<h4>'+response.books[i].title+'</h4>';
                data+='<p>'+response.books[i].author+'</p>';
                data+='</div>';
            }
            document.getElementById('content').innerHTML=data;
        }
    };
    request.open('get','data/books.json',true);
    request.send(null);
}
var elBtnfetchData=document.getElementById('fetch-data');
elBtnfetchData.addEventListener('click',getBooks,true);

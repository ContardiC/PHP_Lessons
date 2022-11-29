function getBooks(){
    console.log('fetch data');
    var title=document.getElementById('title').value;
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
    request.open('POST','src/select-articles.php');
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.send("title="+title);
}
var elBtnfetchData=document.getElementById('fetch-data');

elBtnfetchData.addEventListener('click',getBooks,true);
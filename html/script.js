function Markdown2HTML(sInput){
    var  converter = new showdown.Converter();
    var  html = converter.makeHtml(sInput);
   return html ;
 }
 
 function fnProcess() {
   
   var sMarkDown = $("#myInput").val();
   
   var sHTML = Markdown2HTML(sMarkDown);
   
   $("#resultTemp").html(sHTML);
 
   $("#resultArea").html($("#resultTemp").text());
 
 }
function myFunction() {
    document.getElementById('Blog1').style.display='block';
    document.getElementById('Less1').style.display='none';
  }


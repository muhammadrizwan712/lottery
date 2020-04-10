var name=null;
var id=null;
var mn=null;

$(".edit").click(function (event) {

	
   
     mn = $(this).closest("tr").find("td:eq(4)");
    

     id = $(this).closest("tr").find("td:eq(3)").text();
   //  alert(id);

    $('#myModal').modal();


$('#idclass').html(id);






});


$('#save').on('click',function(){

var body=$('#body').val();
  

$.ajax({
method:'POST',
url:add,

data:{id:id,name:body,_token:token},
success:function(data){

$('#myModal').modal('hide');
console.log(data)
//mn.text(data);

}


});

});

   

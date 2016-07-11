/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function(){
    $("#createe").change(function(){
        
        $.ajax({
            type:"post",
            url:"/Home/goods/select",
            data:"pid="+$(this).val(),
            dataType:"json",
            success:function(res){
               //alert(res.info.length);
               var sel="";
               for(var i=0;i<res.info.length;i++){
                   sel += "<option value="+res.info[i].cid+">" + res.info[i].cname + "</option>";
               }
              //document.getElementById("create").innerHTML="@foreach("+res.info+" as $chi) <option>{{$chi->cname}}</option> @endforeach";
              document.getElementById("create").innerHTML=sel;
              
            }
        });
    });
});

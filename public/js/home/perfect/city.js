/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function c (obj){
   
   //获取选择的省份
   var city = obj.value;
   
 //获取相应的城市
  var arr =new Array();
 arr['北京'] = ['昌平','朝阳','海淀'];
 arr['上海'] = ['浦东','虹口','宝山'] ;
 arr['台湾'] = ['台北','高雄','台中'];
 
   var sf = arr[city];
   //组装select 标签
   var sel ='';
   for(var i=0;i<sf.length;i++ ){
       sel +="<option value='" + sf[i] + "'>"+ sf[i]+"</option>";
   };
    document.getElementById('two').innerHTML = sel;
}


 
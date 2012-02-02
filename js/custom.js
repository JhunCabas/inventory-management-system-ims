$(function(){
var fno=new Array("","1","2","3","4","5","6","7","8","9","10","4","4","4","4","4","4","4","4","4","4","4","4","4","4","4","4"
,"4","4","4","4","4","4","4","4","4","4","4","4","4","4","4","4","4","4","4","4","4","4","4","4","4","4","4","4","4","4","4"
,"4","4","4","4","4","4"); 
var icode=new Array("","401","402","403","405","408","410","411","415","416","417","418","419","420","421","422","423","424"
,"425","428","436","437","441","442","446","447","449","451","453","454","456","457","461","462","463","466","467","468","469"
,"470","471","474","476","477","478","479","480","481","482","483","483","484","485","486","487","491","493","495","505"
,"523","525","549","636","637","638","639","723","762","767","833","841"); 
var date = new Date();
var d  = date.getDate();
var day = (d < 10) ? '0' + d : d;
var m = date.getMonth() + 1;
var month = (m < 10) ? '0' + m : m;
var yy = date.getYear();
var year = (yy < 1000) ? yy + 1900 : yy;//day + "/" + month + "/" + year
				$('#articlesoe').change(function(){
					var name=$('#articlesoe').val();
					var fn=fno[name];;
					if(fn<10){fn="0"+fn;}
					var id="UJ/COMPSC/"+icode[name]+"/OE/"+fn+"/";
					$.post('oeq.php',{phpname:name},function(data){
					var x=parseInt(data,10);
					x=x+1;
					if(x<10){x="00"+x;}
					else if(x<100){x="0"+x;}
					x=id+x;
					//$('#feedback').html(x);
					$('#id_nooe').val(x);
					$('#dateoe').val(day + "/" + month + "/" + year);
					$('#f_nooe').val(fn);
				});
				});
				$('#articlesle').change(function(){
					var name=$('#articlesle').val();
					var fn=fno[name];;
					if(fn<10){fn="0"+fn;}
					var id="UJ/COMPSC/"+icode[name]+"/LE/"+fn+"/";
					$.post('leq.php',{phpname:name},function(data){
					var x=parseInt(data,10);
					x=x+1;
					if(x<10){x="00"+x;}
					else if(x<100){x="0"+x;}
					x=id+x;
					//$('#feedback').html(x);
					$('#id_nole').val(x);
					$('#datele').val(day + "/" + month + "/" + year);
					$('#f_nole').val(fn);
				});
				});
				$('#articlesfu').change(function(){
					var name=$('#articlesfu').val();
					var fn=fno[name];;
					if(fn<10){fn="0"+fn;}
					var id="UJ/COMPSC/"+icode[name]+"/F/"+fn+"/";
					$.post('fuq.php',{phpname:name},function(data){
					var x=parseInt(data,10);
					x=x+1;
					if(x<10){x="00"+x;}
					else if(x<100){x="0"+x;}
					x=id+x;
					//$('#feedback').html(x);
					$('#id_nofu').val(x);
					$('#datefu').val(day + "/" + month + "/" + year);
					$('#f_nofu').val(fn);
				});
				});
				$('#act1c').click(function(){
					var name=$('#itemscon').val();
					$.post('consq.php',{phpname:name},function(data){
					var x=parseInt(data,10);
					var y=parseInt($('#noicon').val());
					x=x+y;
					//$('#feedback').html(x);
					$('#balcon').val(x);
					$('#datecon').val(day + "/" + month + "/" + year);
				});
				});
				$('#act2c').click(function(){
					var name=$('#itemscon').val();
					$.post('consq.php',{phpname:name},function(data){
					var x=parseInt(data,10);
					var y=parseInt($('#noicon').val());
					x=x-y;
					//$('#feedback').html(x);
					$('#balcon').val(x);
					$('#datecon').val(day + "/" + month + "/" + year);
				});
				});
				
				$('#act1s').click(function(){
					var name=$('#itemssta').val();
					$.post('staq.php',{phpname:name},function(data){
					var x=parseInt(data,10);
					var y=parseInt($('#noista').val());
					x=x+y;
					//$('#feedback').html(x);
					$('#balsta').val(x);
					$('#datesta').val(day + "/" + month + "/" + year);
				});
				});
				$('#act2s').click(function(){
					var name=$('#itemssta').val();
					$.post('staq.php',{phpname:name},function(data){
					var x=parseInt(data,10);
					var y=parseInt($('#noista').val());
					x=x-y;
					//$('#feedback').html(x);
					$('#balsta').val(x);
					$('#datesta').val(day + "/" + month + "/" + year);
				});
				});
				$('#act1m').click(function(){
					var name=$('#itemsmai').val();
					$.post('maiq.php',{phpname:name},function(data){
					var x=parseInt(data,10);
					var y=parseInt($('#noimai').val());
					x=x+y;
					//$('#feedback').html(x);
					$('#balmai').val(x);
					$('#datemai').val(day + "/" + month + "/" + year);
				});
				});
				$('#act2m').click(function(){
					var name=$('#itemsmai').val();
					$.post('maiq.php',{phpname:name},function(data){
					var x=parseInt(data,10);
					var y=parseInt($('#noimai').val());
					x=x-y;
					//$('#feedback').html(x);
					$('#balmai').val(x);
					$('#datemai').val(day + "/" + month + "/" + year);
				});
				});
				
				
			});
			
			
			
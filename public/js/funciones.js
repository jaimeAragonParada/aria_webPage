	
function XMLHTTP(){
	var Object;
	if (typeof XMLHttpRequest == "undefined" ){
		if(navigator.userAgent.indexOf("MSIE 5") >= 0){ 
			Object= new ActiveXObject("Microsoft.XMLHTTP");
		}
		else{ 
			Object=new ActiveXObject("Msxml2.XMLHTTP");
		}
	}
	else{ 
		Object=new XMLHttpRequest();
	}
	return Object;					
}
function buscarUsuario(idForm){
	if(event.keyCode == 13){
		if (validar(idForm)) {
			alert('siiii');
		}		
	}
}		
function buscarEmpl(){
	// alert('siii');
	var nombre=document.getElementById("nombreEmpl").value;	
	if (nombre!="") {
		var ajax = XMLHTTP();	
		ajax.open("POST","../php/buscarEmpl.php",true);
		ajax.onreadystatechange=function()
		{
		  if(ajax.readyState==4){
			  	var respuesta=ajax.responseText;
			  	mostrVistEmplBuscado(respuesta);
			  	// alert(respuesta);
	        	// document.getElementById('contenido').innerHTML=respuesta;
			}	
		}
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send("nombre="+nombre);
	}
	else{
		alert("Introduzca un nombre");
		document.getElementById("nombreEmpl").focus();
	}
}
function validarNum(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function validar(idForm){
	//alert(nomForm);	
	camposTexto = document.getElementById(idForm).elements; 
	//alert(camposTexto);
	for (x=0; x < camposTexto.length; x++) {
	if (camposTexto[x].value == '' && camposTexto[x].type=='text'){
			alert("El campo " + camposTexto[x].name + " esta vacio y es OBLIGATORIO");
			var idcampo=camposTexto[x].id;
			document.getElementById("idcampo").focus();
			return false;
			location='';
    	}
   }
   return true;
}


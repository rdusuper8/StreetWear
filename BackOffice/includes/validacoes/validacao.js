function validaMail(m) {			

	//Expressão regular para validação de mail
	filtro =  /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	caixa_email = document.querySelector('.msg-email');
	if(m.value == "") 
		return true; 		// Mail vazio não valida
	if(filtro.test(m.value)){		// Mail cumpre as regras
		caixa_email.style.display = 'none';
	} else {				// Mail não cumpre as regras
		caixa_email.innerHTML = "*Formato de E-mail invalido";
		caixa_email.style.display = 'block';
	}
	if (m.value.length==0) { 
		document.getElementById("txtmail").innerHTML=""; 
		document.getElementById("txtmail").style.display="none"; 
		return;
	}
		

	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} 
	else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("txtmail").style.display="block";
			document.getElementById("txtmail").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","./includes/validacoes/existemail.php?q="+m.value,true);
	xmlhttp.send();
}

function validaCPass(){
	caixa_cpass = document.querySelector('.msg-cpass');
  if (document.getElementById('utipas2').value != document.getElementById('utipas1').value) {
		caixa_cpass.innerHTML = "*A confirmação da password não é igual com a password";
		caixa_cpass.style.display = 'block';
  } 
  else {
	  	caixa_cpass.innerHTML='';
		caixa_cpass.style.display = 'none';
  }
}


function validaRegisto(){
	caixa_nome = document.querySelector('.msg-nome');
	caixa_email = document.querySelector('.msg-email');
	caixa_data = document.querySelector('.msg-data');
	caixa_pass = document.querySelector('.msg-pass');
	caixa_cpass = document.querySelector('.msg-cpass');
	caixa_foto= document.querySelector('.msg-foto');
	nome=document.getElementById('rusrname');
	mail=document.getElementById('remail');
	data=document.getElementById('rdata');
	cp=document.getElementById('rcpsw');
	pass=document.getElementById('rpsw');
	foto=document.getElementById('rfoto');
	
	if(nome.value == "" || mail.value == "" || data.value == "" || pass.value == "" || cp.value == "" || foto.value == "" || pass.value != cp.value){
		if(nome.value == ""){
			caixa_nome.innerHTML = "*Obritatório preencher";
			caixa_nome.style.display = 'block';
		}
		if( mail.value == ""){
			caixa_email.innerHTML = "*Obritatório preencher";
			caixa_email.style.display = 'block';
		}
		if(data.value == "" ){
			caixa_data.innerHTML = "*Obritatório preencher";
			caixa_data.style.display = 'block';
		}
		if(pass.value == "" ){
			caixa_pass.innerHTML = "*Obritatório preencher";
			caixa_pass.style.display = 'block';
		}
		if(cp.value == ""){
			caixa_cpass.innerHTML = "*Obritatório preencher";
			caixa_cpass.style.display = 'block';
		}
		if(foto.value == "" ){
			caixa_foto.innerHTML = "*Obritatório preencher";
			caixa_foto.style.display = 'block';
		}
		if(pass.value != cp.value){
			caixa_cpass.innerHTML = "*A confirmação da password não é igual com a password";
			caixa_cpass.style.display = 'block';
		}
		return false;
	}
	else{
		caixa_nome.style.display = 'none';
		caixa_email.style.display = 'none';
		caixa_data.style.display = 'none';
		caixa_pass.style.display = 'none';
		caixa_cpass.style.display = 'none';
		caixa_foto.style.display = 'none';
	}
}

function validaRegistoAdd(){
	caixa_nome = document.querySelector('.msg-nome');
	caixa_email = document.querySelector('.msg-email');
	caixa_data = document.querySelector('.msg-data');
	caixa_tele = document.querySelector('.msg-tele');
	nome=document.getElementById('addnome');
	mail=document.getElementById('addmail');
	data=document.getElementById('adddata');
	tele=document.getElementById('addtele');
	
	if(nome.value == "" || mail.value == "" || data.value == "" || tele.value == ""){
		if(nome.value == ""){
			caixa_nome.innerHTML = "*Obritatório preencher";
			caixa_nome.style.display = 'block';
		}
		if( mail.value == ""){
			caixa_email.innerHTML = "*Obritatório preencher";
			caixa_email.style.display = 'block';
		}
		if(data.value == "" ){
			caixa_data.innerHTML = "*Obritatório preencher";
			caixa_data.style.display = 'block';
		}
		if(tele.value == "" ){
			caixa_tele.innerHTML = "*Obritatório preencher";
			caixa_tele.style.display = 'block';
		}
		return false;
	}
	else{
		caixa_nome.style.display = 'none';
		caixa_email.style.display = 'none';
		caixa_data.style.display = 'none';
		caixa_tele.style.display = 'none';
}

function existenome(e) {
	if (e.value.length==0) { 
		document.getElementById("txtlogin").innerHTML=""; 
		document.getElementById("txtlogin").style.display="none"; 
		return;
	}
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} 
	else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("txtlogin").style.display="block";
			document.getElementById("txtlogin").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","includes/validacoes/getexiste.php?q="+e.value,true);
	xmlhttp.send();
}

function validaLogin(){
	utimail=document.getElementById('utimail');
	utipas=document.getElementById('utipas');
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} 
	else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("loginvalida").style.display="block";
			document.getElementById("loginvalida").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","includes/validacoes/validalogin.php?ln="+utimail.value+"&lp="+utipas.value,false);
	xmlhttp.send();
	if(xmlhttp.responseText == false){
		return true;
	}
	else{
		return false;
	}
}
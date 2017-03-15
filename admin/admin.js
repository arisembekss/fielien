var xmlHttp;

function openTabs(tabName) {
	// body...
	var i;
    var x = document.getElementsByClassName("tabs");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    document.getElementById(tabName).style.display = "block";

    //document.getElementById(tabName).className += "w3-teal";
}

function openModal(){
	document.getElementById('modalEditt').style.display='block'
}

function GetXmlHttpObject(){
	var xmlHttp=null;
	
	try{
		xmlHttp=new XMLHttpRequest();
	}catch(e){
		xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	return xmlHttp;
}

function editCategory(id){
	xmlHttp=GetXmlHttpObject();
	if(xmlHttp==null){
		alert("Browser anda tidak support");
		return;
	}

	var url="edit_id_category.php"

	url=url+"?q="+id;
	xmlHttp.onreadystatechange=stateChanged;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
	/*document.getElementById('id01').style.display='block'*/
}

function stateChanged(){
	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
		document.getElementById("modalEdit").innerHTML=xmlHttp.responseText;
		document.getElementById('modalEditt').style.display='block';
	}
	
}

/*functions for category women eyeglass*/
function editWomenCategory(id){
	xmlHttp=GetXmlHttpObject();
	if(xmlHttp==null){
		alert("Browser anda tidak support");
		return;
	}

	var url="edit_id_women.php"

	url=url+"?q="+id;
	xmlHttp.onreadystatechange=stateChangedWomen;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
	/*document.getElementById('id01').style.display='block'*/
}

function stateChangedWomen(){
	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
		document.getElementById("formEditWomen").innerHTML=xmlHttp.responseText;
		document.getElementById('modalEditWomen').style.display='block';
	}
	
}
/**/

/*functions for category men eyeglass*/
function editMenCategory(id){
	xmlHttp=GetXmlHttpObject();
	if(xmlHttp==null){
		alert("Browser anda tidak support");
		return;
	}

	var url="edit_id_men.php"

	url=url+"?q="+id;
	xmlHttp.onreadystatechange=stateChangedMen;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
	/*document.getElementById('id01').style.display='block'*/
}

function stateChangedMen(){
	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
		document.getElementById("formEditMen").innerHTML=xmlHttp.responseText;
		document.getElementById('modalEditMen').style.display='block';
	}
	
}
/**/
function editAdditionalCategory(id){
	xmlHttp=GetXmlHttpObject();
	if(xmlHttp==null){
		alert("Browser anda tidak support");
		return;
	}

	var url="edit_id_additional.php"

	url=url+"?q="+id;
	xmlHttp.onreadystatechange=stateChangedLens;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
	/*document.getElementById('id01').style.display='block'*/
}

function stateChangedAdditional(){
	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
		document.getElementById("formEditLens").innerHTML=xmlHttp.responseText;
		document.getElementById('modalEditLens').style.display='block';
	}
	
}

/*function for lens*/
function editLensCategory(id){
	xmlHttp=GetXmlHttpObject();
	if(xmlHttp==null){
		alert("Browser anda tidak support");
		return;
	}

	var url="edit_id_lens.php"

	url=url+"?q="+id;
	xmlHttp.onreadystatechange=stateChangedLens;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
	/*document.getElementById('id01').style.display='block'*/
}

function stateChangedLens(){
	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
		document.getElementById("formEditLens").innerHTML=xmlHttp.responseText;
		document.getElementById('modalEditLens').style.display='block';
	}
	
}
/**/
function showAddCategory() {
    var promo1 = document.getElementById("addCategory");
    if (promo1.className.indexOf("w3-show") == -1) {
        promo1.className += " w3-show";
    } else {
        promo1.className = promo1.className.replace(" w3-show", "");
    }
    //document.getElementById("edit-promo1").style.display="block";
}

function showAddProduct() {
    var promo1 = document.getElementById("addProduct");
    if (promo1.className.indexOf("w3-show") == -1) {
        promo1.className += " w3-show";
    } else {
        promo1.className = promo1.className.replace(" w3-show", "");
    }
    //document.getElementById("edit-promo1").style.display="block";
}

function showAdmin(str){
		
	var url;
	if (str == 1) {url="men-eyeglass";}
	else if (str==2) {url="women-eyeglass";}
	else if (str==3) {url="admin-lens";}

	
	window.location.href = url+"?q="+str;
	
	}
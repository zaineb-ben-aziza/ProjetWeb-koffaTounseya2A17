 //panier//
 function verif()
 {
 var panier=document.getElementById("id_panier").value

 var cpanier=document.getElementById("cid_panier")

 cid_panier.innerHTML=""

///
var quantite=document.getElementById("quantite").value
    var cquantite=document.getElementById("cquantite")
	cquantite.innerHTML=""
	////
	var prix=document.getElementById("prix").value
    var cprix=document.getElementById("cprix")
	cprix.innerHTML=""
	////
	var codeing=document.getElementById("codeing").value
    var ccodeing=document.getElementById("codeing")
	ccodeing.innerHTML=""

    //long-int

 if((panier.length!=3) || (isNaN(panier)))
 {
     cid_panier.innerHTML="le champs  id_panier doit  contenir seulement des chiffres!"
     return false;
 }

 
 if(quantite==0) 
	{
cquantite.innerHTML="le saisie du code est obligatoire!"
return false;
	}

if(prix==0) 
	{
cprix.innerHTML="le saisie du prix est obligatoire!"
return false;
	}
	if(codeing==0) 
	{
ccodeing.innerHTML="le saisie du l'identifiant est obligatoire!"
return false;
	}

	if((codeing.length!=3) || (isNaN(codeing))
	{
		ccodeing.innerHTML="le champs  codeing doit  contenir seulement des chiffres!"
		return false;
	}
}
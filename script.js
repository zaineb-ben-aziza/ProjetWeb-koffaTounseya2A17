function verif()
	
{
	
//achat//
    var code=document.getElementById("codeing").value
	var nom=document.getElementById("noming").value
	var prix=document.getElementById("prixing").value
	var qte=document.getElementById("qteing").value
	
	
	
	
	//span
    var ccodeing=document.getElementById("ccodeing")
	var cnoming=document.getElementById("cmon")
	var cprixing=document.getElementById("cprixing")
	var cqteing=document.getElementById("cqteing")
	
	
	
	ccodeing.innerHTML=""
	cnoming.innerHTML=""
	cprixing.innerHTML=""
	cqteing.innerHTML=""


	///obligatoire client

    if(code==0) 
	{
ccodeing.innerHTML="saisie du code doit etre obligatoire!"
return false;
	}
	
	if(nom==0) 
	{
cmon.innerHTML="saisie du nom doit etre obligatoire!"
return false;
	}
	
	if(prix==0) 
	{
cprixing.innerHTML="saisie du prix doit etre obligatoire!"
return false;
	}
	
	if(qte==0) 
	{
cqteing.innerHTML="saisie du quantite doit etre obligatoire!"
return false;
	}

//code ingredient 3 chiffre
if((code.length!=3) || (isNaN(code)))

	{
	ccodeing.innerHTML="le champs  codeing doit  contenir seulement 3 chiffres!"
return false;
	}

	}
	
	
	
	
	

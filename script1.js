function verif()
	
{
	
//achat//
  
	var nom=document.getElementById("noming").value
	var prix=document.getElementById("prixing").value
	var qte=document.getElementById("qteing").value
	
	
	
	
	//span
   
	var cnoming=document.getElementById("cmon")
	var cprixing=document.getElementById("cprixing")
	var cqteing=document.getElementById("cqteing")
	
	
	
	
	cnoming.innerHTML=""
	cprixing.innerHTML=""
	cqteing.innerHTML=""


	///obligatoire client


	
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



	}
	
	
	
	
	

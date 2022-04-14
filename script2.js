function verif()
	
{
	
//achat//
    var code=document.getElementById("codepr").value
	var nom=document.getElementById("nompr").value

	
	
	
	//span
    var ccodepr=document.getElementById("ccodepr")
	var cnompr=document.getElementById("cnompr")
	
	
	
	
	ccodepr.innerHTML=""
	cnompr.innerHTML=""
	


	///obligatoire client

    if(code==0) 
	{
ccodepr.innerHTML="saisie du code doit etre obligatoire!"
return false;
	}
	
	if(nom==0) 
	{
cnompr.innerHTML="saisie du nom doit etre obligatoire!"
return false;
	}
	
	

//code ingredient 3 chiffre
if((code.length!=3) || (isNaN(code)))

	{
	ccodepr.innerHTML="le champs  codeing doit  contenir seulement 3 chiffres!"
return false;
	}

	}
	
	
	
	
	

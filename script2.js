function verif()
	
{
	
//achat//
var test=false
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
test=true;
	}
	
	if(nom==0) 
	{
cnompr.innerHTML="saisie du nom doit etre obligatoire!"
test=true;
	}
	
	

//code ingredient 3 chiffre

	
	
	
	if(test)
	{
		return false
	}

	}
	
	
	
	
	

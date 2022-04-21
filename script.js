function verif()
	
{
	
//achat//
var test=false
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
	for(let i=0;i<nom.length;i++)
	if(!(nom.charAt(i).toUpperCase()>="A" && nom.charAt(i).toUpperCase()<="Z"))
	{
		
	cnoming.innerHTML="nom doit  etre chaine!"	
	test=true;
	}

    if(code==0) 
	{
ccodeing.innerHTML="saisie du code doit etre obligatoire!"
test=true;
	}
	
	if(nom==0) 
	{
cmon.innerHTML="saisie du nom doit etre obligatoire!"
test=true;
	}
	
	if(prix==0) 
	{
cprixing.innerHTML="saisie du prix doit etre obligatoire!"
test=true;
	}
	
	if(qte==0) 
	{
cqteing.innerHTML="saisie du quantite doit etre obligatoire!"
test=true;
	}


	
	if(test)
	{
		return false
	}
	

	}
	
	
	
	
	

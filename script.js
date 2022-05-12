function verif()
{
	 //achat//

    var achat=document.getElementById("id_achat").value
    var cachat=document.getElementById("cid_achat")
	cid_achat.innerHTML=""


	var panier=document.getElementById("id_panier").value
    var cpanier=document.getElementById("cid_panier")
	cid_panier.innerHTML=""
    
	
	

	//longeur 
	//int
if((achat.length>3) || (isNaN(achat)))

	{
	cachat.innerHTML="le champs  id_achat doit  contenir des chiffres!"
return false;
	}

    ///obligatoire panier

    if(panier==0) 
	{
cpanier.innerHTML="Id incorrect!"
return false;
	}


}

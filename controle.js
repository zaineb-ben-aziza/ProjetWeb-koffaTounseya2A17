function controle_ajout()
{
var test=false    
var nom=f.nom.value
var nom_label=document.getElementById("nom_c")
nom_label.innerHTML=""
var prenom=f.prenom.value
var prenom_label=document.getElementById("prenom_c")
prenom_label.innerHTML=""


for (let i=0;i<nom.length;i++)
if (!(nom.charAt(i).toUpperCase()>="A" && nom.charAt(i).toUpperCase()<="Z"))
    {
        nom_label.innerHTML="Nom doit etre chaine"  
        test=true
    }
    for (let i=0;i<prenom.length;i++)
    if (!(prenom.charAt(i).toUpperCase()>="A" && prenom.charAt(i).toUpperCase()<="Z"))
    {
        prenom_label.innerHTML="Prenom doit etre chaine"  
        test=true
    }
   
if (test)
return false

}
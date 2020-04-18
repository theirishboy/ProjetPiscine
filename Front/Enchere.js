function Combienargent(id){

    var chiffre = prompt("Entrer le montant que vous êtes prêt à mettre", "");
    window.location.href = "../Back/addoffre.php?var1=" + chiffre + "&var2="+id;            

  }
 function Updatethemoney(id){

    var chiffre = prompt("Entrer le montant que vous êtes prêt à mettre", "");
    window.location.href = "../Back/Updateoffre.php?var1=" + chiffre + "&var2="+id;            

 }
  function Updatetheoffre(id){

    var chiffre = prompt("Entrer le montant que vous souhaitez", "");
    window.location.href = "../Back/UpdateVendeur.php?var1=" + chiffre + "&var2="+id;            

 }
   function accepternontheoffre(id,statut){

    var chiffre = prompt("Entrer le montant que vous souhaitez", "");
    window.location.href = "../Back/UpdateVendeur.php?statut=" + statut + "&id="+id;            

 }
 
 
  function Envoietonbiff(id){

    var chiffre = prompt("Entrer le montant que vous êtes prêt à mettre", "");
    window.location.href = "../Back/addEnchere.php?var1=" + chiffre + "&var2="+id;            

 }
   function Reenvoietonbiff(id){

    var chiffre = prompt("Entrer le montant que vous êtes prêt à mettre", "");
    window.location.href = "../Back/UpdateEnchere.php?var1=" + chiffre + "&var2="+id;            

 }
 
function Fonctionhid(a,b) {
    var div = document.getElementById(a);
    var div2 = document.getElementById(b);

    if (div.style.display === "none") {
      div.style.display = "block";
    } else {
      div.style.display = "none";
    }
    if (div2.style.display === "none") {
        div2.style.display = "block";
      } else {
        div2.style.display = "none";
      }
  }



function modifier(increment,idValeur,idPlus,idStock,idMoins) {
       
var valeur = parseInt(document.getElementById(idValeur).value);
var stock = parseInt(document.getElementById(idStock).value);
if(valeur < stock && increment == 1){
  valeur += increment;
  document.getElementById(idValeur).value = valeur;
  Showmoins(idMoins);
  if(valeur == stock){
  Hideplus(idPlus);
  }else{
  Showplus(idPlus);
  }
}
if(valeur > 0 && increment == -1){
  valeur += increment;
  document.getElementById(idValeur).value = valeur;
  Showplus(idPlus);
  if(valeur == 0){
  Hidemoins(idMoins);
  }else{
  Showmoins(idMoins);
  }
}
}


function Hidemoins(idMoins){
    var div = document.getElementById(idMoins);
    div.style.visibility ='hidden';
}
function Showmoins(idMoins){
    var div = document.getElementById(idMoins);
    div.style.visibility ='visible';
}
function Hideplus(idPlus){
    var div = document.getElementById(idPlus);
    div.style.visibility ='hidden';
}

function Showplus(idPlus){
    var div = document.getElementById(idPlus);
    div.style.visibility ='visible';
}
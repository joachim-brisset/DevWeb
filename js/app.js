products = document.querySelectorAll("#catalog tbody tr")


products.forEach(product => {
  var stockinp = product.getElementsByClassName("dn")[0];
  var minus = product.getElementsByClassName("minusBut")[0];
  var plus = product.getElementsByClassName("plusBut")[0];
  var cart = product.getElementsByClassName("cartquantity")[0];
    plus.addEventListener("click", (event) =>{
      var stock = parseInt(stockinp.value)
      var valeur = parseInt(cart.value)
      if(valeur < stock){
        valeur ++;
        cart.value = valeur;
        minus.disabled = false;
        if(valeur == stock){
        plus.disabled = true;
        }else{
        plus.disabled = false;
        }
      }
    })
    minus.addEventListener("click", (event) =>{
      var valeur = parseInt(cart.value)
      if(valeur > 0){
        valeur --;
        cart.value = valeur;
        plus.disabled = false;
        if(valeur == 0){
        minus.disabled=true;
        }else{
        minus.disabled=false;
        }
      }
    })
    cart.addEventListener("change", (event) =>{
      
      if(parseInt(cart.value) > parseInt(stockinp.value))
      {
        cart.value=stockinp.value;
      }
    })
})
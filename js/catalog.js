//recuperations de chaque ligne du tableau correspondant a un produit.
products = document.querySelectorAll("#catalog tbody tr")

//pour chaque ligne
products.forEach(product => {
  //recupere le bouton moins, plus et quantité de chaque ligne de produit
  var minusButton     = product.getElementsByClassName("minusButton")[0]
  var plusButton      = product.getElementsByClassName("plusButton")[0]
  var cartQuantityEl  = product.getElementsByClassName("cartQuantity")[0]
  var stockEl         = product.getElementsByClassName("productStock")[0]

  function definirValeur(cartQuantityEl, valeur, stock) {
    if(valeur >= stock) {
      cartQuantityEl.value = stock
      plusButton.disabled = true;
      minusButton.disabled = false;
    } else if (valeur <= 0) {
      cartQuantityEl.value = 0
      minusButton.disabled = true;
      plusButton.disabled = false;
    } else {
      cartQuantityEl.value = valeur
      minusButton.disabled = false;
      plusButton.disabled = false;
    }
  }
  //definition des fonction 'en dure' pour des element qui varie en fonction de la ligne

  //event du click sur le bouton moins (-)
  if(minusButton) {
      minusButton.addEventListener("click", (event) => {
        //code ici
        var valeur  = parseInt(cartQuantityEl.value);
        var stock   = parseInt(stockEl.innerHTML);

        definirValeur(cartQuantityEl, valeur - 1, stock);
      })
  }

  //event du click sur le bouton plus (+)
  if(plusButton) {
      plusButton.addEventListener("click", (event) => {
        //code ici
        var valeur  = parseInt(cartQuantityEl.value);
        var stock   = parseInt(stockEl.innerHTML);

        definirValeur(cartQuantityEl, valeur + 1, stock);
      })
  }

  //event de modification de la quantité
  if(cartQuantityEl) {
      cartQuantityEl.addEventListener("change", (event) => {
        //code ici
        var valeur  = parseInt(cartQuantityEl.value);
        var stock   = parseInt(stockEl.innerHTML);

        definirValeur(cartQuantityEl, valeur, stock);
      })
  }

});


function toggleVisibility(col) {
  visibility = col.style.visibility;
  col.style.visibility = (visibility == "collapse") ? "" : "collapse"
}

stockButton = document.getElementById("showStockButton")
stockButton.addEventListener("click", () => {
  stocks = document.querySelector("#catalog col#productStock")
  toggleVisibility(stocks);
})
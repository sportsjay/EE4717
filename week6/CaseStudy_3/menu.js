window.document.addEventListener("DOMContentLoaded", function (event) {
  // init
  onChangeQty("regular-blend");
  onChangeQty("house-blend");
  onChangeQty("ice-cappuccino");
});

function processTotalPrice() {
  const regularBlendPrice =
    document.getElementById("regular-blend-subtotal-price")?.value ?? 0;
  const houseBlendPrice =
    document.getElementById("house-blend-subtotal-price")?.value ?? 0;
  const iceCappuccinoPrice =
    document.getElementById("ice-cappuccino-subtotal-price")?.value ?? 0;

  const totalPrice =
    parseFloat(regularBlendPrice) +
    parseFloat(houseBlendPrice) +
    parseFloat(iceCappuccinoPrice);
  document.getElementById("total-price").value = `${totalPrice}`;
}

function onChangeQty(idName) {
  // get quantity
  const val = document.getElementById(`${idName}-qty`)?.value ?? 0;

  // set to subtotal price
  if (idName === "regular-blend") {
    // if regular blend - size won't change so default by price = $2

    document.getElementById(`${idName}-subtotal-price`).value = `${
      parseInt(val) * 2
    }`;
  } else {
    // get the price
    const price = document.querySelector(
      `input[name="${idName}-price"]:checked`
    ).value;

    document.getElementById(`${idName}-subtotal-price`).value = `${
      parseFloat(val) * parseFloat(price)
    }`;
  }
  // process final price
  processTotalPrice();
}

function onChangePrice(idName) {
  onChangeQty(`${idName}`);
  processTotalPrice();
}

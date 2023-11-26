let dropdownToggle = document.getElementById("triggerId");
let dropdownMenu = document.getElementById("dropMenu");
dropdownMenu.style.display = "none";

document.addEventListener("click", (e) => {
  if (e.target == dropdownToggle) {
    dropdownMenu.style.display = "block";
  } else {
    dropdownMenu.style.display = "none";
  }
});
let cartViewbtn = document.getElementById("cartViewbtn");
let cartView = document.getElementById("cartView");
let productView = document.getElementById("productView");
cartView.style.display = "none";

cartViewbtn.addEventListener("click", () => {
  cartView.style.display = "block";
  productView.style.display = "none";
  dropdownMenu.style.display = "none";
});

let quantity = document.getElementById("quantity");

// console.log(quantity.value);
function minusQuantity() {
  if (quantity.value == 1) {
  } else {
    quantity.value--;
  }

  // console.log(quantity.value);
}

function plusQuantity() {
  quantity.value++;
  // console.log(quantity.value);
}

let addCartBtn = document.querySelectorAll(".add-cart");

addCartBtn.forEach(function (button, index) {
  button.addEventListener("click", (e) => {
    let btnItem = e.target;
    let product =
      btnItem.parentElement.parentElement.parentElement.parentElement;

    let productImg = product.querySelector(".mainImg").src;
    let productName = product.querySelector("h2").innerText;
    let productPrice = product.querySelector(".price").innerText;
    let productQuantity = product.querySelector(".quantity").value;

    addCart(productImg, productName, productPrice, productQuantity);
  });
});

function addCart(productImg, productName, productPrice, productQuantity) {
  let addtr = document.createElement("tr");
  // let cartItem = document.querySelectorAll(".cart-table tr");
  // for (let i = 0; i < cartItem.length; i++) {
  //   let productN = document.querySelectorAll(".productName");
  //   let productQ = document.querySelector(".quantity");
  //   if (productN[i].innerHTML == productName) {
  //     // productQ[i] = productQ.innerText + productQuantity;
  //     productT = productQ[i].innerText + productQuantity;
  //     productQ[i].innerHTML = productT;
  //     console.log(productQ[i]);
  //   }
  // }
  let trContent = `<tr class="table-primary ">
  <td scope="row" style="width: 100%">
    <img
      style="width: 100%"
      src="${productImg}"
      alt=""
    />
  </td>

  <td>
    <div class=" px-2 text-hover" style="float: right; cursor:pointer">
      <i class="fa-solid fa-x"></i>
    </div>
    <a href="../products.html">
      <h5 class="productName text-hover">${productName}</h5>
    </a>

    <span
      class="quantity bg-light rounded px-2 py-1 me-2"
      >${productQuantity}</span
    >
    <span class="price">${productPrice}</span> <span>VNĐ</span>
  </td>
</tr>`;
  addtr.innerHTML = trContent;
  let cartTable = document.querySelector(".cart-table");
  cartTable.append(addtr);
  let cartTable2 = document.querySelector(".cart-table2");
  cartTable2.innerHTML = cartTable.innerHTML;
  // cartTable2.appendChild(cartTable.cloneNode(true));
  // console.log(cartTable);
  // console.log(cartTable2);

  // cartTable2.append(addtr);
  cartTotal();
}

function cartTotal() {
  let cartItem = document.querySelectorAll(".cart-table tr");
  let totalPrice = 0;
  let totalQuantity = 0;
  for (let i = 0; i < cartItem.length; i++) {
    let productQuantity = cartItem[i].querySelector(".quantity").innerText;
    // console.log(productQuantity);
    let productPrice = cartItem[i].querySelector(".price").innerText;
    // console.log(productPrice);
    totalP = productQuantity * productPrice * 1000;
    totalPrice = totalPrice + totalP;
    totalQ = productQuantity++;
    totalQuantity = totalQuantity + totalQ;
  }
  // console.log(totalQ, totalQuantity);
  // console.log(cartItem.length);
  let totalCart = document.querySelector(".total");
  totalCart.innerHTML = totalQuantity;
  let cartTotal = document.querySelector(".cart-total");
  let cartTotal2 = document.querySelector(".cart-total2");
  cartTotal.innerHTML = totalPrice.toLocaleString("de-DE") + " VNĐ";
  cartTotal2.innerHTML = cartTotal.innerHTML;
  deleteCart();
}

function deleteCart() {
  let cartItem = document.querySelectorAll(".cart-table tr");
  let cartTable2 = document.querySelector(".cart-table2 ");
  let cartTable = document.querySelector(".cart-table");
  let deleteCartbtn = document.querySelectorAll(".fa-x");
  for (let i = 0; i < cartItem.length; i++) {
    deleteCartbtn[i].addEventListener("click", function (e) {
      let deleteCart = e.target;
      let cartItemR = deleteCart.parentElement.parentElement.parentElement;
      cartItemR.remove();
      cartTable2.innerHTML = cartTable.innerHTML;
      cartTotal();
    });
  }
}

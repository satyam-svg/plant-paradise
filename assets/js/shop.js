// Get the product__card and product-card elements
let circle = document.querySelector(".color-option");
circle.addEventListener("click", (e)=>{
  let target = e.target;
  if(target.classList.contains("circle")){
    circle.querySelector(".active").classList.remove("active");
    target.classList.add("active");
    document.querySelector(".main-images .active").classList.remove("active");
    document.querySelector(`.main-images .${target.id}`).classList.add("active");
  }
});


// Get the product__card and product-card elements
// Get the product card and overlay elements
// Get the product card and overlay elements
// Get the close button element and overlay element
const closeButton = document.getElementById('closeButton');
const hiddenProductCard = document.getElementById('hiddenProductCard');
const productCardOverlay = document.getElementById('productCardOverlay');

// Function to open the hidden product card
function openHiddenProductCard() {
    // Show the overlay
    productCardOverlay.style.display = 'block';
    // Show the hidden product card
    hiddenProductCard.style.display = 'block';

    // Disable scrolling on the body
    document.body.style.overflow = 'hidden';
}

// Function to close the hidden product card
function closeHiddenProductCard() {
    // Hide the overlay
    productCardOverlay.style.display = 'none';
    // Hide the hidden product card
    hiddenProductCard.style.display = 'none';

    // Enable scrolling on the body
    document.body.style.overflow = 'auto';
}

// Event listener to open the hidden product card when the main product card is clicked
document.getElementById('productCard').addEventListener('click', openHiddenProductCard);

// Event listener to close the hidden product card when the close button is clicked
closeButton.addEventListener('click', closeHiddenProductCard);

// Event listener to close the hidden product card when the overlay is clicked
productCardOverlay.addEventListener('click', closeHiddenProductCard);

// Get the product card and overlay elements
let productCard1 = document.getElementById('productCard1');
let hiddenProductCard1 = document.getElementById('hiddenProductCard1');
let closeButton1 = document.getElementById('closeButton1');
let productCardOverlay1 = document.getElementById('productCardOverlay1');

// Function to open the hidden product card for the second product
function openHiddenProductCard1() {
    // Show the overlay
    productCardOverlay1.style.display = 'block';
    // Show the hidden product card for the second product
    hiddenProductCard1.style.display = 'block';

    // Disable scrolling on the body
    document.body.style.overflow = 'hidden';
}

// Function to close the hidden product card for the second product
function closeHiddenProductCard1() {
    // Hide the overlay
    productCardOverlay1.style.display = 'none';
    // Hide the hidden product card for the second product
    hiddenProductCard1.style.display = 'none';

    // Enable scrolling on the body
    document.body.style.overflow = 'auto';
}

// Event listener to open the hidden product card for the second product when the main product card is clicked
productCard1.addEventListener('click', openHiddenProductCard1);

// Event listener to close the hidden product card when the close button is clicked
closeButton1.addEventListener('click', closeHiddenProductCard1);

// Event listener to close the hidden product card when the overlay is clicked
productCardOverlay1.addEventListener('click', closeHiddenProductCard1);


let productCard2 = document.getElementById('productCard2');
let hiddenProductCard2 = document.getElementById('hiddenProductCard2');
let closeButton2 = document.getElementById('closeButton2');
let productCardOverlay2 = document.getElementById('productCardOverlay2');

// Function to open the hidden product card for the second product
function openHiddenProductCard2() {
    // Show the overlay
    productCardOverlay2.style.display = 'block';
    // Show the hidden product card for the second product
    hiddenProductCard2.style.display = 'block';

    // Disable scrolling on the body
    document.body.style.overflow = 'hidden';
}

// Function to close the hidden product card for the second product
function closeHiddenProductCard2() {
    // Hide the overlay
    productCardOverlay2.style.display = 'none';
    // Hide the hidden product card for the second product
    hiddenProductCard2.style.display = 'none';

    // Enable scrolling on the body
    document.body.style.overflow = 'auto';
}

// Event listener to open the hidden product card for the second product when the main product card is clicked
productCard2.addEventListener('click', openHiddenProductCard2);

// Event listener to close the hidden product card when the close button is clicked
closeButton2.addEventListener('click', closeHiddenProductCard2);

// Event listener to close the hidden product card when the overlay is clicked
productCardOverlay2.addEventListener('click', closeHiddenProductCard2);



let productCard3 = document.getElementById('productCard3');
let hiddenProductCard3 = document.getElementById('hiddenProductCard3');
let closeButton3 = document.getElementById('closeButton3');
let productCardOverlay3 = document.getElementById('productCardOverlay3');

// Function to open the hidden product card for the second product
function openHiddenProductCard3() {
    // Show the overlay
    productCardOverlay3.style.display = 'block';
    // Show the hidden product card for the second product
    hiddenProductCard3.style.display = 'block';

    // Disable scrolling on the body
    document.body.style.overflow = 'hidden';
}

// Function to close the hidden product card for the second product
function closeHiddenProductCard3() {
    // Hide the overlay
    productCardOverlay3.style.display = 'none';
    // Hide the hidden product card for the second product
    hiddenProductCard3.style.display = 'none';

    // Enable scrolling on the body
    document.body.style.overflow = 'auto';
}

// Event listener to open the hidden product card for the second product when the main product card is clicked
productCard3.addEventListener('click', openHiddenProductCard3);

// Event listener to close the hidden product card when the close button is clicked
closeButton3.addEventListener('click', closeHiddenProductCard3);

// Event listener to close the hidden product card when the overlay is clicked
productCardOverlay3.addEventListener('click', closeHiddenProductCard3);


let productCard4 = document.getElementById('productCard4');
let hiddenProductCard4 = document.getElementById('hiddenProductCard4');
let closeButton4 = document.getElementById('closeButton4');
let productCardOverlay4 = document.getElementById('productCardOverlay4');

// Function to open the hidden product card for the second product
function openHiddenProductCard4() {
    // Show the overlay
    productCardOverlay4.style.display = 'block';
    // Show the hidden product card for the second product
    hiddenProductCard4.style.display = 'block';

    // Disable scrolling on the body
    document.body.style.overflow = 'hidden';
}

// Function to close the hidden product card for the second product
function closeHiddenProductCard4() {
    // Hide the overlay
    productCardOverlay4.style.display = 'none';
    // Hide the hidden product card for the second product
    hiddenProductCard4.style.display = 'none';

    // Enable scrolling on the body
    document.body.style.overflow = 'auto';
}

// Event listener to open the hidden product card for the second product when the main product card is clicked
productCard4.addEventListener('click', openHiddenProductCard4);

// Event listener to close the hidden product card when the close button is clicked
closeButton4.addEventListener('click', closeHiddenProductCard4);

// Event listener to close the hidden product card when the overlay is clicked
productCardOverlay4.addEventListener('click', closeHiddenProductCard4);


let productCard5 = document.getElementById('productCard5');
let hiddenProductCard5 = document.getElementById('hiddenProductCard5');
let closeButton5 = document.getElementById('closeButton5');
let productCardOverlay5= document.getElementById('productCardOverlay5');

// Function to open the hidden product card for the second product
function openHiddenProductCard5() {
    // Show the overlay
    productCardOverlay5.style.display = 'block';
    // Show the hidden product card for the second product
    hiddenProductCard5.style.display = 'block';

    // Disable scrolling on the body
    document.body.style.overflow = 'hidden';
}

// Function to close the hidden product card for the second product
function closeHiddenProductCard5() {
    // Hide the overlay
    productCardOverlay5.style.display = 'none';
    // Hide the hidden product card for the second product
    hiddenProductCard5.style.display = 'none';

    // Enable scrolling on the body
    document.body.style.overflow = 'auto';
}

// Event listener to open the hidden product card for the second product when the main product card is clicked
productCard5.addEventListener('click', openHiddenProductCard5);

// Event listener to close the hidden product card when the close button is clicked
closeButton5.addEventListener('click', closeHiddenProductCard5);

// Event listener to close the hidden product card when the overlay is clicked
productCardOverlay5.addEventListener('click', closeHiddenProductCard5);


let mesg=document.getElementById('btn')
let con=document.getElementById('success-container')

mesg.addEventListener('click',()=>{
    con.style.display="block";
    document.body.style.overflow = 'auto';
})

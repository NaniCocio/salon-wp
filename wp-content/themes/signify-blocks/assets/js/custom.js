/**
 * Custom JS for theme elements
 */

/**
 * Wocommerce active class for category list
 */
let signifyBlocksUrl = window.location.href;
const signifyBlocksCatLink = document.querySelectorAll(
  ".wc-block-product-categories-list li a"
);
signifyBlocksCatLink.forEach((item) => {
  if (item.href === signifyBlocksUrl) {
    item.classList.add("active");
  }
});
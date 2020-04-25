//will execute javascript code when the page loads
window.onload = function() {
    initOrderSummary();
    initCollapsibles();
    initCheckoutButton();
}

//this sript will look through the contents of the order summary table and calculate the total amount and price
function initOrderSummary() {
    let table = document.getElementById("productSummary");
    let rows = table.rows;
    let AmountCell, PriceCell;
    let totalAmount = 0, totalSum = 0;
    for (let i = 1; i < rows.length - 1; i++) {
        AmountCell = rows[i].cells[1];
        totalAmount += parseFloat(AmountCell.textContent);

        PriceCell = rows[i].cells[2];
        totalSum += parseFloat(PriceCell.textContent) * parseFloat(AmountCell.textContent);
    }

    document.getElementById("totalAmount").innerHTML = totalAmount.toString();
    document.getElementById("totalSum").innerHTML = totalSum.toString();
}

//this script is responsible for the appearance of the collapsibles
function initCollapsibles() {
    let coll = document.getElementsByClassName("collapsible");
    for (let i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            let content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
}

//block "to checkout" if cart is empty
function initCheckoutButton() {
    let rowCount = document.getElementById('productSummary').rows.length - 2;
    let coll = document.getElementsByClassName("checkout");
    for (let i = 0; i < coll.length; i++) {
        if (rowCount == 0) {
            coll[i].style.backgroundColor = "#A0A0A0";
            coll[i].style.color = "#C0C0C0";
            coll[i].disabled = true;
        }
    }
}
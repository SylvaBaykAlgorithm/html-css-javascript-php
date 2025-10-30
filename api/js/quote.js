function saveNewQuote(){
    const myForm = document.getElementById("quoteForm");

    myForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        const formData = new FormData(myForm);
    // You can then iterate over formData or convert it to a plain object
    for (const [key, value] of formData.entries()) {
        console.log(`${key}: ${value}`);
    }
    });

}
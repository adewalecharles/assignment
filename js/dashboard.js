
let upload_button = document.querySelector("#upload_button");
let hide_upload_form = document.querySelector("#hide_button");

upload_button.addEventListener("click", (e) => {
let upload_form = document.querySelector("#upload_div");

upload_form.style.display = "block";
    
});

hide_upload_form.addEventListener("click", () => {
    let upload_form = document.querySelector("#upload_div");

    upload_form.style.display = "none";
});

let photo_form = document.forms["profile_photo_form"];
let photo_input = document.getElementById("profile_photo");
let submitButton = document.getElementById("profile_photo_submit");

photo_form.addEventListener("submit", (e) => {
    e.preventDefault();

    submitButton.innerHTML = "loading...";

    let file = photo_input.files[0];
    let formData = new FormData();

    console.log(file)
    // Add the file to the request.
    formData.append('profile_photo', file, file.name);

    let http = new XMLHttpRequest();
    http.open('post', '../dbConfig/profile-photo.php');
    // http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    http.addEventListener("readystatechange", () => {
        if (http.status === 200 && http.readyState === 4) {
          // File(s) uploaded.
          submitButton.innerHTML = 'Upload';
        } else {
          alert('An error occurred!');
        }
      });

    
    http.send(formData);
    
    console.log(formData);

});
const studentForm = document.forms["studentRegistrationForm"];


// Ajax connection to the server
studentForm.addEventListener("submit", function(e){
    //user inputs
    const fname = studentForm[0].value;
    const lname = studentForm[1].value;
    const regNumber = studentForm[2].value;
    const faculty = studentForm[3].value;
    const username = studentForm[4].value;
    const password = studentForm[5].value;

    e.preventDefault();

    let http = new XMLHttpRequest;

    http.onreadystatechange = function(){
        if(http.readyState === 4 && http.status === 200) {
            // alert(http.responseText);
            return http.response;
        }
    }

    http.open('POST','dbConfig/registration.php', true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send("Fname="+fname+"&Lname="+lname+"&regNumber="+regNumber+"&faculty="+faculty+"&username="+username+"&password="+password);
});
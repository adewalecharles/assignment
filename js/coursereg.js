const ajax = new XMLHttpRequest();
let course_reg = document.forms["course_reg_form"];
let courses = course_reg.children;

console.log(course_reg.children);
course_reg.addEventListener("submit", (e) => {
    e.preventDefault();

    ajax.open('post', '../dbConfig/coursereg.php', true);
ajax.onreadystatechange = () => {
    if(ajax.readyState === 4 && ajax.status === 200){
        alert("Succesfully registered");
    }
};
ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
ajax.send("course1="+courses[0].value+"&course2="+courses[1].value+"&course3="+courses[2].value+"&course4="+courses[3].value+"&course5="+courses[4].value+"&course6="+courses[5].value+"&course7="+courses[6].value+"&course8="+courses[7].value+"&course9="+courses[8].value+"&course10="+courses[9].value);
});

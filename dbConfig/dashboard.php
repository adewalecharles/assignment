<?php
session_start();




$Fname = $_SESSION["Fname"];
$Lname = $_SESSION["Lname"];
$id = $_SESSION["id"];
$school = $_SESSION["faculty"];
$username = $_SESSION["username"];
$email = $_SESSION["email"];
$type = $_SESSION["type"];

// include('upload.php');




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Dashboard | Set up your Profile</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<style>
.container{
    overflow: hidden;
    font-family: arial;
    width: 100%;
    margin-top: 20px;
    margin-bottom: 15px;
}
.ass{
    background-color: white;
}
.post_id{
    border: 2px solid #888;
    color: black;
}
#posts{
    color: green;
}
</style>
<body>

<header>
    
    <img src="../img/Laspo.jpg" alt="">
    <div id="detail"><?php echo"@$username" ?></div>
    
    <div id="profile_picture">
        <form id="profile_photo_form" action="profile-photo.php" method="post" enctype="multipart/form-data">
            <input type="file" name="profile_photo" id="profile_photo" />
            <label for="profile_photo" id="profile_photo_label" name="profile_photo_label"> select photo </label>
            <input type="submit" value="submit" name="profile_photo_submit" id="profile_photo_submit">
        </form>
    </div>

    <div id="user_details">
        <h2> Details</h2>
        <table>
            <tr>
                <td class="detail_item">Name</td>
                <td class="detail_input"><?php echo "$Fname $Lname"?></td>
            </tr>
            <tr>
                <td class="detail_item">Faculty</td>
                <td class="detail_input"><?php echo $school ?></td>
            </tr>
            <tr>
                <td class="detail_item">Email</td>
                <td class="detail_input"><?php echo $email ?></td>
            </tr>
            <tr>
                <td class="detail_item">id</td>
                <td class="detail_input"><?php echo $id ?></td>
            </tr>
        </table>

        <a href="editProfile.php">
        <button id="edit_button">
            edit profile
        </button>
        </a>

        <a href="coursereg.php">
            <button id="edit_button">
                Register courses
            </button>
        </a>
    </div>
    

    
</header>
    
<section id="submit_assignment">

    <div class="assignment_form">
        <button class="file" id="upload_button">+</button>
        <form id="assignment_form" class="assignment_form">
            <input  id="assignment_input" type="text" placeholder="Enter message here...">
            <input type="submit" value="submit" name="text_submit">
        </form>
    </div>


    <article id="post">
    </article>

<div id="upload_div">
    <button id="hide_button">close</button>
    <form id="upload_form" action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <label for="file" id="file_icon" name="filelabel"> select file </label>
        <input type="submit" value="submit" name="submit" id="submit">

        <div class="bar" id="bar">
            <span class="bar-fill" id="pb">
            </span>
        </div>
    </form>
</div>

    <div class="container">
    <div class="ass">
    <?php
     include ('db.php');
    $sql = " select * from assignment ";
    $prep = $conn ->prepare($sql);
    $prep->execute();

    $result = $prep ->fetchAll(PDO::FETCH_OBJ);
    $ib = '';
    foreach($result as $row){
        // if($row->lecturerName === $_SESSION["username"]){
            $ib .= '<div class="post_id">' 
            . '<div>' . '<span id="posts"> Topic: '  . $row->topic . '</span><br><br>'. '<span> Description: ' . $row->post_body . '</span><br><br>'. '<span> Mark: ' . $row->mark . '</span><br><br>'. '<span> Posted On: ' . $row->post_date . '</span><br>'.'<input type="submit" name="solve" value="Solve">'. '</div>'
            . '</div>';
        // }
    }

    echo ( $ib );
?>
    </div>
    </div>

</section>

<aside>
    <h2 class="Reg_student">Assignments</h2>

    <div id="sub">
    <?php

    require 'db.php';
    $sql = " select * from lecturer_upload ";
    $prep = $conn ->prepare($sql);
    $prep->execute();

    $result = $prep ->fetchAll(PDO::FETCH_OBJ);
    

    $lect_sql = "select * from lecturer_coursereg";
    $lect_prep = $conn->prepare($lect_sql);
    $lect_prep->execute();

    $lect_result = $lect_prep->fetchAll(PDO::FETCH_OBJ);

    $std_sql = " select * from coursereg";
    $std_prep = $conn->prepare($std_sql);
    $std_prep->execute();

    $std_result = $std_prep->fetchAll(PDO::FETCH_OBJ);

    $ib = '';

    foreach($result as $row){
        foreach($lect_result as $lect_row){
            if($lect_row->lecturerName === $row->lecturerName){
                foreach($std_result as $std_row){
                    if($std_row->studentName === $_SESSION["username"]){
                        if( ($lect_row->course1 == $std_row->course1 || $std_row->course2 || $std_row->course3 || $std_row->course4 || $std_row->course5 || $std_row->course6 || $std_row->course7 || $std_row->course8 || $std_row->course9 || $std_row->course10) || ($lect_row->course2 == $std_row->course1 || $std_row->course2 || $std_row->course3 || $std_row->course4 || $std_row->course5 || $std_row->course6 || $std_row->course7 || $std_row->course8 || $std_row->course9 || $std_row->course10) || ($lect_row->course3 == $std_row->course1 || $std_row->course2 || $std_row->course3 || $std_row->course4 || $std_row->course5 || $std_row->course6 || $std_row->course7 || $std_row->course8 || $std_row->course9 || $std_row->course10) || ($lect_row->course4 == $std_row->course1 || $std_row->course2 || $std_row->course3 || $std_row->course4 || $std_row->course5 || $std_row->course6 || $std_row->course7 || $std_row->course8 || $std_row->course9 || $std_row->course10) ){
                            $ib .= '<div class="oubx">' 
                        . '<a href="'.$row->file_path.'" id="student_name_file" target="blank">' . $row->file_name. '</a>'
                        . '</div>';
                        }
                    }
                }
            }         
        }    
    }

            
    echo ( $ib );
    ?>
    </div>

    <h2 id="Sub_assignment">Deadlines</h2>
    <div id="sub">
    <?php
    // require 'db.php';
    $sql = " select * from deadline ";
    $prep = $conn ->prepare($sql);
    $prep->execute();

    $result = $prep ->fetchAll(PDO::FETCH_OBJ);
    $ib = '';
    foreach($result as $row){
        // if($row->lecturerName === $_SESSION["username"]){
            $ib .= '<div class="deadline_name">' 
            . '<div>' . '<span id="deadline_lec">' . $row->lecturerName . '</span>' . '<span>' . $row->date . '</span>' . '</div>'
            . '</div>';
        // }
    }

    echo ( $ib );
?>
        
        
    </div>

    <h2 id="Sub_assignment">Submitted Assignment</h2>

    
    <div id="sub">
    <?php

    // require 'db.php';
    $sql = " select * from uploads ";
    $prep = $conn ->prepare($sql);
    $prep->execute();

    $result = $prep ->fetchAll(PDO::FETCH_OBJ);
    $ib = '';
    foreach($result as $row){
        if($row->studentName === $_SESSION["username"]){
            $ib .= '<div class="oubx">' 
            . '<a href="'.$row->file_path.'" id="student_name" target="blank">' . $row->file_name . '</a>'
            . '</div>';
        }
    }

    echo ( $ib );
    ?>

</div>

    <a href="logout.php">
        <button id="logout">logout</button>
    </a>
</aside>


<script src="../js/dashboard.js"></script>
</body>
</html>
<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['user_id'] )){
  header('location:index.php');
}
else{
if(isset($_POST['submit'])){
    $Pname = $_POST['Portfolio_title'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $picture = $_FILES['picture'];
    $picture_name = $picture['name'];
    $picture_tmp_name = $picture['tmp_name'];
    $picture_type = $picture['type'];
    $picture_size = $picture['size'];
    $address = $_POST['address'];
    $linkedin=$_POST['linkedin'];
    $github=$_POST['github'];
    $about=$_POST['about'];
    $template = $_POST['template'];
    $skill1=$_POST['skill1'];
    $skill2=$_POST['skill2'];
    $skill3=$_POST['skill3'];
    $service1=$_POST['service1'];
    $s1des=$_POST['service1_description'];
    $service2=$_POST['service2'];
    $s2des=$_POST['service2_description'];
    $service3=$_POST['service3'];
    $s3des=$_POST['service3_description'];
    $t1=$_POST['ts1'];
    $t1percen=$_POST['ts1%'];
    $t2=$_POST['ts2'];
    $t2percen=$_POST['ts2%'];
    $t3=$_POST['ts3'];
    $t3percen=$_POST['ts3%'];
    $t4=$_POST['ts4'];
    $t4percen=$_POST['ts4%'];
    $t5=$_POST['ts5'];
    $t5percen=$_POST['ts5%'];
    $t6=$_POST['ts6'];
    $t6percen=$_POST['ts6%'];
    $_SESSION['Portfolio_title']= $Pname ;
    $_SESSION['name']=$name ;
    $_SESSION['email']=$email;   
    $_SESSION['phone']=$phone;
    $_SESSION['picture']=$picture;
    $_SESSION['pname']=$picture_name ;
    $_SESSION['tmp_name']=$picture_tmp_name;
    $_SESSION['type']=$picture_type ;
    $_SESSION['size']=$picture_size;
    $_SESSION['address']=$address;
    $_SESSION['linkedin']=$linkedin ;
    $_SESSION['github']=$github;
    $_SESSION['about']=$about  ;
    $_SESSION['template']=$template;
    $_SESSION['skill1']=$skill1   ;
    $_SESSION['skill2']=$skill2 ;
    $_SESSION['skill3']=$skill3      ;
    $_SESSION['service1']=$service1 ;
    $_SESSION['service1_description']=$s1des ;
    $_SESSION['service2']=$service2 ;
    $_SESSION['service2_description']=$s2des ;
    $_SESSION['service3']=$service3 ;
    $_SESSION['service3_description']=$s3des ;
    $_SESSION['ts1']=$t1;
    $_SESSION['ts1%']=$t1percen;
    $_SESSION['ts2']=$t2;
    $_SESSION['ts2%']=$t2percen;
    $_SESSION['ts3']=$t3;
    $_SESSION['ts3%']=$t3percen;
    $_SESSION['ts4']=$t4;
    $_SESSION['ts4%']=$t4percen;
    $_SESSION['ts5']=$t5;
    $_SESSION['ts5%']=$t5percen;
    $_SESSION['ts6']=$t6;
    $_SESSION['ts6%']=$t6percen;



$resume = $_FILES['resume'];
$resume_name = $resume['name'];
$resume_tmp_name = $resume['tmp_name'];
$resume_type = $resume['type'];
$resume_size = $resume['size'];
// Move uploaded resume to permanent location
$resume_target_dir = 'images/';
$resume_target_file = $resume_target_dir . basename($resume_name);
if(move_uploaded_file($resume_tmp_name, $resume_target_file)) {
  // Resume file uploaded successfully
}
else{
    switch ($_FILES['picture']['error']) {
        case UPLOAD_ERR_OK:
            // No error, file uploaded successfully
            break;
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            echo 'The uploaded file exceeds the maximum allowed size.';
            break;
        case UPLOAD_ERR_PARTIAL:
            echo 'The uploaded file was only partially uploaded.';
            break;
        case UPLOAD_ERR_NO_FILE:
            echo 'No file was uploaded.';
            break;
        case UPLOAD_ERR_NO_TMP_DIR:
            echo 'Missing a temporary folder.';
            break;
        case UPLOAD_ERR_CANT_WRITE:
            echo 'Failed to write file to disk.';
            break;
        case UPLOAD_ERR_EXTENSION:
            echo 'A PHP extension stopped the file upload.';
            break;
        default:
            echo 'Unknown error occurred.';
            break;
    }

}
// Move uploaded image to permanent location
$target_dir = 'images/';
$target_file = $target_dir . basename($picture_name);
move_uploaded_file($picture_tmp_name, $target_file);
$_SESSION['resume_target_file']= $resume_target_file; 
$_SESSION['target_file']=$target_file ;
header('location:generate_portfolio.php');
};
};
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portfolio Generator</title>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css"
  integrity="sha512-TvJg2ZLzccZVixEwe+1nw50/f1geJ5LnXy5IZReCG5a5TFYU6+jZU6L4VCJj4awL4m/nQymCfiXcMVHThBoS1Q=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  header {
    align-items: center;
    text-align: center;
    padding: 0px 0px 20px 0px;
    height: 80px;
  }

  header h1 {
    font-size: 50px;
    font-weight: 500;
    position: relative;
    color: #ffffff;
  }

  .main {
    height: 100%;
    width: 100%;


    padding: 20px 20px;
    border-radius: 5px;
    display: flex;

    flex-direction: row;


  }

  body {
    background-color: black;

    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;



  }

  .box1 {
    background-color: #14bdeb;
    width: 33%;
    display: flex;

    flex-direction: column;
    padding: 20px;

    margin: 5px 0 5px 0;
  }

  .filed1 {

    display: flex;
    flex-direction: column;
    margin: 5px 0px 5px 0px;


  }

  .box3 {
    width: 33%;
    display: flex;
    background-color: #14bdeb;

    flex-direction: column;
    padding: 20px;

    margin: 5px 0 5px 0;
  }

  .box2 {
    background-color: #14bdeb;
    width: 33%;
    display: flex;


    flex-direction: column;
    padding: 20px;

    margin: 5px 0 5px 0;
  }

  label {
    font-size: 18px;
    display: block;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-weight: 500;

    margin-bottom: 5px;
    text-align: left;
  }

  .main .box1 .filed1 input {
    height: 30px;
    width: 100%;
    outline: none;
    font-size: 16px;
    border-radius: 5px;
    border-bottom-width: 2px;
  }

  .main .box2 .filed1 input {
    height: 30px;
    width: 100%;
    outline: none;
    font-size: 16px;
    border-radius: 5px;
    border-bottom-width: 2px;

  }

  .main .box3 .filed1 input {
    height: 30px;
    width: 100%;
    outline: none;
    font-size: 16px;
    border-radius: 5px;
    border-bottom-width: 2px;

  }

  .filed2 {
    margin: 5px;
    height: 15px;
  }

  .filed2 button {
    height: 40px;
    padding: 5px;
    color: white;
    font-size: 15px;
    background-color: rgb(41, 25, 221);
  }

  @media screen and (max-width: 568px) {

    .main {

      width: 100%;

      padding: 20px 20px;
      border-radius: 5px;

      align-items: center;

      flex-direction: column;


    }

    .box1 {
      background-color: #14bdeb;
      width: 100%;
      display: flex;

      flex-direction: column;
      padding: 20px;

      margin: 5px 0 5px 0;
    }

    .box2 {
      background-color: #14bdeb;
      width: 100%;
      display: flex;

      flex-direction: column;
      padding: 20px;

      margin: 5px 0 5px 0;
    }

    .box3 {
      background-color: #14bdeb;
      width: 100%;
      display: flex;

      flex-direction: column;
      padding: 20px;

      margin: 5px 0 5px 0;
    }

    header h1 {
      font-size: 40px;
      font-weight: 500;
      position: relative;
      color: #110e0e;
    }


  }
</style>


</head>

<body>


  <form method="post" action="" enctype="multipart/form-data" class="row g-3">
    <header>
      <h1>Portfolio Generator</h1>
    </header>
    <div class="main">

      <div class="box1">

        <div class="filed1">
          <label for="name" class="form-label">Portfolio Title:</label>
          <input type="text" name="Portfolio_title" id="Portfolio_title" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="name" class="form-label">Name:</label>
          <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="email" class="form-label">Email:</label>
          <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="email" class="form-label">phone:</label>
          <input type="tel" name="phone" id="phone" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="picture" class="form-label">Picture:</label>
          <input type="file" name="picture" id="picture" class="form-control" accept="image/*" required>
        </div>
        <div class="filed1">
          <label for="address" class="form-label">Address:</label>
          <input type="text" name="address" id="address" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="linkedin" class="form-label">LinkedIn Profile:</label>
          <input type="text" name="linkedin" id="linkedin" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="github" class="form-label">GitHub Profile:</label>
          <input type="text" name="github" id="github" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="about" class="form-label">About Me:</label>
          <textarea name="about" id="about" class="form-control" required></textarea>
        </div>
        <div class="filed1">
          <label for="resume" class="form-label">Upload Resume:</label>
          <input type="file" name="resume" id="resume" class="form-control" accept="application/pdf" required>
        </div>
        <div class="filed1">
          <label for="template" class="form-label">Choose Template:</label>
          <select name="template" id="template" class="form-select" required>
            <option value="">Select a template</option>
            <option value="template1">Template 1</option>
            <option value="template2">Template 2</option>
            <option value="template3">Template 3</option>
            <option value="template4">Template 4</option>
          </select>
        </div>
      </div>
      <div class="box2">

        <div class="filed1">
          <label for="skill1" class="form-label">Skill 1:</label>
          <input type="text" name="skill1" id="skill1" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="skill2" class="form-label">Skill 2:</label>
          <input type="text" name="skill2" id="skill2" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="skill3" class="form-label">Skill 3:</label>
          <input type="text" name="skill3" id="skill3" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="service1" class="form-label">Service 1:</label>
          <input type="text" name="service1" id="service1" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="service1_description" class="form-label">Service 1 Description:</label>
          <input type="text" name="service1_description" id="service1_description" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="service2" class="form-label">Service 2:</label>
          <input type="text" name="service2" id="service2" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="service2_description" class="form-label">Service 2 Description:</label>
          <input type="text" name="service2_description" id="service2_description" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="service3" class="form-label">Service 3:</label>
          <input type="text" name="service3" id="service3" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="service3_description" class="form-label">Service 3 Description:</label>
          <input type="text" name="service3_description" id="service3_description" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="ts1" class="form-label">Technical Skill 1:</label>
          <input type="text" name="ts1" id="ts1" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="ts1%" class="form-label">Percentage:</label>
          <input type="text" name="ts1%" id="ts1%" class="form-control" required>
        </div>
      </div>
      <div class="box3">
        <div class="filed1">
          <label for="ts2" class="form-label">Technical Skill 2:</label>
          <input type="text" name="ts2" id="ts2" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="ts2%" class="form-label">Percentage:</label>
          <input type="text" name="ts2%" id="ts2%" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="ts3" class="form-label">Technical Skill 3:</label>
          <input type="text" name="ts3" id="ts3" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="ts3%" class="form-label">Percentage:</label>
          <input type="text" name="ts3%" id="ts3%" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="ts4" class="form-label">Technical Skill 4:</label>
          <input type="text" name="ts4" id="ts4" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="ts4%" class="form-label">Percentage:</label>
          <input type="text" name="ts4%" id="ts4%" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="ts5" class="form-label">Technical Skill 5:</label>
          <input type="text" name="ts5" id="ts5" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="ts5%" class="form-label"> Percentage:</label>
          <input type="text" name="ts5%" id="ts5%" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="ts6" class="form-label">Technical Skill 6:</label>
          <input type="text" name="ts6" id="ts6" class="form-control" required>
        </div>
        <div class="filed1">
          <label for="ts6%" class="form-label"> Percentage:</label>
          <input type="text" name="ts6%" id="ts6%" class="form-control" required>
        </div>
        <div class="filed2">
          <button type="submit" name="submit"class="btn btn-primary">Generate Portfolio</button>
        </div>
  </form>
  </div>

  </div>
  </div>
</body>

</html>
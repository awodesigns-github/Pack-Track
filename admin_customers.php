<?php 
    session_start();
    include('STRUCTURES/header_admin.php');
?>  
    <div class="container-form">
        <form action="" enctype="multipart/form-data" method="post">
            <Legend><h1>User registration</h1></Legend> 
            <div class="names">
                <label for="firstName"><h2>First name</h2></label>
                <input type="text" name="firstName" id="fname">
                <label for="lastName"><h2>Last Name</h2></label>
                <input type="text" name="lastName" id="lname">
                <input type="number" name="userId" id="userID" hidden>
            </div>
            <div class="password">
                <label for="password"><h2>Password</h2></label>
                <input type="password" name="pwd" id="pwd">
                <label for="password2"><h2>Confirm passsword</h2></label>
                <input type="password" name="pwd2" id="pwd2">
            </div>
            <div class="contacts">
                <label for="mobile"><h2>Mobile phone Number</h2></label>
                <input type="text" name="telephone" id="tel" placeholder="starting with 0">
                <label for="email"><h2>Email</h2></label>
                <input type="text" name="email" id="email">
                <input type="file" name="imagefile" id="ifile">
            </div>
            <div class="submit-btn">
                <button type="submit" name="submit"><h3>Add user!</h3></button>
            </div>
        </form>
    </div>
    <div>
        <h1>Customer deletion</h1>
    </div>
    <!--validation of the form with php-->
    <?php
        if(isset($_POST['submit'])){
            //capturing form values
            $userid = $_POST['userId'];
            $fname = $_POST['firstName'];
            $lname = $_POST['lastName'];
            $pwd = $_POST['pwd'];
            $pwd2 = $_POST['pwd2'];
            $mobile = $_POST['telephone'];
            $email = $_POST['email'];
            $role = "normal";
            
            //image variables
            $imageFile = $_FILES['imagefile'];
            $imageFile_name = $_FILES['imagefile']['name'];
            $imageFile_size = $_FILES['imagefile']['size'];
            $imagefile_temp = $_FILES['imagefile']['tmp_name'];
            $imagefile_type = $_FILES['imagefile']['type'];

            //extract the extension
            $fileExt = explode('.', $imageFile_name);
            $fileExt = strtolower(end($fileExt));

            //allowed extensions types
            $allowed = array('jpeg','png','jpg');

            if(!empty($fname) && !empty($lname) && !empty($pwd) && !empty($pwd2) && !empty($mobile) && !empty($email) ){
                //password verification
                if ($pwd == $pwd2 && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    //connect to a database
                    if (in_array($fileExt, $allowed)) {

                        $link = new mysqli("127.0.0.1","root","","packtrack");

                        //check connection
                        if ($link -> connect_error) {
                            echo "failed connection to db";
                            exit();
                        } else {
                            $fileDestination = "uploads/";
                            $fileName = uniqid('', true).".".$fileExt;
                            $fileDestination = "uploads/".$fileName;
                            move_uploaded_file($imagefile_temp, $fileDestination);

                            //generate a unique id for each user
                            $e_id = uniqid($fname, true);
                            $userid = password_hash($e_id, PASSWORD_DEFAULT);
            
                            //prepare and bind statements
                            $query = $link->prepare("INSERT INTO users (user_id,first_name,sir_name,password,role,email,mobile_number,image_name) VALUES (?,?,?,?,?,?,?,?)");
                            $query->bind_param("ssssssis", $userid, $fname, $lname, $pwd, $role, $email, $mobile, $fileName);
                            
                            $result = $query->execute();
                            //redirect to home page...     
                            if ($result) {
                                header("location:admin_customers.php");
                                echo "<script>";
                                echo "alert('<h2>User added succesfully</h2>')";
                                echo "</script>";
                            }   
                        }
                    } else {
                        echo "image type is not allowed...";
                    }

                } else if($pwd_value === false){
                    echo "the passwords do not match ...";
                    return false;
                } else {
                    echo "email format is invalid ...";
                    header("location:admin_customers.php");
                    return false;
                }
            }else {
                echo "please fill in the whole form to continue";
                header("location:admin_customers.php");
                return false;
            }

            $query->close();
            $link->close();
        }
?>
<?php 
    include('STRUCTURES/footer_admin.php');
?>
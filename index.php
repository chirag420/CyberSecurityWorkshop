     
<?php
    $title = 'Index'; 

    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 

    $results = $crud->getSpecialties();

?>
 
<h1 class="text-center">NCI- Registration for CyberSecurity Workshop </h1>

    <form method="post" action="success.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <input required type="date" class="form-control" id="dob" name="dob">
        </div>
        <div class="form-group">
            <label for="specialty">Domain Expertise</label>
            <select class="form-control" id="specialty" name="specialty">
                <option value="1">Web Secure Programming</option>
                <option value="3">Ethical Hacking</option>
                <option value="4">Network Engineering</option>
                <option value="5">Cryptograpgy</option>
                <option value="6">Other</option>
            </select>
        </div>





        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="EmailHelp">
            <small id="EmailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="phone">Contact Number</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" >
            <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
        </div>
               
        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
    
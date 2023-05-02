<?php include 'header.php';?>
<?php include 'include.php';?>
<div>
    <?php 
        if(isset($_SESSION)){
            unset($_SESSION);
        }
        else{
            header('Location: isntWorking.php');
        };
    ?>
    <h2 class="oops">Check your inbox for a confirmation email</h2>
</div>
<?php include 'footer.php';?>
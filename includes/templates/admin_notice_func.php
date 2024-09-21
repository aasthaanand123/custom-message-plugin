
<div class="notice notice-info is-dismissible">
    <h3><?php echo $welcome_message; ?></h3>
    <div>Let's discover what we are going to do today!</div>
    <?php  
        if ($previous_login_time) {
            echo 'Your last login was on: ' . $previous_login_time;
        } else {
            echo 'This is your first login.';
        } 
    ?>
    <br>
    <br>
</div>
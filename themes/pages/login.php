<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    $r_email = $_POST['r_email']; // Retrieve email from the form
    $r_password = $_POST['r_pass'];

    if (!empty($r_email) && !empty($r_password)) {
        header("Location: /"); 
        exit();
    }
}


 get_header(); ?>

<section class="content__form register">
    <div class="container">
        <div class="content-block">
            <form class="form-with-answer" method="post" >
                <div class="content-title main-title-big">Logg Inn</div>
                <div class="form-block">
                    <div class="form-group">
                        <div class="label-wrapper required"><label htmlFor="r_email">E-post</label></div>
                        <div class="input-wrapper"><input type="email" id="r_email" name="r_email" /></div>
                    </div>
                    <div class="form-group">
                        <div class="label-wrapper required"><label htmlFor="r_pass">Passord</label></div>
                        <div class="input-wrapper"><input type="password" id="r_pass" name="r_pass" /></div>
                    </div>
                </div>
                <div class="submit-block">
                    <input type="submit" class="form-submit-btn main-button" style="text-align: center" value="Logg Inn" />
                </div>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>
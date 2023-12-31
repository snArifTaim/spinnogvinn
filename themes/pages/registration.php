<?php get_header(); ?>
<section class="content__form register">
    <div class="container" style="max-width: 1000px">
        <div class="content-block">
            <form class="form-with-answer" action="<?php echo get_url('/assets/reg-data.php') ?>" method="POST">
                <div class="content-title main-title-big">Registrerer</div>
                <div class="form-block">
                    <div class="form-group">
                        <div class="label-wrapper required"><label htmlFor="name">Navn</label></div>
                        <div class="input-wrapper"><input type="text" id="name" name="name" /></div>
                    </div>
                    <div class="form-group">
                        <div class="label-wrapper required"><label htmlFor="email">E-post</label></div>
                        <div class="input-wrapper"><input type="text" id="email" name="email" /></div>
                    </div>
                    <div class="form-group">
                        <div class="label-wrapper required"><label htmlFor="password">Passord</label></div>
                        <div class="input-wrapper"><input type="password" id="password" name="password"/></div>
                    </div>
                    <div class="form-group">
                        <div class="label-wrapper required"><label htmlFor="confirm_password">Bekreft passord</label></div>
                        <div class="input-wrapper"><input type="password" id="confirm_password" name="confirm_password" /></div>
                    </div>
                </div>
                <div class="submit-block"><input type="submit" class="form-submit-btn main-button" style="min-width: 25%; background:linear-gradient(82.33deg, #1e8385 31.03%, #27e4a0 113.12%)" /></div>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<?php get_header(); ?>

<div class="page-template-page-contact">
    <section class="content__form contact">
        <div class="container">
            <div class="content-block">
                <div class="content-title main-title-big">Kontakt</div>
                <form action="<?php echo get_url('/assets/contactus-data.php') ?>" method="POST">
                    <div class="form-block-wrapper">
                        <div class="form-block">
                            <div class="form-group">
                                <div class="label-wrapper required"><label for="name">Namn</label></div>
                                <div class="input-wrapper"><input type="text" id="name" name="name" /></div>
                            </div>
                            <div class="form-group">
                                <div class="label-wrapper required"><label for="email">Email</label></div>
                                <div class="input-wrapper"><input type="email" id="email" name="email" /></div>
                            </div>
                        </div>
                        <div class="form-block">
                            <div class="form-group">
                                <div class="label-wrapper required"><label htmlFor="massage">Meddelande</label></div>
                                <div class="input-wrapper"><textarea name="massage" id="massage" cols="30" rows="10"></textarea></div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-block"><input type="submit" class="form-submit-btn main-button" style="text-align: center" value="Skicka" /></div>
                </form>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
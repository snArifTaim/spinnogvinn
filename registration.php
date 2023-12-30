<?php include_once("./components/header.php"); ?>

<section class="content__form register">
    <div class="container" style="max-width: 1000px">
        <div class="content-block">
            <form class="form-with-answer">
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
                        <div class="input-wrapper"><input type="password" id="password" name="password" value={data.password} /></div>
                    </div>
                    <div class="form-group">
                        <div class="label-wrapper required"><label htmlFor="confirm_password">Bekreft passord</label></div>
                        <div class="input-wrapper"><input type="password" id="confirm_password" name="confirm_password" value={data.confirm_password} /></div>
                    </div>
                </div>
                <div class="submit-block"><input type="submit" class="form-submit-btn main-button" style="background: rgb(44 40 72); text-Align: center" /></div>
            </form>
        </div>
    </div>
</section>

<?php include_once("./components/footer.php"); ?>
<?php get_header(); ?>

<div class="wrapper-bg">
    <section class="games">
        <div class="container">
            <div class="games-block">
                <div class="games-card-list">
                    <?php
                    $datas =  get_all_datas();

                    foreach ($datas as $data) {
                    ?>
                            <div class="game-card">
                                <div class="game-card-wrapper">
                                    <a href="<?php echo get_url('/') ?>view/<?php echo $data['slug']; ?>" class="image-wrapper">
                                        <div class="image">
                                            <img class=" ls-is-cached lazyloaded" src="<?php echo $data['img']; ?>" alt="game-image" />
                                            <div class="card-bg"></div>
                                        </div>
                                    </a>
                                    <div class="info-wrapper">
                                        <div class="title-wrapper">
                                            <div class="title"><?php echo $data['title']; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                    }
                    ?>

                </div>
                <div class="games-title games-title-bottom">
                    <div class="name">Like morsomt, men helt gratis</div>
                    <div class="games-description main-description-medium">Spillene vi tilbyr er nøyaktig de samme som når du spiller for ekte penger. De har samme funksjoner og samme høye underholdningsverdi. I motsetning til hva mange tror, ​​er spenningen ikke avhengig av muligheten for å vinne og tape ekte penger. Våre
                        gratisspill passer deg som liker ideen om å spille morsomme svenske spill på nett og annet moro uten å måtte bekymre deg for å tape penger som kan være nødvendig for andre ting.</div>
                </div>
            </div>
        </div>
    </section>
</div>


<section class="hero" style="padding-bottom: 0;">
    <div class="container">
        <div class="hero-block">
            <div class="hero-title-wrapper">
                <div class="hero-title">Her finner du sosiale casinospill som er gratis</div>
                <div class="hero-description"><span style="font-weight: 400">Nå trenger du ikke betale for å spille på casino, og du behøver ikke å risikere å spille for mer enn du har råd til å tape. Vi har gratis casinospill som du kan spille helt risikofritt. Poenget vårt er at det er gøy å spille på spilleautomater, enten du satser ekte penger eller ikke. Hvis du er enig med oss ​​i det, så er gratis casino akkurat noe for deg.</span> &nbsp; <span style="font-weight: 400">Kvalitet er veldig viktig for oss, og spillene du finner her har vi valgt ut fordi vi liker dem. Spillutviklerne vi jobber med er blant de beste i verden. Det er underholdning på høyt nivå som gjelder når du velger vårt sosiale casino fremfor en side hvor det koster mye penger å spille.</span></div>
                <a href="/page/registration" class="main-button taimbroBTN"><span>Registrering</span></a>
            </div>
            <div class="hero-image-wrapper">
                <img class=" ls-is-cached lazyloaded" src="<?php echo get_url('/assets/img/hero-image.png') ?>" alt="hero-image" />
            </div>
        </div>
    </div>
</section>

<section class="content hero">
    <div class="container">
        <div class="content-block">
            <div class="wrapper">
                <div>
                    <div class="content-title">Sosiale casinospill som ikke koster penger</div>
                    <div class="content-subtitle"><span style="font-weight: 400">Vi tilbyr et stort utvalg av de mest spennende casinospillene på markedet helt gratis! Med det mener vi ikke bare at det er gratis å opprette en konto og bli medlem hos oss, men at du kan spille på for eksempel spilleautomater uten å satse penger på hvert spinn. Du kan derfor ta del i helt gratis casinospill uten risiko. Det er ikke enklere eller kjedeligere spill det handler om i forhold til når du betaler for å spille. Hos oss finner du nøyaktig de samme spillene, fra de ledende produsentene, som på casinoer hvor planen er at du skal gamble bort pengene dine.</span></div>
                </div>
                <img class=" ls-is-cached lazyloaded" src="<?php echo get_url('/assets/img/slot.png') ?>" alt="" />
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
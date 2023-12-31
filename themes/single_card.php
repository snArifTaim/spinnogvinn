<?php
get_header();


?>

<div class="game-template-default">
    <section class="page__content">
        <div class="container">
            <div class="single-game-container">
                <div class="page__content-title">
                    <div class="game-info">
                        <div class="game-title"><?php echo $myData['title']; ?></div>
                    </div>
                </div>
                <div class="page__content-wrapper">
                    <div class="page__content-main">
                        <h2> <?php echo $myData['subtitle']; ?></h2>
                        <p><?php echo $myData['desc']; ?></p>
                    </div>
                    <div class="page__content-window game-content-window">
                        <div class="game-window" data-src="<?php echo $myData['iframeSrc']; ?>">
                            <div class="game-background-image"><img class=" lazyloaded" src="<?php echo $myData['img']; ?>" alt="game-image"></div>
                            <button class="game-button main-button">Spill gratis</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="related-posts">
                <div class="related-posts-title main-title-medium">Kan hende du også liker</div>
                <div class="games-card-list">
                    <?php
                    $datas =  get_all_datas();
                    $counter = 0;

                    foreach ($datas as $data) {
                        if ($counter < 3) {
                    ?>
                            <a href="<?php echo get_url('/') ?>view/<?php echo $data['slug']; ?>" class="game-card ">
                                <div class="game-card-wrapper">
                                    <img class="game-card-image ls-is-cached lazyloaded" src="<?php echo $data['img']; ?>" alt="game-image">
                                    <div class="game-card-bottom">
                                        <div class="game-card-info"> <span class="game-card-title"><?php echo $data['title']; ?></span></div>
                                    </div>
                                </div>
                            </a>
                    <?php
                            $counter++;
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="content__form game" id="play-game">
        <div class="container">
            <div class="content-block">
                <div class="game-content">
                    <div class="game-close">
                        <button onclick="removeCls()" style="background: unset;">
                            <img class=" ls-is-cached lazyloaded" src="https://spinplaneten.com/wp-content/themes/sc-games-theme/assets/design-1/img/white-cross.svg" data-src="https://spinplaneten.com/wp-content/themes/sc-games-theme/assets/design-1/img/white-cross.svg" alt="close-btn">
                        </button>
                    </div>
                    <iframe class="game-frame" src="<?php echo $myData['iframeSrc']; ?>"></iframe>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("include/head.php"); ?>
    <title>The Arcade | Your Truly Gaming Website</title>
</head>
<body>
    <?php include("include/header.php"); ?>
    <div id="body">
        <section class="carousel" id="c-1">
            <div class="carousel-gallery">
                <div class="carousel-content">
                    <div class="ctx"></div>
                </div>
            </div>
            <div class="carousel-navigation-wrapper">
                <div class="navigator left">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="selector">
                </div>
                <div class="navigator right">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
        </section>
        <section class="free normal blue" style="margin-bottom:-20px;padding-bottom:40px;">
            <div class="title">
                <h2>FEATURED TITLES</h2>
            </div>
            <div class="carousel-fallback">
                <a href="#" class="item">
                    <div class="img" style="background-image:url('img/games/vlr/Cover%20VLR.jpg');"></div>
                    <div class="title">Valorant</div>
                    <div class="genre"></div>
                    <div class="desc"><i class="fab fa-windows"></i></div>
                </a>
                <a href="#" class="item">
                    <div class="img" style="background-image:url('img/games/re/Cover%20RE.jpg');"></div>
                    <div class="title">Resident Evil Village</div>
                    <div class="genre"></div>
                    <div class="desc"><i class="fab fa-playstation"></i><i class="fab fa-xbox"></i><i class="fab fa-windows"></i></div>
                </a>
                <a href="#" class="item">
                    <div class="img" style="background-image:url('img/games/beatsaber/bscover.jpeg');"></div>
                    <div class="title">Beat Saber</div>
                    <div class="genre"></div>
                    <div class="desc"><i class="fab fa-windows"></i><i class="fab fa-apple"></i><i class="fab fa-linux"></i></div>
                </a>
            </div>
            <br>
            <div class="f-center">
                <button class="btn btn-fix btn-primary">EXPLORE</button>
            </div>
        </section>
        <section class="free dark-grey logo-anim mg">
            <img src="/img/logo-transparent.gif" alt="logo" />
            <p>Your Truly Gaming Website</p>
        </section>
        <section class="free red getmost mg">
            <div>
                <img src="/img/cross-console.webp" alt="cross-console" />
            </div>
            <div>
                <h2>Get the most of your Arcade experience, all available in one place!</h2>
                <button class="btn btn-fix btn-black">JOIN US</button>
            </div>
        </section>
    </div>
    <?php include("include/footer.php"); ?>
    <script>
        let c_data = [
            {
                "name":"Ascrod",
                "text":"Grand Theft Auto V",
                "img_url":"../img/games/gta/SS1%20GTA.jpg",
                "url":"#1"
            },
            {
                "name":"Ascrod2",
                "text":"Resident Evil Village",
                "img_url":"../img/games/re/SS1%20RE.jpg",
                "url":"#2"
            },
            {
                "name":"wicer",
                "text":"Valorant",
                "img_url":"../img/games/vlr/SS1%20VLR.jpg",
                "url":"#3"
            },
            {
                "name":"wicer",
                "text":"Beat Saber",
                "img_url":"../img/games/beatsaber/ssbs1.jpg",
                "url":"#3"
            },
            {
                "name":"wicer",
                "text":"Counter Strike: Global Offensive",
                "img_url":"../img/games/csgo/sscs1.jpg",
                "url":"#3"
            },
            {
                "name":"wicer",
                "text":"DOTA 2",
                "img_url":"../img/games/dota2/ssdota1.jpg",
                "url":"#3"
            }
        ]
        var cs1 = new Carousel('#c-1',c_data);
        cs1.option.per_page = 1; 
        cs1.option.autoplay = true;
        cs1.init();
    </script>
</body>
</html>
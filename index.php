<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("include/head.php"); ?>
    <title>The Arcade | Your Huge PP Game Library</title>
</head>
<body>
    <?php include("include/header.php"); ?>
    <div id="body">
        <section class="carousel" id="c-1">
            <div class="carousel-gallery">
                <div class="carousel-content"></div>
            </div>
            <div class="carousel-navigation-wrapper">
                <div class="navigator left">
                    <i class="chevron right"></i>
                </div>
                <div class="selector">
                    <div>
                        <p>Test</p>
                    </div>
                    <div>
                        <p>Test</p>
                    </div>
                    <div>
                        <p>Test</p>
                    </div>
                </div>
                <div class="navigator right">
                    <i class="chevron left"></i>
                </div>
            </div>
        </section>
        <section class="free normal blue" style="margin-bottom:-20px;padding-bottom:40px;">
            <div class="title">
                <h2>EXPLORE MORE GAMES</h2>
            </div>
            <div class="carousel-fallback">
                <div class="item">
                    <div class="img" style="background-image:url('https://media.makeameme.org/created/duar-terima-kasih.jpg');"></div>
                    <div class="title">Duar meme</div>
                    <div class="desc">Ini adalah ledakan</div>
                </div>
                <div class="item">
                    <div class="img" style="background-image:url('https://media.makeameme.org/created/duar-terima-kasih.jpg');"></div>
                    <div class="title">Duar meme</div>
                    <div class="desc">Ini adalah ledakan</div>
                </div>
                <div class="item">
                    <div class="img" style="background-image:url('https://media.makeameme.org/created/duar-terima-kasih.jpg');"></div>
                    <div class="title">Duar meme</div>
                    <div class="desc">Ini adalah ledakan</div>
                </div>
            </div>
            <div class="f-center">
                <button class="btn btn-fix btn-primary">HAHA</button>
            </div>
        </section>
        <section class="free dark-grey logo-anim mg">
            <img src="/img/logo-transparent.gif" alt="logo" />
            <p>Your Huge PP Game Library</p>
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
                "text":"Assasin's Creed Valhalla",
                "img_url":"https://www.nextlevelgaming.ca/wp-content/uploads/2020/05/assassins-creed-valhalla-generacionxbox-1.jpg",
                "url":"#1"
            },
            {
                "name":"Ascrod2",
                "text":"Assasin's Creed Origins",
                "img_url":"https://cdn.mos.cms.futurecdn.net/CjQ6M98b4UqdvNTTi5r4FT.jpg",
                "url":"#2"
            },
            
            {
                "name":"wicer",
                "text":"Witcher 3",
                "img_url":"https://media.skyegrid.id/wp-content/uploads/2019/07/The-Witcher-3.jpg",
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
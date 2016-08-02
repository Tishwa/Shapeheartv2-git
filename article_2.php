<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php'); ?>
</head>


<body>

    <!-- Navbar transparente sur le Header puis rouge ailleurs -->
    <?php include('navbar.php') ?>

    <!-- Header -->
    <header id="top">
        <div id="header-blog">
            <div id="background-header-blog">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 text-vertical-center intro-message">
                            <div id="article-header">
                                <h1>
                                <span class="english">Why we shouldnt talk about calories</span>
                                <span class="francais">Pourquoi on ne doit plus parler de calories</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="back-blog">
        <p id="back-blog">
            <a id="back-to-blog" href="blog.php">
            <span class="english">< Back to the blog </span>
            <span class="francais">< Retour au blog </span>
            </a>
        </p>
    </section>

    <section class="article">
        <div class="article-pleine-page">
            <div id="articles">
                <p class="date-article">
                    20/05/2016
                </p>
                <br>
                <span class="english">When it comes to sports, we often talk about calories, but do when really know what it is? Physically, it corresponds to an energy measurement. This measurement is truly specific and amounts to the energy necessary to increase by one degree a single gram of water. Thus said, when we burn 1 000 calories, this equals to increase by one degree 1000 grams of water, of 1 liter. <br /><br />But where does this energy come from? Where is she drawn in our body?During a physical effort, the human organism draws its energy from two sources: • Carbohydrates; glucose, or sugar, present mainly in the blood and muscle glycogen • Lipids; triglycerides present primarily in adipose tissueWhen we talk about calories, we do not distinguish calories from lipids and those from carbohydrates. Yet, the type of effort that is made will drastically change the way our body draws energy. <br /><img class="article_picture" src="img/bg.jpg" width="100%">According to heart rate, and thus according to the effort requiring of him, the body will draw the energy needed to operate either in carbohydrates or lipids. Carbohydrates are easier to mobilize during violent effort; our body will therefore mobilize them. During moderate effort, the body tends to pick up in the lipids. </span>
                <span class="francais">Lorsqu’on parle de sport, on parle souvent de calories, mais qu’est ce qu’une calorie ? Physiquement, cela correspond à une mesure d’énergie. Cette mesure est très concrète et équivaut à l’énergie nécessaire pour faire augmenter d’un degré un gramme d’eau. Quand on brûle 1000 calories cela équivaudrait donc à faire augmenter d’un degré 1000 grammes d’eau, soit 1 litre. Mais d’où vient cette énergie ? Où est elle puisée dans notre corps ? Où est elle puisée dans notre corps ? <br /><br />Lors d’un effort, l’organisme puise son énergie de deux sources : 1) les glucides ; le glucose, donc le sucre, présent dans le sang et dans le glycogène musculaire principalement, et 2) les lipides ; triglycérides présent dans les tissus adipeux principalement. Lorsqu’on parle de calorie, on ne distingue donc pas entre les calories provenant des lipides et celles provenant des glucides. Or le type d’effort que l’on fait va drastiquement changer la façon dont notre organisme va puiser l’énergie. Selon la fréquence cardiaque, et donc selon l’effort qui lui est demandé, l’organisme ira puiser l’énergie nécessaire à son fonctionnement dans les glucides ou dans les lipides. Les glucides étant plus faciles à mobiliser, lors d’effort violents, c’est eux que l’organisme ira mobiliser. <br /><img class="article_picture" src="img/bg.jpg" width="100%">Lors d’efforts modéré, l’organisme aura tendance à aller chercher dans les lipides. Des scientifiques ont observé que la courbe de consommation de lipides chute pour des efforts violents : l’organisme ne puise donc pas dans les graisses, mais ira puiser son énergie directement dans le glucide présent dans le sang et dans le glycogène musculaire jusqu’à épuisement (hypoglycémie). Un exemple simple que je rencontre souvent illustre parfaitement cette situation. J’ai plusieurs fois eu cette discussion à la salle où je pratique la boxe anglaise : perd on du poids lorsqu’on fait une séance ? La boxe est en effet un des sports qui permet de brûler le plus grand nombre de calories par heure. Néanmoins, ce n’est pas le bon sport pour perdre de la graisse. Lors des séances, l’organisme va littéralement vider tout le glucide présent dans le sang. <br /><br />Si la personne a mangé avant, elle a suffisamment de ressource pour tenir la séance. Sinon c’est l’hypoglycémie ou l’épuisement. Dans les deux cas, le taux de sucre dans le sang (la glycémie) est très faible et provoque la sensation de faim. On va donc manger pour combler ce manque. Résultat de la séance de boxe : on a vidé le sucre de notre sang, puis on l’a à nouveau rempli, sans jamais avoir puisé dans les graisses. La bonne façon de puiser dans les lipides est de faire un effort modéré (aux alentours de 50 à 65% de sa fréquence cardiaque maximum) pendant une durée supérieure à trente minutes.</span>
            </div>
            <div class="share-container">
                <div class="share">
                    <span class="english">Share</span>
                    <span class="francais">Partager</span>
                </div>
                <div class="share_separator"></div>
                <div class="share_logos">
                    <div class="share_logo_block">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.shapeheart.com/article/1">
                            <img class="share_logo" src="img/Facebook.png">
                        </a>
                        <a href="https://www.linkedin.com/cws/share?url=http://www.shapeheart.com/article/1">
                            <img class="share_logo" src="img/Linked_in.png">
                        </a>
                        <a href="https://twitter.com/share?url=http://www.shapeheart.com/article/1">
                            <img class="share_logo" src="img/Twitter.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include ("footer.php") ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
        // Closes the sidebar menu
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
        // Opens the sidebar menu
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
        // Scrolls to the selected menu item on the page
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });

        // #navbar appears with an animation
        // Pour modifier la vitesse :
        // jouer avec la valeur du setInterval et celle du Npos = Npos+x
        // Pour modifier la hauteur de laquelle ça bouge :
        // jouer avec le if (Npos== x) et le navbar.css
        var navbar = $('.overlay-nav');
        var Npos = 0;
        var Nopacity = 0;
        var Nrun = setInterval(animation, 80);
        function animation() {
            if (Npos == 60) {
                clearInterval(Nrun);
            }
            else {
                Npos = Npos+6;
                Nopacity = Nopacity + 0.1;
                navbar.css('top',-60+Npos+'px');
                navbar.css('opacity',Nopacity);
            }
        }

        // #navbar's opacity changes after scrolling
        var header = $('#header-blog'),
                headerHeight = header.height();

        var RondLanguage = $('.rond-language');

        var fadeStart=headerHeight/3 // 10px scroll or less will equiv to 0 opacity
                ,fadeUntil=headerHeight // 200px scroll or more will equiv to 1 opacity
                ,fading = $('#fading');

        $(window).bind('scroll', function(){
            var offset = $(document).scrollTop(),
                    opacity = 1,
                    langue = 1;
            if( offset<=fadeStart ){
                opacity = 0,
                        langue = 1;
            }
            else if( offset<=fadeUntil ){
                opacity = offset/fadeUntil;
                langue = 0;
            }
            else if (offset > fadeUntil) {
                opacity = 1;
                langue = 0;
            }
            fading.css('background','rgba(41,55,69,'+opacity+')')
            RondLanguage.css('background', 'rgba(252,15,38,' + langue + ')');
        });

        // Coeur change de taille quand on scroll, et toute la navbar remonte

        var fadeStartHeart=headerHeight/3, // 10px scroll or less will equiv to 100 height
                fadeUntilHeart=headerHeight/3, // 200px scroll or more will equiv to 1 opacity
                Heart = $('#heart'),
                HeartHeight = Heart.height();

        var MainNavRow = $('#main-nav-row');

        $(window).bind('scroll', function(){
            var offset = $(document).scrollTop(),
                    taille = HeartHeight;
            if(offset <= fadeStartHeart){
                taille = HeartHeight;
            }
            else if( offset>=fadeUntilHeart ){
                taille = 40;
            }
            Heart.css('height', taille + 'px');
            MainNavRow.css('margin-top', (taille-40) + 'px');
        });

        // #to-top button appears after scrolling
        var fixed = false;
        $(document).scroll(function() {
            if ($(this).scrollTop() > 250) {
                if (!fixed) {
                    fixed = true;
                    // $('#to-top').css({position:'fixed', display:'block'});
                    $('#to-top').show("slow", function() {
                        $('#to-top').css({
                            display: 'block'
                        });
                    });
                }
            } else {
                if (fixed) {
                    fixed = false;
                    $('#to-top').hide("slow", function() {
                        $('#to-top').css({
                            display: 'none'
                        });
                    });
                }
            }
        });


        // la fenêtre pop-in apparaît quand on scroll ou qu'on appuie sur "get yours" et disparaît quand on la ferme
        $(document).ready( function() {

            setTimeout(loadPopupBox, 3000);

            $('.close').click( function() {
                unloadPopupBox();
            });

            $('#pop-in').click(function() {
                loadPopupBox();
            });

            $('#runwith-btn').click(function() {
                loadPopupBox();
            });

            function unloadPopupBox() {    // TO Unload the Popupbox
                $('#mybox').fadeOut(1000);
            }

            function loadPopupBox() {    // To Load the Popupbox
                $('#mybox').fadeIn(1000);
            }
        });




        // JS pour faire un site bilingue
        // pompé sur thesitewizard.com
        var style_cookie_name = "language" ;
        var style_cookie_duration = 30 ;
        var style_domain = "www.shapeheart.com" ;

        // You do not need to customise anything below this line
        function switch_style ( css_title )
        {
            // You may use this script on your site free of charge provided
            // you do not remove this notice or the URL below. Script from
            // http://www.thesitewizard.com/javascripts/change-style-sheets.shtml
            var i, link_tag ;
            for (i = 0, link_tag = document.getElementsByTagName("link") ;
                 i < link_tag.length ; i++ ) {
                if ((link_tag[i].rel.indexOf( "stylesheet" ) != -1) &&
                        link_tag[i].title) {
                    link_tag[i].disabled = true ;
                    if (link_tag[i].title == css_title) {
                        link_tag[i].disabled = false ;
                    }
                }
                set_cookie( style_cookie_name, css_title,
                        style_cookie_duration, style_domain );
            }
        }
        function set_style_from_cookie()
        {
            var css_title = get_cookie( style_cookie_name );
            if (css_title.length) {
                switch_style( css_title );
            }
        }
        function set_cookie ( cookie_name, cookie_value,
                              lifespan_in_days, valid_domain )
        {
            // http://www.thesitewizard.com/javascripts/cookies.shtml
            var domain_string = valid_domain ?
                    ("; domain=" + valid_domain) : '' ;
            document.cookie = cookie_name +
                    "=" + encodeURIComponent( cookie_value ) +
                    "; max-age=" + 60 * 60 *
                    24 * lifespan_in_days +
                    "; path=/" + domain_string ;
        }
        function get_cookie ( cookie_name )
        {
            // http://www.thesitewizard.com/javascripts/cookies.shtml
            var cookie_string = document.cookie ;
            if (cookie_string.length != 0) {
                var cookie_value = cookie_string.match (
                        '(^|;)[\s]*' +
                        cookie_name +
                        '=([^;]*)' );
                return decodeURIComponent ( cookie_value[2] ) ;
            }
            return '' ;
        }

    </script>
</body>
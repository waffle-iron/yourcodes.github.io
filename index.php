<html>
    <head>
        <title>YourCodes</title>
        <meta charset="UTF-8">
        <meta name="description" content="opensource mind make opensource code">
        <meta name="keywords" content="yourcodes,opensource,software">
        <meta name="author" content="YourCodes">
        <link type="text/css" rel="stylesheet" href="flesh/style/index.css">
        <link type="text/css" rel="stylesheet" href="flesh/style/tile.css">
    </head>
    <body>
        <header>
            <?php include 'ajax/navBar.php';?>
        </header>
        <section>
            <div class="hContainer hero">
                <div class="overlay">
                    <h1>L'OpenSource è come la natura</h1>
                    <h1>Libero</h1>
                </div>
                <video class="cinegraph" loop autoplay poster="media/videoPoster.png"><source src="media/cinegraph.tablet.mp4" type="video/mp4">Your browser does not support the video tag</video>
            </div>
            <div class="hContainer mid_H_Container">
                <div class="tileContainer">
                    <div class="box25">
                        <img src="media/brainstorming.png">
                        <h1>Progetta</h1>
                    </div>
                    <div class="box25">
                        <img src="media/teamwork.png">
                        <h1>Collabora</h1>
                    </div>
                    <div class="box25">
                        <img src="/media/opensource.png">
                        <h1>Condividi</h1>
                    </div>
                    <div class="box25">
                        <img src="/media/missile.png">
                        <h1>Fatti conoscere</h1>
                    </div>
                </div>
            </div>
            <div class="hContainer">
	            <div style="height: 45%">
		            <h1 class="join_with_us">Unisciti e <span id="rotate"></span></h1>
	            </div>
                <div style="height: 20%; margin-left: auto; margin-right: auto; width: 30%;">
                    <hr style="width: calc(50% - 1.5em); float: left; line-height: 3em">
                    <h1 style="float: left">O</h1>
                    <hr style="width: calc(50% - 1.5em); float: left">
                </div>
                <div class="tileContainer" style="height: 45%">
                    <div class="box33">
                        <img src="media/FB-f-Logo__blue_144.png">
                        <h1>Facebook</h1>
                    </div>
                    <h1 class="box33">Contattaci</h1>
                    <div class="box33">
                        <img src="media/Twitter_Logo_White_On_Blue.png">
                        <h1>Twitter</h1>
                    </div>
                </div>
            </div>
        </section>
        <footer id="extensionView">
            <?php include 'ajax/sumInfo.php';?>
        </footer>
    </body>
    <script type="text/javascript" src="/bower_components/jQuery/dist/jquery.js"></script>
    <script type="text/javascript" src="flesh/js/index.js"></script>
</html>

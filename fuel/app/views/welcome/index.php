<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sweet - SUPINFO</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<?php echo Asset::css('bootstrap.css'); ?>
    <?php echo Asset::css('default.css'); ?>
    <?php echo Asset::js('jquery.js'); ?>
    <?php echo Asset::js('index.js'); ?>
</head>
<body>
	<div class="jumbotron">
		<div class="container">
            <div class="row">
                <div>
                    <div class="col-md-12">
                        <h1>Dynamiser vos présentations</h1>
                        <p>Sweet est une application propre et légère affichant de façon sobre et performante les tweets de votre choix.</p>
                    </div>
                    <div class="col-md-6">
                        <form id="hashtag" role="search">
                            <div class="">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="track" placeholder="<?php echo "#".$hashtag; ?>">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Envoyer</button>
                            </span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <a href="https://twitter.com/SUPINFO_Lyon">
                            <?php echo Asset::img('twitter-logo.png', array('alt' => 'Logo de Twitter', 'style' => 'max-height: 42px')); ?>
                        </a>
                    </div>
                </div>
            </div>
		</div>
    </div>
    <div class="tweet-wall">
        <div id="tweet1" class="col-md-4">
            <h1>First tweet</h1>
        </div>
        <div id="tweet2" class="col-md-4">
            <h1>Second tweet</h1>
        </div>
        <div id="tweet3" class="col-md-4">
            <h1>Third tweet</h1>
        </div>
    </div>
</body>
</html>

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
    <div class="presentation">
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
                                <?php echo Asset::img('twitter-logo.png', array('class' => 'hidden-sm hidden-xs', 'alt' => 'Logo de Twitter', 'style' => 'max-height: 42px')); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="examples" class="container">
            <div id="example1" class="col-md-6">
                <?php echo Asset::img('example1.png', array('alt' => 'Exemple n°1', 'style' => 'max-height: 402px')); ?>
            </div>
            <div id="example2" class="col-md-6">
                <h2>Afficher les tweets en live !</h2>
                <p>
                    Avec Sweet vous dynamiserez vos présentations grâce à un flux continue de tweets.<br>
                    En effet cette méthode est devenue courrante et presque incontournable lorsqu'il s'agit de présentations importantes et publiques.<br>
                    N'hésitez plus, lancez vous !
                </p>
                <ul>
                    <li>Choisissez le <em>#hashtag</em> de votre choix.</li>
                    <li>Remplissez le formulaire ci-dessus.</li>
                    <li>Envoyez et laissez l'application faire le reste.</li>
                </ul>
                <h2>L'initiative des étudiants</h2>
                <p>
                    Sweet a été developpé par le laboratoire Web&Dev du campus Lyon de SUPINFO.<br>
                    Ce laboratoire est une lieu de rencontre et de partage où les étudiants travaillent en équipe sur différents projets d'envergures variées.<br>
                    En effet, ses membres, passionnés et motivés développent et forgent leur expérience par le biais de ces projets ainsi que par leurs stages.<br>
                    Pour tout renseignement, vous pouvez consultez le site du labo web: <a href="http://www.labo-web.com/">http://www.labo-web.com/</a>
                </p>
            </div>
        </div>
    </div>
    <div id="tweets-wall">
        <?php echo Asset::img('plane-right.png', array('class' => 'plane', 'alt' => 'Avion', 'style' => 'max-height: 100px')); ?>
    </div>
</body>
</html>

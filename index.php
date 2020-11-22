<?php
   if(isset($_GET['accepte-cookie'])){
       setcookie('accepte-cookie','true',time() + 365*24*3600);
       header('Location:./');
   }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wazox E-Sport</title>
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
        <!-- CSS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
        <link href = "https://fonts.googleapis.com/css2?family=Anton" rel="stylesheet">
        <link rel="stylesheet" href="public/css/base.css">
        <link rel="stylesheet" href="public/css/header.css">
        <link rel="stylesheet" href="public/css/articles.css">
    </head>
    <body>

    <div class="header">
        <div class="header__texture"></div>
        <div class="header__mask">
            <svg width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 L 0 0 C 25 100 75 100 100 0 L 100 100" fill="#fff"></path>
            </svg>
        </div>
        <div class="container">
            <div class="header__navbar">
                <div class="header__navbar--logo">
                    <h1 class="header__navbar--logo-title">Wazox E-Sport</h1>
                </div>
                <div class="header__navbar--menu">
                    <a href="" class="header__navbar--menu-link"><i class="fas fa-home"></i> Acceuil</a>
                    <a href="" class="header__navbar--menu-link"><i class="fas fa-newspaper"></i> Actualité</a>
                    <a href= "https://wazoxe-sport.github.io/GTTCGVJNKFCGUIH/" class="header__navbar--menu-link"><i class="fas fa-sign-in-alt"></i> Connexion</a>
                    <a href="file:///C:/Users/samuel%20solari/Documents/mon%20site/site%20wazox/inscription.html" class="header__navbar--menu-link"><i class="fas fa-user-plus"></i> Inscription</a>
                </div>
                <div class="header__navbar-toggle">
                    <span class="header__navbar-toggle-icons"></span>
                </div>
            </div>
            <div class="header__slogan">
                <h1 class="h__slogan--title">Wazox pour la vie</h1>
                <a href="" class="btn" id="open_modal">Contactez-nous</a>
            </div>
        </div>
    </div>

    <div class="articles">
        <div class="container">
            <h2 class="articles__title">Information</h2>
            <div class="articles__items">
                <div herf="file:///C:/Users/samuel%20solari/Documents/mon%20site/site%20wazox/article1.html?" class="article" style="background: url('');background-size: cover;">
                   <div class="article__filter"></div>
                   <div class="article__name">Notre Equipe</div>
                   <div class="article__icon"><i class="fas fa-play"></i></div>
                </div>
                <div class="article">
                    <div class="article__filter"></div>
                    <div class="article__name">Notre Boutique</div>
                    <div class="article__icon"><i class="fas fa-play"></i></div>
                </div>
                <div class="article">
                    <div class="article__filter"></div>
                    <div class="article__name">L'Actualité</div>
                    <div class="article__icon"><i class="fas fa-play"></i></div>
                </div>
            </div>
        </div>
    </div>

     <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="public/css/img/js/app.js"></script>

    <!-- meta SEO -->
    <meta name="description" content="La description du site ! PRIMORDIAL : mettre de bons mots clés">
    <meta name="keywords" content="webdesign, webdeveloppeur, wazox, webwazox">
    <!-- meta SEO -->

    <!-- Contact -->
    <div class="block">
        <footer class="footer">
            <h2 class="heading-site">Contactez-nous</h2>
            <div class="footer-contact-form">
                <form>
                    <div class="field">
                        <label class="label">Votre nom</label>
                        <div class="control">
                          <input id="name" class="input" type="text" placeholder="e.g Alex Smith" name="name">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Votre prénom</label>
                        <div class="control">
                          <input id="firstname" class="input" type="text" placeholder="e.g Alex Smith" name="firstname">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Votre email</label>
                        <div class="control">
                          <input id="email" class="input" type="text" placeholder="e.g Alex Smith" name="email">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Votre message</label>
                        <div class="control">
                          <textarea id="message" class="textarea" placeholder="Explain how we can help you" name="message"></textarea>
                        </div>
                    </div>
                </form>
                <button class="button is-link" id="send_email">Envoyer</button>
            </div>
            <div class="footer-informations">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                    <a href="https://www.youtube.com/channel/UClWXgoSNJonqZca67hdl3gg">
                        <i class="fab fa-youtube"></i>
                    </a>
                    </li>
                    <li>
                    <a href="https://discord.gg/Q9s48Ut">
                        <i class="fab fa-discord"></i>
                    </a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
    <!-- Contact -->

   </body>

<?php
    if(!isset($_COOKIE['accepte-cookie'])){
?>
<div class="banniere">
       <div class="text-banniere">
           <p>Nous utilisons des cookies pour vous offrir une meilleure expérience de navigation. En naviguant sur ce site, vous acceptez notre utilisation des cookies.</p>
       </div>
       <div class="button-banniere">
           <a href="?accepte-cookie">OK, J'accepte</a>
       </div>
   </div>

<?php
    }
?>

</html>
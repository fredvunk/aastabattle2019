<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tartu KHK | Õppekeskkond</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    
    
    <header>
        
        <img id="logo" src="img/Horisontaalne_logo.svg" onclick="window.open('/');">
        
        <ul class="main-nav">
            
            <li><a href="index.html">Tutvustus</a></li>
            <li><a href="main.html">HTML</a></li>
            <li><a href="css.html">CSS</a></li>
            <li><a href="kontakt.html">Kontakt</a></li>
            <li><a href="admin/">Admin</a></li>
            
        </ul>
        
        <i class="fas fa-bars" id="openMobileMenu"></i>
        <div class="mobile-nav">
            <ul class="navigation">

                <li><a href="index.html">Tutvustus</a></li>
                <li><a href="html.html">HTML</a></li>
                <li><a href="css.html">CSS</a></li>
                <li><a href="kontakt.html">Kontakt</a></li>
                <li><a href="admin/">Admin</a></li>

            </ul>
        </div>
        
    </header>
-->
   
   
   <?php include 'header.php' ?>
       
    <div class="main-content">
              
        <div class="contact-page">
               
            <section id="kontakt">

            
            <form action="send.php" method="post">
                   
                    <label for="teema">Teema:</label><br>
                    <input type="text" name="teema" autocomplete="off" required><br>                

                    <label for="email">E-mail:</label><br>
                    <input type="email" name="email" autocomplete="off" required><br>                        

                    <label for="sisu">Sisu:</label><br>
                    <textarea type="text" name="sisu" cols="25" rows="5" required></textarea><br>
                    
                    <div class="gpdr">
                    
                    <input type="checkbox" name="gpdr" required><span>Annan nõusoleku sisestatud andmete kasutamiseks.</span><br>
                        <small>Tutvu ka meie <a href="privaatsus.php">privaatsustingimustega.</a></small>
                    
                    </div>

                    <button type="submit" name="submit">Saada</button>
                    
            </form>

            </section>


            <section id="googlemap">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2093.611449130065!2d26.712916938124295!3d58.34935628753711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eb37487c7817f9%3A0x31f91313d1bbe0ee!2sTartu+Vocational+Education+Center!5e0!3m2!1sen!2see!4v1551791631755" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

            </section>
        
        </div>
        
    </div>
    
    
    <?php include 'footer.php' ?>
    
<!--
    <footer>
       
        
            <div class="footer-content">

                <ul>

                    <li class="footer-content-heading">Aadress</li>
                    <li>Tartu KHK</li>
                    <li>Kopli 1, 50115 Tartu</li>

                </ul>

            </div>        

            <div class="footer-content">

                <ul>

                    <li class="footer-content-heading">Kontakt</li>
                    <li><a href="mailto:info@khk.ee">E-post: info@khk.ee</a></li>
                    <li>Telefon: 7 361 866</li>

                </ul>

            </div>           

            <div class="footer-content">

                <ul>

                    <li class="footer-content-heading">Lingid</li>
                    <li><a href="http://osakond.ikt.khk.ee">osakond.ikt.khk.ee</a></li>

                </ul>

            </div>
        
        <script src="js/main.js"></script>
    </footer>
    
    
</body>
</html>-->

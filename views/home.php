<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MGW -  {{ pageTitle }} page</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
<div id="header">
            <?php
            //----------------------------
            if($isLoggedIn):
                //----------------------------
                ?>
                you are logged in as: <strong><?= $username ?></strong>
                <br>
                <a href="/index.php?action=logout">(logout)</a>
            <?php
            //----------------------------
            else:
                //----------------------------
                ?>
                <a href="/index.php?action=login">login</a>
            <?php
                //----------------------------
            endif;
            //----------------------------
            ?>
        </section>


        </section>

        <h1>Migos</h1>

    </div>


<div id="nav">
<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/?action=about">Login</a></li>
    <li><a href="/?action=members">Members</a></li>
    <li><a href="/?action=albums">Albums</a></li>
    <li><a href="/?action=contact">Contact Us</a></li>
    <li><a href="/?action=news">News</a></li>
    <li><a href="/?action=info">Info</a></li>
</ul>
</div>


<div id="section">
    <h2>A great website - with user authentication yay</h2>

    <p>
        hi there, learn more about me by clicking my <a href="/?action=about">about</a> link

        <img src="images/migos_home.jpg">


    </p>
</div>

<p>This Page is covering the book Real Monsters By Liam Brown. </p>





<div id="footer">
    Footer of the page
</div>

</body>
</html>



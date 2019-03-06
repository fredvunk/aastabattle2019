<?php include 'header.php'?>


<h1 style="text-align: center">Mis on CSS?</h1>

<div class="main-wrapper">

    <div class="css">
        <h3>CSS'i Põhitõed</h3>
        <br>
        <ul style="list-style: none;">
            <li>CSS <i>Cascading Style Sheets</i> kaskaadlaadistik, on
                küljendamisel kasutatav märgistuskeel, milles märgitakse
                üles peamiselt veebilehtede kujundust.
            </li>
            <li>CSS määrab, kuidas HTML elemendid on paigutatud.
            </li>
            <li>CSS märgendid on ümbritsetud {Siia läheb kood}</li>

        </ul>
        <br>
        <p>Vaata <a
                href="https://www.w3schools.com/css/css_intro.asp">Lisaks</a>
        </p>
    </div>
    <div class="css1">
        <h3>Kus kirjutada CSSi</h3>
        <p>CSS'i saab kirjutada igas tavalises tekst dokumendis (Notepad).
            Alljärgnevalt on näha, kuidas tuleks alustada CSS koodi
            kirjutamist.</p>
        <img src="../img/css1.PNG">
        <p>Vaata <a href="https://www.w3schools.com/css/default.asp">Lisaks</a>
        </p>

    </div>

    <div class="css2">
        <h3>CSS Värvid</h3>
        <p>CSS'iga on võimalik muuta kirja värvi.</p>
        <img src="../img/css2.PNG">
        <p>Vaata <a
                href="https://www.w3schools.com/css/css_colors.asp">Lisaks</a>
        </p>

    </div>

    <div class="css3">
        <h3>CSS Kommentaarid</h3>
        <p>CSS'i kirjutades on võimalus ka kirjutada kommentaare /**/ .</p>
        <img src="../img/css3.PNG">
        <p>Vaata <a
                href="https://www.w3schools.com/css/css_syntax.asp">Lisaks</a>
        </p>
    </div>
    <div class="css4">
        <h3>CSS Suurused</h3>
        <p>
            CSS'i kõrguse atribuudiks on "height" ja laiuseks on "width".
        </p>
        <img src="../img/css4.PNG">
        <p>Vaata <a
                href="https://www.w3schools.com/css/css_dimension.asp">Lisaks</a>
        </p>
    </div>

    <div class="cssTest">
        <h3>Testi oma teadmisi</h3>
        <form name="myformcss">
            1. Millega tuleb ümbritseda CSS märgendid?<br>
            <input type="radio" name="q6" value="a"> 1. ()<br>
            <input type="radio" name="q6" value="b"> 2. <><br>
            <input type="radio" name="q6" value="c"> 3. {}<br>
            2. Kas tavalises text dokumendis on võimalik kirjutada CSS'i?<br>
            <input type="radio" name="q7" value="a"> 1. Jah<br>
            <input type="radio" name="q7" value="b"> 2. Võib-olla<br>
            <input type="radio" name="q7" value="c"> 3. Ei<br>
            3. Vali õige CSS element, mis teeb teksti punaseks<br>
            <input type="radio" name="q8" value="a"> 1. style="color:red"<br>
            <input type="radio" name="q8" value="b"> 2. style="red"<br>
            <input type="radio" name="q8" value="c"> 3. text-color="red"<br>
            4. Kuidas kirjutada CSS'is mitmerealist kommentaari<br>
            <input type="radio" name="q9" value="a"> 1. /**/;<br>
            <input type="radio" name="q9" value="b"> 2. &lt;!----><br>
            <input type="radio" name="q9" value="c"> 3. //<br>
            5.Kuidas muuta kõrgust CSS'is<br>
            <input type="radio" name="q10" value="a"> 1. {kõrgus: 100%}<br>
            <input type="radio" name="q10" value="b"> 2. {height: 20px}<br>
            <input type="radio" name="q10" value="c"> 3. [height: 15px]<br>

            <input type="button" value="submit" onclick="checkcss()">

        </form>
    </div>
</div>


<?php include 'footer.php'?>
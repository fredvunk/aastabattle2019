<?php include 'header.php' ?>

<h1 style="text-align: center">Mis on HTML?</h1>

<div class="main-wrapper">

    <div class="teema">
        <h3>HTML, Põhitõed</h3>
        <br>
        <ul style="list-style: none;">
            <li>HTML on <i>HyperText Markup Language</i> hüperteksti
                märgistuskeel, milles märgendatakse veebilehti.
            </li>
            <li>HTML koosneb elementidest, mille järgi kuvab brauser dokumendi
                sisu.
            </li>
            <li>HTML märgendid on ümbritsetud noolsulgudega "<>"</li>
            <li>HTML märgendid käivad enamasti paaris: on alustav märgend ja
                sulgev märgend "/"
            </li>
        </ul>
        <br>
        <p>Vaata <a
                href="https://www.w3schools.com/html/html_basic.asp">Lisaks</a>
        </p>
    </div>
    <div class="teema1">
        <h3>Kus kirjutada HTML'i</h3>
        <p>HTML'i saab kirjutada igas tavalises tekst dokumendis (Notepad).
            Alljärgnevalt on näha, kuidas tuleks alustada HTML koodi
            kirjutamist. HTML faili tuleb salvestada .html lõpuga.
        </p>

        <img src="../img/editor.PNG">
        <p>Vaata <a href="https://www.w3schools.com/html/html_editors.asp">Lisaks</a>
        </p>

    </div>

    <div class="teema2">
        <h3>HTML Vormindamine</h3>
        <p>HTML'iga on võimalik muuta kirjastiili.</p>
        <img src="../img/stiilid.PNG">
        <p>Vaata <a href="https://www.w3schools.com/html/html_formatting.asp">Lisaks</a>
        </p>

    </div>

    <div class="teema3">
        <h3>HTML Kommenteerimine</h3>
        <p>HTML koodi kirjutades on võimalus kirjutada kommentaare nii, et neid
            ei näidata veebilehel.</p>
        <img src="../img/kommentaar.PNG">
        <p>Vaata <a href="https://www.w3schools.com/html/html_comments.asp">Lisaks</a>
        </p>
    </div>
    <div class="teema4">
        <h3>HTML Lingid</h3>
        <p>
            HTLM'i lingid on hüperlingid. Neile saab peale vajutada ja siis viib
            ta lingitud lingile.
        </p>
        <img src="../img/link.PNG">
        <p>Vaata <a
                href="https://www.w3schools.com/html/html_links.asp">Lisaks</a>
        </p>
    </div>

    <div class="htmlTest">
        <h3>Testi oma teadmisi</h3>
        <form name="myform">
            1. Millega tuleb ümbritseda HTML märgendid?<br>
            <input type="radio" name="q1" value="a"> 1. ()<br>
            <input type="radio" name="q1" value="b"> 2. <><br>
            <input type="radio" name="q1" value="c"> 3. {}<br>
            2. Kas tavalises text dokumendis on võimalik kirjutada HTML'i?<br>
            <input type="radio" name="q2" value="a"> 1. Jah<br>
            <input type="radio" name="q2" value="b"> 2. Võib-olla<br>
            <input type="radio" name="q2" value="c"> 3. Ei<br>
            3. Vali õige HTML element, mis defineerib tähtsat teksti<br>
            <input type="radio" name="q3" value="a"> 1. &lt;strong&gt;<br>
            <input type="radio" name="q3" value="b"> 2. &lt;i&gt;<br>
            <input type="radio" name="q3" value="c"> 3. &lt;important&gt;<br>
            4. Kuidas kirjutada HTML'is kommentaari<br>
            <input type="radio" name="q4" value="a"> 1. &lt;/**/&gt;<br>
            <input type="radio" name="q4" value="b"> 2. &lt;!----><br>
            <input type="radio" name="q4" value="c"> 3. //<br>
            5.Milline hüperlingi viis on neist õige<br>
            <input type="radio" name="q5" value="a"> 1. url="url"<br>
            <input type="radio" name="q5" value="b"> 2. name="url"<br>
            <input type="radio" name="q5" value="c"> 3. href="url"<br>

            <input type="button" value="submit" onclick="check()">

        </form>
    </div>
</div>

<?php  include 'footer.php'?>
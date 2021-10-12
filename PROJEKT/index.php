<?php
phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="StyleSheet1.css" rel="stylesheet" />
 
    <title></title>
</head>
<body>
    <div class="menu">
        <a href="HtmlPage3.html"><div class="button-menu">dodawanie osob</div></a>
        <a href="HtmlPage1.html"><div class="button-menu">wyszukiwanie osoby</div></a>
        <a href="HtmlPage2.html"><div class="button-menu">osoby</div></a>
        <a href="HtmlPage4.html"><div class="button-menu">jednostki</div></a>
        <a href="HtmlPage5.html"><div class="button-menu">certyfikaty</div></a>

    </div>  
   
    <div class="main">
        <div class="search">

            <form action="dodaj.php" method="post">
                <label>
                    Imię
                    <input type="text" name="imie" required placeholder="Imię..">
                </label>
                <label>
                   Nazwisko
                    <input type="text" name="nazwisko" required placeholder="Nazwisko..">
                </label>
                <button class="button-search">
                    szukaj
                </button>
            </form>
            
        </div>
    <div class="wyswietlanie">
        <div class="text">
        <h2>ZNALEZIONE DANE:</h2>

        </div>
        <div class="dane">
           <h1>

               tu kiedyś będzie tabela
           </h1>
         




        </div>

    </div>
    
    
    </div>











</body>
</html>
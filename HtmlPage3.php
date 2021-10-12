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

        <div class="add">
            <div class="text">
        <h2>DODAWANIE OSÓB:</h2>

        </div>
            <form class="" action="dodaj.php" method="post">
                <label>
                    <h3>Imię</h3>
                    <input type="text" name="imie" required placeholder="Imię..">
                </label>
                <label>
                    <h3>Nazwisko</h3>
                    <input type="text" name="nazwisko" required placeholder="Nazwisko..">
                </label>
                <label>
                    <h3>nr certyfikatu</h3>
                    <input type="text" name="nr-cretyfikatu" required placeholder="nr certyfikatu" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                    
                </label>
                <label>
                    <h3>jednostka</h3>
                    <input type="text" name="jednostka" required placeholder="jednostka..">
                </label>
                    <label>
                    <h3>data od</h3>
                    <input type="date" name="data-od" required placeholder="dd/mm/rrrr..">
                </label>
                        <label>
                    <h3>data do</h3>
                    <input type="date" name="data-do" required placeholder="dd/mm/rrrr..">
                </label>
                <button class="button-search">
                    dodaj
                </button>
            </form>
            
        </div>
    
    </div>











</body>
</html>
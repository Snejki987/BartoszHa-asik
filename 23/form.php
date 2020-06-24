<!DOCTYPE html>
<head>
<meta  charset="utf-8" />
<meta http-equiv="Content-Language" content="pl">
<title>Formularz</title>
<link rel="stylesheet" href="style.css"  type="text/css" />
<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
<script src="js/bjqs-1.3.min.js"></script>
<link rel="stylesheet" href="bjqs.css">	

</head>

<body>

<div id="container">
	<div id="header">
    	<div class="logo"><h1>Sklep <span>Kulturystyczny</span></h1>
		</div>
        <div class="slogan">Super sylwetka w mniej niz 30 dni</a></div>
    </div>

 <div id="contener_slider">
		
      

      <div id="banner">

        
        <ul class="bjqs">
          <li><img src="images/slide_1.jpg" title="Chcesz zdobyć wymarzoną forme?"></li>
          <li><img src="images/slide_2.jpg" title="Nasza kadra trenereska przygotuje dla Ciebie idealny plan"></li>
          <li><img src="images/slide_3.jpg" title="W naszym asortymecie mamy odżywki, plany treningowe i wiele więcej"></li>
        </ul>
        

      </div>

      <script >
        jQuery(document).ready(function($) {

          $('#banner').bjqs({
            height      : 300,
            width       : 800,
            responsive  : true
          });

        });
      </script>

     

      
    </div>

	

    <div id="menu">
        <ul id="navlist">
            <li id="active"><a href="index1.html" id="current">HOME</a></li>
            <li><a href="sklep.html">Odzywki i plany treningowe</a></li>
            <li><a href="form.php">Formularz</a></li>
            
        </ul>

    <div id="produkty">


<h2>Formularz</h2>
<p>


<?php

if (empty($_POST['submit'])) {

    echo "<table border=\"0\"><form method=\"post\">
<tr>
<td>Co chcesz kupić, oraz podaj dane do wysyłki:</td>
<td><textarea name=\"tresc\" style=\"width: 250px; height: 100px\"></textarea></td>
</tr>
<tr>
<td>Imię i nazwisko</td>
<td><input type=\"text\" name=\"imie\" style=\"width: 250px\"></td>
</tr>
<tr>
<td>Adres e-mail</td>
<td><input type=\"text\" name=\"email\" style=\"width: 250px\"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type=\"submit\" name=\"submit\" value=\"Wyślij\">&nbsp;
<input type=\"reset\" value=\"Od nowa\"></td></form>
</tr>
</table>";
}

elseif (!empty($_POST['tresc']) && !empty($_POST['imie']) && !empty($_POST['email'])) {
 
    $message = "Treść wiadomości:\n$_POST[tresc]\nWysłał: $_POST[imie]\ne-mail: $_POST[email]";
   
    $header = "From: $_POST[imie] <$_POST[email]>";
   
    @mail("certifiet987@gmail.com","Wiadomosc ze strony WWW","$message","$header")
    or die('Nie udało się wysłać wiadomości');

    echo "<div align=\"center\"><strong>Wiadomość została wysłana poprawnie!</strong></div>";
}

else echo "<span style=\"color: #FF0000; text-align: center;\">Wypełnij wszystkie pola formularza!</span>";

?> 










</div>







        <div class="kol_praw">
            <div class="nav_praw">
                <ul>
                    <li>Białko</li>
                    <li>Witaminy</li>
                    <li>Kreatyna</li>
                  
                </ul>
            </div>
           
            <h2>Cechuje nas</h2>
            <p>
            	Darmowa dostawa- od teraz każdy kupiony produkt jest wysyłany za darmo,
            </p>
            <br /><br />
            <p>
            	Ekspresowa realziacja- produkt jeśli jest kupiony do godziny 17, wysyłany jest w tym samym dniu.
            </p>
            <br /><br />
            <p>
            	Szybki kontakt- zawsze znajdzie się jakiś pracownik firmy który w moment odpisze Ci na zadane pytanie.
            </p>
			
			
			
			
        </div>
    </div>
    <div class="czysc"></div>
    <div id="footer">
    	Bartosz Hałasik
		
		</span>
		
    </div>
</div>

</body>
</html>

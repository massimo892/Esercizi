<?php
	 $nome=$_POST['nome'];
	 $numero=$_POST['numero'];
	 //Questo primo controllo serve a verificare che l'utente non lasci vuoto nessuno dei due campi richiesti per giocare
	 if (empty($nome) OR empty($numero)) {
	 									   echo"Il campo nome e/o il campo numero non sono stati compilati";
	 									   echo"<br>Torna indietro e ricontrolla. Grazie! <br><br>";
	 									   echo'<a href="gioco.html"> Torna indietro </a>';
	 									  }
     else {
     	   echo"Benvenuto <b>" .$nome .'</b><br>';
     	   //Controllo per verificare che il numero scelto dal giocatore sia compreso tra 1 e 10
     	   if (($numero>=1) AND ($numero<=5) AND is_numeric($numero))
     	   	  {
     	   	   echo"<br>Hai scelto il numero <b>" .$numero .'</b>';
     	       echo"<br>------------------------------------------------------<br>";
     	       //Generiamo un numero casuale fra uno e dieci
     	       $casuale=rand(1,5);
     	       echo"<b>Il numero casuale estratto &egrave " .$casuale .'<br></b>';
     	       echo"<br>------------------------------------------------------<br>";
     	       if ($numero==$casuale) {
     	       						   echo"Complimenti <b>" .$nome .'</b>! Hai indovinato!';
     	       						  }
     	       else {
     	       		 echo"Sono spiacente <b>" .$nome .'</b>! Hai sbagliato!';
     	       		}
     	       }
     	   else {
     	   	     echo"Hai scelto un numero non compreso fra 1 e 5 oppure un numero decimale<br>Torna indietro e riprova<br><br>";
     	   	     echo'<a href="gioco.html"> Torna indietro </a>';
           	    }
          }
	 ?>

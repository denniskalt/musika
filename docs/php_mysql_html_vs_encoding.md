# PHP, MySQL, HTML vs Encoding

## PHP + HTML

* Jede Datei im Encoding „UTF-8“ speichern
* HTTP-Header mit encoding (und nebenbei auch mit dem Dateityp) senden
    * header('Content-Type: text/html; charset: utf-8');

* Im HTML selbst ebenfalls das Encoding angeben:
	  <html>
		<head>
			 <meta charset="utf-8">
		</head>
		…
	  </html>

* Bei der Ausgabe htmlspecialchars wie folgt verwenden
    * htmlspecialchars($text, ENT_QUOTES, 'utf-8');


## PDO + MySQL

* Bei MySQL für die Datenbank, alle Tabellen und jedes Feld folgendes Encoding verwenden:
    * utf8mb4_bin
* Bei der PDO-Verbindung das Encoding ebenfalls angeben:
      $dbh = new PDO('mysql:host=localhost;dbname=phpprakt',
        DB_USER, DB_PASS,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
      );

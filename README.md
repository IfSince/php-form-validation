# Voraussetzung
***
Um das Projekt ausführen zu können ist ein Web-Server notwendig.
Dieser kann beispielsweise mit [XAMPP](https://www.apachefriends.org/de/index.html) oder [MAMP](https://www.mamp.info/de/windows/)
bereitgestellt werden. Auf dem Server muss PHP installiert sein.

# Hinzufügen des Projekts
***
Nach Installation des Web-Servers muss das Projekt noch in dem hinterlegten Verzeichnis hinzugefügt werden.  
Für XAMPP ist dies standardmäßig das Verzeichnis **xampp/htdocs** oder **MAMP/htdocs** hinterlegt.

## Ändern des DocumentRoot für Apache
Das Projekt sollte auf der Top-Level-Domain laufen (localhost:80 statt localhost:80/my-project).  
Dafür in die Konfigurationsdatei **httpd.conf** (in XAMPP unter Apache -> Config -> httpd.conf) nach **htdocs** zu suchen und 
der dort hinterlegte Pfad anzupassen, beispielsweise **"xampp/htdocs/my-project"**.

## Öffnen des Projekts
Um das Projekt zu starten, muss der Apache Server gestartet werden. Anschließend kann das Projekt beispielsweise im 
Browser unter **localhost** geöffnet werden.
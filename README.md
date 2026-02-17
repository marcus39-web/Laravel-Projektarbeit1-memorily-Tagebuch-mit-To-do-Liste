
# Memorily – Tagebuch mit To-Do-Liste

Dieses Projekt ist eine einfache Laravel-Anwendung, mit der du Erinnerungen (Memories) und To-Dos verwalten kannst. Sie wurde im Rahmen einer Projektarbeit erstellt.

## Features
- Persönliche Memories (Tagebuch-Einträge) anlegen, anzeigen, bearbeiten und löschen
- Memories mit Titel, Text, Farbe und optionalem Bild
- Übersicht aller Memories
- To-Do-Liste: Aufgaben anlegen, als erledigt markieren und löschen
- Übersicht aller To-Dos
- Eingabevalidierung und Statusmeldungen
- Modernes, handgezeichnetes Design mit [PaperCSS](https://www.getpapercss.com/)

## Installation
1. Repository klonen:
	```
	git clone <REPO-URL>
	cd memorily-Tagebuch-mit-To-do-Liste
	```
2. Abhängigkeiten installieren:
	```
	composer install
	npm install && npm run build
	```
3. .env-Datei anlegen (ggf. aus .env.example kopieren) und Datenbankzugang eintragen.
4. Anwendungsschlüssel generieren:
	```
	php artisan key:generate
	```
5. Migrationen ausführen:
	```
	php artisan migrate
	```
6. Lokalen Server starten:
	```
	php artisan serve
	```
7. Anwendung im Browser öffnen: [http://localhost:8000](http://localhost:8000)

## Nutzung
- Memories: `/memories`
- To-Do-Liste: `/todos`

## Beispiel-Bild-URL
Du kannst z.B. diese Bild-URL für eine Memory verwenden:
```
https://upload.wikimedia.org/wikipedia/commons/4/4c/Dice.png
```

## Hinweise
- Das Design basiert auf PaperCSS, kann aber beliebig angepasst werden.
- Es ist kein Login/Authentifizierung notwendig.
- Die Anwendung ist für Lern- und Demonstrationszwecke gedacht.



## Credits
- <a href="https://github.com/papercss/papercss">Paper CSS</a>


## License and terms of use

© Web Professional Institute Inc. All rights reserved.

This material is provided solely for students enrolled in courses offered by Web Professional Institute Inc. By accessing or using this code, you acknowledge that it is strictly for educational use within the context of Web Professional Institute Inc. programs.

**Usage Restrictions:**

- Redistribution, sharing, or copying of this material outside the course environment is strictly prohibited.
- The content is designed to support your learning objectives and is not authorized for commercial projects, public repositories, or applications beyond the course scope.
- Unauthorized commercial use or open-source distribution is strictly prohibited and may result in expulsion from the program and legal action.

**Agreement & Rights:**

As a student, you have agreed to these terms as part of your enrollment agreement, which includes additional details on permitted uses, restrictions, and policies. The author and Web Professional Institute Inc. retain all rights to this material, including the code base and instructional content.

For any questions regarding these terms, please contact Web Professional Institute Inc. for clarification.

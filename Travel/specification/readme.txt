Feladatok:

1. Adatbázis létrehozása
   Hozd létre a "travel" nevű adatbázist és abban a mellékelt insert.txt fájlban lévő adatok alapján az "destination" nevű táblát.
   A táblaszerkezetet a db.png mutatja
   Értékelésnél fontos, hogy az adatbázis neve és a tábla neve egyezzen meg a kiadottal!

2. Fájlok létrehozása
   A feladatban létrehozandó fájlok, amik az oldal tartalmát biztosítják:
   	index.php   --> lásd minta_index.pdf
	uticel.php  --> lásd minta_uticel.pdf
	adatlap.php --> lásd minta_adatlap.pdf
   	A többi szükséges fájlt is készítsd el, mint pl.: header.php, footer.php, db_con.php, stb..

3. HTML oldalszerkezet kialakítása
   A mellékelt sablont darabold az oldalszerkezet kialakításához (header - main content - footer)
   A szükséges dolgokat írd át a sablonban. 
   A title megegyezik a navbar-brand szövegével. --> "Happy Travel"
   A footer text --> "Happy Travel"

4. Menü létrehozása.
   A esernyő ikon nem kattintható, nem menüelem!!
   Menü elemei: Happy Travel        --> index.php-ra mutat
		Uticélok listája    --> uticel.php-ra mutat, az uticél "uticel_ID"-val
   A menüben az uticélok listáját adatbázis lekérdezéssel készítsd el, ehhez használd az "uticel" és az "uticel_ID" mezőket! 
   A menüben minden uticél egyszer jelenjen meg, legyen ABC sorrendbe rendezve a lista!

5. Utazásaink táblázat
   A táblázat az adatbázis teljes tartalmát jelenítse meg, s belőle az "uticel", "megnevezes", "idotartam", "ar" mezőket.
   A táblázat az uticél alapján legyen ABC sorrendbe rendezve.
   A megnevezés oszlopban minden út megvezezésére rakj linket, ami az adatlap.php-ra mutat az adott út ID-val.

6. Adatlap.php
   Az oldal az "ID" alapján egy út adatait jelenítse meg, kivéve az "uticel_ID"-t.
   A <h1> tartalmazza az adott út megnevezését.
   A további tartalmat egy 50-50%-os arányú grid-ben helyezd el! A gridnek medium méretnél legyen a töréspontja, ezalatt egymás alatt helyezkedjen el a két hasáb.
   A kép az adott út "ID"-ja alapján legyen megjelenítve, az "ID" megegyezik a fájlnévvel. Az alt=""-hoz az "ID"-t, a title=""-hez a "megnevezést használd fel.
   Az út adatait bekezdésekben jelenítsd meg a kép melletti hasábban.

7. uticel.php
   Az oldal az "uticel_ID" alapján egy-egy uticél útjait jelenítse meg. 
   Egy-egy uticél adatai (kép, bekezdések) 4:8 arányú grid-ben jelenjen meg. 
   A gridnek medium méretnél legyen a töréspontja, ezalatt egymás alatt helyezkedjen el a két hasáb.
   A kép az adott út "ID"-ja alapján legyen megjelenítve, az "ID" megegyezik a fájlnévvel. Az alt=""-hoz az "ID"-t, a title=""-hez a "megnevezést használd fel.
   Az út adatait (csak a "megnevezes", "idotartam", "ar") bekezdésekben jelenítsd meg a kép melletti hasábban.
   Az út megnevezésére tegyél linket, ami az adatlap.php-ra mutat az adott út ID-val.
   

!!BEADÁS!!
  Az egyész weboldalt tartalmazó mappádat CTRL+X-el !!helyezd át!! a kijelölt meghajtón lévő Saját neves mappádba.
  A kiadott feladatmappával ne keverd!
  A létrehozott adatbázis eldobható.
   




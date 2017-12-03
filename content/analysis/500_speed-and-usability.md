Speedtest
==============

###Introduktion

Urvalet var ganska enkelt: hur står sig mina tre hemsidor från färg-analysen vad det gäller page speed? Jag tog helt enkelt samma tre: [Stall Untersteiner](http://www.untersteiner.se/), [The Useless Web](http://www.theuselessweb.com/), och [DreamHost](https://www.dreamhost.com/).

###Verktyg

Jag använde mig utav [PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/), samt Firefox's "Network"-verktyg. Skärmdumparna tog jag till förra uppgiften med gammal hederlig Print Screen och klippning i Photoshop CC. Jag samlade min data i ett [spreadsheet](https://docs.google.com/spreadsheets/d/1mP6s1RseUZCNHapADtr91isd12e05zHaWX6xKt0Ds18/edit?usp=sharing).

### #1: Stall Untersteiner

[FIGURE src="image/analysis/stalluntersteiner.jpg?w=784" caption="_Screenshot 24/11 2017_" class="center"]

#####PageSpeed Insights

* **Mobile**: 52/100
* **Desktop**: 41/100

#####Network Tool

* **Requests**: 74
* **Size**: 3.2MB
* **Load time**: 3.76s
* **Finish time**: 5s

Webplatsen verkar överlag inte komprimera bilder, då det stod för en stor del av "vad den här sidan kan förbättra", enligt PageSpeed Insights. Utöver det verkar det inte som att de minifierar CSS eller JavaScript heller.

I och med att "finish"-tiden knuffas fram varje gång en ny bild laddas för första gången i bildspelet så kan den tiden ticka upp till 40s.


### #2: The Useless Web

[FIGURE src="image/analysis/theuselessweb.jpg?w=784" caption="_Screenshot 24/11 2017_" class="center"]

#####PageSpeed Insights

* **Mobile**: 76/100
* **Desktop**: 89/100

#####Network Tool

* **Requests**: 55.5
* **Size**: 1.76MB
* **Load time**: 1.07s
* **Finish time**: 2.27s

Det är en relativt liten websida, därav det bra betyget på stationär dator. Det verkar inte som att någon komprimeras eller minifieras.

### #3: DreamHost

[FIGURE src="image/analysis/dreamhost.jpg?w=784" caption="_Screenshot 24/11 2017_" class="center"]

#####PageSpeed Insights

* **Mobile**: 50/100
* **Desktop**: 73/100

#####Network Tool

* **Requests**: 57
* **Size**: 6.45MB
* **Load time**: 0.71s
* **Finish time**: 2.58s

DreamHost skulle inte må sämre av att komprimera filer och optimera bilder. Som de övriga två sidorna skulle den också kunna sätta "bäst före"-datum på det som cachas, samt jobba med asynkron laddning.

### Vanligaste förbättringsåtgärderna

De förbättringsåtgärder som alla tre webplatserna hade gemensamt var:

* Eliminate render-blocking JavaScript and CSS in above-the-fold content
* Leverage browser caching

Annars var det spridda skurar. The Useless Web använde ingen komprimering eller minifiering alls, Stall Untersteiner använde viss, och DreamHost minifierade all sin kod.

### Rangordning

* DreamHost
* The Useless Web
* Stall Untersteiner

DreamHost har mycket data, och snabba servrar. Hela sidan, med allt innehåll, var färdigt på ca 2,5 sekund (det mesta är klart efter drygt 1 sekund, men det är någon sista grej som ramlar in vid 2,5). Det tycker jag är ganska bra jobbat, när man tänker på att The Useless Web renderas klart marginellt snabbare, men dessutom är 3,5 gång så liten. Stall Untersteiner hamnar på sista plats.

### Avslutningsvis

Personligen tycker jag att gränsen för hur fort en webbsida bör ladda är cirka 2 sekunder. Krälar det sig upp mot 4-5 sekunder är det nästan outhärdligt. Över 5 sekunder, och någonstans har man ett rejält problem man faktiskt borde ta itu med.

Både DreamHost och The Useless Web klarar de gränserna ganska bra. Jag upplever ibland The Useless Web som lite seg. Stall Untersteiner är oftast åt "men kom igen då"-hållet.

Jag var ensam i min grupp.

## Korte Inhoud

Een quiz waar een code geraden moet worden door behulp van hints. Als het te lang duur, verschijnt er een optie voor een nieuwe hint.

## Code Voorbeeld

Bij het invoeren van een antwoord (maximaal 12 letters) wordt de rest alles automatisch gedaan. Zelf kan je 2 hints toevoegen, alleen in de vorm van een afbeelding. Verder kan je zelf bepalen wanneer voor de gebruiker de extra hint knop zichtbaar wordt.

Bijvoorbeeld:

var antwoord = "test";

Er wordt dan automatisch een lengte van 4 aangemaakt, waardoor de functie uitgevoerd wanneer de gebruiker alle 4 de vakken heeft ingevuld.

var tijd = 60000;

De hint button zal nu na 60 seconden (1 minuut) verschijnen, vanaf het moment dat de gebruiker de pagina opent. Door de functie heen hoeft de pagina niet worden ververst, zodat deze "timer" steeds blijft doorlopen.

var afbeeldingHint1 = "test.jpg";  of var afbeeldingHint2 = "test.jpg";

De gebruiker kan hier elke afbeelding inzetten, door de CSS wordt de formaat automatisch aangepast.

## Demo
Zie Quiz [demo](http://i339861.iris.fhict.nl/quiz)

## Motivatie

Een applicatie voor het bedrijf Surprise Factory, waar middels de applicatie enkele hints verschijnen, zodat jij de MysteryBox kan ontrafelen.

## Installatie

Download zowel Library.js, index.php als de style.css


var surprisefactory = new Object();

// VERANDER HIER JE ANTWOORD TOT MAX 12 LETTERS
var antwoord = "hgzf";

// verander de afbeelding van hint1
var afbeeldingHint1 = "vis.jpg";

// verander de afbeelding van hint2
var afbeeldingHint2 = "schroef.jpg";

// Tijd wanneer de hint verschijnt.
var tijd = 60000;

// Link naar volgende pagina
var link = "next2.php";

var lengte = antwoord.length;

surprisefactory.check = function(field, to) {

    if (field.getAttribute && field.value.length == field.getAttribute("maxlength")) {
        to.focus()
    }

    var antwoordFirst = input1.value + input2.value + input3.value + input4.value + input5.value + input6.value + input7.value + input8.value + input9.value + input10.value + input11.value + input12.value;

    var antwoordFinal = antwoordFirst.toUpperCase();
    var antwoordChose = antwoord.toUpperCase();

    if (antwoordFinal.length == lengte) {

        if (antwoordFinal == antwoordChose) {

            $("#goed").fadeIn(1000);
            document.activeElement.blur();

            document.getElementById("antwoord-goed").innerHTML = antwoordFinal;

        } else {

            $("#fout").fadeIn(1000);
            document.activeElement.blur();

            document.getElementById("antwoord-fout").innerHTML = antwoordFinal;

            var x = document.getElementsByClassName("krasje");

            for (var i = 0; i < x.length; ++i)

                x[i].style.color = "red";

        }

    }


};


surprisefactory.newhint = function() {

    $("#hint-afb2").fadeIn(1000);
    document.getElementById("hint-knop2").style.display = "none";

};


surprisefactory.opnieuw = function() {

    $("#fout").fadeOut(1000);

    var x = document.getElementsByClassName("krasje");

    for (var i = 0; i < x.length; ++i)

        x[i].style.color = "black";

    $(".antwoord-kader input[type='text']").val("");

};

surprisefactory.hint = function() {

    $("#app-kader").fadeIn(800);

    var x = document.getElementsByClassName("krasje");

    for (var i = 0; i < lengte; ++i)

        x[i].style.display = "inline-block";

    document.getElementById("hint-afb1").src = afbeeldingHint1;
    document.getElementById("hint-afb2").src = afbeeldingHint2;

    setTimeout(function() {

        $("#hint-knop2").fadeIn(1000);

    }, tijd);


};

surprisefactory.link = function(){

     $("#goed").fadeOut(1000);
     $("#app-kader").fadeOut(500);

    setTimeout(function() {

        window.location.href = link;

    }, 1000);
};
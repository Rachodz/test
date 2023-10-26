"use strict";
console.log("Script pris en charge");
//background de base vert
document.getElementById('1').style.backgroundColor = '#045206'

//background bouton rouge
function hcolor(red) {
document.getElementById('1').style.backgroundColor = '#f00';
}
console.log('background H1 color');

//background bouton bleu + valeur
function bgvaleur() {
    let inp = document.getElementById('2').value;
    document.getElementById('1').innerHTML = inp;
    document.getElementById('1').style.backgroundColor = '#00f';
}
console.log('Background h1 valeur est couleur')

//background fonction carré
function carré() {
    let inp = document.getElementById('2').value;
    var rcarré = nombre * nombre;
    document.getElementById('4').innerHTML = rcarré;
    return rcarré;
}
console.log('Mon carré', rcarré)

// affichage console 
let personn = {
    Firstname: "Nezali",
    Secondname: "Rachid",
    age: "32 ans",
    Statut: "Célibataire",
    Job: "Technicien de maintenance",
    email: "nezalirachid@yahoo. fr",
}
console.log('Afficher', personn)

// calculer le double de mon array moyen

function moyenne() {
moyen = [10, 20, 30];
double = moyen.map(x = x * 2);
    return value * value
    document.getElementById("5").innerHTML = double;
    console.log("double");
}
moyenne()

// Boucle
function agemin(Age) {
    if (Age > 15) {
        console.log('votre age est sup a 15');
        //document.getElementById("6").inner=Age;
    } else if (Age < 3) {
        console.log('votre age est inf a 3');
    }
    agemin(10);
}
//Somme
function somme(n1,n2) {
    s= n1+n2;    
    if (typeof(n1)=== "number"  && typeof(n2)=== "number"){
    if(s > 100) {
        console.log('true');
    }
    else if(s < 100) {
        console.log('false');
    }
    else {
        console.log("parametre error")
    }
}
else{
    console.log('n1 doit etre un nombre');
        }
}
somme(33,30);
//document.getElementById("").innerHTML=somme

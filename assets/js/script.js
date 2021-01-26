let maVariableInteger = 1; // Integer
let maVariableString = "Coucou"; // String
let maVariableBoolean = true; // Boulean

let maVariable = maVariableInteger;

maVariable += 9; // maVariable = maVariable + 9;
// Commentaires sur une ligne

/*
Un Commentaire
sur plusieurs
lignes.
*/

/**
Un comentaire visant à générer une documentation
de façon automatique
*/

console.log(maVariable);
//-- Suite de Fibonacci => Une valeur = la somme des 2 précédentes
maVariableInteger += 1;
console.log(maVariableInteger);

let maVariableInit = 1;

/*
FUNCTION BOUCLE (maVariableInteger, maVariableInit) {
    console.log(maVariableInteger + maVariableInit); // => 2, 3
}

function boucleQuiCalcul(variable1, variable2) {
    let resultat = variable1 + variable2;
    console.log(resultat);
}

boucleQuiCalcul(maVariableInteger, maVariableInit);

*/
function boucleQuiCalcul(variable1, variable2) {
    let resultat = variable1 + variable2;
    //console.log(resultat);
    return resultat;
}

let variableResultat = boucleQuiCalcul(maVariableInteger, maVariableInit);
console.log(variableResultat);

let aspirateur = {
    puissance : 1100,
    taille : "100cm",
    poids : 10
};

variableResultat += aspirateur.puissance;
console.log(variableResultat);

let monTableau = [
    maVariable,
    maVariableInteger,
    variableResultat
];

console.log(monTableau); // Array(nombre de lignes) [liste des lignes clef => valeur]
console.log(monTableau[0]); // 10
console.log(monTableau[1]); // 2
console.log(monTableau[2]); // 1103

let monTableauAssociatif = {
    'clef_numero_1' : maVariable,
    'clef_au_pif' : maVariableInteger,
    'clef_resultat' : variableResultat
};
console.log(monTableauAssociatif);
console.log(monTableauAssociatif.clef_resultat);

let domElement = document.getElementById('carousel'); // équivalent JQuery => $('#carousel');
console.log(domElement);

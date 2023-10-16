// formationsTechnique.js
var formationsTechnique = [
    {
        libelle: "Formation 1",
        prix: 1000,
        description: "Description de la formation 1.",
        time: 5,
    },
    { 
        libelle: "Formation 2",
        prix: 1200,
        description: "Description de la formation 2.",
        time: 5,
    },
    {
        libelle: "Formation 3",
        prix: 1200,
        description: "Description de la formation 2.",
        time: 5,
    },
];

var listeFormationsTechnique = document.getElementById("liste-formationsTechnique");

for (var i = 0; i < formationsTechnique.length; i++) {
    var formation = formationsTechnique[i];
    var formationElement = document.createElement("div");
    formationElement.className = "formation";
    formationElement.innerHTML = `
        <h3 class="libelle">${formation.libelle}</h3>
        <p class="prix">Tarif : ${formation.prix} €</p>
        <p class="time">Durée : ${formation.time}jours</p>
        <p class="description">${formation.description}</p>

    `;
    listeFormationsTechnique.appendChild(formationElement);
}
// formationsBureautique.js

var formationsBureautique = [
    {
        libelle: "Formation 1",
        prix: 1000,
        description: "Description de la formation 1.",
        time: 5,
    },
    { 
        libelle: "Formation 2",
        prix: 1200,
        description: "Description de la formation 2.",
        time: 5,
    },
    {
        libelle: "Formation 3",
        prix: 1200,
        description: "Description de la formation 2.",
        time: 5,
    },
];

var listeFormationsBureautique = document.getElementById("liste-formationsBureautique");

for (var i = 0; i < formationsBureautique.length; i++) {
    var formation = formationsBureautique[i];
    var formationElement = document.createElement("div");
    formationElement.className = "formation";
    formationElement.innerHTML = `
        <h3 class="libelle">${formation.libelle}</h3>
        <p class="prix">Tarif : ${formation.prix} €</p>
        <p class="time">Durée : ${formation.time}jours</p>
        <p class="description">${formation.description}</p>

    `;
    listeFormationsBureautique.appendChild(formationElement);
}

// formationsManagement.js

var formationsManagement = [
    {
        libelle: "Formation 1",
        prix: 1000,
        description: "Description de la formation 1.",
        time: 5,
    },
    { 
        libelle: "Formation 2",
        prix: 1200,
        description: "Description de la formation 2.",
        time: 5,
    },
    {
        libelle: "Formation 3",
        prix: 1200,
        description: "Description de la formation 2.",
        time: 5,
    },
    {
        libelle: "Formation 3",
        prix: 1200,
        description: "Description de la formation 2.",
        time: 5,
    },
    {
        libelle: "Formation 30879",
        prix: 1200,
        description: "Description de la formation 2.",
        time: 5,
    },
];

var listeFormationsManagement = document.getElementById("liste-formationManagement");

for (var i = 0; i < formationsManagement.length; i++) {
    var formation = formationsManagement[i];
    var formationElement = document.createElement("div");
    formationElement.className = "formation";
    formationElement.innerHTML = `
        <h3 class="libelle">${formation.libelle}</h3>
        <p class="prix">Tarif : ${formation.prix} €</p>
        <p class="time">Durée : ${formation.time}jours</p>
        <p class="description">${formation.description}</p>

    `;
    listeFormationsManagement.appendChild(formationElement);
}
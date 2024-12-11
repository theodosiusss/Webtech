let weddingButton = document.getElementById("buttonGetRandomWedding");
let randomWedding = document.getElementById("randomWedding");
let jsonArray;

let mapElement = document.getElementById("osm-map");


fetch("https://data.wien.gv.at/daten/geo?service=WFS&request=GetFeature&version=1.1.0&typeName=ogdwien:TRAUMHOCHZEITOGD&srsName=EPSG:4326&outputFormat=json")
    .then((resp) => resp.json())
    .then((object) => {
        console.log(object);
        jsonArray = object.features;

    });


let map = L.map(mapElement).setView([48.2082, 16.3738], 13); // Initialisierung auf Wien

L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

let markersGroup = L.layerGroup().addTo(map);







weddingButton.onclick = function () {

    let randomNumber = Math.floor(Math.random() * jsonArray.length);


    console.log(randomNumber);
    console.log(jsonArray[randomNumber].properties);
    randomWedding.innerHTML = "Adresse: " + jsonArray[randomNumber].properties.ADRESSE +
        "<br>Email: " + jsonArray[randomNumber].properties.EMAIL +
        "<br>Name: " + jsonArray[randomNumber].properties.LOCATION +
        "<br>Tel: " + jsonArray[randomNumber].properties.TELEFONNUMMER
    ;



    console.log(jsonArray[randomNumber].geometry.coordinates[0])


    let target = L.latLng(jsonArray[randomNumber].geometry.coordinates[1], jsonArray[randomNumber].geometry.coordinates[0]);


    map.setView(target, 14);

    markersGroup.clearLayers();

    L.marker(target).addTo(markersGroup);
};






let weddingButton = document.getElementById("buttonGetRandomWedding");
let randomWedding = document.getElementById("randomWedding");
let jsonArray;


fetch("https://data.wien.gv.at/daten/geo?service=WFS&request=GetFeature&version=1.1.0&typeName=ogdwien:TRAUMHOCHZEITOGD&srsName=EPSG:4326&outputFormat=json")
    .then((resp) => resp.json())
    .then((object) => {
        console.log(object);
        jsonArray = object.features;

    })


weddingButton.onclick = function () {
    let randomNumber = Math.floor(Math.random() * jsonArray.length);

    console.log(randomNumber);
    console.log(jsonArray[randomNumber].properties);
    randomWedding.innerHTML = "Adresse: " + jsonArray[randomNumber].properties.ADRESSE +
        "<br>Email: " + jsonArray[randomNumber].properties.EMAIL +
        "<br>Name: " + jsonArray[randomNumber].properties.LOCATION +
        "<br>Tel: " + jsonArray[randomNumber].properties.TELEFONNUMMER
    ;
};



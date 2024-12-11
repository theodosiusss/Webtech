let outputElement = document.getElementById("outputContainer");

fetch("https://jsonplaceholder.typicode.com/todos/1")
    .then((resp) => resp.json())
    .then((object) => {


        const userId = object.userId;
        const id = object.id;
        const title = object.title;
        const completed = object.completed;
        outputElement.innerHTML = "userId: "+ userId + "<br> id: " +id +"<br> title: " +title +"<br> completed: " +completed;
    });

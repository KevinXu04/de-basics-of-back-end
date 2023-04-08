const persons = [
    {id: 12, name: 'Cathy Mill', role: 'manager', gender: 'female', age: 26},
    {id: 45, name: 'Muhammad Ali', role: 'client', gender: 'male', age: 11},
    {id: 3, name: 'Rose Ogene', role: 'designer', gender: 'female', age: 21},
]

function showPerson(person){
    console.dir(person);
    let personWindow = document.getElementById("person");
    personWindow.innerText = `name: ${person.name}\n role: ${person.role}`;
}

// Serverside
let getPersonButtonServer = document.getElementById("get-person-serverside");

function zenci(event){
    let person = this.response;
    showPerson(person);
}

function getPersonButtonServerClicked(event){
    console.log("Second Button");
    let request = new XMLHttpRequest();
    request.open("GET", "persons.php");
    request.responseType = "json";
    request.onload = zenci;

    request.send();

    // showPerson(persons[1]);
}

getPersonButtonServer.onclick = getPersonButtonServerClicked;

// Client
let getPersonButton = document.getElementById("get-person");

function getPersonButtonClicked(event){
    console.log("Clicked");
    showPerson(persons[0]);
}

getPersonButton.onclick = getPersonButtonClicked;
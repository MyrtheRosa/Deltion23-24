let error1 = false;
let error2 = false;

function Button() {
    const button = document.getElementById("submitbutton");

    if (error1 || error2) {
        button.disabled = true
    } else {
        button.disabled = false
    }
}

function Name() {
    console.log("test");
    const naam = document.getElementById("naam");
    if (naam.value.length < 3 || naam.value.length > 50) {
        naam.style.backgroundColor = 'tomato';
        const errorbox1 = document.getElementById("errorbox1");
        errorbox1.innerHTML = "* Uw naam moet uit minimaal 3 tekens bestaan en max. 50";
        error1 = true
    } else {
        naam.style.backgroundColor = 'lightgreen';
        errorbox1.innerHTML = "";
        error1 = false
    }

    Button()
}

function Year() {
    console.log("testtest");
    const jaar = document.getElementById("jaar");
    if (jaar.value < 1940 || jaar.value > 2024) {
        jaar.style.backgroundColor = 'tomato';
        const errorbox2 = document.getElementById("errorbox2");
        errorbox2.innerHTML = "* Het jaartal moet tussen 1940 en 2024 liggen";
        error2 = true
    } else {
        jaar.style.backgroundColor = 'lightgreen';
        errorbox1.innerHTML = "";
        error2 = false
    }

    Button()
}


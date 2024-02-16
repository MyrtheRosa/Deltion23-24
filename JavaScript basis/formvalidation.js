function firstname() {
    console.log("test1");
    const fname = document.getElementById("fname");
    if (fname.value.length === 0) {
        fname.style.backgroundColor = 'tomato';
        const errorbox1 = document.getElementById("errorbox1");
        errorbox1.innerHTML = "* U moet uw voornaam invullen";
    } else {
        fname.style.backgroundColor = 'lightgreen';
        errorbox1.innerHTML = "";
    }
}

function lastname() {
    console.log("test2");
    const lname = document.getElementById("lname");
    if (lname.value.length === 0) {
        lname.style.backgroundColor = 'tomato';
        const errorbox2 = document.getElementById("errorbox2");
        errorbox2.innerHTML = "* U moet uw achternaam invullen";
    } else {
        lname.style.backgroundColor = 'lightgreen';
        errorbox2.innerHTML = "";
    }
}

function adress() {
    console.log("test3");
    const adres = document.getElementById("adres");
    if (adres.value.length === 0) {
        adres.style.backgroundColor = 'tomato';
        const errorbox3 = document.getElementById("errorbox3");
        errorbox3.innerHTML = "* U moet uw adres invullen";
    } else {
        adres.style.backgroundColor = 'lightgreen';
        errorbox3.innerHTML = "";
    }
}

function Postcode() {
    console.log("test4");
    const pc = document.getElementById("pc");
    if (pc.value.length === 0) {
        pc.style.backgroundColor = 'tomato';
        const errorbox4 = document.getElementById("errorbox4");
        errorbox4.innerHTML = "* U moet uw postcode invullen";
    } else {
        pc.style.backgroundColor = 'lightgreen';
        errorbox4.innerHTML = "";
    }
}

function Plaats() {
    console.log("test5");
    const plaats = document.getElementById("plaats");
    if (plaats.value.length === 0) {
        plaats.style.backgroundColor = 'tomato';
        const errorbox5 = document.getElementById("errorbox5");
        errorbox5.innerHTML = "* U moet uw plaats invullen";
    } else {
        plaats.style.backgroundColor = 'lightgreen';
        errorbox5.innerHTML = "";
    }
}




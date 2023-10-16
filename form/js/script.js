function toggleJobDescription() {
    var jobDesc = document.getElementById('jobDescription');
    jobDesc.disabled = !jobDesc.disabled;
}

function validateForm() {
    var name = document.getElementById('name').value;
    var gender = document.querySelector('input[name="gender"]:checked');
    var university = document.getElementById('university').value;
    var birthdate = document.getElementById('birthdate').value;
    var isWorkingStudent = document.getElementById('workingStudent').checked;
    var jobDesc = document.getElementById('jobDescription').value;
    var CAP = document.getElementById('CAP').value;

    if (isNaN(parseInt(birthdate)) || birthdate.length !== 4) {
        alert('L\'anno di nascita deve essere un numero di 4 cifre.');
        return false;
    }

    if (isNaN(parseInt(CAP)) || CAP.length !== 5) {
        alert('Il CAP deve essere un numero di 5 cifre.');
        return false;
    }

    if (!isNaN(parseInt(name))) {
        alert('Il nome non può essere un numero.');
        return false;
    }

    if (name === '') {
        alert('Il campo Cognome e Nome non può essere vuoto.');
        return false;
    }

    if (!gender) {
        alert('Seleziona il Sesso.');
        return false;
    }

    if (university === '') {
        alert('Seleziona un Ateneo.');
        return false;
    }

    if (isWorkingStudent && jobDesc === '') {
        alert('Inserisci una descrizione del lavoro svolto.');
        return false;
    }
    return true;
    
}
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('birthdate').addEventListener('change', function() {
        var birthdate = this.value;
        if (isNaN(parseInt(birthdate)) || birthdate.length !== 4) {
            alert('L\'anno di nascita deve essere un numero di 4 cifre.');
        }
    });

    document.getElementById('CAP').addEventListener('change', function() {
        var CAP = this.value;
        if (isNaN(parseInt(CAP)) || CAP.length !== 5) {
            alert('Il CAP deve essere un numero di 5 cifre.');
        }
    });

    document.getElementById('name').addEventListener('change', function() {
        var name = this.value;
        if (!isNaN(parseInt(name))) {
            alert('Il nome non può essere un numero.');
        }
    });
});


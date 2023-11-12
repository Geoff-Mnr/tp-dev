import './bootstrap';



// Générer une référence automatique
document.addEventListener('DOMContentLoaded', function () {
    var referenceInput = document.getElementById('reference');
    if (referenceInput) {
        var generatedReference = 'REF-' + generateUniqueNumber();
        referenceInput.value = generatedReference;
    }
});

function generateUniqueNumber() {
    var timestamp = new Date().getTime();
    var uniqueNumber = timestamp % 10000;
    return ('000' + uniqueNumber).slice(-4);
}

fetch('https://restcountries.com/v3.1/all')
            .then(response => response.json())
            .then(data => {
                const select = document.getElementById('countries');
                data.sort((a, b) => a.name.common.localeCompare(b.name.common)) // Trier par nom
                    .forEach(country => {
                        const option = document.createElement('option');
                        option.value = country.cca2; // Code ISO du pays
                        option.textContent = country.name.common; // Nom du pays
                        select.appendChild(option);
                    });
            })
            .catch(error => console.error('Erreur lors du chargement des pays :', error));



function formatNumber(input) {
    let value = input.value.replace(/\D/g, '');
    input.value = value.replace(/(\d{4}) (?=\d)/g, '$1 ');
}

function formatdate(input) {
    let value = input.value.replace(/\D/g, '');
    if (value.length > 2) {
        value = value.substring(0, 2) + '/' + value.substring(2, 4);
    }
    input.value = value.substring(0, 5);
}
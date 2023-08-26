import 'bootstrap';

var region = document.getElementById('region');
var provincia = document.getElementById('provinces')

region.addEventListener('change', function(){
    var regionValue = region.value;
    provincia.innerHTML="<label for='province' class='form-label'>Provincia</label> <select class='form-select mb-3 capitalize @error('province') is-invalid @enderror' aria-label='Default select example' id='province' name='province'>"
    var select = document.getElementById('province')
    var citta = document.createElement('option')
    citta.innerText = "Seleziona la tua provincia"
    select.appendChild(citta)
    provinces.forEach(province => {
        if(province['region'] === regionValue){
            var citta = document.createElement('option')
            citta.id = (province['id'])
            citta.setAttribute('name', 'province')
            citta.setAttribute('value', province['id'])
            citta.innerText = province['province']
            select.appendChild(citta) 
        }
    });

})

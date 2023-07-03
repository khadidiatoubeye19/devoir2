
const btnSavoirPlus = document.getElementById('btnSavoirPlus');
const btnListe = document.getElementById('btnListe');
const liste = document.getElementById('liste');
let cpt = 1;
btnListe.addEventListener('click', () => {
    cpt++;
    if (cpt % 2 == 0) {
        liste.removeAttribute('hidden');
    }else{
        liste.setAttribute('hidden',"");
    }

});

const piechart = document.querySelector('#piechart');
console.log(piechart);

btnSavoirPlus.addEventListener('click', () => {
    cpt++;
    if (cpt % 2 == 0) {
        console.log(cpt);
        piechart.setAttribute('hidden',"");
    }else{
        piechart.removeAttribute('hidden');
    }
});

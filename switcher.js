const individual = document.getElementById('individual')
const entity = document.getElementById('entity')
const contNumb = document.getElementById('contnumb')

individual.addEventListener('click', (e) => {
    e.preventDefault();
    if (e.target.classList[1] !== 'active') {
        entity.classList.remove('active')
        e.target.classList.add('active')
        contNumb.setAttribute('id', 'contnumb')
    }
})

entity.addEventListener('click', (e) => {
    e.preventDefault();
    if (e.target.classList[1] !== 'active') {
        individual.classList.remove('active')
        e.target.classList.add('active')
        contNumb.removeAttribute('id');
    }
})

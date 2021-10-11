// Variables
const cart = document.getElementById('cart');
const cursos = document.getElementById('list-cursos');
const listCursos = document.querySelector('#list-cart tbody');
const vacatecartBtn = document.getElementById('vacate-cart');


// Listeners
cargarEventListeners();
function cargarEventListeners() {
  // Dispara cuando se presiona "add cart"
  cursos.addEventListener('click', comprarCurso);
  // Cuando se elimina un curso del cart
  cart.addEventListener('click', eliminarCurso);
  // Al vacate el cart
  vacatecartBtn.addEventListener('click', vacatecart);
  // Al cargar el documento, mostrar LocalStorage
  document.addEventListener('DOMContentLoaded', leerLocalStorage);
}

// Funciones
// Función que añade el curso al cart
function comprarCurso(e) {
  e.preventDefault();
  // Delegation para add-cart
  if(e.target.classList.contains('add-cart')) {
    const curso = e.target.parentElement.parentElement;
    // Enviamos el curso seleccionado para tomar sus datos
    leerDatosCurso(curso);
  }
}

// Lee los datos del curso
function leerDatosCurso(curso) {
  const infoCurso = {
    imagen: curso.querySelector('img').src,
    titulo: curso.querySelector('h4').textContent,
    precio: curso.querySelector('.discount').textContent,
    id: curso.querySelector('a').getAttribute('data-id')
  }
  insertarcart(infoCurso);
}

// Muestra el curso seleccionado en el cart
function insertarcart(curso) {
  const row = document.createElement('tr');
  row.innerHTML = `
  <td>
  <img src="${curso.imagen}" width=100>
  </td>
  <td>${curso.titulo}</td>
  <td>${curso.precio}</td>
  <td>
  <a href="#" class="borrar-curso" data-id="${curso.id}">X</a>
  </td>
  `;
  listCursos.appendChild(row);
  guardarCursoLocalStorage(curso);
}

// Elimina el curso del cart en el DOM
function eliminarCurso(e) {
  e.preventDefault();
  let curso,
      cursoId;
  if(e.target.classList.contains('borrar-curso') ) {
    e.target.parentElement.parentElement.remove();
    curso = e.target.parentElement.parentElement;
    cursoId = curso.querySelector('a').getAttribute('data-id');
  }
  eliminarCursoLocalStorage(cursoId);
}

// Elimina los cursos del cart en el DOM
function vacatecart() {
  // forma lenta
  // listCursos.innerHTML = '';
  // forma rapida (recomendada)
  while(listCursos.firstChild) {
    listCursos.removeChild(listCursos.firstChild);
  }

  // vacate Local Storage
  vacateLocalStorage();
  return false;
}

// Almacena cursos en el cart a Local Storage
function guardarCursoLocalStorage(curso) {
  let cursos;
  // Toma el valor de un arreglo con datos de LS o vacio
  cursos = obtenerCursosLocalStorage();
  // el curso seleccionado se agrega al arreglo
  cursos.push(curso);
  localStorage.setItem('cursos', JSON.stringify(cursos) );
}

// Comprueba que haya elementos en Local Storage
function obtenerCursosLocalStorage() {
  let cursosLS;
  // comprobamos si hay algo en localStorage
  if(localStorage.getItem('cursos') === null) {
    cursosLS = [];
  } else {
    cursosLS = JSON.parse( localStorage.getItem('cursos') );
  }
  return cursosLS;
}

// Imprime los cursos de Local Storage en el cart
function leerLocalStorage() {
  let cursosLS;
  cursosLS = obtenerCursosLocalStorage();
  cursosLS.forEach(function(curso){
  // constrir el template
  const row = document.createElement('tr');
  row.innerHTML = `
  <td>
  <img src="${curso.imagen}" width=100>
  </td>
  <td>${curso.titulo}</td>
  <td>${curso.precio}</td>
  <td>
  <a href="#" class="borrar-curso" data-id="${curso.id}">X</a>
  </td>
  `;
  listCursos.appendChild(row);
  });
}

// Elimina el curso por el ID en Local Storage
function eliminarCursoLocalStorage(curso) {
  let cursosLS;
  // Obtenemos el arreglo de cursos
  cursosLS = obtenerCursosLocalStorage();
  // Iteramos comparando el ID del curso borrado con los del LS
  cursosLS.forEach(function(cursoLS, index) {
    if(cursoLS.id === curso) {
      cursosLS.splice(index, 1);
    }
  });
  // Añadimos el arreglo actual a storage
  localStorage.setItem('cursos', JSON.stringify(cursosLS) );
}

// Elimina todos los cursos de Local Storage
function vacateLocalStorage() {
  localStorage.clear();
}

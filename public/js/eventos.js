// Esperamos a que el documento HTML esté completamente cargado antes de ejecutar cualquier código
document.addEventListener('DOMContentLoaded', function () {

    // === Evento para generar tabla de multiplicar ===
    const btnMult = document.getElementById('btnMultiplicar'); // Referencia al botón de multiplicar
    if (btnMult) { // Verificamos si el botón existe (para evitar errores si la vista no lo tiene)
        btnMult.addEventListener('click', function () { // Cuando se hace clic en el botón
            const numero = parseInt(document.getElementById('numero').value); // Obtenemos el valor ingresado y lo convertimos a entero
            const lista = document.getElementById('resultado'); // Obtenemos la lista donde mostraremos la tabla
            lista.innerHTML = ""; // Limpiamos el contenido anterior de la lista

            if (!isNaN(numero)) { // Verificamos que el número sea válido
                for (let i = 1; i <= 10; i++) { // Recorremos del 1 al 10
                    const li = document.createElement('li'); // Creamos un nuevo elemento de lista
                    li.className = "list-group-item"; // Le aplicamos clase Bootstrap para estilo
                    li.textContent = `${numero} x ${i} = ${numero * i}`; // Asignamos el contenido del ítem
                    lista.appendChild(li); // Agregamos el ítem a la lista
                }
            } else {
                alert("Por favor, ingresa un número válido."); // Mensaje si el input no es un número
            }
        });
    }

    // === Evento para calcular potencias ===
    const btnPotencia = document.getElementById('btnPotencia'); // Referencia al botón de calcular potencia
    if (btnPotencia) { // Verificamos que el botón exista
        btnPotencia.addEventListener('click', function () { // Al hacer clic en el botón
            const base = parseFloat(document.getElementById('base').value); // Obtenemos la base como número decimal
            const exp = parseInt(document.getElementById('exponente').value); // Obtenemos el exponente como número entero
            const resultado = document.getElementById('resultadoPotencia'); // Referencia al div donde mostraremos el resultado

            if (!isNaN(base) && !isNaN(exp)) { // Verificamos que ambos valores sean válidos
                resultado.textContent = `Resultado: ${base} ^ ${exp} = ${Math.pow(base, exp)}`; // Calculamos y mostramos la potencia
            } else {
                resultado.textContent = "Por favor ingresa números válidos."; // Mensaje si hay valores inválidos
            }
        });
    }

});

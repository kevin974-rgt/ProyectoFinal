// Esperamos a que el documento esté completamente cargado
document.addEventListener('DOMContentLoaded', function () {

    // Evento para generar tabla de multiplicar
    const btnMult = document.getElementById('btnMultiplicar');
    if (btnMult) {
        btnMult.addEventListener('click', function () {
            const numero = parseInt(document.getElementById('numero').value);
            const lista = document.getElementById('resultado');
            lista.innerHTML = "";

            if (!isNaN(numero)) {
                for (let i = 1; i <= 10; i++) {
                    const li = document.createElement('li');
                    li.className = "list-group-item";
                    li.textContent = `${numero} x ${i} = ${numero * i}`;
                    lista.appendChild(li);
                }
            } else {
                alert("Por favor, ingresa un número válido.");
            }
        });
    }

    // Evento para calcular potencias
    const btnPotencia = document.getElementById('btnPotencia');
    if (btnPotencia) {
        btnPotencia.addEventListener('click', function () {
            const base = parseFloat(document.getElementById('base').value);
            const exp = parseInt(document.getElementById('exponente').value);
            const resultado = document.getElementById('resultadoPotencia');

            if (!isNaN(base) && !isNaN(exp)) {
                resultado.textContent = `Resultado: ${base} ^ ${exp} = ${Math.pow(base, exp)}`;
            } else {
                resultado.textContent = "Por favor ingresa números válidos.";
            }
        });
    }

});

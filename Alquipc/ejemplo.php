<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Precios</title>
    <script>
        function calcularPrecio() {
            var precioBase = parseFloat(document.getElementById("precioBase").value);
            var ciudad = document.getElementById("ciudad").value;

            if (ciudad === "fuera") {
                var precioFinal = precioBase * 1.05; // Aumento del 5%
            } else if (ciudad === "dentro") {
                var precioFinal = precioBase * 0.95; // Descuento del 5%
            } else {
                var precioFinal = precioBase; // Sin cambios
            }

            document.getElementById("precioFinal").innerHTML = "Precio final: $" + precioFinal.toFixed(2);
        }
    </script>
</head>
<body>
    <h1>Calculadora de Precios</h1>
    
    <label for="precioBase">Precio base del producto: $</label>
    <input type="number" id="precioBase" step="0.01"><br>
    
    <label for="ciudad">Seleccione la ubicación:</label>
    <select id="ciudad">
        <option value="fuera">Fuera de la ciudad (+5%)</option>
        <option value="dentro">Dentro de la ciudad (-5%)</option>
    </select><br>

    <button onclick="calcularPrecio()">Calcular Precio</button>
    
    <p id="precioFinal"></p>
</body>
</html>
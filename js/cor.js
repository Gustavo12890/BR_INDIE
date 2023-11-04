var hexColorInput = document.getElementById('hex_input');
var colorSelector = document.getElementById('cor');


var updateHex = function () {
    hexColorInput.value = colorSelector.value;
};

updateHex();

colorSelector.addEventListener('input', updateHex);

function updateSelector() {
    var val = hexColorInput.value;
    // Adicione o '#' se ausente
    if (val.charAt(0) !== '#') val = '#' + val;

    // Expanda uma cor deste tamanho: fff
    if (val.length === 4) {
        var red = val.charAt(1);
        red += red;
        var green = val.charAt(2);
        green += green;
        var blue = val.charAt(3);
        blue += blue;

        val = '#' + red + green + blue;
    }

    colorSelector.value = val;
}

['cut', 'keyup', 'paste'].forEach(function(evt) {
    hexColorInput.addEventListener(evt, updateSelector);
});
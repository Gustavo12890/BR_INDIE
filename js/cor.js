var colorPickers = document.getElementById('color-pickers');
var hexInputs = colorPickers.querySelectorAll('.hex-input');
var colorSelectors = colorPickers.querySelectorAll('.color-selector');

var updateHex = function () {
    hexInputs.forEach(function (hexInput, index) {
        hexInput.value = colorSelectors[index].value;
    });
};

updateHex();

colorSelectors.forEach(function (colorSelector) {
    colorSelector.addEventListener('input', updateHex);
});

function updateSelector() {
    hexInputs.forEach(function (hexInput, index) {
        var val = hexInput.value;

        if (val.charAt(0) !== '#') val = '#' + val;

        if (val.length === 4) {
            var red = val.charAt(1);
            red += red;
            var green = val.charAt(2);
            green += green;
            var blue = val.charAt(3);
            blue += blue;

            val = '#' + red + green + blue;
        }

        colorSelectors[index].value = val;
    });
}

hexInputs.forEach(function (hexInput) {
    ['cut', 'keyup', 'paste'].forEach(function (evt) {
        hexInput.addEventListener(evt, updateSelector);
    });
});
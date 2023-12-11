window.onload = function () {
    const questions = ['titular_poseedor', 'beneficiario_planes_vivienda', 'creditos_hipotecarios', 'abonar_inmueble_cuotas'];

    questions.forEach(function (question) {
        const checkboxSi = document.getElementById(question + '_si');
        const checkboxNo = document.getElementById(question + '_no');

        checkboxSi.addEventListener('click', function () {
            if (this.checked) {
                checkboxNo.checked = false;
            }
        });

        checkboxNo.addEventListener('click', function () {
            if (this.checked) {
                checkboxSi.checked = false;
            }
        });
    });

    // Validación de casillas de verificación NO y SÍ
    document.querySelector('form').addEventListener('submit', function(event) {
        var checkboxesNo = questions.slice(0, -1).map(question => document.getElementById(question + '_no'));
        var allNoChecked = checkboxesNo.every(checkbox => checkbox.checked);

        var lastCheckboxSi = document.getElementById(questions[questions.length - 1] + '_si');

        if (!allNoChecked || !lastCheckboxSi.checked) {
            event.preventDefault();
            if (!allNoChecked) {
                alert('Debe marcar las primeras casillas de verificación como NO');
            } else if (!lastCheckboxSi.checked) {
                alert('Debe marcar la última casilla de verificación como SÍ');
            }
        }
    });
};
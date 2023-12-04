window.onload = function() {
    const questions = ['titular_poseedor', 'beneficiario_planes_vivienda', 'creditos_hipotecarios', 'abonar_inmueble_cuotas'];

    questions.forEach(function(question) {
        const checkboxSi = document.getElementById(question + '_si');
        const checkboxNo = document.getElementById(question + '_no');

        checkboxSi.addEventListener('change', function() {
            checkboxNo.disabled = this.checked;
        });

        checkboxNo.addEventListener('change', function() {
            checkboxSi.disabled = this.checked;
        });
    });
};
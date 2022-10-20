

/* Son los botones para ocultar o mostrar  la casilla de subir archivo */
const btn_medico = document.getElementById('medico');
const btn_paciente = document.getElementById('paciente');

/* Muestra la casilla de subir archivo */
const medico_form = document.getElementById('medico-form');

/* Asigna si es medico o paciente */
const credential = document.getElementById('credential');

/* Es para agregar el atributo required cuando el formulario se cambie a medico */
const filerequired = document.getElementById('dropzone-file');


btn_medico.addEventListener('click', function(e) {

    medico_form.classList.remove('hidden');
    medico_form.classList.add('block');

    /* Credencial de medico */
    credential.value = 1;

    /* Activa la casilla de required para que el paciente suba sus archivos a fuerzas */
    filerequired.required = true;
    console.log(credential.value);
});

btn_paciente.addEventListener('click', function(e) {

    medico_form.classList.remove('block');
    medico_form.classList.add('hidden');

    /* Credencial de paciente */
    credential.value = 0;

    /* Quita la casilla de required para que el paciente pueda crear una cuenta */
    filerequired.required = false;
    console.log(credential.value);
});



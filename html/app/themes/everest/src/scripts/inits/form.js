import axios from "axios";

window.addEventListener('load', function() {
    const modalForm = document.querySelector('#modalForm');
    console.log(modalForm)
    if (modalForm) {
        listenForm(modalForm, 1)
    }
})

function listenForm (form, formId) {
    form.addEventListener('submit', (e)=> {
         e.preventDefault();
        const formWrapper = form.closest('.form-wrapper');
        const inputs = document.querySelectorAll(`input[form="${form.id}"],textarea[form="${form.id}"]`);
        formWrapper.classList.add('sending');
        inputs.forEach(item=>{
            item.closest('.input-root').classList.remove('input-field_error');
            item.closest('.input-root').querySelector('.error-message').innerText = '';
        })

        const formElement = e.target,
            body = new FormData(formElement);
        axios({
            method: 'post',
            url: `/wp-json/gf/v2/forms/${formId}/submissions`,
            data: body
        })
            .then(data => {
                console.log(data)
            })
            .catch(error=> {
                for (let message in error.response.data.validation_messages) {
                    let input = document.querySelector(`input[data-input-id="${message}"]`);
                    if (!input) {
                        input = document.querySelector(`textarea[data-input-id="${message}"]`);
                    }
                    let inputParent = input.parentElement;
                    const errorField = inputParent.querySelector('.error-message');
                    inputParent.classList.add('input-field_error');
                    errorField.innerText = error.response.data.validation_messages[message];
                }
            })
            .finally(()=> {
                formWrapper.classList.remove('sending');
                yaCounter56629294.reachGoal('form_' + formId);
            })
    })
}

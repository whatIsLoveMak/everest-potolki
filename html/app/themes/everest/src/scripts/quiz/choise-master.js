import actionForm from "./actionForm";
import Inputmask from "inputmask";

function choiseMaster(form){
    if(document.querySelector(form)){
        const currentForm    = document.querySelector(form),                          // current form
              startBtn       = document.querySelector('#chMasStartBtn'),
              prevBtn        = document.querySelector('#chMasPrevBtn'),
              nextBtn        = document.querySelector('#chMasNextBtn'),
              navigate       = document.querySelector('.form-navigate'),      // tabs navigation
              step           = document.querySelector('.form-steps'),
              counter        = document.querySelectorAll('.form-tab-count'),
              tabsContainer  = document.querySelector('.form-tabs'),
              tabs           = document.querySelectorAll(".form-tab"),
              errorWrap      = document.querySelector(".form-errors");

        let phoneMask = new Inputmask({
            mask: "+7 (999) 999 9999",
            showMaskOnHover: false,
        });

        tabsContainer.addEventListener('click', (e) => {
            tabsContainer.childNodes.forEach((tab) => {
                // check active tab
                if(tab.classList && tab.classList.contains('active-tab')){
                    let activeInputs = tab.querySelectorAll('.form-tab__input'); // radio wrappers
                    if(activeInputs){
                        activeInputs.forEach((input) => {
                            // check radio wrapper == target
                            if(e.target == input){
                                input.childNodes.forEach((inpt) => {
                                    // if radio wrapper clicked radio input = checked
                                    if(inpt.nodeName === 'INPUT' && inpt.type === 'checkbox'){
                                        inpt.checked = true;
                                    }
                                })
                            }
                        })
                    }
                }
            });
        })


        prevBtn.addEventListener('click', () => { nextPrev(-1) });
        nextBtn.addEventListener('click', () => { nextPrev(1) });
        startBtn.addEventListener('click', () => { nextPrev(1) });

        PostData(currentForm);

        let currentTab = 0;
        showTab(currentTab);

        function showTab(tabInd) {
            tabs[tabInd].classList.add('active-tab');
            errorWrap.remove();
            navigate.remove();

            // show buttons and steps for tabs > 0
            if (tabInd == 0) {
                prevBtn.style.display = "none";
                nextBtn.style.display = "none";
                startBtn.style.display = "flex";
                step.style.display = "block";
                let tabCont    = tabs[tabInd].querySelector('.form-tab__content');
                tabCont.append(navigate);
            }
            else {
                // append form steps and buttons in active tab
                if(tabs[tabInd].querySelector('.form-tab__content-top')){
                    let tabCont    = tabs[tabInd].querySelector('.form-tab__content');
                    let tabContTop = tabs[tabInd].querySelector('.form-tab__content-top');
                    tabContTop .append(errorWrap);
                    tabCont.append(navigate);
                }

                prevBtn.style.display = "flex";
                nextBtn.style.display = "flex";
                startBtn.style.display = "none";
                step.style.display = "block";
            }

            // hide navigate for last 2 tabs
            // if (tabInd == (tabs.length - 1) || tabInd == (tabs.length - 2)) {
            //     navigate.style.display = "none";
            // }

            // add phone mask
            if(tabs[tabInd].querySelector('input[type="tel"]')){
                phoneMask.mask(tabs[tabInd].querySelector('input[type="tel"]'));
            }

            // change step
            showCurrentStep(tabInd);
        }
        function showCurrentStep(tab) {
            if(tab != 0 && tab != (tabs.length - (1||2) )){
                step.textContent = `Вопрос ${currentTab}/${counter.length}`;
            }
        }

        // change tabs
        function nextPrev(n) {
            // no changed tab if invalid data
            if (n == 1 && !validateForm()) { return false; }


            // hide current tab
            tabs[currentTab].classList.remove('active-tab');

            // change number for current tab
            currentTab += n;

            showTab(currentTab);
            if(window.matchMedia('(max-width: 575px)').matches){
                if(n == 1 && currentTab == 1){
                    tabs[currentTab].querySelector('.form-tab__content').classList.add('show-cont-anim');
                    tabs[currentTab].parentElement.classList.add('tab-max-height');
                    setTimeout(() => {
                        tabs.forEach((tab) => {
                            if(tab.querySelector('.form-tab__content')){
                                tab.querySelector('.form-tab__content').classList.remove('show-cont-anim');
                            }
                            tab.parentElement.classList.remove('tab-max-height');
                        })
                    }, 200)
                }
                else {
                    tabs[currentTab].querySelector('.form-tab__content').classList.remove('show-cont-anim');
                    tabs[currentTab].parentElement.classList.remove('tab-max-height');
                }
            }

        }

        function addInvalidClass(elem){
            elem.classList.remove('invalid');
            setTimeout(() => {
                elem.classList.add('invalid');
            }, 5)
        }

        function validateForm() {
            let tabInputs, tabRadio, valid = true;

            tabRadio = tabs[currentTab].querySelectorAll("input[type='checkbox']");
            tabInputs = tabs[currentTab].querySelectorAll("input:not([type='checkbox'])");
            // check radio inputs
            if(tabRadio.length){
                let isRadioChecked = true;
                tabRadio.forEach((input) => {
                    if(input.tagName === 'INPUT' && input.checked){
                        isRadioChecked = true;
                    }
                });
                valid = isRadioChecked;

                if(!valid){ addInvalidClass(tabs[currentTab])}
                else { tabs[currentTab].classList.remove('invalid') }
            }
            // check text and checkbox inputs
            if(tabInputs.length){
                let inptName        = true,
                    inptTel         = true,
                    inpts           = true,
                    inptPolitics    = true;


                tabInputs.forEach((input) => {
                    let   name    = input.getAttribute('type') === 'text',
                          tel     = input.getAttribute('type') === 'tel',
                          value   = input.value;

                    if(name || tel){
                        if(name &&
                                    (value == ""       ||
                                     value.length < 2  ||
                                     value.length > 40 ||
                                     value.replace(/[A-Za-zА-Яа-я\s]/g, '').trim().length)) {

                            addInvalidClass(input.parentElement);
                            inptName = false;
                        }
                        else if (tel && (value == "" || value.replace(/\D/g, '').length < 11)){
                            addInvalidClass(input.parentElement);
                            inptTel = false;
                        }
                        else {
                            input.parentElement.classList.remove('invalid');
                            if(name){ inptName = true }
                            if(tel){ inptTel = true }
                        }
                    }
                    else if(input.getAttribute('type') === 'checkbox') {
                        if (!input.checked) {
                            addInvalidClass(input.parentElement);
                            inptPolitics = true;
                        }
                        else {
                            input.parentElement.classList.remove('invalid');
                            inptPolitics = true;
                        }
                    }
                });

                inpts = (inptName && inptTel) ? true : false;
                valid = (inpts && inptPolitics) ? true : false;
            }

            return valid;
        }
        function validateTextOnSubmit(form){
            if(form.querySelector('input[type="text"]')){
                form.querySelectorAll('input[type="text"]').forEach((input) => {
                    input.value = input.value.trim();
                })
            }
        }
        // sending data
        function PostData(form){
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                validateTextOnSubmit(form);

                let formAction = new actionForm(form)
                const data = new URLSearchParams(formAction.serializeData)

                data.set('action', form.dataset.action);
                data.set('site', form.dataset.url);

                if(validateForm()){

                    fetch(data.get('action'), {
                        method: 'POST',
                        body: data
                    }).then(response => {
                        response.text()
                    }).then(response => {
                        form.reset();
                    });

                    nextPrev(1);
                }
            });
        }
        
    }
}
choiseMaster('#form-choise-masters');
let bodyAfterSubmit = document.querySelector('.form-tab_after-submit');
let closeButtonAfterSubmit = document.querySelector('.tab-after-submit__close');
closeButtonAfterSubmit.addEventListener('click', function(){
    bodyAfterSubmit.style.display = 'none';
})
let buttonStart = document.getElementById('chMasStartBtn');
let nextBtn = document.getElementById('chMasNextBtn');
let prevBtn = document.getElementById('chMasPrevBtn');
let saleSpan = document.querySelector('.form-sale span');
let arr = saleSpan.innerHTML.split('');
let steps = document.querySelector('.form-steps');
let steparr = steps.innerHTML.split('');

buttonStart.addEventListener('click', function(){
    arr[0] = '500';
    saleSpan.innerHTML = arr.join('');
    steparr[7] = Number(steparr[7])+1;
    steps.innerHTML = steparr.join('');
})
nextBtn.addEventListener('click', function(){
    let num = Number(arr[0]);
    num+=500;
    arr[0] = num;
    saleSpan.innerHTML = arr.join('');
    steparr[7] = Number(steparr[7])+1;
    steps.innerHTML = steparr.join('');
});
prevBtn.addEventListener('click', function(){
    let num = Number(arr[0]);
    num-=500;
    arr[0] = num;
    saleSpan.innerHTML = arr.join('');
    steparr[7] = Number(steparr[7])-1;
    steps.innerHTML = steparr.join('');
});



//console.log(steparr);
function changeStep(){
    
}
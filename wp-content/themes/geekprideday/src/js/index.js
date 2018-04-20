import 'bootstrap';
import 'jquery';

//Require SASS
import './../scss/index.scss';
import './../scss/colors.scss';

console.log('init');
window.onload = function(){
    console.log('Website loaded');
    let rsvpEvent = document.querySelector('.left-triangle-holder');
    let icon = document.querySelector('.triangle-bottomleft');
    let rsvpForm = document.querySelector('.row-form-delay');
    rsvpEvent.addEventListener('click', function(){
        console.log('Elm clicked!!');
        toggleClass(icon,'opened');
        
        let timeForm = setTimeout(form, 400);
        function form() {
            showForm(rsvpForm, 'ocult-form')
        }
    });
    
    let iconX = document.querySelector('.row-icon-x');
    iconX.addEventListener('click', function(){
        toggleClass(icon,'opened');
        showForm(rsvpForm, 'ocult-form')
    });
}

function toggleClass(elm, className){
    console.log('Toggle class!!');
    if(elm.classList.contains(className)) elm.classList.remove(className);
    else elm.classList.add(className);
}

function showForm(elem, className){
    if(elem.classList.contains(className)) elem.classList.remove(className);
    else elem.classList.add(className);
}
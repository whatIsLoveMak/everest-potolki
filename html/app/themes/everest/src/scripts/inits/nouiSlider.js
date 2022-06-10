import * as noUiSlider from 'nouislider';
import 'nouislider/dist/nouislider.css';

var slider = document.getElementById('slider-round');
let square = document.getElementById('tab-hair-blonde');
noUiSlider.create(slider, {
    start: 30,
    connect: true,
	tooltips: true,
	step: 1,
    range: {
        'min': 1,
        'max': 100
    }
});

// point.addEventListener('change',function(){
// 	square.value = point;
// })
let point = document.querySelector('.noUi-tooltip').innerHTML;
point = Math.round(Number(point));
document.addEventListener('DOMContentLoaded', function(){
	slider.noUiSlider.on('update', function (values, handle) {
		let point = document.querySelector('.noUi-tooltip').innerHTML;
		point = Math.round(Number(point));
		square.value = point;
		
	});
	
	
})
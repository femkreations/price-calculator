// JavaScript Document

(function() {
"use strict";

var state = document.getElementById("id_state");

document.addEventListener('DOMContentLoaded', function(){

	document.getElementById('cart_custom').addEventListener('submit', estimateTotal);

	var v_btn_estimate = document.getElementById('btn_estimate');

	v_btn_estimate.disabled = true;


	state.addEventListener('change', function(){

		if(state.value === ''){
			v_btn_estimate.disabled = true;
			console.log("True");
		}
		else{
			v_btn_estimate.disabled = false;
			console.log("False");
		}

	});

});



function estimateTotal(event) {
	event.preventDefault();
	
	if( state.value === ''){
		alert('Please select the state you want to send your shipment');
		state.focus();
	}

	var sneakers = parseInt(document.getElementById("bb_sneakers").value, 10 )|| 0;
	var jersey = parseInt(document.getElementById("a_jersey").value, 10 )|| 0;
	var supple = parseInt(document.getElementById("p_supple").value, 10 )|| 0;
	var water = parseInt(document.getElementById("m_water").value, 10 )|| 0;
	
	console.log(water);

	var state_index = state.value;

	var shipping = document.querySelector('input[name=ship]:checked').value || '';

	var special_gift = document.getElementById("gift").checked;
	var special_mailing = document.getElementById("mailing").checked;
	var special_recipes = document.getElementById("recipes").checked;

	var t_message = document.getElementById("message").value;
	
	var shippingCostPer,
		totalShippingCost, 
		taxFactor = 1,
		totalItemPrice, 
		estimate;
	
	var t_quantity = sneakers + jersey + supple + water;
	totalItemPrice = (sneakers * 90 ) + (jersey * 25) + (supple * 30) + (water * 4);

	if (state.value === 'CA'){
		taxFactor = 1.075;
	}
	else if(state.value ==='WA'){
		taxFactor = 1.065;	
	}

	switch(shipping){
		case 'us':
			shippingCostPer = 2;
			break;
		case 'ups':
			shippingCostPer = 3;	
			break;
		default :
			shippingCostPer = 0;
			break;
	}

	totalShippingCost = shippingCostPer * t_quantity;
	
	estimate = '$' +((totalItemPrice * taxFactor ) + totalShippingCost).toFixed(2);
	
	document.getElementById('total_estimate').value=estimate;

	var result_html = document.getElementById('results');

	result_html.innerHTML = 'Total Item: ' + t_quantity + '<br>';
	result_html.innerHTML +='Total Shipping: $' + totalShippingCost.toFixed(2) + '<br>';
	result_html.innerHTML +='Tax:' + (( taxFactor - 1 )*100).toFixed(2) + '%';
	
	result_html.innerHTML +='(State:'  + state_index + ')';
	


	

}

})();





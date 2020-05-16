
var number1_element = document.getElementById("num1"); //Getting elements from the DOM
var number2_element = document.getElementById("num2");

function divideThem(){
alert("I have been clicked...lol!");
  var number1 = number1_element.value;
  var number2 = number2_element.value;

  let result = number1/number2;

  var results_h4 = document.getElementById("results");//Modifying elements from the DOM
  results_h4.innerText= result;
}

import Calculator from "./calculator.js";
import UI from "./ui.js";
const num1 = document.querySelector(".num1");
const num2 = document.querySelector(".num2");
const operator = document.querySelector("select");
const btn = document.querySelector("button");
// const htmlDiv = document.querySelector(".result");


btn.addEventListener("click", calculateResult);
function calculateResult() {

    const calculator = new Calculator(+num1.value, parseInt(num2.value), operator.value);
    const result = calculator.calculate();


    document.querySelector(".result").insertAdjacentHTML("beforeend", result); //res.print()

}
 // const res = new UI(result);
    // res.print();
        // printResult(result);
// function printResult(result) {
//     const res = new UI(result);
//     const html = res.print();
//     // htmlDiv.append(html);
//     htmlDiv.insertAdjacentHTML("beforeend", html);
// }
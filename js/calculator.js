export default class Calculator {

    num1;
    num2;
    operator;

    constructor(num1, num2, operator) {
        this.num1 = num1
        this.num2 = num2
        this.operator = operator
    }
    calculate() {
        switch (this.operator) {
            case "-":
                return this.num1 - this.num2;
            case "+":
                return this.num1 + this.num2;
            case "*":
                return this.num1 * this.num2;
            case "/":
                return this.num1 / this.num2;
        }



    }

}
export default class UI {
    result;
    constructor(result) {
        this.result = result;
    }
    print() {

        return `<p> ${this.result}</p>`;
    }
}
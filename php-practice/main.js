
// const mongoose = require('mongoose');
// const { stringify } = require('querystring');
// const { boolean } = require('webidl-conversions');


// mongoose.connect('mongodb://localhost:27017/saeed', { useNewUrlParser: true, useUnifiedTopology: true });

// const mydb = mongoose.connection;
// mydb.on('error', console.error.bind(console, 'Connection Error'));
// mydb.once('open', function () {
//     console.log('Connetion open!')
// })
// const listSchema = new mongoose.Schema({
//     name: String,
//     age: Number,
//     tel: Number,
//     isMale: Boolean,
//     id: Number,
// });

// const List = mongoose.model('List', listSchema);
// const hamid = new List({ name: 'Hamid', age: 54, tel: 9123360436, isMale: true, id: 13461129 })


class Set {
    constructor(type, content, append, clas) {
        this.type = type;
        this.content = content;
        this.append = append;
        this.clas = clas;
    } element() {
        const x = document.createElement(this.type);
        x.textContent = this.content;
        this.append.append(x);
        x.classList.add(this.clas);
        return x;
    } img(w, h) {
        this.w = w;
        this.h = h;
        const x = document.createElement("img");
        this.append.appendChild(x);
        x.classList = (this.clas);
        x.setAttribute("src", this.type); x.setAttribute("alt", this.content);
        x.style.width = this.w;
        x.style.height = this.h;

        return x;
    }
}
const mypic = new Set("./gp.jpg", "Stallgatan", document.body, "picClass")
mypic.img("20rem", "14rem");

function setImgElement(srcUrl, srcAlt, klasName, appendTo) {
    const x = document.createElement("img");
    appendTo.appendChild(x);
    x.classList = (klasName);
    x.setAttribute("src", srcUrl); x.setAttribute("alt", srcAlt);
    return x;
}
const myH1 = new Set("h1", "Hello world!", document.body, "myclass");
console.log(myH1);
myH1.element();
function setElement(type, content, append, clas) {
    const x = document.createElement(type);
    x.textContent = content;
    append.append(x);
    x.classList.add(clas);
    return x;
}
// hamid.save();

// hamid.save().then(savedDoc => {
//     savedDoc === hamid; // true
//     console.log("has been saved!");
// });
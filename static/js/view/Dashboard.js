import AbstractView from "./AbstractView.js";
export default class extends AbstractView {
    constructor (){
        super();
        this.setTitle('Dashboard');
    }
    async getHtml(){
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "event.html", false);
        ajax.send();
        document.body.innerHTML += ajax.responseText;
    }
}
class Log extends HTMLElement {
    connectedCallback() {
        this.textContent = "Tits";
    }
}

customElements.define('Log', Log);
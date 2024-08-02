class HeaderComponent extends HTMLElement {
    connectedCallback() {
      this.innerHTML = `

        

     <script src="mobile.js"></script>

     `;
  }
}

customElements.define('header-component', HeaderComponent);
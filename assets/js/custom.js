class MyHeader extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <header>
          <link rel="stylesheet" href="style.css">
          <nav>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </nav>
        </header>`;
    }
}

customElements.define('my-header', MyHeader);

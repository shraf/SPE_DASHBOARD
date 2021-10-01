 
//  custom header to add to all pages 
 class MyHeader extends HTMLElement {
     connectedCallback(){
         this.innerHTML = `
                <nav class="navbar navbar-expand-lg navbar-dark bg-logo-color fixed-top">
            <div class="container-fluid d-flex justify-content-between">
                <a
                class="btn btn-primary d-xl-none d-lg-none"
                data-bs-toggle="offcanvas"
                href="#offcanvasExample"
                role="button"
                aria-controls="offcanvasExample"
                >
                <span class="navbar-toggler-icon"></span>
                </a>
                <a
                class="navbar-brand sm-text-center ms-2 text-uppercase fw-bold"
                href="index.html"
                ><img src="imgs/logo.png" alt="logo"
                /></a>
                <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#topNavBar"
                aria-controls="topNavBar"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="topNavBar">
                <form class="d-flex ms-auto my-3 my-lg-0">
                    <div class="input-group w-100">
                    <input
                        class="form-control"
                        type="search"
                        placeholder="Search"
                        aria-label="Search"
                    />
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                    </div>
                </form>
                </div>
            </div>
            </nav>
         `
     }
 }

 //  custom offcanvas to add to all pages 
 class MyCanvas extends HTMLElement {
    connectedCallback(){
        this.innerHTML = `
        <div
        class="offcanvas offcanvas-start sidebar-nav bg-logo-color text-white"
        tabindex="-1"
        id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel"
      >
        <button
          type="button"
          class="btn-close text-reset bg-white m-3 me-auto d-lg-none"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
        <div class="offcanvas-body mt-sm-2 poppins">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <!-- header accordion item -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne"
                  aria-expanded="false"
                  aria-controls="flush-collapseOne"
                >
                  header
                </button>
              </h2>
              <div
                id="flush-collapseOne"
                class="accordion-collapse collapse"
                aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample"
              >
                <div class="accordion-body">
                  <a href="nav.html"><div class="btn btn-light">nav</div></a>
  
                  <a href="navImages.html"
                    ><div class="btn btn-light">images</div></a
                  >
                </div>
              </div>
            </div>
            <!-- header accordion item -->
            <!-- Content accordion item -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo"
                  aria-expanded="false"
                  aria-controls="flush-collapseTwo"
                >
                  Content
                </button>
              </h2>
              <div
                id="flush-collapseTwo"
                class="accordion-collapse collapse"
                aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample"
              >
                <div class="accordion-body">
                  <a href="sections.html"
                    ><div class="btn btn-light">sections</div></a
                  >
  
                  <a href="contentImages.html"
                    ><div class="btn btn-light">images</div></a
                  >
                </div>
              </div>
            </div>
            <!-- Content accordion item -->
            <!-- Footer accordion item -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThree"
                  aria-expanded="false"
                  aria-controls="flush-collapseThree"
                >
                  Footer
                </button>
              </h2>
              <div
                id="flush-collapseThree"
                class="accordion-collapse collapse"
                aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample"
              >
                <div class="accordion-body">
                  <a href="copyright.html"
                    ><div class="btn btn-light">copyright</div></a
                  >
                </div>
              </div>
            </div>
            <!-- Footer accordion item -->
          </div>
        </div>
      </div>
        `
    }
}

//  custom footer to add to all pages 
class MyFooter extends HTMLElement {
    connectedCallback(){
        this.innerHTML = `
            <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div
            class="text-center p-3"
            style="background-color: rgba(0, 0, 0, 0.2)"
            >
            © 2020 Copyright:
            <a class="text-dark" href="http://www.spesusc.com/">spesusc.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        `
    }
}

 customElements.define('my-header', MyHeader); // define custom header
 customElements.define('my-offcanvas', MyCanvas); // define custom offcanvas
 customElements.define('my-footer', MyFooter); // define custom offcanvas

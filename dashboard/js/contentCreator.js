const API_PATH = "../api/index.php/index";

  onEditClick=(element_data)=>{
    console.log("editing");
      const file = document.querySelector(`#formFile${data.id}`);
      const img = file.files[0];
      const src = `/css/img/${file.value}`;
      const id = data.id;
      const parent = "carousel";
      const data = `<div class='carousel-item active'><img class='d-block w-100' src='${src}' alt='First slide'></div>`
      const form_data   = {
        parent,
        id,
        src,
        data
      };
      sendPutRequest(form_data);
    
  }


const sendPutRequest=(data)=>{
  const form=new FormData();
  Object.keys(data)
  .map((key,ind)=>form.append(key,data[key]))
  fetch(API_PATH,{
    method:"post",
    body:form
  })
  
}


async function initHeader() {
  const res = await fetchData(API_PATH);
  console.log(res);
  const generated_elements = res.data.filter(el => el.id == "carousel")[0].elements
    .map(el => generateCarouselElm(el));
  console.log(generated_elements);
  generated_elements.forEach(element => pushElementIntoDOM(element, "#carousel"))
  // pushElementIntoDOM(res.data.filter(el=>el.id=="carousel").elements,"carousel")
}

async function init() {
  const res = await fetchData(API_PATH);
  console.log(res);
  res.data.map(element => {
    pushElementIntoDOM(element.elements, element.parent);

  })
}

async function pushElementIntoDOM(element, parent_identifier) {
  const parent = document.querySelector(parent_identifier);
  parent.appendChild(element);
}

function generateCarouselElm(data) {
  const onEditClick=()=>{
    const file = document.querySelector(`#formFile${data.id}`);
    const img = file.files[0];
    const src = `/css/img/slider/crslimg${data.id}`;
    const id = data.id;
    const parent = "carousel";
    const elm_data = `<div class='carousel-item active'><img class='d-block w-100' src='${src}' alt='First slide'></div>`
    const form_data   = {
      _method:"PUT",
      parent,
      id,
      src,
      img,
      data:elm_data,
    };
    sendPutRequest(form_data);
  
}
  console.log(data);
  const element =document.createElement("div");
  element.classList.add("col-md-6","col-xs-12","mb-2","position-relative");
  element.id=`carousel_item${data.id}`;
  element.innerHTML=`<img src='${data.src}' class="img-fluid" alt="..." />
            <!-- Edit Button trigger modal -->
            <div
              class="btn position-absolute bottom-0 start-0 m-2"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal3"
            >
              <i class="fas fa-edit text-white"></i>
            </div>

            <!-- Edit Modal -->
            <div
              class="modal fade"
              id="exampleModal${data.id}"
              tabindex="-1"
              aria-labelledby="exampleModalLabe"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabe${data.id}">image1</h5>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>

                  <div class="modal-body">
                    <img
                      src='${data.src}'
                      class="img-fluid mb-2 text-muted"
                      alt="..."
                    />
                    <div>
                      <label for="formFile" class="form-label"
                        >choose image to change with</label
                      >
                      <input class="form-control" name='img' type="file" id="formFile${data.id}" />
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-bs-dismiss="modal"
                    >
                      Close
                    </button>
                    <button type="button" class="btn btn-primary" name="edt_btn" 
                    >
                      Save changes
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Edit Modal -->
            <!-- Delete Button trigger modal -->
            <div
              class="btn position-absolute bottom-0 end-0 m-2"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal4"
            >
              <i class="far fa-trash-alt text-white"></i>
            </div>

            <!-- Delete Modal -->
            <div
              class="modal fade"
              id="exampleModal4${data.id}"
              tabindex="-1"
              aria-labelledby="exampleModalLabe"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabe${data.id}">
                      Delete image1
                    </h5>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="modal-body">
                    <img
                      src='${data.src}'
                      class="img-fluid mb-2 text-muted"
                      alt="..."
                    />
                    <div class="alert alert-warning">
                      Are you sure to delete image1?
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-bs-dismiss="modal"
                    >
                      Close
                    </button>
                    <button type="button" class="btn btn-danger">
                      yes, Delete
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Delete Modal -->
    
    `
    element.querySelector('button[name="edt_btn"]').addEventListener("click",onEditClick);
  return element
}

async function fetchData(file_path) {
  const response = await fetch(file_path)
  const data = await response.json();
  return data;
}

initHeader();
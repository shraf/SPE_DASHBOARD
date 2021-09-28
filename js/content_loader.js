const API_PATH="./api/index.php/index";
async function init(){
    const res = await fetchData(API_PATH);
    console.log(res);
    res.data.map(element=>{
        pushElementIntoDOM(element.elements, element.parent);

    })
}

async function pushElementIntoDOM(data,parent_identifier){
    console.log(parent_identifier);
    const parent = document.querySelector(parent_identifier);
    parent.innerHtml = data.toString();
}

async function generateElement(){

}

async function fetchData(file_path){
    const response = await fetch(file_path)
    const data = await response.json();
    return data;
}

init();
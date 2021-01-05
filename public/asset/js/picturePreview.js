
function previewFile() {
    let preview = document.querySelector('#img');
    let labelImg = document.querySelector('#labelImg');
    let file = document.querySelector('input[type=file]').files[0];
    let fileName = "Name : " + file.name;
    let reader = new FileReader();

    reader.addEventListener("load", function () {
        preview.src = reader.result;
        labelImg.textContent = fileName;
    }, false);

    if (file) {
        reader.readAsDataURL(file);
    }
}

//
//
//
// function testSplitName() {
//     // let body = document.getElementsByTagName('body');
//     parcNode(document.body);
// }
//
// function parcNode(element) {
//     // Affiche les noeuds enfant du noeud body
//     if (element.nodeType === document.ELEMENT_NODE) {
//         console.log('element : ' + element);
//         console.log('element.childNodes.length : ' + element.childNodes.length);
//         for (let i = 0; i < element.childNodes.length; i++) {
//             let toggle = element.childNodes[i].dataset.toggle;
//             console.log('toggle : ' + (typeof toggle));
//             console.log('element : ' + element.childNodes[i]);
//             if(typeof toggle !== 'undefined') {
//                 // console.log('toggle : ' + toggle);
//                 let tabParam = toggle.split("-");
//                 element.childNodes[i].style.backgroundColor = tabParam[1];
//             }
//             else {
//                 alert('La variable maVariable n\'est pas définie');
//             }
//             parcNode(element.childNodes[i])
//         }
//     }
//
//
//         // for (let i = 0; i < elements.length; i++) {
//         //     console.log('elements[i] : ' + elements[i].tagName + ' - elements[i].childNodes[0] : ' + elements[i].childNodes[0].tagName);
//         //     // if (typeof elements[i].dataset.toggle !== "undefined")
//         //     // {
//         //     //     let tabParam = elements[i].dataset.toggle.split("-");
//         //     //     elements[i].style.backgroundColor = tabParam[1];
//         //     // }
//         //     if (testNodeType(elements[i].childNodes[0])) {
//         //         parcNode(document.getElementsByTagName(elements[i].childNodes[0].tagName));
//         //     }
//         // }
// }
//
// function testNodeType(object) {
//     let value = false
//     console.log(object);
//     if (object === document.ELEMENT_NODE) {
//         value = true;
//         console.log(object + ' : est un noeud élément');
//     } else {
//         console.log(object + ' : est pas un noeud élément');
//     }
//     return (object.tagName);
// }
//
// testSplitName();

// resource !!
// for (let i in elements.elements) {
//     alert(i + " = " + elements.elements[i].value);
// }
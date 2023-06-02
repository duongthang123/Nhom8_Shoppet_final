//toggle menu
const menu__mobile = document.getElementById("menu__mobile");
const list = document.getElementById("header__nav-list");


let isToggleOn = false;

menu__mobile.addEventListener("click", function() {
    list.classList.toggle("show__mobile");
    isToggleOn = !isToggleOn;
})


//hiển thị submenu
const menuParent = document.querySelector(".header__nav-parent");

menuParent.addEventListener("click", function(){
    list.classList.add("block");
});


// active category
// const categorys = document.querySelectorAll(".category__list .category__item_link");



// for(let i=0; i<categorys.length; i++) {
//     categorys[i].addEventListener("click", function(e){
//         e.preventDefault();
//         categorys.forEach((other) => {
//             other.classList.remove("category__item_link--active");
//         });
//         categorys[i].classList.add("category__item_link--active");
//         window.location.href = categorys[i].href;

//     });
// }

// const categorys = document.querySelectorAll(".category__list .category__item_link");

// console.log(categorys);

// categorys.forEach((category) => {
//     category.addEventListener("click", function(e){
//         e.preventDefault();
//         categorys.forEach((other) => {
//             other.classList.remove("category__item_link--active");
//         });
//         categorys.classList.add("category__item_link--active");
//         window.location.href = category.href;
//     });
// }); 
// active menu

// const menus = document.querySelectorAll(".header__nav-item .header__nav-link");

// for(let i = 0; i< menus.length; i++) {
//     menus[i].addEventListener("click", function(e) {
//         e.preventDefault();
//         menus.forEach((other) => {
//             other.classList.remove("header__nav-link--active");
//         });
//         menus[i].classList.add("header__nav-link--active");
//     })
// }


// tăng value input

    // const quantity_inputt = document.getElementById("quantity_input");
    // const quantity_des = document.getElementById("quantity_des");
    // const quantity_inc = document.getElementById("quantity_inc");

    // quantity_inc.addEventListener("click", () =>{
    //     quantity_inputt.value = parseInt(quantity_inputt.value) + 1;
    // });

    // quantity_des.addEventListener("click", () =>{
    //     if(quantity_inputt.value > 0) {
    //         quantity_inputt.value = parseInt(quantity_inputt.value) - 1;
    //     }
    // });


//
// const deleteItem = document.getElementById("delete");
//     const model = document.getElementById("model");
//     const closeModel = document.getElementById("close__model");
//     const modelContainer = document.getElementById("model__container");
//     function showModel() {
//         model.classList.add("open");
//     }

//     function hideModel() {
//         model.classList.remove("open");
//     }

//     deleteItem.addEventListener("click", showModel);

//     closeModel.addEventListener('click', hideModel);
//     model.addEventListener('click', hideModel);
//     modelContainer.addEventListener('click', (e)=> {
//         e.stopPropagation();
//     })

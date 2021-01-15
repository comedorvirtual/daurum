var $divs = $(".mujer");
//const galleryItems = document.querySelector(".products-list").children;
var galleryItems = document.getElementsByClassName("product-item");
const submujer = document.getElementsByClassName("sub_mujer");
const subhombre = document.getElementsByClassName("sub_hombre");
const subinfante = document.getElementsByClassName("sub_infante");
console.log(submujer);

const numItems = document.getElementsByClassName("product-item");
console.log(numItems);
const prev = document.querySelector(".prev");
const next = document.querySelector(".next");
const page = document.querySelector(".page-num");
const maxItem = 16;
let index = 1;

var pagination = Math.ceil(galleryItems.length / maxItem);
console.log(pagination)


jq2 = jQuery.noConflict();
jq2(function ($) {

	// AGREGANDO CLASE ACTIVE AL PRIMER ENLACE ====================
	$('.category_list .category_item[category="all"]').addClass('ct_item-active');

	// FILTRANDO PRODUCTOS  ============================================

	$('.category_item').click(function () {
		
		var catProduct = $(this).attr('category');
		index = 1;
		console.log(catProduct);
		
		function hideProduct() {
			console.log("hideProducto");

			for (let i = 0; i < numItems.length; i++) {
				numItems[i].classList.remove("show");
				numItems[i].classList.add("hide");
			}
			console.log("hideProducto");
		} setTimeout(hideProduct, 400);
		if (catProduct == 'hombre') {
			galleryItems = document.getElementsByClassName("hombre");
			pagination = Math.ceil(galleryItems.length / maxItem);
			hideSubItemsMujer();
			hideSubItemsInfante();
			showSubItemsHombre();	
		}
		if (catProduct == 'mujer') {
			galleryItems = document.getElementsByClassName("mujer");
			pagination = Math.ceil(galleryItems.length / maxItem);
			hideSubItemsInfante();
			hideSubItemsHombre();
			showSubItemsMujer();			
		}
		if (catProduct == 'infante') {
			galleryItems = document.getElementsByClassName("infante");
			pagination = Math.ceil(galleryItems.length / maxItem);
			hideSubItemsMujer();
			hideSubItemsHombre();
			showSubItemsInfante();
		}
		if (catProduct == 'mujer_acetato') {
			galleryItems = document.getElementsByClassName("mujer acetato")
			pagination = Math.ceil(galleryItems.length / maxItem);
		}
		if (catProduct == 'mujer_aluminio') {
			galleryItems = document.getElementsByClassName("mujer aluminio")
			pagination = Math.ceil(galleryItems.length / maxItem);
		}if (catProduct == 'mujer_metal') {
			galleryItems = document.getElementsByClassName("mujer metal")
			pagination = Math.ceil(galleryItems.length / maxItem);
		}if (catProduct == 'mujer_tr90') {
			galleryItems = document.getElementsByClassName("mujer tr-90")
			pagination = Math.ceil(galleryItems.length / maxItem);
		}

		if (catProduct == 'hombre_acetato') {
			galleryItems = document.getElementsByClassName("hombre acetato")
			pagination = Math.ceil(galleryItems.length / maxItem);
		}
		if (catProduct == 'hombre_aluminio') {
			galleryItems = document.getElementsByClassName("hombre aluminio")
			pagination = Math.ceil(galleryItems.length / maxItem);
		}if (catProduct == 'hombre_metal') {
			galleryItems = document.getElementsByClassName("hombre metal")
			pagination = Math.ceil(galleryItems.length / maxItem);
		}if (catProduct == 'hombre_tr90') {
			galleryItems = document.getElementsByClassName("hombre tr-90")
			pagination = Math.ceil(galleryItems.length / maxItem);
		}

		if (catProduct == 'infante_acetato') {
			galleryItems = document.getElementsByClassName("infante acetato")
			pagination = Math.ceil(galleryItems.length / maxItem);
		}
		if (catProduct == 'infante_aluminio') {
			galleryItems = document.getElementsByClassName("infante aluminio")
			pagination = Math.ceil(galleryItems.length / maxItem);
		}if (catProduct == 'infante_metal') {
			galleryItems = document.getElementsByClassName("infante metal")
			pagination = Math.ceil(galleryItems.length / maxItem);
		}if (catProduct == 'infante_tr90') {
			galleryItems = document.getElementsByClassName("infante tr-90")
			pagination = Math.ceil(galleryItems.length / maxItem);
		}
		console.log(pagination)
		console.log(galleryItems.length);
		// AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
		$('.category_item').removeClass('ct_item-active');
		$(this).addClass('ct_item-active');

		// OCULTANDO PRODUCTOS =========================
		/*$('.product-item').css('transform', 'scale(0)');
		*/
		

		// MOSTRANDO PRODUCTOS =========================
		function showProduct() {
			showItems();
			console.log("showPRoducto");
		} setTimeout(showProduct, 400);
		check();
	});

	// MOSTRANDO TODOS LOS PRODUCTOS =======================

	$('.category_item[category="all"]').click(function () {
		
		galleryItems = document.getElementsByClassName("product-item");
		pagination = Math.ceil(galleryItems.length / maxItem);
		console.log(pagination)
		console.log(galleryItems.length);
		function showAll() {
			cargar();
		} setTimeout(showAll, 400);
	});
});

//Desde aca es paginacion

prev.addEventListener("click", function () {
	index--;
	check();
	showItems();
})
next.addEventListener("click", function () {
	index++;
	check();
	showItems();
})

function check() {
	if (index == pagination) {
		next.classList.add("disabled");
	}
	else {
		next.classList.remove("disabled");
	}

	if (index == 1) {
		prev.classList.add("disabled");
	}
	else {
		prev.classList.remove("disabled");
	}
}

function showItems() {
	for (let i = 0; i < galleryItems.length; i++) {
		galleryItems[i].classList.remove("show");
		galleryItems[i].classList.add("hide");
		if (i >= (index * maxItem) - maxItem && i < index * maxItem) {
			// if i greater than and equal to (index*maxItem)-maxItem;
			// means  (1*8)-8=0 if index=2 then (2*8)-8=8
			galleryItems[i].classList.remove("hide");
			galleryItems[i].classList.add("show");
		}
		page.innerHTML = index;
	}
}
function hideSubItemsMujer(){
	for (let i = 0; i < submujer.length; i++) {
		submujer[i].classList.remove("show");
		submujer[i].classList.add("hide");	
	}
}
function showSubItemsMujer(){
	for (let i = 0; i < submujer.length; i++) {
		submujer[i].classList.remove("hide");	
		submujer[i].classList.add("show");
	}
}
function hideSubItemsHombre(){
	for (let i = 0; i < subhombre.length; i++) {
		subhombre[i].classList.remove("show");
		subhombre[i].classList.add("hide");	
	}
}
function showSubItemsHombre(){
	for (let i = 0; i < subhombre.length; i++) {
		subhombre[i].classList.remove("hide");	
		subhombre[i].classList.add("show");
	}
}
function hideSubItemsInfante(){
	for (let i = 0; i < subinfante.length; i++) {
		subinfante[i].classList.remove("show");
		subinfante[i].classList.add("hide");	
	}
}
function showSubItemsInfante(){
	for (let i = 0; i < subinfante.length; i++) {
		subinfante[i].classList.remove("hide");	
		subinfante[i].classList.add("show");
	}
}

function cargar() {
	showItems();
	check();
	hideSubItemsMujer();
	hideSubItemsHombre();
	hideSubItemsInfante();
}
window.onload = cargar();











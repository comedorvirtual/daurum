var $divs = $(".mujer").length;
const galleryItems = document.querySelector(".products-list").children;

const prev = document.querySelector(".prev");
const next = document.querySelector(".next");
const page = document.querySelector(".page-num");
const maxItem = 8;
let index = 1;

const pagination = Math.ceil(galleryItems.length / maxItem);
console.log(pagination)


jq2 = jQuery.noConflict();
jq2(function ($) {

	// AGREGANDO CLASE ACTIVE AL PRIMER ENLACE ====================
	$('.category_list .category_item[category="all"]').addClass('ct_item-active');

	// FILTRANDO PRODUCTOS  ============================================

	$('.category_item').click(function () {
		window.onload = cargar();
		var catProduct = $(this).attr('category');
		
		console.log(catProduct);
		

		// AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
		$('.category_item').removeClass('ct_item-active');
		$(this).addClass('ct_item-active');

		// OCULTANDO PRODUCTOS =========================
		$('.product-item').css('transform', 'scale(0)');
		function hideProduct() {
			$('.product-item').hide();
		} setTimeout(hideProduct, 400);

		// MOSTRANDO PRODUCTOS =========================
		function showProduct() {
			$('.product-item[category="' + catProduct + '"]').show();
			$('.product-item[category="' + catProduct + '"]').css('transform', 'scale(1)');
			cargar();
		} setTimeout(showProduct, 400);
	});

	// MOSTRANDO TODOS LOS PRODUCTOS =======================

	$('.category_item[category="all"]').click(function () {
		function showAll() {
			$('.product-item').show();
			$('.product-item').css('transform', 'scale(1)');			
			window.onload = cargar();
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
function cargar() {
	showItems();
	check();
}
window.onload = cargar();











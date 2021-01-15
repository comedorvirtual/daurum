@extends('layouts.app')
@section('content')
    <section class="wrap">
        <h1>Escoge un producto</h1>
        <div class="container store-wrapper">
                <div class="category_list">
                    <a href="#" class="category_item" category="all">Todo</a>
                    <a href="#" class="category_item" category="mujer">Mujer</a>
                    <a href="#" class="category_item sub_mujer mujer_acetato hide" category="mujer_acetato">Acetato</a>
                    <a href="#" class="category_item sub_mujer mujer_aluminio hide" category="mujer_aluminio">Aluminio</a>
                    <a href="#" class="category_item sub_mujer mujer_metal hide" category="mujer_metal">Metal</a>
                    <a href="#" class="category_item sub_mujer mujer_tr90 hide" category="mujer_tr90">TR-90</a>
                    <a href="#" class="category_item" category="hombre">Hombres</a>
                    <a href="#" class="category_item sub_hombre hombre_acetato hide" category="hombre_acetato">Acetato</a>
                    <a href="#" class="category_item sub_hombre hombre_aluminio hide" category="hombre_aluminio">Aluminio</a>
                    <a href="#" class="category_item sub_hombre hombre_metal hide" category="hombre_metal">Metal</a>
                    <a href="#" class="category_item sub_hombre hombre_tr90 hide" category="hombre_tr90">TR-90</a>
                    <a href="#" class="category_item" category="infante">Niños</a>
                    <a href="#" class="category_item sub_infante infante_acetato hide" category="infante_acetato">Acetato</a>
                    <a href="#" class="category_item sub_infante infante_aluminio hide" category="infante_aluminio">Aluminio</a>
                    <a href="#" class="category_item sub_infante infante_metal hide" category="infante_metal">Metal</a>
                    <a href="#" class="category_item sub_infante infante_tr90 hide" category="infante_tr90">TR-90</a>
                </div>
                <div class="products-list">
                    <div class="product-item acetato mujer hide" category="hombre">
                        <a href="#"><img src="{{ asset('/images/producto/lente-1-a.jpg') }}" alt=""></a>
                    </div>
                    <div class="product-item aluminio hombre hide" category="metal">
                        <img src="{{ asset('/images/producto/lente-2-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal hombre hide" category="recina">
                        <img src="{{ asset('/images/producto/lente-3-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal hombre hide" category="mujer">
                        <img src="{{ asset('/images/producto/lente-4-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal hombre mujer hide" category="mujer">
                        <img src="{{ asset('/images/producto/lente-5-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal hombre mujer hide" category="recina">
                        <img src="{{ asset('/images/producto/lente-6-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal hombre mujer hide" category="infante">
                        <img src="{{ asset('/images/producto/lente-7-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal hombre mujer hide" category="hombre">
                        <img src="{{ asset('/images/producto/lente-8-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal hombre mujer hide" category="hombre">
                        <img src="{{ asset('/images/producto/lente-9-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal hombre mujer hide" category="metal">
                        <img src="{{ asset('/images/producto/lente-10-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal hombre mujer hide" category="recina">
                        <img src="{{ asset('/images/producto/lente-11-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal hombre mujer hide" category="mujer">
                        <img src="{{ asset('/images/producto/lente-12-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item tr-90 hombre hide" category="mujer">
                        <img src="{{ asset('/images/producto/lente-13-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal hombre mujer hide" category="infante">
                        <img src="{{ asset('/images/producto/lente-14-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item tr-90 hombre hide" category="infante">
                        <img src="{{ asset('/images/producto/lente-15-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item carey hombre hide" category="hombre">
                        <img src="{{ asset('/images/producto/lente-16-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item carey hombre hide" category="hombre">
                        <img src="{{ asset('/images/producto/lente-17-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item carey hombre hide" category="metal">
                        <img src="{{ asset('/images/producto/lente-18-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item carey hombre hide" category="metal">
                        <img src="{{ asset('/images/producto/lente-19-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item carey hombre hide" category="recina">
                        <img src="{{ asset('/images/producto/lente-20-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item mujer carey hombre hide" category="mujer">
                        <img src="{{ asset('/images/producto/lente-21-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item tr-90 aluminio varon hide" category="monitores">
                        <img src="{{ asset('/images/producto/lente-22-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item tr-90 aluminio varon hide" category="audifonos">
                        <img src="{{ asset('/images/producto/lente-23-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item tr-90 aluminio varon hide" category="hombre">
                        <img src="{{ asset('/images/producto/lente-24-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item carey mujer hide" category="hombre">
                        <img src="{{ asset('/images/producto/lente-25-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item carey mujer hide" category="smartphones">
                        <img src="{{ asset('/images/producto/lente-26-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item tr-90 mujer hide" category="smartphones">
                        <img src="{{ asset('/images/producto/lente-27-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item carey mujer hide" category="mujer">
                        <img src="{{ asset('/images/producto/lente-28-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item carey mujer hide" category="mujer">
                        <img src="{{ asset('/images/producto/lente-29-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item acetato mujer hide" category="monitores">
                        <img src="{{ asset('/images/producto/lente-30-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal mujer hide" category="audifonos">
                        <img src="{{ asset('/images/producto/lente-31-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item carey mujer hide" category="hombre" >
                        <img src="{{ asset('/images/producto/lente-32-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item acetato mujer hide" category="hombre">
                        <img src="{{ asset('/images/producto/lente-33-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item acetato mujer hide" category="smartphones">
                        <img src="{{ asset('/images/producto/lente-34-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal mujer hide" category="smartphones">
                        <img src="{{ asset('/images/producto/lente-35-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item acetato mujer hide" category="mujer">
                        <img src="{{ asset('/images/producto/lente-36-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item acetato mujer hide" category="mujer">
                        <img src="{{ asset('/images/producto/lente-37-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item acetato mujer hide" category="monitores">
                        <img src="{{ asset('/images/producto/lente-38-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item carey metal mujer hide" category="audifonos">
                        <img src="{{ asset('/images/producto/lente-39-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item acetato mujer hide" category="hombre" >
                        <img src="{{ asset('/images/producto/lente-40-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item carey metal mujer hide" category="hombre" >
                        <img src="{{ asset('/images/producto/lente-41-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item acetato mujer hide" category="smartphones">
                        <img src="{{ asset('/images/producto/lente-42-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item carey metal mujer hide" category="smartphones">
                        <img src="{{ asset('/images/producto/lente-43-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item acetato mujer hide" category="mujer">
                        <img src="{{ asset('/images/producto/lente-44-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item acetato mujer hide" category="mujer">
                        <img src="{{ asset('/images/producto/lente-45-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal mujer hide" category="monitores">
                        <img src="{{ asset('/images/producto/lente-46-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item acetato mujer hide" category="audifonos">
                        <img src="{{ asset('/images/producto/lente-47-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item acetato mujer hide" category="hombre" name="hombre">
                        <img src="{{ asset('/images/producto/lente-48-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item acetato mujer hide" category="hombre" name="hombre">
                        <img src="{{ asset('/images/producto/lente-49-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal mujer hide" category="smartphones">
                        <img src="{{ asset('/images/producto/lente-50-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal mujer hide" category="smartphones">
                        <img src="{{ asset('/images/producto/lente-51-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal mujer hide" category="mujer">
                        <img src="{{ asset('/images/producto/lente-52-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item carey mujer hide" category="mujer">
                        <img src="{{ asset('/images/producto/lente-53-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item acetato mujer hide" category="monitores">
                        <img src="{{ asset('/images/producto/lente-54-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal mujer hide" category="audifonos">
                        <img src="{{ asset('/images/producto/lente-55-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal mujer hombre hide" category="hombre" name="hombre">
                        <img src="{{ asset('/images/producto/lente-56-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal mujer hombre hide" category="hombre" name="hombre">
                        <img src="{{ asset('/images/producto/lente-57-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item carey mujer hide" category="smartphones">
                        <img src="{{ asset('/images/producto/lente-58-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal mujer hombre hide" category="smartphones">
                        <img src="{{ asset('/images/producto/lente-59-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal mujer hombre hide" category="mujer">
                        <img src="{{ asset('/images/producto/lente-60-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal mujer hombre hide" category="mujer">
                        <img src="{{ asset('/images/producto/lente-61-a.jpg') }}" alt="">
                    </div>
                    <div class="product-item metal mujer hide" category="monitores">
                        <img src="{{ asset('/images/producto/lente-62-a.jpg') }}" alt="">
                    </div>
                </div>
            
            <div class="pagination justify-content-center">
                <div class="prev">Prev</div>
                <div class="page">Page <span class="page-num"></span></div>
                <div class="next">Next</div>
            </div>
        </div>
    </section>


@endsection

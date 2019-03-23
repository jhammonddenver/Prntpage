<?php
   
    include_once 'includes/header.php';
  
?>

  <!-- Main content  : start -->
        <main class="page-content" id="app"> 
            <div class="preload">
                <div class="spinner spinner_green">
                    <div class="spinner__item1"></div>
                    <div class="spinner__item2"></div>
                    <div class="spinner__item3"></div>
                    <div class="spinner__item4"></div>
                </div>
            </div> 
            
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Catalog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Properties</li>
                    </ol>
                </nav>
            </div>

            <div class="properties" id="js-propertiesWrap" v-bind:class="active">
                <div class="row align-items-center mb-4 mb-lg-0">
                    <div class="col-12 col-md-6">
                        <h2 class="page__title mt-1 mb-2">Properties</h2>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="properties-panel d-flex align-items-center justify-content-between justify-content-md-end mt-1 mb-2">
                            <div class="search">
                                <form class="form search-form">
                                    <label for="properties-search" class="search-label">
                                        <input class="form-control search-control" type="search" placeholder="Advanced Search" aria-label="Search" id="properties-search">    
                                    </label> 
                                    <button class="search-btn" type="submit"></button>
                                </form>
                            </div> 

                            <ul class="page-view nav " v-on:click.prevent>
                                <li class="nav-item">
                                    <a class="nav-link view-list" href="#" v-on:click="makeActive('container')" >List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link view-map" href="#" v-on:click="makeActive('container-fluid')">Map</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row mb-5 flex-lg-nowrap">
                    <div class="col-12 col-lg filter-wrap">
                        <div class="filter">
                            <div class="dropdown">

                                <button class="btn btn-back dropdown-toggle" type="button" id="dropdownMenuFilter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Filter
                                </button>                                    

                                <div class="filter-inner dropdown-menu" aria-labelledby="dropdownMenuFilter">
                                    
                                    <div class="filter-group">
                                        <h6 class="filter-title">Any Price</h6>
                                        
                                        <ul class="filter-list">
                                            <li>
                                                <div class="rg-slider">
                                                    <div class="rg-slider__slider">
                                                        <i class="rg-slider__slider-amount amount-1">$0</i>
                                                        <i class="rg-slider__slider-amount amount-2">$1,4M</i>

                                                        <div class="rg-slider__slider-range"> </div>

                                                        <span class="rg-slider__slider-handle handle-1"></span>
                                                        <span class="rg-slider__slider-handle handle-2"></span>
                                                    </div>

                                                    <div class="d-flex align-items-center justify-content-between ">
                                                        $ 
                                                        <div class="rg-slider__item">
                                                            <input type="text" class="rg-slider__control" value="390 000">
                                                        </div>

                                                        - 

                                                        <div class="rg-slider__item">
                                                            <input type="text" class="rg-slider__control" value="390 000">
                                                        </div>
                                                        
                                                        <a href="#" class="btn btn-send"><i class="ico-slider"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" checked>
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Any Price</span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="filter-group">
                                        <h6 class="filter-title">Any Beds</h6>
                                        
                                        <ul class="filter-list">
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Any </span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Studio</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" checked>
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">1+</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">2+</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">3+</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">4+</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" disabled>
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">5+</span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="filter-group">
                                        <h6 class="filter-title">Any Baths</h6>
                                        
                                        <ul class="filter-list">
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Any </span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" checked>
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">1+</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">2+</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">3+</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" disabled>
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">4+</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" disabled>
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">5+</span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="filter-group">
                                        <h6 class="filter-title">Any Property Type</h6>
                                        
                                        <ul class="filter-list">
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" checked>
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Single Family Home</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Condos/Townhomes/Co-Ops</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Mfd/Mobile Homes</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Farms/Ranches</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Land</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" checked>
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Multi-Family</span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <a href="#" class="btn btn-back">Save Search</a>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg">
                        <div class="filter-active d-flex align-items-center">
                            <ul class="filter-active__list list-inline">
                                <li class="filter-active__item list-inline-item">
                                    <a href="#" class="filter-active__link">
                                        No Min - $1.6M
                                    </a>
                                </li>
                                <li class="filter-active__item list-inline-item">
                                    <a href="#" class="filter-active__link">
                                        1+ Beds
                                    </a>
                                </li>
                                <li class="filter-active__item list-inline-item">
                                    <a href="#" class="filter-active__link">
                                        1+ Baths
                                    </a>
                                </li>
                                <li class="filter-active__item list-inline-item">
                                    <a href="#" class="filter-active__link">
                                        Single Family Home
                                    </a>
                                </li>
                                <li class="filter-active__item list-inline-item">
                                    <a href="#" class="filter-active__link">
                                        Multi-Family
                                    </a>
                                </li>
                            </ul>

                            <a href="#" class="filter-active__link filter-active__link-reset">
                                Clear Filters
                            </a>
                        </div>

                        <div class="row">
                            <div class="col-12 col-xl mb-4 map-section">
                                <div class="map h-100">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10870.348688535116!2d14.43467743729739!3d35.90355038292726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x130e502af6b4d4c7%3A0x5177ce1e8b88ec40!2zVGEnIE1saXQsINCc0L7RgdGC0LAsINCc0LDQu9GM0YLQsA!5e0!3m2!1sru!2sua!4v1510571692986" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>

                            <div class="col-12 col-xl properties-catalog-wrap">
                                <div class="catalog-list properties-catalog">
                                    <div class="catalog-item">
                                        <div class="product d-flex flex-column flex-md-row flex-wrap flex-md-nowrap flex-xl-nowrap flex-lg-wrap">
                                            
                                            <div class="d-flex flex-wrap flex-md-nowrap">
                                                <div class="product-prev">
                                                    <img src="images/catalog/house-1.png" alt="" class="rounded img-fluid">
                                                </div>

                                                <div class="product-body">
                                                    <div class="product-price">
                                                        $290,000
                                                    </div>

                                                    <div class="product-adress">
                                                        942 E Mississippi Ave, Denver, CO 80210
                                                    </div>

                                                    <div class="product-type">
                                                        <ul>
                                                            <li>East Denver East Colfax</li>
                                                            <li>Single Family Home</li>
                                                        </ul>
                                                    </div>

                                                    <div class="product-settings">
                                                        <ul class="product-settings__list d-flex">
                                                            <li class="product-settings__item">
                                                                <span>2</span>
                                                                bd

                                                                <i class="ico-bd"></i>
                                                            </li>

                                                            <li class="product-settings__item">
                                                                <span>1+</span>
                                                                ba

                                                                <i class="ico-ba"></i>
                                                            </li>

                                                            <li class="product-settings__item">
                                                                <span>1,557</span>
                                                                sq ft
                                                            </li>

                                                            <li class="product-settings__item">
                                                                <span>2,180</span>
                                                                acres lot
                                                            </li>

                                                            <li class="product-settings__item">
                                                                <span>1</span>
                                                                car

                                                                <i class="ico-car"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-bottom ml-xl-auto">
                                                <a href="#" class="btn btn-send">View details</a>
                                                <a href="#" class="btn btn-link">Contact Agent</a>
                                            </div>
                                        </div>                                
                                    </div>

                                    <div class="catalog-item">
                                        <div class="product d-flex flex-column flex-md-row flex-wrap flex-md-nowrap flex-xl-nowrap flex-lg-wrap">
                                            
                                            <div class="d-flex flex-wrap flex-md-nowrap">
                                                <div class="product-prev">
                                                    <img src="images/catalog/house-2.png" alt="" class="rounded img-fluid">
                                                </div>

                                                <div class="product-body">
                                                    <div class="product-price">
                                                        $561,000
                                                    </div>

                                                    <div class="product-adress">
                                                        942 E Mississippi Ave, Denver, CO 80210
                                                    </div>

                                                    <div class="product-type">
                                                        <ul>
                                                            <li>East Denver East Colfax</li>
                                                            <li>Single Family Home</li>
                                                        </ul>
                                                    </div>

                                                    <div class="product-settings">
                                                        <ul class="product-settings__list d-flex">
                                                            <li class="product-settings__item">
                                                                <span>2</span>
                                                                bd

                                                                <i class="ico-bd"></i>
                                                            </li>

                                                            <li class="product-settings__item">
                                                                <span>1+</span>
                                                                ba

                                                                <i class="ico-ba"></i>
                                                            </li>

                                                            <li class="product-settings__item">
                                                                <span>1,557</span>
                                                                sq ft
                                                            </li>

                                                            <li class="product-settings__item">
                                                                <span>2,180</span>
                                                                acres lot
                                                            </li>

                                                            <li class="product-settings__item">
                                                                <span>1</span>
                                                                car

                                                                <i class="ico-car"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-bottom ml-xl-auto">
                                                <a href="#" class="btn btn-send">View details</a>
                                                <a href="#" class="btn btn-link">Contact Agent</a>
                                            </div>
                                        </div>                                
                                    </div>

                                    <div class="catalog-item">
                                        <div class="product d-flex flex-column flex-md-row flex-wrap flex-md-nowrap flex-xl-nowrap flex-lg-wrap">
                                            
                                            <div class="d-flex flex-wrap flex-md-nowrap">
                                                <div class="product-prev">
                                                    <img src="images/catalog/house-4.png" alt="" class="rounded img-fluid">
                                                </div>

                                                <div class="product-body">
                                                    <div class="product-price">
                                                        $476,000
                                                    </div>

                                                    <div class="product-adress">
                                                        942 E Mississippi Ave, Denver, CO 80210
                                                    </div>

                                                    <div class="product-type">
                                                        <ul>
                                                            <li>East Denver East Colfax</li>
                                                            <li>Single Family Home</li>
                                                        </ul>
                                                    </div>

                                                    <div class="product-settings">
                                                        <ul class="product-settings__list d-flex">
                                                            <li class="product-settings__item">
                                                                <span>2</span>
                                                                bd

                                                                <i class="ico-bd"></i>
                                                            </li>

                                                            <li class="product-settings__item">
                                                                <span>1+</span>
                                                                ba

                                                                <i class="ico-ba"></i>
                                                            </li>

                                                            <li class="product-settings__item">
                                                                <span>1,557</span>
                                                                sq ft
                                                            </li>

                                                            <li class="product-settings__item">
                                                                <span>2,180</span>
                                                                acres lot
                                                            </li>

                                                            <li class="product-settings__item">
                                                                <span>1</span>
                                                                car

                                                                <i class="ico-car"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-bottom ml-xl-auto">
                                                <a href="#" class="btn btn-send">View details</a>
                                                <a href="#" class="btn btn-link">Contact Agent</a>
                                            </div>
                                        </div>                                
                                    </div>

                                    <div class="catalog-item">
                                        <div class="product d-flex flex-column flex-md-row flex-wrap flex-md-nowrap flex-xl-nowrap flex-lg-wrap">
                                            
                                            <div class="d-flex flex-wrap flex-md-nowrap">
                                                <div class="product-prev">
                                                    <img src="images/catalog/house-5.png" alt="" class="rounded img-fluid">
                                                </div>

                                                <div class="product-body">
                                                    <div class="product-price">
                                                        $683,000
                                                    </div>

                                                    <div class="product-adress">
                                                        942 E Mississippi Ave, Denver, CO 80210
                                                    </div>

                                                    <div class="product-type">
                                                        <ul>
                                                            <li>East Denver East Colfax</li>
                                                            <li>Single Family Home</li>
                                                        </ul>
                                                    </div>

                                                    <div class="product-settings">
                                                        <ul class="product-settings__list d-flex">
                                                            <li class="product-settings__item">
                                                                <span>2</span>
                                                                bd

                                                                <i class="ico-bd"></i>
                                                            </li>

                                                            <li class="product-settings__item">
                                                                <span>1+</span>
                                                                ba

                                                                <i class="ico-ba"></i>
                                                            </li>

                                                            <li class="product-settings__item">
                                                                <span>1,557</span>
                                                                sq ft
                                                            </li>

                                                            <li class="product-settings__item">
                                                                <span>2,180</span>
                                                                acres lot
                                                            </li>

                                                            <li class="product-settings__item">
                                                                <span>1</span>
                                                                car

                                                                <i class="ico-car"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-bottom ml-xl-auto">
                                                <a href="#" class="btn btn-send">View details</a>
                                                <a href="#" class="btn btn-link">Contact Agent</a>
                                            </div>
                                        </div>                                
                                    </div>

                                    <div class="catalog-item">
                                        <div class="product d-flex flex-column flex-md-row flex-wrap flex-md-nowrap flex-xl-nowrap flex-lg-wrap">
                                            
                                            <div class="d-flex flex-wrap flex-md-nowrap">
                                                <div class="product-prev">
                                                    <img src="images/catalog/hotel-3.png" alt="" class="rounded img-fluid">
                                                </div>

                                                <div class="product-body">
                                                    <div class="product-price">
                                                        $584,000
                                                    </div>

                                                    <div class="product-adress">
                                                        942 E Mississippi Ave, Denver, CO 80210
                                                    </div>

                                                    <div class="product-type">
                                                        <ul>
                                                            <li>East Denver East Colfax</li>
                                                            <li>Single Family Home</li>
                                                        </ul>
                                                    </div>

                                                    <div class="product-settings">
                                                        <ul class="product-settings__list d-flex">
                                                            <li class="product-settings__item">
                                                                <span>2</span>
                                                                bd

                                                                <i class="ico-bd"></i>
                                                            </li>

                                                            <li class="product-settings__item">
                                                                <span>1+</span>
                                                                ba

                                                                <i class="ico-ba"></i>
                                                            </li>

                                                            <li class="product-settings__item">
                                                                <span>1,557</span>
                                                                sq ft
                                                            </li>

                                                            <li class="product-settings__item">
                                                                <span>2,180</span>
                                                                acres lot
                                                            </li>

                                                            <li class="product-settings__item">
                                                                <span>1</span>
                                                                car

                                                                <i class="ico-car"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-bottom ml-xl-auto">
                                                <a href="#" class="btn btn-send">View details</a>
                                                <a href="#" class="btn btn-link">Contact Agent</a>
                                            </div>
                                        </div>                                
                                    </div>
                                </div>

                                <div class="row justify-content-between align-items-center filter-active__bottom">
                                    <div class="col-12 col-md-3 col-xl-3 text-center text-lg-left d-none d-xl-block filter-showing" >
                                        <div class="listings-text">
                                            Showing 1 to 10 of 35 entries
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12 col-xl-8 filter-pagination" >
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item">
                                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item d-none d-md-block"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item d-none d-md-block"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item d-none d-md-block"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                                            <li class="page-item"><a class="page-link" href="#">35</a></li>
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-12 col-md-1 col-xl-1 text-center text-lg-right d-none d-xl-block filter-selected-view">
                                        <div class="select-wrapper">
                                            <select class="select-control select-control_custom select-control_dm">
                                                <option value="5">5</option>
                                                <option value="10" selected>10</option>
                                                <option value="15">15</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6 mb-2 mb-md-0">
                        <div class="banner">
                            <a href="#">
                                <img src="images/banner-1.png" alt="" class="img-fluid rounded">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="banner">
                            <a href="#">
                                <img src="images/banner-2.png" alt="" class="img-fluid rounded">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main> <!-- Main content  : end -->


 <?php
       include_once 'includes/footer.php';
    ?>

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $data;

//    used-car
    public $headerSearch ;
    public $body;
    public $depreciation;
    public $trending;
    public $topic;
    public $topicNames;
    public $popularBrands;
    public $popularBrandNames;
    public $cars;
    public $showSlide;
    public $exploreCars;
    public $topicSearch;
    public $brandSearch;
    public $listingStatus;
    public $countries;
    public $filters;
    public $optionals;

//    home
    public $category;
    public $categoryNames;
    public $bicycle;
    public $coffeeTable;
    public $lego;
    public $ikea;
    public $brompton;
    public $plant;
    public $recommendProduct;
    public $slashPrice;
    public $footerLinks;
    public $footerFlags;
    public $locations;
    public $brands;
    public $genders;
    public $sorts;
    public $types;
    public $accessories;
    public $categories;
    public $conditions;
    public $slideProducts;
    public $similarProduct;
    public $itemSearchFor;

    //commercial
    public $type;
    public $typeNames;

    //accessories
    public $access;
    public $accessNames;

    //motors
    public $typeMotorcycles;
    public $motorTopicNames;
    public $motorBrands;
    public $motorBrandNames;
    public $motors;
    public $motorTopics;

    //parallel
    public $transmission;

    //rental car
    public $options;
    public $rentalTopics;
    public $rentalCarNames;
    public $listRentalCar;

    public function getData(): array
    {
        $this->headerSearch = config('used-cars.headerSearch');
        $this->body = config('used-cars.body');
        $this->depreciation = config('used-cars.depreciation');
        $this->trending = config('used-cars.trending');
        $this->topic = config('used-cars.topic');
        $this->topicNames = config('used-cars.topicNames');
        $this->popularBrands = config('used-cars.popularBrands');
        $this->popularBrandNames = config('used-cars.popularBrandNames');
        $this->cars = config('used-cars.cars');
        $this->showSlide = config('products.slide');
        $this->exploreCars = config('used-cars.exploreCars');
        $this->topicSearch = config('used-cars.topicSearch');
        $this->brandSearch = config('products.footerLinks');
        $this->listingStatus = config('products.listingStatus');
        $this->countries = config('products.countries');
        $this->filters = config('filter-topic.Audio');
        $this->optionals = config('products.optionals');

        $this->category = config('products.category');
        $this->categoryNames= config('products.categoryNames');
        $this->bicycle =  config('products.bicycle');
        $this->coffeeTable= config('products.coffeeTable');
        $this->lego= config('products.lego');
        $this->ikea= config('products.ikea');
        $this->brompton = config('products.brompton');
        $this->plant = config('products.plant');
        $this->recommendProduct = config('products.recommendProduct');
        $this->slashPrice = config('products.slashPrice');
        $this->footerLinks = config('products.footerLinks');
        $this->footerFlags = config('products.footerFlags');
        $this->locations = config('products.locations');
        $this->brands = config('products.brands');
        $this->genders = config('products.genders');
        $this->sorts = config('products.sorts');
        $this->types = config('products.types');
        $this->accessories = config('products.accessories');
        $this->categories = config('products.categories');
        $this->conditions = config('products.conditions');
        $this->slideProducts = config('products.slide-products');
        $this->similarProduct = config('products.similar-product');
        $this->itemSearchFor = config('products.item-search-for');


        $this->type = config('commercial-vehicles.types');
        $this->typeNames = config('commercial-vehicles.typeNames');

        $this->access = config('accessories.access');
        $this->accessNames = config('accessories.accessNames');

        $this->typeMotorcycles = config('motorcycles.typeMotorcycles');
        $this->motorTopicNames = config('motorcycles.motorTopicNames');
        $this->motorBrands = config('motorcycles.motorBrands');
        $this->motorBrandNames = config('motorcycles.motorBrandNames');
        $this->motors = config('motorcycles.motors');
        $this->motorTopics = config('motorcycles.motorTopics');

        $this->transmissions = config('parallel.transmissions');

        $this->options = config('rental-cars.options');
        $this->rentalTopics = config('rental-cars.rentalTopics');
        $this->rentalCarNames = config('rental-cars.rentalCarNames');
        $this->listRentalCars = config('rental-cars.listRentalCars');

        $this->data = ['headerSearch'  => $this->headerSearch,
            'body' => $this->body,
            'depreciation' => $this->depreciation,
            'trending' => $this->trending,
            'topic' => $this->topic,
            'topicNames' => $this->topicNames,
            'popularBrands' =>$this->popularBrands,
            'popularBrandNames' =>$this->popularBrandNames,
            'cars' => $this->cars,
            'showSlide' =>$this->showSlide,
            'exploreCars' =>$this->exploreCars,
            'topicSearch' =>$this->topicSearch,
            'brandSearch' =>$this->brandSearch,
            'listingStatus' => $this->listingStatus,
            'countries' => $this->countries,
            'filter' => $this->filters,
            'optionals' => $this->optionals,

            //    home
            'category' =>$this->category,
            'categoryNames' => $this->categoryNames,
            'bicycle' => $this->bicycle,
            'coffeeTable' => $this->coffeeTable,
            'lego' => $this->lego,
            'ikea' => $this->ikea,
            'brompton' => $this->brompton,
            'plant' => $this->plant,
            'recommendProduct' => $this->recommendProduct,
            'slashPrice' => $this->slashPrice,
            'footerLinks' => $this->footerLinks,
            'footerFlags' => $this->footerFlags,
            'locations' => $this->locations,
            'brands' => $this->brands,
            'genders' => $this->genders,
            'sorts' => $this->sorts,
            'types' => $this->types,
            'accessories' => $this->accessories,
            'categories' => $this->categories,
            'conditions' => $this->conditions,
            'slideProducts' => $this->slideProducts,
            'similarProduct' => $this->similarProduct,
            'itemSearchFor' => $this->itemSearchFor,

            //commercial
            'type' => $this->type,
            'typeNames' => $this->typeNames,

            //accessories
            'access' => $this->access,
            'accessNames' => $this->accessNames,

            //motors
            'typeMotorcycles' => $this->typeMotorcycles,
            'motorTopicNames' => $this->motorTopicNames,
            'motorBrands' => $this->motorBrands,
            'motorBrandNames' => $this->motorBrandNames,
            'motors' => $this->motors,
            'motorTopics' => $this->motorTopics,

            //parallel
            'transmissions' => $this->transmissions,

            //rental car
            'options' => $this->options,
            'rentalTopics' => $this->rentalTopics,
            'rentalCarNames' => $this->rentalCarNames,
            'listRentalCars' => $this->listRentalCars,
        ];

        return $this->data;
    }
}

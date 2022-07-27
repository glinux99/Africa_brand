<!doctype html>
<html lang="en">

<head>
    <meta name="csrf-token" content="FRREUj2dROMBBmottIxf9LQigkhinV1dvoPIKxgX">
    <meta name="app-url" content="//demo.activeitzone.com/ecommerce/">
    <meta name="file-base-url" content="//demo.activeitzone.com/ecommerce/public/">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('uploads/all/4xnLnzEeu3dFKDGSBMlvLXPLGXFdHEkvqBSZREmO.png')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/aiz-core.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-style.css')}}">
    <link href="{{asset('assets/selected2/dist/css/select2.min.css')}}" rel="stylesheet" />
    <style>
        body {
            font-size: 12px;
        }
    </style>
    <script>
        var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: 'Nothing selected2',
            nothing_found: 'Nothing found',
            choose_file: 'Choose file',
            file_selected: 'File selected',
            files_selected: 'Files selected',
            add_more_files: 'Add more files',
            adding_more_files: 'Adding more files',
            drop_files_here_paste_or: 'Drop files here, paste or',
            browse: 'Browse',
            upload_complete: 'Upload complete',
            upload_paused: 'Upload paused',
            resume_upload: 'Resume upload',
            pause_upload: 'Pause upload',
            retry_upload: 'Retry upload',
            cancel_upload: 'Cancel upload',
            uploading: 'Uploading',
            processing: 'Processing',
            complete: 'Complete',
            file: 'File',
            files: 'Files',
        }
    </script>

</head>

<body class="">

    <div class="aiz-main-wrapper">
        <div class="aiz-sidebar-wrap">
            <div class="aiz-sidebar left c-scrollbar">
                <div class="aiz-side-nav-logo-wrap">
                    <a href="{{ route('admin')}}" class="d-block text-left d-flex">
                        <img class="" src="{{asset('assets/img/logo.png')}}" class="brand-icon" alt="">
                        <h5 class="text-center">@lang("AFRICA BRAND ADMIN")</h5>
                    </a>
                </div>
                <div class="aiz-side-nav-wrap">
                    <div class="px-20px mb-3">
                        <input class="form-control bg-soft-secondary border-0 form-control-sm text-white" type="text" name="" placeholder="Search in menu" id="menu-search" onkeyup="menuSearch()">
                    </div>
                    <ul class="aiz-side-nav-list" id="search-menu">
                    </ul>
                    <ul class="aiz-side-nav-list" id="main-menu" data-toggle="aiz-side-menu">
                        <li class="aiz-side-nav-item">
                            <a href="https://demo.activeitzone.com/ecommerce/admin" class="aiz-side-nav-link">
                                <i class="las la-home aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">@lang('Tableau de board')</span>
                            </a>
                        </li>

                        <!-- Product -->
                        <li class="aiz-side-nav-item">
                            <a href="#" class="aiz-side-nav-link">
                                <i class="las la-shopping-cart aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">@lang('Produits')</span>
                                <span class="aiz-side-nav-arrow"></span>
                            </a>
                            <!--Submenu-->
                            <ul class="aiz-side-nav-list level-2">
                                <li class="aiz-side-nav-item">
                                    <a class="aiz-side-nav-link" href="{{ route('create.produit')}}">
                                        <span class="aiz-side-nav-text">@lang('Ajouter un nouveau produit')</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="{{ route('create.produits')}}" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">@lang("Tous les produits")</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/products/admin" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">@lang('Produits maisons')</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/products/seller" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">@lang('Produits du vendeur')</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/digitalproducts" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">@lang("Produits numeriques")</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/product-bulk-upload/index" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">Bulk Import</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/product-bulk-export" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">@lang('Importation en masse')</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/categories" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">@lang('Exportation en masse')</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/brands" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">@lang('Marque')</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/attributes" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">@lang("Categorie")</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/colors" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">@lang("Couleurs")</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/reviews" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">@lang('Avis sur les produits')</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Website Setup -->
                        <li class="aiz-side-nav-item">
                            <a href="#" class="aiz-side-nav-link ">
                                <i class="las la-desktop aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">@lang("Configuration su site")</span>
                                <span class="aiz-side-nav-arrow"></span>
                            </a>
                            <ul class="aiz-side-nav-list level-2">
                                <li class="aiz-side-nav-item">
                                    <a href="{{route('home.page')}}" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">@lang("Page d'acceuil")</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/website/header" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">@lang("Entete")</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="#" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">@lang("Bas de page")</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="#" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">@lang("Pages")</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="#" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">@lang("Apparence")</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Sale -->
                        <li class="aiz-side-nav-item">
                            <a href="#" class="aiz-side-nav-link">
                                <i class="las la-money-bill aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">@lang("Ventes")</span>
                                <span class="aiz-side-nav-arrow"></span>
                            </a>
                            <!--Submenu-->
                            <ul class="aiz-side-nav-list level-2">
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/all_orders" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">@lang("Ventes de la semaine")</span>
                                    </a>
                                </li>

                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/inhouse-orders" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">@lang("Toutes les ventes")</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Refund addon -->
                        <li class="aiz-side-nav-item">
                            <a href="#" class="aiz-side-nav-link">
                                <i class="las la-backward aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">@lang("Remboursements")</span>
                                <span class="badge badge-inline badge-danger">@lang("Ajouter")</span>
                                <span class="aiz-side-nav-arrow"></span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="https://demo.activeitzone.com/ecommerce/admin/uploaded-files" class="aiz-side-nav-link ">
                                <i class="las la-folder-open aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">@lang("Clients")</span>
                            </a>
                        </li>
                        <!--Blog System-->
                        <li class="aiz-side-nav-item">
                            <a href="#" class="aiz-side-nav-link">
                                <i class="las la-bullhorn aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">@lang("Systeme de blogs")</span>
                                <span class="aiz-side-nav-arrow"></span>
                            </a>
                            <ul class="aiz-side-nav-list level-2">
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/blog" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">@lang("Tous les posts")</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/blog-category" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">@lang("Categorie")</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- marketing -->
                        <li class="aiz-side-nav-item">
                            <a href="#" class="aiz-side-nav-link">
                                <i class="las la-bullhorn aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Marketing</span>
                                <span class="aiz-side-nav-arrow"></span>
                            </a>
                            <ul class="aiz-side-nav-list level-2">
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/flash_deals" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">@lang("Offres du J/J")</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/newsletter" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">@lang("Newsletters")</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/sms" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">@lang("Message en masse")</span>
                                        <span class="badge badge-inline badge-danger">@lang("Ajouter")</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/subscribers" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">@lang("Les abonnes")</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Setup & Configurations -->
                        <li class="aiz-side-nav-item">
                            <a href="#" class="aiz-side-nav-link">
                                <i class="las la-dharmachakra aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">@lang("Installation et Configuration")>
                                    <span class="aiz-side-nav-arrow"></span>
                            </a>
                            <ul class="aiz-side-nav-list level-2">
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/general-setting" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">@lang("Reglages generaux")</span>
                                    </a>
                                </li>

                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/activation" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">@lang("Activation de fonctionnalites")</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/languages" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">@lang("Langue")</span>
                                    </a>
                                </li>

                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/currency" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">@lang("Devise")</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/tax" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">@lang("Valeurs et taxes")</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/social-login" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">@lang("Reseaux sociaux login")</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Staffs -->
                        <li class="aiz-side-nav-item">
                            <a href="#" class="aiz-side-nav-link">
                                <i class="las la-user-tie aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">@lang("Equipe")</span>
                                <span class="aiz-side-nav-arrow"></span>
                            </a>
                            <ul class="aiz-side-nav-list level-2">
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/staffs" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">@lang("Toute l'equipe")</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/admin/roles" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">@lang("Permission des membres")</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Addon Manager -->
                        <li class="aiz-side-nav-item">
                            <a href="https://demo.activeitzone.com/ecommerce/admin/addons" class="aiz-side-nav-link ">
                                <i class="las la-wrench aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">@lang("ajouter un manager")</span>
                            </a>
                        </li>
                    </ul><!-- .aiz-side-nav -->
                </div><!-- .aiz-side-nav-wrap -->
            </div><!-- .aiz-sidebar -->
            <div class="aiz-sidebar-overlay"></div>
        </div><!-- .aiz-sidebar -->
        <div class="aiz-content-wrapper">
            <div class="aiz-topbar px-15px px-lg-25px d-flex align-items-stretch justify-content-between">
                <div class="d-flex">
                    <div class="aiz-topbar-nav-toggler d-flex align-items-center justify-content-start mr-2 mr-md-3 ml-0" data-toggle="aiz-mobile-nav">
                        <button class="aiz-mobile-toggler">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-stretch flex-grow-xl-1">
                    <div class="d-flex justify-content-around align-items-center align-items-stretch">
                        <div class="d-flex justify-content-around align-items-center align-items-stretch">
                            <div class="aiz-topbar-item">
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-icon btn-circle btn-light" href="{{route('index')}}" target="_blank" title="site web">
                                        <i class="las la-globe"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around align-items-center align-items-stretch ml-3">
                            <div class="aiz-topbar-item">
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-soft-danger btn-sm d-flex align-items-center" href="#">
                                        <i class="las la-hdd fs-20"></i>
                                        <span class="fw-500 ml-1 mr-0 d-none d-md-block">@lang("Maintenace")</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around align-items-center align-items-stretch">

                        <div class="aiz-topbar-item ml-2">
                            <div class="align-items-stretch d-flex dropdown">
                                <a class="dropdown-toggle no-arrow" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="btn btn-icon p-0 d-flex justify-content-center align-items-center">
                                        <span class="d-flex align-items-center position-relative">
                                            <i class="las la-bell fs-24"></i>
                                            <span class="badge badge-sm badge-dot badge-circle badge-primary position-absolute absolute-top-right"></span>
                                        </span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg py-0">
                                    <div class="p-3 bg-light border-bottom">
                                        <h6 class="mb-0">Notifications</h6>
                                    </div>
                                    <div class="px-3 c-scrollbar-light overflow-auto " style="max-height:300px;">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                                <div class="media text-inherit">
                                                    <div class="media-body">
                                                        <p class="mb-1 text-truncate-2">
                                                            Order code: 20220420-07072866 has been Paid
                                                        </p>
                                                        <small class="text-muted">
                                                            April 27 2022, 10:36 pm
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                                <div class="media text-inherit">
                                                    <div class="media-body">
                                                        <p class="mb-1 text-truncate-2">
                                                            Order code: 20210520-10563650 has been Delivered
                                                        </p>
                                                        <small class="text-muted">
                                                            April 27 2022, 10:34 pm
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                                <div class="media text-inherit">
                                                    <div class="media-body">
                                                        <p class="mb-1 text-truncate-2">
                                                            Order code: 20210520-10563650 has been On the way
                                                        </p>
                                                        <small class="text-muted">
                                                            April 27 2022, 10:34 pm
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                                <div class="media text-inherit">
                                                    <div class="media-body">
                                                        <p class="mb-1 text-truncate-2">
                                                            Order code: 20220428-06353357 has been Picked up
                                                        </p>
                                                        <small class="text-muted">
                                                            April 27 2022, 10:34 pm
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                                <div class="media text-inherit">
                                                    <div class="media-body">
                                                        <p class="mb-1 text-truncate-2">
                                                            Order code: 20210520-10560247 has been Paid
                                                        </p>
                                                        <small class="text-muted">
                                                            April 27 2022, 10:31 pm
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                                <div class="media text-inherit">
                                                    <div class="media-body">
                                                        <p class="mb-1 text-truncate-2">
                                                            Order code: 20220420-07073112 has been On the way
                                                        </p>
                                                        <small class="text-muted">
                                                            April 27 2022, 10:30 pm
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                                <div class="media text-inherit">
                                                    <div class="media-body">
                                                        <p class="mb-1 text-truncate-2">
                                                            Order code: 20220420-07073112 has been Picked up
                                                        </p>
                                                        <small class="text-muted">
                                                            April 27 2022, 10:30 pm
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                                <div class="media text-inherit">
                                                    <div class="media-body">
                                                        <p class="mb-1 text-truncate-2">
                                                            Order code: 20210520-10563650 has been Picked up
                                                        </p>
                                                        <small class="text-muted">
                                                            April 27 2022, 10:29 pm
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                                <div class="media text-inherit">
                                                    <div class="media-body">
                                                        <p class="mb-1 text-truncate-2">
                                                            Order code: 20220428-06353357 has been Placed
                                                        </p>
                                                        <small class="text-muted">
                                                            April 27 2022, 8:35 pm
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                                <div class="media text-inherit">
                                                    <div class="media-body">
                                                        <p class="mb-1 text-truncate-2">
                                                            Order code: 20220428-05334287 has been Placed
                                                        </p>
                                                        <small class="text-muted">
                                                            April 27 2022, 7:33 pm
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                                <div class="media text-inherit">
                                                    <div class="media-body">
                                                        <p class="mb-1 text-truncate-2">
                                                            Order code: 20220428-05260288 has been Placed
                                                        </p>
                                                        <small class="text-muted">
                                                            April 27 2022, 7:26 pm
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                                <div class="media text-inherit">
                                                    <div class="media-body">
                                                        <p class="mb-1 text-truncate-2">
                                                            Order code: 20220420-07073111 has been Paid
                                                        </p>
                                                        <small class="text-muted">
                                                            April 20 2022, 8:51 pm
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                                <div class="media text-inherit">
                                                    <div class="media-body">
                                                        <p class="mb-1 text-truncate-2">
                                                            Order code: 20220420-07073111 has been Delivered
                                                        </p>
                                                        <small class="text-muted">
                                                            April 20 2022, 8:49 pm
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                                <div class="media text-inherit">
                                                    <div class="media-body">
                                                        <p class="mb-1 text-truncate-2">
                                                            Order code: 20220421-06464117 has been Delivered
                                                        </p>
                                                        <small class="text-muted">
                                                            April 20 2022, 8:46 pm
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                                <div class="media text-inherit">
                                                    <div class="media-body">
                                                        <p class="mb-1 text-truncate-2">
                                                            Order code: 20220421-06464117 has been Paid
                                                        </p>
                                                        <small class="text-muted">
                                                            April 20 2022, 8:46 pm
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                                <div class="media text-inherit">
                                                    <div class="media-body">
                                                        <p class="mb-1 text-truncate-2">
                                                            Order code: 20220421-06464117 has been Placed
                                                        </p>
                                                        <small class="text-muted">
                                                            April 20 2022, 8:46 pm
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                                <div class="media text-inherit">
                                                    <div class="media-body">
                                                        <p class="mb-1 text-truncate-2">
                                                            Order code: 20220420-07073259 has been Delivered
                                                        </p>
                                                        <small class="text-muted">
                                                            April 20 2022, 8:38 pm
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                                <div class="media text-inherit">
                                                    <div class="media-body">
                                                        <p class="mb-1 text-truncate-2">
                                                            Order code: 20220420-07073259 has been Paid
                                                        </p>
                                                        <small class="text-muted">
                                                            April 20 2022, 8:38 pm
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                                <div class="media text-inherit">
                                                    <div class="media-body">
                                                        <p class="mb-1 text-truncate-2">
                                                            Order code: 20220420-07073259 has been Picked up
                                                        </p>
                                                        <small class="text-muted">
                                                            April 20 2022, 8:38 pm
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                                <div class="media text-inherit">
                                                    <div class="media-body">
                                                        <p class="mb-1 text-truncate-2">
                                                            Order code: 20220420-07493371 has been Paid
                                                        </p>
                                                        <small class="text-muted">
                                                            April 19 2022, 9:50 pm
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-center border-top">
                                        <a href="https://demo.activeitzone.com/ecommerce/admin/all-notification" class="text-reset d-block py-2">
                                            View All Notifications
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="aiz-topbar-item ml-2">
                            <div class="align-items-stretch d-flex dropdown " id="lang-change">
                                <a class="dropdown-toggle no-arrow" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="btn btn-icon">
                                        <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/flags/en.png" height="11">
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-xs">

                                    <li>
                                        <a href="javascript:void(0)" data-flag="en" class="dropdown-item  active ">
                                            <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/flags/en.png" class="mr-2">
                                            <span class="language">English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="bd" class="dropdown-item ">
                                            <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/flags/bd.png" class="mr-2">
                                            <span class="language">Bangla</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="sa" class="dropdown-item ">
                                            <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/flags/sa.png" class="mr-2">
                                            <span class="language">Arabic</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="aiz-topbar-item ml-2">
                            <div class="align-items-stretch d-flex dropdown">
                                <a class="dropdown-toggle no-arrow text-dark" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="d-flex align-items-center">
                                        <span class="avatar avatar-sm mr-md-2">
                                            <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/jxUqbB2ThpoDFZbBtPHaiy2pF7i02hDaFJEEF9rx.png" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/avatar-place.png';">
                                        </span>
                                        <span class="d-none d-md-block">
                                            <span class="d-block fw-500">{{ Auth::user()->name}}</span>
                                            <span class=" d-block small opacity-60">admin</span>
                                        </span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-md">
                                    <a href="{{route('profile')}}" class="dropdown-item">
                                        <i class="las la-user-circle"></i>
                                        <span>@lang("Profile")</span>
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <i class="las la-sign-out-alt"></i> {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div><!-- .aiz-topbar-item -->
                    </div>
                </div>
            </div><!-- .aiz-topbar -->
            @yield('content')
        </div><!-- .aiz-content-wrapper -->
        <div class="bg-white text-center py-3 px-15px px-lg-25px mt-auto">
            <p class="mb-0">&copy; v6.1.2</p>
        </div>
    </div><!-- .aiz-main-wrapper -->

    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/aiz-core.js')}}"></script>
    <script type="text/javascript">
        AIZ.plugins.chart('#pie-1', {
            type: 'doughnut',
            data: {
                labels: [
                    'Total published products',
                    'Total sellers products',
                    'Total admin products'
                ],
                datasets: [{
                    data: [
                        148,
                        98,
                        50
                    ],
                    backgroundColor: [
                        "#fd3995",
                        "#34bfa3",
                        "#5d78ff",
                        '#fdcb6e',
                        '#d35400',
                        '#8e44ad',
                        '#006442',
                        '#4D8FAC',
                        '#CA6924',
                        '#C91F37'
                    ]
                }]
            },
            options: {
                cutoutPercentage: 70,
                legend: {
                    labels: {
                        fontFamily: 'Poppins',
                        boxWidth: 10,
                        usePointStyle: true
                    },
                    onClick: function() {
                        return '';
                    },
                    position: 'bottom'
                }
            }
        });

        AIZ.plugins.chart('#pie-2', {
            type: 'doughnut',
            data: {
                labels: [
                    'Total sellers',
                    'Total approved sellers',
                    'Total pending sellers'
                ],
                datasets: [{
                    data: [
                        10,
                        10,
                        0
                    ],
                    backgroundColor: [
                        "#fd3995",
                        "#34bfa3",
                        "#5d78ff",
                        '#fdcb6e',
                        '#d35400',
                        '#8e44ad',
                        '#006442',
                        '#4D8FAC',
                        '#CA6924',
                        '#C91F37'
                    ]
                }]
            },
            options: {
                cutoutPercentage: 70,
                legend: {
                    labels: {
                        fontFamily: 'Montserrat',
                        boxWidth: 10,
                        usePointStyle: true
                    },
                    onClick: function() {
                        return '';
                    },
                    position: 'bottom'
                }
            }
        });
        AIZ.plugins.chart('#graph-1', {
            type: 'bar',
            data: {
                labels: [
                    'Women Clothing &amp; Fashion',
                    'Men Clothing &amp; Fashion',
                    'Computer &amp; Accessories',
                    'Automobile &amp; Motorcycle',
                    'Kids &amp; toy',
                    'Sports &amp; outdoor',
                    'Jewelry &amp; Watches',
                    'Cellphones &amp; Tabs',
                    'Beauty, Health &amp; Hair',
                    'Home Improvement &amp; Tools',
                    'Home decoration &amp; Appliance',
                    'Toy',
                    'Software',
                ],
                datasets: [{
                    label: 'Number of sale',
                    data: [
                        11, 59, 5, 1, 5, 0, 4, 5, 1, 0, 0, 0, 2,
                    ],
                    backgroundColor: [
                        'rgba(55, 125, 255, 0.4)',
                        'rgba(55, 125, 255, 0.4)',
                        'rgba(55, 125, 255, 0.4)',
                        'rgba(55, 125, 255, 0.4)',
                        'rgba(55, 125, 255, 0.4)',
                        'rgba(55, 125, 255, 0.4)',
                        'rgba(55, 125, 255, 0.4)',
                        'rgba(55, 125, 255, 0.4)',
                        'rgba(55, 125, 255, 0.4)',
                        'rgba(55, 125, 255, 0.4)',
                        'rgba(55, 125, 255, 0.4)',
                        'rgba(55, 125, 255, 0.4)',
                        'rgba(55, 125, 255, 0.4)',
                    ],
                    borderColor: [
                        'rgba(55, 125, 255, 1)',
                        'rgba(55, 125, 255, 1)',
                        'rgba(55, 125, 255, 1)',
                        'rgba(55, 125, 255, 1)',
                        'rgba(55, 125, 255, 1)',
                        'rgba(55, 125, 255, 1)',
                        'rgba(55, 125, 255, 1)',
                        'rgba(55, 125, 255, 1)',
                        'rgba(55, 125, 255, 1)',
                        'rgba(55, 125, 255, 1)',
                        'rgba(55, 125, 255, 1)',
                        'rgba(55, 125, 255, 1)',
                        'rgba(55, 125, 255, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        gridLines: {
                            color: '#f2f3f8',
                            zeroLineColor: '#f2f3f8'
                        },
                        ticks: {
                            fontColor: "#8b8b8b",
                            fontFamily: 'Poppins',
                            fontSize: 10,
                            beginAtZero: true
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            color: '#f2f3f8'
                        },
                        ticks: {
                            fontColor: "#8b8b8b",
                            fontFamily: 'Poppins',
                            fontSize: 10
                        }
                    }]
                },
                legend: {
                    labels: {
                        fontFamily: 'Poppins',
                        boxWidth: 10,
                        usePointStyle: true
                    },
                    onClick: function() {
                        return '';
                    },
                }
            }
        });
        AIZ.plugins.chart('#graph-2', {
            type: 'bar',
            data: {
                labels: [
                    'Women Clothing &amp; Fashion',
                    'Men Clothing &amp; Fashion',
                    'Computer &amp; Accessories',
                    'Automobile &amp; Motorcycle',
                    'Kids &amp; toy',
                    'Sports &amp; outdoor',
                    'Jewelry &amp; Watches',
                    'Cellphones &amp; Tabs',
                    'Beauty, Health &amp; Hair',
                    'Home Improvement &amp; Tools',
                    'Home decoration &amp; Appliance',
                    'Toy',
                    'Software',
                ],
                datasets: [{
                    label: 'Number of Stock',
                    data: [
                        227973, 55973, 34538, 6559, 27029, 0, 3497, 23999, 5000, 2500, 0, 30, -2,
                    ],
                    backgroundColor: [
                        'rgba(253, 57, 149, 0.4)',
                        'rgba(253, 57, 149, 0.4)',
                        'rgba(253, 57, 149, 0.4)',
                        'rgba(253, 57, 149, 0.4)',
                        'rgba(253, 57, 149, 0.4)',
                        'rgba(253, 57, 149, 0.4)',
                        'rgba(253, 57, 149, 0.4)',
                        'rgba(253, 57, 149, 0.4)',
                        'rgba(253, 57, 149, 0.4)',
                        'rgba(253, 57, 149, 0.4)',
                        'rgba(253, 57, 149, 0.4)',
                        'rgba(253, 57, 149, 0.4)',
                        'rgba(253, 57, 149, 0.4)',
                    ],
                    borderColor: [
                        'rgba(253, 57, 149, 1)',
                        'rgba(253, 57, 149, 1)',
                        'rgba(253, 57, 149, 1)',
                        'rgba(253, 57, 149, 1)',
                        'rgba(253, 57, 149, 1)',
                        'rgba(253, 57, 149, 1)',
                        'rgba(253, 57, 149, 1)',
                        'rgba(253, 57, 149, 1)',
                        'rgba(253, 57, 149, 1)',
                        'rgba(253, 57, 149, 1)',
                        'rgba(253, 57, 149, 1)',
                        'rgba(253, 57, 149, 1)',
                        'rgba(253, 57, 149, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        gridLines: {
                            color: '#f2f3f8',
                            zeroLineColor: '#f2f3f8'
                        },
                        ticks: {
                            fontColor: "#8b8b8b",
                            fontFamily: 'Poppins',
                            fontSize: 10,
                            beginAtZero: true
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            color: '#f2f3f8'
                        },
                        ticks: {
                            fontColor: "#8b8b8b",
                            fontFamily: 'Poppins',
                            fontSize: 10
                        }
                    }]
                },
                legend: {
                    labels: {
                        fontFamily: 'Poppins',
                        boxWidth: 10,
                        usePointStyle: true
                    },
                    onClick: function() {
                        return '';
                    },
                }
            }
        });
    </script>
    <!-- <script src="{{ asset('assets/js/aiz-core.js')}}"></script> -->
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script> -->
    <script src="{{asset('assets/selected2/dist/js/select2.min.js')}}"></script>
    <script type="text/javascript">
        $('.selectcategorie').select2({
            placeholder: 'Seclectionner une categorie',
            tags: true,

            ajax: {
                url: '/produitCategorie',
                dataType: 'json',
                delay: 100,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data) {
                    console.log(data);
                    return {
                        results: $.map(data, function(item) {
                            return {
                                text: item.categorie,
                                id: item.categorie
                            }
                        })
                    };
                },
                cache: true
            }
        });
        $('.selectmarque').select2({
            placeholder: 'Seclectionner une marque',
            tags: true,

            ajax: {
                url: '/produitMarque',
                dataType: 'json',
                delay: 100,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data) {
                    console.log(data);
                    return {
                        results: $.map(data, function(item) {
                            return {
                                text: item.categorie,
                                id: item.categorie
                            }
                        })
                    };
                },
                cache: true
            }
        });
    </script>
    <script type="text/javascript">
        if ($('#lang-change').length > 0) {
            $('#lang-change .dropdown-menu a').each(function() {
                $(this).on('click', function(e) {
                    e.preventDefault();
                    var $this = $(this);
                    var locale = $this.data('flag');
                    $.post('https://demo.activeitzone.com/ecommerce/language', {
                        _token: 'FRREUj2dROMBBmottIxf9LQigkhinV1dvoPIKxgX',
                        locale: locale
                    }, function(data) {
                        location.reload();
                    });

                });
            });
        }

        function menuSearch() {
            var filter, item;
            filter = $("#menu-search").val().toUpperCase();
            items = $("#main-menu").find("a");
            items = items.filter(function(i, item) {
                if ($(item).find(".aiz-side-nav-text")[0].innerText.toUpperCase().indexOf(filter) > -1 && $(item).attr('href') !== '#') {
                    return item;
                }
            });

            if (filter !== '') {
                $("#main-menu").addClass('d-none');
                $("#search-menu").html('')
                if (items.length > 0) {
                    for (i = 0; i < items.length; i++) {
                        const text = $(items[i]).find(".aiz-side-nav-text")[0].innerText;
                        const link = $(items[i]).attr('href');
                        $("#search-menu").append(`<li class="aiz-side-nav-item"><a href="${link}" class="aiz-side-nav-link"><i class="las la-ellipsis-h aiz-side-nav-icon"></i><span>${text}</span></a></li`);
                    }
                } else {
                    $("#search-menu").html(`<li class="aiz-side-nav-item"><span	class="text-center text-muted d-block">Nothing found</span></li>`);
                }
            } else {
                $("#main-menu").removeClass('d-none');
                $("#search-menu").html('')
            }
        }
    </script>

</body>

</html>

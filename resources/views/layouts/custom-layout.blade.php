<!-- resources/views/layouts/custom-layout.blade.php -->






 <!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> YNEX - Tailwind Admin Template </title>
    <meta name="description" content="A Tailwind CSS admin template is a pre-designed web page for an admin dashboard. Optimizing it for SEO includes using meta descriptions and ensuring it's responsive and fast-loading.">
    <meta name="keywords" content="html dashboard,tailwind css,tailwind admin dashboard,template dashboard,html and css template,tailwind dashboard,tailwind css templates,admin dashboard html template,tailwind admin,html panel,template tailwind,html admin template,admin panel html">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/brand-logos/favicon.ico">

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Style Css -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Simplebar Css -->
    <link rel="stylesheet" href="../assets/libs/simplebar/simplebar.min.css">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="../assets/libs/@simonwep/pickr/themes/nano.min.css">

</head>

<body>

    <!-- ========== Switcher  ========== -->
<div id="hs-overlay-switcher" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right" tabindex="-1">
  <div class="ti-offcanvas-header z-10 relative">
    <h5 class="ti-offcanvas-title">
      Switcher
    </h5>
    <button type="button"
      class="ti-btn flex-shrink-0 p-0 !mb-0  transition-none text-defaulttextcolor dark:text-defaulttextcolor/70 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white  dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
      data-hs-overlay="#hs-overlay-switcher">
      <span class="sr-only">Close modal</span>
      <i class="ri-close-circle-line leading-none text-lg"></i>
    </button>
  </div>
  <div class="ti-offcanvas-body !p-0 !border-b dark:border-white/10 z-10 relative !h-auto">
    <div class="flex rtl:space-x-reverse" aria-label="Tabs" role="tablist">
      <button type="button"
        class="hs-tab-active:bg-success/20 w-full !py-2 !px-4 hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-success dark:hs-tab-active:bg-success/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-success -mb-px bg-white font-semibold text-center  text-defaulttextcolor dark:text-defaulttextcolor/70 rounded-none hover:text-gray-700 dark:bg-bodybg dark:border-white/10  active"
        id="switcher-item-1" data-hs-tab="#switcher-1" aria-controls="switcher-1" role="tab">
        Theme Style
      </button>
      <button type="button"
        class="hs-tab-active:bg-success/20 w-full !py-2 !px-4 hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-success dark:hs-tab-active:bg-success/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-success -mb-px  bg-white font-semibold text-center  text-defaulttextcolor dark:text-defaulttextcolor/70 rounded-none hover:text-gray-700 dark:bg-bodybg dark:border-white/10  dark:hover:text-gray-300"
        id="switcher-item-2" data-hs-tab="#switcher-2" aria-controls="switcher-2" role="tab">
        Theme Colors
      </button>
    </div>
  </div>
  <div class="ti-offcanvas-body" id="switcher-body">
    <div id="switcher-1" role="tabpanel" aria-labelledby="switcher-item-1" class="">
      <div class="">
        <p class="switcher-style-head">Theme Color Mode:</p>
        <div class="grid grid-cols-3 switcher-style">
          <div class="flex items-center">
            <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-light-theme" checked>
            <label for="switcher-light-theme"
              class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Light</label>
          </div>
          <div class="flex items-center">
            <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-dark-theme">
            <label for="switcher-dark-theme"
              class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Dark</label>
          </div>
        </div>
      </div>
      <div>
        <p class="switcher-style-head">Directions:</p>
        <div class="grid grid-cols-3  switcher-style">
          <div class="flex items-center">
            <input type="radio" name="direction" class="ti-form-radio" id="switcher-ltr" checked>
            <label for="switcher-ltr" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">LTR</label>
          </div>
          <div class="flex items-center">
            <input type="radio" name="direction" class="ti-form-radio" id="switcher-rtl">
            <label for="switcher-rtl" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">RTL</label>
          </div>
        </div>
      </div>
      <div>
        <p class="switcher-style-head">Navigation Styles:</p>
        <div class="grid grid-cols-3  switcher-style">
          <div class="flex items-center">
            <input type="radio" name="navigation-style" class="ti-form-radio" id="switcher-vertical" checked>
            <label for="switcher-vertical"
              class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Vertical</label>
          </div>
          <div class="flex items-center">
            <input type="radio" name="navigation-style" class="ti-form-radio" id="switcher-horizontal">
            <label for="switcher-horizontal"
              class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Horizontal</label>
          </div>
        </div>
      </div>
      <div>
        <p class="switcher-style-head">Navigation Menu Style:</p>
        <div class="grid grid-cols-2 gap-2 switcher-style">
          <div class="flex">
            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio" id="switcher-menu-click"
              checked>
            <label for="switcher-menu-click" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Menu
              Click</label>
          </div>
          <div class="flex">
            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio" id="switcher-menu-hover">
            <label for="switcher-menu-hover" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Menu
              Hover</label>
          </div>
          <div class="flex">
            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio" id="switcher-icon-click">
            <label for="switcher-icon-click" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Icon
              Click</label>
          </div>
          <div class="flex">
            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio" id="switcher-icon-hover">
            <label for="switcher-icon-hover" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Icon
              Hover</label>
          </div>
        </div>
        <div class="px-4 text-secondary text-xs"><b class="me-2">Note:</b>Works same for both Vertical and
          Horizontal
        </div>
      </div>
      <div class=" sidemenu-layout-styles">
        <p class="switcher-style-head">Sidemenu Layout Syles:</p>
        <div class="grid grid-cols-2 gap-2 switcher-style">
          <div class="flex">
            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-default-menu" checked>
            <label for="switcher-default-menu"
              class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Default
              Menu</label>
          </div>
          <div class="flex">
            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-closed-menu">
            <label for="switcher-closed-menu" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">
              Closed
              Menu</label>
          </div>
          <div class="flex">
            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-icontext-menu">
            <label for="switcher-icontext-menu" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Icon
              Text</label>
          </div>
          <div class="flex">
            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-icon-overlay">
            <label for="switcher-icon-overlay" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Icon
              Overlay</label>
          </div>
          <div class="flex">
            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-detached">
            <label for="switcher-detached"
              class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Detached</label>
          </div>
          <div class="flex">
            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-double-menu">
            <label for="switcher-double-menu" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Double
              Menu</label>
          </div>
        </div>
        <div class="px-4 text-secondary text-xs"><b class="me-2">Note:</b>Navigation menu styles won't work
          here.</div>
      </div>
      <div>
        <p class="switcher-style-head">Page Styles:</p>
        <div class="grid grid-cols-3  switcher-style">
          <div class="flex">
            <input type="radio" name="data-page-styles" class="ti-form-radio" id="switcher-regular" checked>
            <label for="switcher-regular"
              class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Regular</label>
          </div>
          <div class="flex">
            <input type="radio" name="data-page-styles" class="ti-form-radio" id="switcher-classic">
            <label for="switcher-classic"
              class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Classic</label>
          </div>
          <div class="flex">
            <input type="radio" name="data-page-styles" class="ti-form-radio" id="switcher-modern">
            <label for="switcher-modern"
              class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold"> Modern</label>
          </div>
        </div>
      </div>
      <div>
        <p class="switcher-style-head">Layout Width Styles:</p>
        <div class="grid grid-cols-3 switcher-style">
          <div class="flex">
            <input type="radio" name="layout-width" class="ti-form-radio" id="switcher-full-width" checked>
            <label for="switcher-full-width"
              class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">FullWidth</label>
          </div>
          <div class="flex">
            <input type="radio" name="layout-width" class="ti-form-radio" id="switcher-boxed">
            <label for="switcher-boxed" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Boxed</label>
          </div>
        </div>
      </div>
      <div>
        <p class="switcher-style-head">Menu Positions:</p>
        <div class="grid grid-cols-3  switcher-style">
          <div class="flex">
            <input type="radio" name="data-menu-positions" class="ti-form-radio" id="switcher-menu-fixed" checked>
            <label for="switcher-menu-fixed"
              class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Fixed</label>
          </div>
          <div class="flex">
            <input type="radio" name="data-menu-positions" class="ti-form-radio" id="switcher-menu-scroll">
            <label for="switcher-menu-scroll"
              class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Scrollable </label>
          </div>
        </div>
      </div>
      <div>
        <p class="switcher-style-head">Header Positions:</p>
        <div class="grid grid-cols-3 switcher-style">
          <div class="flex">
            <input type="radio" name="data-header-positions" class="ti-form-radio" id="switcher-header-fixed" checked>
            <label for="switcher-header-fixed" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">
              Fixed</label>
          </div>
          <div class="flex">
            <input type="radio" name="data-header-positions" class="ti-form-radio" id="switcher-header-scroll">
            <label for="switcher-header-scroll"
              class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Scrollable
            </label>
          </div>
        </div>
      </div>
      <div class="">
        <p class="switcher-style-head">Loader:</p>
        <div class="grid grid-cols-3 switcher-style">
          <div class="flex">
            <input type="radio" name="page-loader" class="ti-form-radio" id="switcher-loader-enable" checked>
            <label for="switcher-loader-enable" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">
              Enable</label>
          </div>
          <div class="flex">
            <input type="radio" name="page-loader" class="ti-form-radio" id="switcher-loader-disable">
            <label for="switcher-loader-disable"
              class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Disable
            </label>
          </div>
        </div>
    </div>
    </div>
    <div id="switcher-2" class="hidden" role="tabpanel" aria-labelledby="switcher-item-2">
      <div class="theme-colors">
        <p class="switcher-style-head">Menu Colors:</p>
        <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
          <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
            <input class="hs-tooltip-toggle ti-form-radio color-input color-white" type="radio" name="menu-colors"
              id="switcher-menu-light" checked>
            <span
              class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
              role="tooltip">
              Light Menu
            </span>
          </div>
          <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
            <input class="hs-tooltip-toggle ti-form-radio color-input color-dark" type="radio" name="menu-colors"
              id="switcher-menu-dark" checked>
            <span
              class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
              role="tooltip">
              Dark Menu
            </span>
          </div>
          <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
            <input class="hs-tooltip-toggle ti-form-radio color-input color-primary" type="radio" name="menu-colors"
              id="switcher-menu-primary">
            <span
              class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
              role="tooltip">
              Color Menu
            </span>
          </div>
          <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
            <input class="hs-tooltip-toggle ti-form-radio color-input color-gradient" type="radio" name="menu-colors"
              id="switcher-menu-gradient">
            <span
              class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
              role="tooltip">
              Gradient Menu
            </span>
          </div>
          <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
            <input class="hs-tooltip-toggle ti-form-radio color-input color-transparent" type="radio" name="menu-colors"
              id="switcher-menu-transparent">
            <span
              class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
              role="tooltip">
              Transparent Menu
            </span>
          </div>
        </div>
        <div class="px-4 text-[#8c9097] dark:text-white/50 text-[.6875rem]"><b class="me-2">Note:</b>If you want to change color Menu
          dynamically
          change from below Theme Primary color picker.</div>
      </div>
      <div class="theme-colors">
        <p class="switcher-style-head">Header Colors:</p>
        <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
          <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
            <input class="hs-tooltip-toggle ti-form-radio color-input color-white !border" type="radio" name="header-colors"
              id="switcher-header-light" checked>
            <span
              class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
              role="tooltip">
              Light Header
            </span>
          </div>
          <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
            <input class="hs-tooltip-toggle ti-form-radio color-input color-dark" type="radio" name="header-colors"
              id="switcher-header-dark">
            <span
              class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
              role="tooltip">
              Dark Header
            </span>
          </div>
          <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
            <input class="hs-tooltip-toggle ti-form-radio color-input color-primary" type="radio" name="header-colors"
              id="switcher-header-primary">
            <span
              class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
              role="tooltip">
              Color Header
            </span>
          </div>
          <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
            <input class="hs-tooltip-toggle ti-form-radio color-input color-gradient" type="radio" name="header-colors"
              id="switcher-header-gradient">
            <span
              class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
              role="tooltip">
              Gradient Header
            </span>
          </div>
          <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
            <input class="hs-tooltip-toggle ti-form-radio color-input color-transparent" type="radio"
              name="header-colors" id="switcher-header-transparent">
            <span
              class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
              role="tooltip">
              Transparent Header
            </span>
          </div>
        </div>
        <div class="px-4 text-[#8c9097] dark:text-white/50 text-[.6875rem]"><b class="me-2">Note:</b>If you want to change color
          Header dynamically
          change from below Theme Primary color picker.</div>
      </div>
      <div class="theme-colors">
        <p class="switcher-style-head">Theme Primary:</p>
        <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
          <div class="ti-form-radio switch-select">
            <input class="ti-form-radio color-input color-primary-1" type="radio" name="theme-primary"
              id="switcher-primary" checked>
          </div>
          <div class="ti-form-radio switch-select">
            <input class="ti-form-radio color-input color-primary-2" type="radio" name="theme-primary"
              id="switcher-primary1">
          </div>
          <div class="ti-form-radio switch-select">
            <input class="ti-form-radio color-input color-primary-3" type="radio" name="theme-primary"
              id="switcher-primary2">
          </div>
          <div class="ti-form-radio switch-select">
            <input class="ti-form-radio color-input color-primary-4" type="radio" name="theme-primary"
              id="switcher-primary3">
          </div>
          <div class="ti-form-radio switch-select">
            <input class="ti-form-radio color-input color-primary-5" type="radio" name="theme-primary"
              id="switcher-primary4">
          </div>
          <div class="ti-form-radio switch-select ps-0 mt-1 color-primary-light">
            <div class="theme-container-primary"></div>
            <div class="pickr-container-primary"></div>
          </div>
        </div>
      </div>
      <div class="theme-colors">
        <p class="switcher-style-head">Theme Background:</p>
        <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
          <div class="ti-form-radio switch-select">
            <input class="ti-form-radio color-input color-bg-1" type="radio" name="theme-background"
              id="switcher-background" checked>
          </div>
          <div class="ti-form-radio switch-select">
            <input class="ti-form-radio color-input color-bg-2" type="radio" name="theme-background"
              id="switcher-background1">
          </div>
          <div class="ti-form-radio switch-select">
            <input class="ti-form-radio color-input color-bg-3" type="radio" name="theme-background"
              id="switcher-background2">
          </div>
          <div class="ti-form-radio switch-select">
            <input class="ti-form-radio color-input color-bg-4" type="radio" name="theme-background"
              id="switcher-background3">
          </div>
          <div class="ti-form-radio switch-select">
            <input class="ti-form-radio color-input color-bg-5" type="radio" name="theme-background"
              id="switcher-background4">
          </div>
          <div class="ti-form-radio switch-select ps-0 mt-1 color-bg-transparent">
            <div class="theme-container-background hidden"></div>
            <div class="pickr-container-background"></div>
          </div>
        </div>
      </div>
      <div class="menu-image theme-colors">
        <p class="switcher-style-head">Menu With Background Image:</p>
        <div class="flex switcher-style space-x-3 rtl:space-x-reverse flex-wrap gap-3">
          <div class="ti-form-radio switch-select">
            <input class="ti-form-radio bgimage-input bg-img1" type="radio" name="theme-images" id="switcher-bg-img">
          </div>
          <div class="ti-form-radio switch-select">
            <input class="ti-form-radio bgimage-input bg-img2" type="radio" name="theme-images" id="switcher-bg-img1">
          </div>
          <div class="ti-form-radio switch-select">
            <input class="ti-form-radio bgimage-input bg-img3" type="radio" name="theme-images" id="switcher-bg-img2">
          </div>
          <div class="ti-form-radio switch-select">
            <input class="ti-form-radio bgimage-input bg-img4" type="radio" name="theme-images" id="switcher-bg-img3">
          </div>
          <div class="ti-form-radio switch-select">
            <input class="ti-form-radio bgimage-input bg-img5" type="radio" name="theme-images" id="switcher-bg-img4">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ti-offcanvas-footer sm:flex justify-between">
    <a href="javascript:void(0);" id="reset-all" class="w-full ti-btn ti-btn-danger-full m-1">Reset</a>
  </div>
</div>
<!-- ========== END Switcher  ========== -->
    
    <!-- Loader -->
    <div id="loader" >
        <img src="../assets/images/media/loader.svg" alt="">
    </div>
    <!-- Loader -->
    <div class="page w-full">

        <!-- Start::Header -->

<!-- End::Header -->
        <!-- Start::app-sidebar -->

<!-- End::app-sidebar -->


        <!-- Start::content  -->
        <div class="content ">
            <!-- Start::main-content -->
           <div class="main-content">
            <!-- Page Header -->
           
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class=" w-full grid grid-cols-12 gap-x-6 !mx-auto">
                <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 col-span-12">
                    <div class="box overflow-hidden">
                        <div class="box-body !p-0">
                        <div class="contact-page-banner">
    <div class="text-center">
        <h3 class="text-[1.75rem] font-semibold text-white">Thank you for creating an account, we will call you soon!</h3>
        <h6 class="text-[1rem] text-white mb-6">You can reach us via WhatsApp using one of these numbers:</h6>

        <!-- WhatsApp link for the first number -->
        <a href="https://wa.me/255748470181" target="_blank" class="ti-btn bg-success text-white !font-medium mb-2">
            Contact Us via WhatsApp 
            <i class="ri-whatsapp-line align-middle"></i> <!-- WhatsApp Icon -->
        </a>

        <!-- WhatsApp link for the second number -->
        <a href="https://wa.me/255629364847" target="_blank" class="ti-btn bg-success text-white !font-medium">
            Contact Us via WhatsApp 
            <i class="ri-whatsapp-line align-middle"></i> <!-- WhatsApp Icon -->
        </a>
    </div>
</div>

                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-1 xl:col-span-1 lg:col-span-1 md:col-span-1 sm:col-span-1 col-span-12"></div>
                
                <div class="xxl:col-span-1 xl:col-span-1 lg:col-span-1 md:col-span-1 sm:col-span-1  col-span-12"></div>
            </div>
            <!--End::row-1 -->
            </div>
        </div>
        <!-- End::content  -->

        <!-- ========== Search Modal ========== -->
<div id="search-modal" class="hs-overlay ti-modal hidden mt-[1.75rem]">
  <div class="ti-modal-box">
    <div class="ti-modal-content !border !border-defaultborder dark:!border-defaultborder/10 !rounded-[0.5rem]">
      <div class="ti-modal-body">

        <div class="input-group border-[2px] border-primary rounded-[0.25rem] w-full flex">
          <a aria-label="anchor" href="javascript:void(0);"
            class="input-group-text flex items-center bg-light border-e-[#dee2e6] !py-[0.375rem] !px-[0.75rem] !rounded-none !text-[0.875rem]"
            id="Search-Grid"><i class="fe fe-search header-link-icon text-[0.875rem]"></i></a>

          <input type="search" class="form-control border-0 px-2 !text-[0.8rem] w-full focus:ring-transparent"
            placeholder="Search" aria-label="Username">

          <a aria-label="anchor" href="javascript:void(0);" class="flex items-center input-group-text bg-light !py-[0.375rem] !px-[0.75rem] !border-e-0"
            id="voice-search"><i class="fe fe-mic header-link-icon"></i></a>
          <div class="hs-dropdown ti-dropdown">
            <a aria-label="anchor" href="javascript:void(0);"
              class="flex items-center hs-dropdown-toggle ti-dropdown-toggle btn btn-light btn-icon !bg-light !py-[0.375rem] !rounded-none !px-[0.75rem] text-[0.95rem] h-[2.413rem] w-[2.313rem]">
              <i class="fe fe-more-vertical"></i>
            </a>

            <ul class="absolute hs-dropdown-menu ti-dropdown-menu !-mt-2 !p-0 hidden">
              <li><a
                  class="ti-dropdown-item flex text-defaulttextcolor dark:text-defaulttextcolor/70 !py-[0.5rem] !px-[0.9375rem] !text-[0.8125rem] font-medium"
                  href="javascript:void(0);">Action</a></li>
              <li><a
                  class="ti-dropdown-item flex text-defaulttextcolor dark:text-defaulttextcolor/70 !py-[0.5rem] !px-[0.9375rem] !text-[0.8125rem] font-medium"
                  href="javascript:void(0);">Another action</a></li>
              <li><a
                  class="ti-dropdown-item flex text-defaulttextcolor dark:text-defaulttextcolor/70 !py-[0.5rem] !px-[0.9375rem] !text-[0.8125rem] font-medium"
                  href="javascript:void(0);">Something else here</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a
                  class="ti-dropdown-item flex text-defaulttextcolor dark:text-defaulttextcolor/70 !py-[0.5rem] !px-[0.9375rem] !text-[0.8125rem] font-medium"
                  href="javascript:void(0);">Separated link</a></li>
            </ul>
          </div>
        </div>
        <div class="mt-5">
          <p class="font-normal  text-[#8c9097] dark:text-white/50 text-[0.813rem] dark:text-gray-200 mb-2">Are You Looking For...</p>

          <span class="search-tags text-[0.75rem] !py-[0rem] !px-[0.55rem] dark:border-defaultborder/10"><i class="fe fe-user me-2"></i>People<a
              href="javascript:void(0)" class="tag-addon header-remove-btn"><span class="sr-only">Remove badge</span><i class="fe fe-x"></i></a></span>
          <span class="search-tags text-[0.75rem] !py-[0rem] !px-[0.55rem] dark:border-defaultborder/10"><i class="fe fe-file-text me-2"></i>Pages<a
              href="javascript:void(0)" class="tag-addon header-remove-btn"><span class="sr-only">Remove badge</span><i class="fe fe-x"></i></a></span>
          <span class="search-tags text-[0.75rem] !py-[0rem] !px-[0.55rem] dark:border-defaultborder/10"><i
              class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)" class="tag-addon header-remove-btn"><span class="sr-only">Remove badge</span><i
                class="fe fe-x"></i></a></span>
          <span class="search-tags text-[0.75rem] !py-[0rem] !px-[0.55rem] dark:border-defaultborder/10"><i class="fe fe-server me-2"></i>Tags<a
              href="javascript:void(0)" class="tag-addon header-remove-btn"><span class="sr-only">Remove badge</span><i class="fe fe-x"></i></a></span>

        </div>


        <div class="my-[1.5rem]">
          <p class="font-normal  text-[#8c9097] dark:text-white/50 text-[0.813rem] mb-2">Recent Search :</p>

          <div id="dismiss-alert" role="alert"
            class="!p-2 border dark:border-defaultborder/10 rounded-[0.3125rem] flex items-center text-defaulttextcolor dark:text-defaulttextcolor/70 !mb-2 !text-[0.8125rem] alert">
            <a href="notifications.html"><span>Notifications</span></a>
            <a aria-label="anchor" class="ms-auto leading-none" href="javascript:void(0);" data-hs-remove-element="#dismiss-alert"><i
                class="fe fe-x !text-[0.8125rem] text-[#8c9097] dark:text-white/50"></i></a>
          </div>

          <div id="dismiss-alert-1" role="alert"
            class="!p-2 border dark:border-defaultborder/10 rounded-[0.3125rem] flex items-center text-defaulttextcolor dark:text-defaulttextcolor/70 !mb-2 !text-[0.8125rem] alert">
            <a href="alerts.html"><span>Alerts</span></a>
            <a aria-label="anchor" class="ms-auto leading-none" href="javascript:void(0);" data-hs-remove-element="#dismiss-alert-1"><i
                class="fe fe-x !text-[0.8125rem] text-[#8c9097] dark:text-white/50"></i></a>
          </div>

          <div id="dismiss-alert-2" role="alert"
            class="!p-2 border dark:border-defaultborder/10 rounded-[0.3125rem] flex items-center text-defaulttextcolor dark:text-defaulttextcolor/70 !mb-0 !text-[0.8125rem] alert">
            <a href="mail.html"><span>Mail</span></a>
            <a aria-label="anchor" class="ms-auto lh-1" href="javascript:void(0);" data-hs-remove-element="#dismiss-alert-2"><i
                class="fe fe-x !text-[0.8125rem] text-[#8c9097] dark:text-white/50"></i></a>
          </div>
        </div>
      </div>

      <div class="ti-modal-footer !py-[1rem] !px-[1.25rem]">
        <div class="inline-flex rounded-md  shadow-sm">
          <button type="button"
            class="ti-btn-group !px-[0.75rem] !py-[0.45rem]  rounded-s-[0.25rem] !rounded-e-none ti-btn-primary !text-[0.75rem] dark:border-white/10">
            Search
          </button>
          <button type="button"
            class="ti-btn-group  ti-btn-primary-full rounded-e-[0.25rem] dark:border-white/10 !text-[0.75rem] !rounded-s-none !px-[0.75rem] !py-[0.45rem]">
            Clear Recents
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ========== END Search Modal ========== -->
        
<!-- Footer Start -->
<footer class="footer mt-auto xl:ps-[15rem]  font-normal font-inter bg-white text-defaultsize leading-normal text-[0.813] shadow-[0_0_0.4rem_rgba(0,0,0,0.1)] dark:bg-bodybg py-4 text-center">
    <div class="container">
        <span class="text-gray dark:text-defaulttextcolor/50"> Copyright © <span id="year"></span> <a
        <a href="https://www.facebook.com/jjmwakalinga/" class="text-defaulttextcolor font-semibold dark:text-defaulttextcolor" target="_blank">JAMES JOSEPH MWAKALINGA</a>

            Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);">
                <span class="font-semibold text-primary underline">Brainsoft Tech</span>
            </a> All
            rights
            reserved
        </span>
    </div>
</footer>
<!-- Footer End -->

    </div>

    <!-- Back To Top -->
<div class="scrollToTop">
    <span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
</div>

<div id="responsive-overlay"></div>


<!-- Switch JS -->
<script src="../assets/js/switch.js"></script>

<!-- Preline JS -->
<script src="../assets/libs/preline/preline.js"></script>

<!-- popperjs -->
<script src="../assets/libs/@popperjs/core/umd/popper.min.js"></script>

<!-- Color Picker JS -->
<script src="../assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>

<!-- sidebar JS -->
<script src="../assets/js/defaultmenu.js"></script>

<!-- sticky JS -->
<script src="../assets/js/sticky.js"></script>

<!-- Simplebar JS -->
<script src="../assets/libs/simplebar/simplebar.min.js"></script>



    
<!-- Custom-Switcher JS -->
<script src="../assets/js/custom-switcher.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>
</body>

</html>
<!DOCTYPE html>

<html lang="en" class="light-style   layout-menu-fixed   customizer-hide" dir="ltr" data-theme="theme-default"
      data-assets-path="./assets/" data-base-url=".-1" data-framework="laravel"
      data-template="blank-menu-theme-default-light">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>Login System - Idaho Disaster Pros
    </title>
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5"/>
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="wvLBClBJuL4FCt9oI7SfRGxY3dRsih1iwGXbKgzd">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/vuexy_admin">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon/favicon.ico"/>


    <!-- Include Styles -->
    <!-- $isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
    <!-- BEGIN: Theme CSS-->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="./assets/vendor/fonts/tabler-icons.css?id=6ad8bc28559d005d792d577cf02a2116"/>
    <link rel="stylesheet" href="./assets/vendor/fonts/fontawesome.css?id=a2997cb6a1c98cc3c85f4c99cdea95b5"/>
    <link rel="stylesheet" href="./assets/vendor/fonts/flag-icons.css?id=121bcc3078c6c2f608037fb9ca8bce8d"/>
    <!-- Core CSS -->
    <link rel="stylesheet" href="./assets/vendor/css/rtl/core.css?id=9dd8321ea008145745a7d78e072a6e36"
          class="template-customizer-core-css"/>
    <link rel="stylesheet" href="./assets/vendor/css/rtl/theme-default.css?id=a4539ede8fbe0ee4ea3a81f2c89f07d9"
          class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="./assets/css/demo.css?id=ddd2feb83a604f9e432cdcb29815ed44"/>
    <link rel="stylesheet" href="./assets/vendor/libs/node-waves/node-waves.css?id=aa72fb97dfa8e932ba88c8a3c04641bc"/>
    <link rel="stylesheet"
          href="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css?id=280196ccb54c8ae7e29ea06932c9a4b6"/>
    <link rel="stylesheet" href="./assets/vendor/libs/typeahead-js/typeahead.css?id=2603197f6b29a6654cb700bd9367e2a3"/>

    <!-- Vendor Styles -->
    <!-- Vendor -->
    <link rel="stylesheet" href="./assets/vendor/libs/@form-validation/umd/styles/index.min.css"/>


    <!-- Page Styles -->
    <!-- Page -->
    <link rel="stylesheet" href="./assets/vendor/css/pages/page-auth.css">

    <!-- Include Scripts for customizer, helper, analytics, config -->
    <!-- $isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
    <!-- laravel style -->
    <script src="./assets/vendor/js/helpers.js"></script>
    <!-- beautify ignore:start -->
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="./assets/vendor/js/template-customizer.js"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./assets/js/config.js"></script>

    <script>
        window.templateCustomizer = new TemplateCustomizer({
                                                               cssPath: '',
                                                               themesPath: '',
                                                               defaultStyle: "light",
                                                               defaultShowDropdownOnHover: "true", // true/false (for horizontal layout only)
                                                               displayCustomizer: "true",
                                                               lang: 'en',
                                                               pathResolver: function (path)
                                                               {
                                                                   var resolvedPaths = {
                                                                       // Core stylesheets
                                                                       'core.css': './assets/vendor/css/rtl/core.css?id=9dd8321ea008145745a7d78e072a6e36',
                                                                       'core-dark.css': './assets/vendor/css/rtl/core-dark.css?id=d661bae1d0ada9f7e9e3685a3e1f427e',

                                                                       // Themes
                                                                       'theme-default.css': './assets/vendor/css/rtl/theme-default.css?id=a4539ede8fbe0ee4ea3a81f2c89f07d9',
                                                                       'theme-default-dark.css':
                                                                           './assets/vendor/css/rtl/theme-default-dark.css?id=ce86d777a4c5030f51d0f609f202bcc5',
                                                                       'theme-bordered.css': './assets/vendor/css/rtl/theme-bordered.css?id=786794ca0c68d96058e8ceeb20f4e7c5',
                                                                       'theme-bordered-dark.css':
                                                                           './assets/vendor/css/rtl/theme-bordered-dark.css?id=e7122ef6338b22f7cea9eaff5a96aa8b',
                                                                       'theme-semi-dark.css': './assets/vendor/css/rtl/theme-semi-dark.css?id=a0a317e88e943fdd62d514e00deebb22',
                                                                       'theme-semi-dark-dark.css':
                                                                           './assets/vendor/css/rtl/theme-semi-dark-dark.css?id=e9a2f7cd6ace727264936f6bf93ab1e2',
                                                                   }
                                                                   return resolvedPaths[path] || path;
                                                               },
                                                               'controls': ["rtl", "style", "headerType", "contentLayout", "layoutCollapsed", "layoutNavbarOptions", "themes"],
                                                           });
    </script>
</head>

<body>

<!-- Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5J3LMKC" height="0" width="0"
            style="display: none; visibility: hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->


<!-- Layout Content -->

<!-- Content -->
<div class="authentication-wrapper authentication-cover authentication-bg">
    <div class="authentication-inner row">
        <!-- /Left Text -->
        <div class="d-none d-lg-flex col-lg-7 p-0">
            <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
                <img src="./assets/img/illustrations/auth-login-illustration-light.png" alt="auth-login-cover"
                     class="img-fluid my-5 auth-illustration"
                     data-app-light-img="illustrations/auth-login-illustration-light.png"
                     data-app-dark-img="illustrations/auth-login-illustration-dark.png">

                <img src="./assets/img/illustrations/bg-shape-image-light.png" alt="auth-login-cover"
                     class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png"
                     data-app-dark-img="illustrations/bg-shape-image-dark.png">
            </div>
        </div>
        <!-- /Left Text -->

        <!-- Login -->
        @yield("content")
        <!-- /Login -->
    </div>
</div>
<!--/ Content -->

<!--/ Layout Content -->


<!-- Include Scripts -->
<!-- $isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
<!-- BEGIN: Vendor JS-->
<script src="./assets/vendor/libs/jquery/jquery.js"></script>
<script src="./assets/vendor/libs/popper/popper.js"></script>
<script src="./assets/vendor/js/bootstrap.js"></script>
<script src="./assets/vendor/libs/node-waves/node-waves.js"></script>
<script src="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="./assets/vendor/libs/hammer/hammer.js"></script>
<script src="./assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="./assets/vendor/js/menu.js"></script>
<script src="./assets/vendor/libs/@form-validation/umd/bundle/popular.min.js"></script>
<script src="./assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js"></script>
<script src="./assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="./assets/js/main.js"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
<script src="./assets/js/pages-auth.js"></script>
<!-- END: Page JS-->

</body>

</html>

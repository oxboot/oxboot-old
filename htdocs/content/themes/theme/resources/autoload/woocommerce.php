<?php

add_filter('themosisRouteConditions', function ($conds) {
    $conds['woocommerce']       = 'is_woocommerce';
    $conds['shop']              = 'is_shop';
    $conds['product']           = 'is_product';
    $conds['product_category']  = 'is_product_category';
    $conds['cart']              = 'is_cart';
    $conds['checkout']          = 'is_checkout';
    $conds['account']           = 'is_account_page';
    return $conds;
});

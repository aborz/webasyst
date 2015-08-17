<?php
return array(
    // default
    // url to category: /category/categoryurl/
    // url to product: /producturl/
    0 => array(
        '' => 'frontend',
        'login/' => 'login',
        'forgotpassword/' => 'forgotpassword',
        'signup/' => 'signup',
        'search/' => 'frontend/search',
        'data/regions/' => 'frontend/regions',
        'data/shipping/<plugin_id:\d+>/<action_id>/' => 'frontend/shippingPlugin',
        'data/shipping/' => 'frontend/shipping',
        'cart/' => 'frontend/cart',
        'checkout/' => 'frontend/checkout',
        'checkout/<step:[^/]+>/?' => 'frontend/checkout',
        'cart/<action>/' => 'frontendCart',
        'compare/' => 'frontend/compare',
        'compare/<id:[\d,]+>/' => 'frontend/compare',
        'tag/<tag>/' => 'frontend/tag',
        'category/<category_url>/' => 'frontend/category',
        'my/order/<id>/<code>/print/<form_type:(payment|shipping|form)>/<form_id>/' => 'frontend/myOrderPrintform',
        'my/order/<id>/print/<form_type:(payment|shipping|form)>/<form_id>/' => 'frontend/myOrderPrintform',
        'my/order/<id>/download/<code>/<item>/' => 'frontend/myOrderDownload',
        'my/order/<id>/<code>/' => 'frontend/myOrderByCode',
        'my/order/<id>/?' => array(
            'module' => 'frontend',
            'action' => 'myOrder',
            'secure' => true,
        ),
        'my/profile/?' => array(
            'module' => 'frontend',
            'action' => 'myProfile',
            'secure' => true,
        ),
        'my/purchases/?' => array(
            'module' => 'frontend',
            'action' => 'myPurchases',
            'secure' => true,
        ),
        'my/points/?' => array(
            'module' => 'frontend',
            'action' => 'myPoints',
            'secure' => true,
        ),
        'my/account/?' => array(
            'module' => 'frontend',
            'action' => 'myAccount',
            'secure' => true,
        ),
        'my/orders/?' => array(
            'module' => 'frontend',
            'action' => 'myOrders',
            'secure' => true,
        ),
        'my/earn/?' => array(
            'module' => 'frontend',
            'action' => 'myEarn',
            'secure' => true,
        ),
        'my/selaspecial/?' => array(
            'module' => 'frontend',
            'action' => 'mySelaSpecial',
            'secure' => true,
        ),
        'my/wishlist/?' => array(
            'module' => 'frontend',
            'action' => 'myWishlist',
            'secure' => true,
        ),
        'my/subscriptions/?' => array(
            'module' => 'frontend',
            'action' => 'mySubscriptions',
            'secure' => true,
        ),
        'my/feedback/?' => array(
            'module' => 'frontend',
            'action' => 'myFeedback',
            'secure' => true,
        ),
        'my/ideas/?' => array(
            'module' => 'frontend',
            'action' => 'myIdeas',
            'secure' => true,
        ),
        'my/contests/?' => array(
            'module' => 'frontend',
            'action' => 'myContests',
            'secure' => true,
        ),
        'my/rateservice/?' => array(
            'module' => 'frontend',
            'action' => 'myRateService',
            'secure' => true,
        ),
        'my/affiliate/?' => array(
            'module' => 'frontend',
            'action' => 'myAffiliate',
            'secure' => true,
        ),
        'my/?' => array(
            'module' => 'frontend',
            'action' => 'my',
            'secure' => true,
        ),
        '<product_url:[^/]+>/reviews/' => 'frontend/productReviews',
        '<product_url:[^/]+>/reviews/add/' => 'frontend/productReviewsAdd',
        '<product_url:[^/]+>/<page_url>/' => 'frontend/productPage',
        '<product_url:[^/]+>/' => 'frontend/product',
    ),

    1 => array(
        '' => 'frontend',
        'login/' => 'login',
        'forgotpassword/' => 'forgotpassword',
        'signup/' => 'signup',
        'search/' => 'frontend/search',
        'data/regions/' => 'frontend/regions',
        'data/shipping/<plugin_id:\d+>/<action_id>/' => 'frontend/shippingPlugin',
        'data/shipping/' => 'frontend/shipping',
        'cart/' => 'frontend/cart',
        'checkout/' => 'frontend/checkout',
        'checkout/<step:[^/]+>/?' => 'frontend/checkout',
        'cart/<action>/' => 'frontendCart',
        'compare/' => 'frontend/compare',
        'compare/<id:[\d,]+>/' => 'frontend/compare',
        'tag/<tag>/' => 'frontend/tag',
        'category/<category_url>/' => 'frontend/category',
        'my/order/<id>/<code>/print/<form_type:(payment|shipping|form)>/<form_id>/' => 'frontend/myOrderPrintform',
        'my/order/<id>/print/<form_type:(payment|shipping|form)>/<form_id>/' => 'frontend/myOrderPrintform',
        'my/order/<id>/download/<code>/<item>/' => 'frontend/myOrderDownload',
        'my/order/<id>/<code>/' => 'frontend/myOrderByCode',
        'my/order/<id>/?' => array(
            'url' => 'my/order/<id>/?',
            'module' => 'frontend',
            'action' => 'myOrder',
            'secure' => true,
        ),
        'my/profile/?' => array(
            'url' => 'my/profile/?',
            'module' => 'frontend',
            'action' => 'myProfile',
            'secure' => true,
        ),
        'my/purchases/?' => array(
            'module' => 'frontend',
            'action' => 'myPurchases',
            'secure' => true,
        ),
        'my/points/?' => array(
            'module' => 'frontend',
            'action' => 'myPoints',
            'secure' => true,
        ),
        'my/account/?' => array(
            'module' => 'frontend',
            'action' => 'myAccount',
            'secure' => true,
        ),
        'my/orders/?' => array(
            'url' => 'my/orders/?',
            'module' => 'frontend',
            'action' => 'myOrders',
            'secure' => true,
        ),
        'my/earn/?' => array(
            'module' => 'frontend',
            'action' => 'myEarn',
            'secure' => true,
        ),
        'my/selaspecial/?' => array(
            'module' => 'frontend',
            'action' => 'mySelaSpecial',
            'secure' => true,
        ),
        'my/wishlist/?' => array(
            'module' => 'frontend',
            'action' => 'myWishlist',
            'secure' => true,
        ),
        'my/subscriptions/?' => array(
            'module' => 'frontend',
            'action' => 'mySubscriptions',
            'secure' => true,
        ),
        'my/feedback/?' => array(
            'module' => 'frontend',
            'action' => 'myFeedback',
            'secure' => true,
        ),
        'my/ideas/?' => array(
            'module' => 'frontend',
            'action' => 'myIdeas',
            'secure' => true,
        ),
        'my/contests/?' => array(
            'module' => 'frontend',
            'action' => 'myContests',
            'secure' => true,
        ),
        'my/rateservice/?' => array(
            'module' => 'frontend',
            'action' => 'myRateService',
            'secure' => true,
        ),
        'my/affiliate/?' => array(
            'module' => 'frontend',
            'action' => 'myAffiliate',
            'secure' => true,
        ),
        'my/?' => array(
            'url' => 'my/?',
            'module' => 'frontend',
            'action' => 'my',
            'secure' => true,
        ),
        'product/<product_url:[^/]+>/reviews/' => 'frontend/productReviews',
        'product/<product_url:[^/]+>/reviews/add/' => 'frontend/productReviewsAdd',
        'product/<product_url:[^/]+>/<page_url>/' => 'frontend/productPage',
        'product/<product_url:[^/]+>/' => 'frontend/product',
    ),

    2 => array(
        '' => 'frontend',
        'login/' => 'login',
        'forgotpassword/' => 'forgotpassword',
        'signup/' => 'signup',
        'search/' => 'frontend/search',
        'data/regions/' => 'frontend/regions',
        'data/shipping/<plugin_id:\d+>/<action_id>/' => 'frontend/shippingPlugin',
        'data/shipping/' => 'frontend/shipping',
        'cart/' => 'frontend/cart',
        'checkout/' => 'frontend/checkout',
        'checkout/<step:[^/]+>/?' => 'frontend/checkout',
        'cart/<action>/' => 'frontendCart',
        'compare/' => 'frontend/compare',
        'compare/<id:[\d,]+>/' => 'frontend/compare',
        'tag/<tag>/' => 'frontend/tag',
        'my/order/<id>/<code>/print/<form_type:(payment|shipping|form)>/<form_id>/' => 'frontend/myOrderPrintform',
        'my/order/<id>/print/<form_type:(payment|shipping|form)>/<form_id>/' => 'frontend/myOrderPrintform',
        'my/order/<id>/download/<code>/<item>/' => 'frontend/myOrderDownload',
        'my/order/<id>/<code>/' => 'frontend/myOrderByCode',
        'my/order/<id>/?' => array(
            'url' => 'my/order/<id>/?',
            'module' => 'frontend',
            'action' => 'myOrder',
            'secure' => true,
        ),
        'my/profile/?' => array(
            'url' => 'my/profile/?',
            'module' => 'frontend',
            'action' => 'myProfile',
            'secure' => true,
        ),
        'my/purchases/?' => array(
            'module' => 'frontend',
            'action' => 'myPurchases',
            'secure' => true,
        ),
        'my/points/?' => array(
            'module' => 'frontend',
            'action' => 'myPoints',
            'secure' => true,
        ),
        'my/account/?' => array(
            'module' => 'frontend',
            'action' => 'myAccount',
            'secure' => true,
        ),
        'my/orders/?' => array(
            'url' => 'my/orders/?',
            'module' => 'frontend',
            'action' => 'myOrders',
            'secure' => true,
        ),
        'my/earn/?' => array(
            'module' => 'frontend',
            'action' => 'myEarn',
            'secure' => true,
        ),
        'my/selaspecial/?' => array(
            'module' => 'frontend',
            'action' => 'mySelaSpecial',
            'secure' => true,
        ),
        'my/wishlist/?' => array(
            'module' => 'frontend',
            'action' => 'myWishlist',
            'secure' => true,
        ),
        'my/subscriptions/?' => array(
            'module' => 'frontend',
            'action' => 'mySubscriptions',
            'secure' => true,
        ),
        'my/feedback/?' => array(
            'module' => 'frontend',
            'action' => 'myFeedback',
            'secure' => true,
        ),
        'my/ideas/?' => array(
            'module' => 'frontend',
            'action' => 'myIdeas',
            'secure' => true,
        ),
        'my/contests/?' => array(
            'module' => 'frontend',
            'action' => 'myContests',
            'secure' => true,
        ),
        'my/rateservice/?' => array(
            'module' => 'frontend',
            'action' => 'myRateService',
            'secure' => true,
        ),
        'my/affiliate/?' => array(
            'module' => 'frontend',
            'action' => 'myAffiliate',
            'secure' => true,
        ),
        'my/?' => array(
            'url' => 'my/?',
            'module' => 'frontend',
            'action' => 'my',
            'secure' => true,
        ),
        '<product_url:[^/]+>/' => 'frontend/product',
        '<category_url>/?<product_url:[^/]+>/reviews/' => 'frontend/productReviews',
        '<category_url>/?<product_url:[^/]+>/reviews/add/' => 'frontend/productReviewsAdd',
        '<category_url>/<product_url:[^/]+>/' => 'frontend/product',
        '<category_url>/<product_url:[^/]+>/<page_url>/' => 'frontend/productPage',
        '<category_url>/' => 'frontend/category',
    )
);
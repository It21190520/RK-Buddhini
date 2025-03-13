<?php
$TEMPLATE_LOAD = __DIR__ . '/templates';
$APP_ROOT = '/RK-Buddhini/PHP'; // Update this based on your project folder
error_reporting(E_ALL);

// Get request URI and remove query strings
$REQUEST_URI = $_SERVER['REQUEST_URI'];
$parsed_url = parse_url($REQUEST_URI, PHP_URL_PATH);
$request = rtrim($parsed_url, '/'); // Normalize the request

// Ensure request matches APP_ROOT correctly
if ($request === $APP_ROOT || $request === $APP_ROOT . '/') {
    require $TEMPLATE_LOAD . '/home.temp.php';
} 
else if ($request === $APP_ROOT . '/about') {
    require $TEMPLATE_LOAD . '/about.temp.php';
}
else if ($request === $APP_ROOT . '/constactus') {
    require $TEMPLATE_LOAD . '/contact.temp.php';
} 
else if ($request === $APP_ROOT . '/service') {
    require $TEMPLATE_LOAD . '/service.temp.php';
} 
else if ($request === $APP_ROOT . '/service-details') {
    require $TEMPLATE_LOAD . '/service-details.temp.php';
} 
else if ($request === $APP_ROOT . '/blog') {
    require $TEMPLATE_LOAD . '/blog.temp.php';
}
else if ($request === $APP_ROOT . '/blog-details') {
    require $TEMPLATE_LOAD . '/blog-details.temp.php';
} 
else if ($request === $APP_ROOT . '/team') {
    require $TEMPLATE_LOAD . '/team.temp.php';
} 
else if ($request === $APP_ROOT . '/team-details') {
    require $TEMPLATE_LOAD . '/team-details.temp.php';
}
else if ($request === $APP_ROOT . '/project') {
    require $TEMPLATE_LOAD . '/project.temp.php';
}
else if ($request === $APP_ROOT . '/project-details') {
    require $TEMPLATE_LOAD . '/project-details.temp.php';
}
else if ($request === $APP_ROOT . '/gallery') {
    require $TEMPLATE_LOAD . '/gallery.temp.php';
}
else if ($request === $APP_ROOT . '/pricing') {
    require $TEMPLATE_LOAD . '/pricing.temp.php';
}
else if ($request === $APP_ROOT . '/error') {
    require $TEMPLATE_LOAD . '/error.temp.php';
}
else if ($request === $APP_ROOT . '/faq') {
    require $TEMPLATE_LOAD . '/faq.temp.php';
}
else if ($request === $APP_ROOT . '/shop') {
    require $TEMPLATE_LOAD . '/shop.temp.php';
}
else if ($request === $APP_ROOT . '/shop-details') {
    require $TEMPLATE_LOAD . '/shop-details.temp.php';
}
else if ($request === $APP_ROOT . '/cart') {
    require $TEMPLATE_LOAD . '/cart.temp.php';
}
else if ($request === $APP_ROOT . '/checkout') {
    require $TEMPLATE_LOAD . '/checkout.temp.php';
}
else if ($request === $APP_ROOT . '/wishlist') {
    require $TEMPLATE_LOAD . '/wishlist.temp.php';
}
else {
    http_response_code(404);
    echo "<h1>404 Page Not Found</h1>";
}
?>

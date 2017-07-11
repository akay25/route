<?php
    require_once('route.php');

    function home(){
        echo 'This is home. Home template in HTML';
    }

    function about_us(){
        echo 'This is about us page. About Us template in HTML.';
    }

    function contact_us(){
        echo 'This is contact us page. Contact Us template in HTML.';
    }

    function page404(){
        die('Page not found. Please try some different url.');
    }

    //If url is http://localhost/route/home or user is at the maion page(http://localhost/route/)
    if($request == 'home' or $request == '')
        home();
    //If url is http://localhost/route/about-us
    else if($request == 'about-us')
        about_us();
    //If url is http://localhost/route/contact-us
    else if($request == 'contact-us')
        contact_us();
    //If user entered something else
    else
        page404();
?>
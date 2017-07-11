# route
A basic php example of routing without using any framework.

First of all you need to enable 'rewrite module' in Apache.

You can do this by configuring the httpd.conf file or through
the GUI interface provided by WAMP server (Apache restart required).

You need to configure the site_url variable in config.php if you 
are using this project with different url other than http://localhost/route/

This php site can only use the first layer of the URI.
e.g.,
    http://localhost/route/about-us will work. But,

    http://localhost/route/about-us/admin
    or
    http://localhost/route/var1/var2 won't work.

You need to store these /var1/var2 in form of arrays, where you'll
first search $request[0](var1) and then $request[1](var2) in your site.

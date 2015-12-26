# Fetch #

A Scratch 2.0 project sharing site

## Setup ##

To setup Fetch locally, you have to follow a simple process:

* Download the repo
* Run the command `cp ./src/* /path/to/httpd/location/`

Obviously, replace `/path/to/httpd/location/` with the end location of Fetch - or else it won't work and you'll end up breaking something!

* Secure the site. Directories like `./src/Shared/` should *not* be able to be accessed by clients, so assuming you have Apache, securing the site would be something as simple as adding a .htaccess file:

```
Order deny,allow
Deny from all
```

* Configure Fetch! See the next section for details.

### Configuration ###

Most of the configuration options are stored in `./src/Shared/Config.php` - which means it is quite easy to change the site configuration.

For example, changing the entire colour scheme is as easy as changing the `$FETCH_PRIMARY_COLOR` variable.

[Config.php](https://github.com/DigiTechs/Fetch/blob/master/src/Shared/Config.php) has a full list of options and descriptions which are available right now.

## Talk to us ##

We're on gitter! Talk to us [here](https://gitter.im/DigiTechs/Fetch)!

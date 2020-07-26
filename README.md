# Rocket PHP Boilerplate (Advanced) 🚀

The advanced version of the Rocket PHP boilerplate, the features that make this version advanced are ...

- Bootstrap Integration (CDN)
- JQUERY Integration (CDN)
- Popper Integration (CDN)
- Local fall-backs in case CDN's are down
- Function for serving zip files to users
- Functions for storing passwords and keys securely


A boilerplate for making a website using php. Features a config file to setup global variables such as..
- Current Page
- Navigation page
- Canonical Tags
- Page Title
- Page Description
and a responsive navigation bar, all pages built with modular PHP includes, such as...
- navbar.php: The navigation bar
- footer.php: The footer
- head-tags.php: The HTML meta data tags
this template can easily be modified to create a responsive, efficient PHP website.
- static-tags.php: The head-tags which do not change for every page, this includes stylesheets, viewports etc

### Htaccess file
The template comes with a .htaccess file that will automatically hide the .php extension from the URL, it will also redirect 404 and 403 errors to the following files...
- invalid404.php: The page could not be found
- forbidden403: You do not have permission to access this page
## Getting Started

### private_data folder
A folder which can store sensitive data, this folder will not be visible to the public and can be used to store api keys, passwords etc. 

### download_content folder
This folder can be used to store files you wish visitors to be able to download, using the file "download-files.php" you can easily configure this to allow users to download content from your site.

### Prerequisites

What you will need...

- Web Server or LAMP Stack (XAMPP)
- PHP installed
- PHP write and read permission
- Internet connection for CDN's


### Installing

How to download and setup the template

Navigate to your "HTDOCS" folder on your web server and clear the contents, clone this repository, (note the . at the end ensures the enclosing folder is not cloned)

```
git clone https://github.com/angusgoody/Rocket-PHP-Boilerplate-Advanced .
```

## Authors

* **Angus Goody** - *Initial work* - https://github.com/angusgoody




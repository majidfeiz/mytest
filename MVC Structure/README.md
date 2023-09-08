# MVC structure


This is a basic PHP MVC (Model-View-Controller) structure for a web application that handles three different URLs with content. It follows a simple structure and routing mechanism to display different views based on the requested URL.

## Project Structure

The project directory is organized as follows:

```
├── .htaccess
├── index.php
├── route.php
├── controllers/
│   └── PageController.php
└── views/
    └── view.php
```

1. Configure your web server to point to the project's root directory.

2. Open a web browser and access the following URLs:

www.domain.it: Homepage

www.domain.it/folder1/: Folder 1

www.domain.it/folder2/: Folder 2

## Usage

- The project follows a simple MVC pattern to display different content for each URL.
- The PageController.php file handles the logic for each URL, and the view.php file contains the HTML content.
- You can customize the content in the view.php file to display different information for each URL.
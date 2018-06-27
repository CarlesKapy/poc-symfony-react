POC Symfony 4 + React
=====================

## Steps

Create project and install basic dependencies
```
$ composer create-project symfony/skeleton my-app
$ composer require annotations twig asset
$ composer require server --dev
```

Configure webpack encore to add react
```
$ composer require encore
$ npm add --dev react react-dom propy-types babel-preset-react
$ npm install
```

Enable React preset on *webpack.config.js*
```
...
    Encore
    ...
    .enableReactPreset();
```

Create a default controller with two enpoints: one to serve a template, and another one to serve a json object

Create React components on assets/folder and add entry on *webpack.config.js*
```
...
    .addEntry('js/app', './assets/js/app.js')
```

Run encore
```
$ npm run dev
```

And serve the application by a webserver (I choose php built in one)
```
php -S 127.0.0.1:8000 -t public
```

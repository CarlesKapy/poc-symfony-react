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

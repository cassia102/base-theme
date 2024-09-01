<p align="center">Advanced WordPress starter theme with Tailwind CSS and Laravel Blade based on the <a href="https://github.com/roots/sage">Sage theme</a> with some adaptations</p>

## Setup

### Requirments
<ul>
  <li>PHP 8.2</li>
  <li>Node 20</li>
  <li>Composer</li>
</ul>

## Getting Started

<ul>
  <li>From theme run composer install</li>
  <li>Run composer require roots/acord</li>
  <li>**If using nvm run nvm use 20</li>
  <li>Run Yarn</li>
  <li>Run Yarn dev to watch for changes or Yarn build</li>
</ul>

<p>To use SCSS:</p>
<ul>
  <li>yarn add @roots/bud-sass --dev</li>
  <li>yarn add @roots/bud-stylelint --dev</li>
</ul>

<p>
Create a Stylelint config file at .stylelintrc.cjs:</br>
module.exports = {
  extends: ['@roots/bud-sass/config/stylelint'],
  rules: {
    'import-notation': null,
    'no-empty-source': null,
  },
};
</p>

## Project Tree


```
cassia-theme
├─ .DS_Store
├─ base-theme
│  ├─ .editorconfig
│  ├─ LICENSE.md
│  ├─ README.md
│  ├─ app
│  │  ├─ Providers
│  │  │  └─ ThemeServiceProvider.php
│  │  ├─ View
│  │  │  └─ Composers
│  │  │     ├─ App.php
│  │  │     ├─ Comments.php
│  │  │     └─ Post.php
│  │  ├─ elementor.php
│  │  ├─ filters.php
│  │  ├─ helpers.php
│  │  └─ setup.php
│  ├─ bud.config.js
│  ├─ composer.json
│  ├─ functions.php
│  ├─ index.php
│  ├─ jsconfig.json
│  ├─ package.json
│  ├─ resources
│  │  ├─ fonts
│  │  ├─ images
│  │  ├─ scripts
│  │  │  ├─ app.js
│  │  │  ├─ components
│  │  │  │  └─ test.js
│  │  │  ├─ editor.js
│  │  │  └─ filters
│  │  │     └─ button.filter.js
│  │  ├─ styles
│  │  │  ├─ app.scss
│  │  │  ├─ common
│  │  │  │  ├─ _content.scss
│  │  │  │  ├─ _global.scss
│  │  │  │  └─ _reset.scss
│  │  │  ├─ components
│  │  │  │  ├─ _button.scss
│  │  │  │  ├─ _forms.scss
│  │  │  │  └─ _nav.scss
│  │  │  ├─ editor.scss
│  │  │  ├─ helpers
│  │  │  │  └─ _media-queries.scss
│  │  │  └─ layouts
│  │  │     ├─ _footer.scss
│  │  │     ├─ _header.scss
│  │  │     ├─ _pages.scss
│  │  │     └─ _posts.scss
│  │  └─ views
│  │     ├─ 404.blade.php
│  │     ├─ components
│  │     │  └─ alert.blade.php
│  │     ├─ forms
│  │     │  └─ search.blade.php
│  │     ├─ index.blade.php
│  │     ├─ layouts
│  │     │  └─ app.blade.php
│  │     ├─ page.blade.php
│  │     ├─ partials
│  │     │  ├─ comments.blade.php
│  │     │  ├─ content-page.blade.php
│  │     │  ├─ content-search.blade.php
│  │     │  ├─ content-single.blade.php
│  │     │  ├─ content.blade.php
│  │     │  ├─ entry-meta.blade.php
│  │     │  └─ page-header.blade.php
│  │     ├─ search.blade.php
│  │     ├─ sections
│  │     │  ├─ footer.blade.php
│  │     │  ├─ header.blade.php
│  │     │  └─ sidebar.blade.php
│  │     ├─ single.blade.php
│  │     └─ template-custom.blade.php
│  ├─ screenshot.png
│  ├─ style.css
│  ├─ tailwind.config.js
│  ├─ theme.json
│  └─ yarn.lock
└─ base-theme.zip

```

## Overview

Sage is a WordPress starter theme with block editor support.

- Harness the power of [Laravel](https://laravel.com) and its available packages thanks to [Acorn](https://github.com/roots/acorn)
- Clean, efficient theme templating utilizing [Laravel Blade](https://laravel.com/docs/master/blade)
- Modern frontend development workflow powered by [Bud](https://bud.js.org/)
- Out of the box support for [Tailwind CSS](https://tailwindcss.com/)
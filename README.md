# Dionysos Toggle Field
> This component is a part of the **Olympus Dionysos fields** for **WordPress**.

```sh
composer require getolympus/olympus-dionysos-field-toggle
```

---

[![Olympus Component][olympus-image]][olympus-url]
[![CodeFactor Grade][codefactor-image]][codefactor-url]
[![Packagist Version][packagist-image]][packagist-url]
[![MIT][license-image]][license-blob]

---

<p align="center">
    <img src="https://github.com/GetOlympus/olympus-dionysos-field-toggle/blob/master/assets/field-toggle-64.png" />
</p>

---

## Field initialization

Use the following lines to add a `toggle field` in your **WordPress** admin pages or custom post type meta fields:

```php
return \GetOlympus\Dionysos\Field\Toggle::build('my_toggle_field_id', [
    'title'       => 'Get ready to rumble!',
    'default'     => true,
    'description' => 'Put it on to get started',
]);
```

## Variables definitions

| Variable      | Type    | Default value if not set | Accepted values |
| ------------- | ------- | ------------------------ | --------------- |
| `title`       | String  | `'Toggle'` | *empty* |
| `default`     | Boolean | `false` | `true` or `false` |
| `description` | String  | *empty* | *empty* |

## Retrive data

Retrieve your value from Database with a simple `get_option('my_toggle_field_id', false)` (see [WordPress reference][getoption-url]):

```php
// Get toggle from Database
$toggle = get_option('my_toggle_field_id', false);

// Display toggle in HTML tag
echo $toggle ? 'Let\'s go!' : 'Not ready yet.';
```

## Release History

0.0.16
- Use WordPress default design to display toggle box

0.0.15
- Use default `getVars` Zeus-Core method. No need to override it anymore

0.0.14
- New Olympus components compatibility
- Change repository to be a part of Dionysos fields

## Contributing

1. Fork it (<https://github.com/GetOlympus/olympus-dionysos-field-toggle/fork>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request

---

**Built with ♥ by [Achraf Chouk](https://github.com/crewstyle "Achraf Chouk") ~ (c) since a long time.**

<!-- links & imgs dfn's -->
[olympus-image]: https://img.shields.io/badge/for-Olympus-44cc11.svg?style=flat-square
[olympus-url]: https://github.com/GetOlympus
[codefactor-image]: https://www.codefactor.io/repository/github/GetOlympus/olympus-dionysos-field-toggle/badge?style=flat-square
[codefactor-url]: https://www.codefactor.io/repository/github/getolympus/olympus-dionysos-field-toggle
[getoption-url]: https://developer.wordpress.org/reference/functions/get_option/
[license-blob]: https://github.com/GetOlympus/olympus-dionysos-field-toggle/blob/master/LICENSE
[license-image]: https://img.shields.io/badge/license-MIT_License-blue.svg?style=flat-square
[packagist-image]: https://img.shields.io/packagist/v/getolympus/olympus-dionysos-field-toggle.svg?style=flat-square
[packagist-url]: https://packagist.org/packages/getolympus/olympus-dionysos-field-toggle
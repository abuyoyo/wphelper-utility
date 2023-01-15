# WPHelper\Utility Changelog

All notable changes to WPHelper\Utility library since version 0.1

## [0.4](https://github.com/abuyoyo/wphelper-utility/releases/tag/0.4/)
Release Date: Jan 15 2023

### Added
- Utility:
  - `camelCaseKeys()` - convert array keys from snake_case to camelCase.

## [0.3](https://github.com/abuyoyo/wphelper-utility/releases/tag/0.3/)
Release Date: Aug 28 2021

### Added
- PHP:
  - `whp_is_json()` - test if string is valid json.

## [0.2](https://github.com/abuyoyo/wphelper-utility/releases/tag/0.2/)
Release Date: Apr 10 2021

### Added
- PHP Polyfill:
  - Polyfill `array_key_first()` for PHP < 7.3.0.
  - Polyfill `str_contains()` for PHP < 8.0.
- PHP:
  - Polyfill `natksort()` - natsort for array keys.
- WordPress Admin utility functions:
  - `wp_admin_get_post_type()` - get_post_type that works on admin side.
  - `wp_get_current_admin_url()` - get url of current admin page.
- WordPress utiliy functions:
  - `wp_strtotime()` - strtotime-like function that uses wp_timezone.
- Utility functions:
  - `get_http_response_code()` - get HTTP response status of url.
  - `pre_print()` - print PHP array or object in HTML pre tag.
- Custom debug utilities:
  - `wp_die_arr()` use wp_die() to print formatted array or object.
  - `wp_dump()` - use wp_die() to print pre-formatted var_dump().
  - `br()` - add HTML br tag.

## [0.1](https://github.com/abuyoyo/wphelper-utility/releases/tag/0.1/)
Release Date: Dec 15 2020

### Added
- Singleton trait.

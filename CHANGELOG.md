# WPHelper\Utility Changelog

All notable changes to WPHelper\Utility library since version 0.1

## [0.13](https://github.com/abuyoyo/wphelper-utility/releases/tag/0.13/)
Release Date: Mar 4 2025

### Changed
- Add `options` parameter to `PluginCoreStaticWrapper::set_plugin_core()`. Supports `WPHelper\PluginCore` >= 0.32 option `init_if_null`.

### Fixed
- Fix PHP 8.1 deprecated passing null to parameter notice.

## [0.12](https://github.com/abuyoyo/wphelper-utility/releases/tag/0.12/)
Release Date: Jun 14 2024

### Added
- Trait method:
  - Utility method `PluginCoreStaticWrapper::cache_buster()` returns cache-buster string. Plugin version on production. Timestamp otherwise.

### Fixed
- Fix `PHP Warning: Constant WPHELPER_JSON_MAX_DEPTH already defined` when multiple WPHelper\Utility libraries are available.

### Internal
- Move PHP polyfill functions to dedicated "include" files.
- PluginCoreStaticWrapper - protected methods and variables.

## [0.11](https://github.com/abuyoyo/wphelper-utility/releases/tag/0.11/)
Release Date: May 23 2024

### Added
- Trait method:
  - Getter method `PluginCoreStaticWrapper::plugin_core()` returns PluginCore instance.

## [0.10](https://github.com/abuyoyo/wphelper-utility/releases/tag/0.10/)
Release Date: Apr 8 2024

### Added
- Trait:
  - `PluginCoreStaticWrapper` - Allow plugins using `WPHelper\PluginCore` static access to methods like `path`, `url`, `version` etc.
- Bespoke utility:
  - `wph_pre_dump()` - Print `var_dump()` output in HTML `pre` tag.

## [0.9](https://github.com/abuyoyo/wphelper-utility/releases/tag/0.9/)
Release Date: Mar 9 2024

### Fixed
- Fix `require_once` in `functions.php` to use absolute paths. This caused `vendor\autoload` to throw fatal errors.

## [0.8](https://github.com/abuyoyo/wphelper-utility/releases/tag/0.8/)
Release Date: Feb 15 2024

### Added
- PHP Polyfill:
  - `json_validate()` for PHP < 8.3.

### Deprecated
- `whp_is_json()`.

## [0.7](https://github.com/abuyoyo/wphelper-utility/releases/tag/0.7/)
Release Date: Sep 9 2023

### Added
- Bespoke utility:
  - `wph_card()` - Print "card" div.
  - `wph_pre_print()` - Namespaced `pre_print`.
  - `wph_no_js_meta_box()` - Print collapsible meta-box using HTML only.
- Debug utility:
  - `wph_die()` - Namespaced `wp_die_arr()`.
  - `wph_dump()` - Namespaced `wp_dump()`.

### Deprecated
- `pre_print()`.
- `wp_die_arr()`.
- `wp_dump()`.

### Internal
- Move functions to dedicated "include" files.

## [0.6](https://github.com/abuyoyo/wphelper-utility/releases/tag/0.6/)
Release Date: Jun 20 2023

### Added
- Bespoke utility:
  - `wph_print_table()` - Print multi-dimensional array or object as HTML table. Optional parameters `headers`, `id`, `classes`.

### Changed
- `pre_print` - Only escape HTML if input is array or object. When string HTML is assumed to be intentional.

### Internal
- Add `WPHelper\Utility` package tags to doc blocks.

## [0.5](https://github.com/abuyoyo/wphelper-utility/releases/tag/0.5/)
Release Date: Jan 31 2023

### Added
- Custom debug utilities:
  - `qm_debug()` - Wrapper function for Query Monitor `QM::debug()`.

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
- WordPress utility functions:
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

# Info

* Name: WP-PostInfo
* Current version: 0.2
* Status: Stable

## Versions

* 0.2 - Current commit; added exception through custom field
* 0.1 - First commit

## Installation

Upload the file wp-postinfo.php to the plugin directory of your Wordpress installation and activate the plugin. Use the shortcodes below to show the counts

```
[wordcount]
```

```
[charcount]
```

### Example

```
This text contains [wordcount] words and [charcount] characters
```

### Custom field

Starting with version 0.2, you can add a custom field to a post or page to exclude that post/page from converting the shortcodes to numbers. Please note that those posts or pages will show the actual shortcodesd

```
no_post_count
```
*Please note that all text surrounding the shortcodes will be counted.*

## Feature requests

* A widget that can be used instead of shortcodes
* Settings page in the Wordpress-backend
* Addon widget for [Elementor](https://elementor.com/)

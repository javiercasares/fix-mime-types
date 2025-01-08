=== Fix Media MIME Types (CLI only) ===
Contributors: javiercasares
Tags: media, mime-type, wp-cli
Requires at least: 6.4
Tested up to: 6.7
Stable tag: 1.0.0
Requires PHP: 8.2
Version: 1.0.0
License: GPL-3.0-or-later
License URI: https://spdx.org/licenses/GPL-3.0-or-later.html

Fixes incorrect MIME types in the Media Library using WP-CLI.

== Description ==

Fix Media MIME Types (CLI only) is a lightweight and efficient plugin that identifies and corrects any **incorrect MIME types** in your WordPress Media Library. 

**Key Features**:
* Scans your entire Media Library for potential MIME discrepancies.
* Uses PHP's `FileInfo` to detect the correct MIME type of media files.
* Updates the WordPress database only when a mismatch is found, ensuring minimal overhead.
* Designed solely for command-line usage (WP-CLI), with no impact on normal site visitors or admins.
  
This plugin is **not** visible in the standard WordPress interface (it is WP-CLI only). To use it, you must have [WP-CLI](https://wp-cli.org/) installed on your server or local environment.

= WP-CLI =

You can use the following WP-CLI commands:

* `wp fix-mime run`

That will show something like:

```
Found 3 attachments. Starting the process...
Warning: Attachment ID 1: file does not exist on disk. Skipping...
Attachment ID 2, File: example1.webp, Current MIME: image/webp, Detected MIME: image/webp
No changes needed.
Attachment ID 3, File: example2.webp, Current MIME: image/png, Detected MIME: image/webp
No changes needed.
Success: Process complete. All MIME types have been verified/updated.
```

== Installation ==

= Automatic download =

Visit the plugin section in your WordPress, search for [fix-mime-types]; download and install the plugin.

= Manual download =

Extract the contents of the ZIP and upload the contents to the `/wp-content/plugins/fix-mime-types/` directory. Once uploaded, it will appear in your plugin list.

== Compatibility ==

* WordPress: 6.4 - 6.7
* PHP: 8.2 - 8.4
* WP-CLI: 2.3.0 - 2.11.0

== Changelog ==

= [1.0.0] - 2025-01-08 =

**Added**

* First release.

**Compatibility**

* WordPress: 6.4 - 6.7
* PHP: 8.2 - 8.4
* WP-CLI: 2.3.0 - 2.11.0

**Tests**

* PHP Coding Standards: 3.10.3
* WordPress Coding Standards: 3.1.0
* Plugin Check (PCP): 1.1.0

== Security ==

This plugin adheres to the following security measures and review protocols for each version:

* [WordPress Plugin Handbook](https://developer.wordpress.org/plugins/)
* [WordPress Plugin Security](https://developer.wordpress.org/plugins/wordpress-org/plugin-security/)
* [WordPress APIs Security](https://developer.wordpress.org/apis/security/)
* [WordPress Coding Standards](https://github.com/WordPress/WordPress-Coding-Standards)
* [Plugin Check (PCP)](https://wordpress.org/plugins/plugin-check/)

== Privacy ==

* This plugin does not collect any information about your site, your identity, the plugins, themes or content the site has.

== Vulnerabilities ==

* No vulnerabilities have been published up to version 1.0.0.

Found a security vulnerability? Please report it to us privately at the [Fix Media MIME Types GitHub repository](https://github.com/javiercasares/fix-mime-types/security/advisories/new).

== Contributors ==

You can contribute to this plugin at the [Fix Media MIME Types GitHub repository](https://github.com/javiercasares/fix-mime-types).

=== Fix Media MIME Types (WP-CLI only) ===
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

This plugin integrates with the WPVulnerability API to provide real-time vulnerability assessments for your WordPress core, plugins, themes, PHP version, Apache HTTPD, nginx, MariaDB, MySQL, ImageMagick, curl, memcached, Redis, and SQLite.

It delivers detailed reports directly within your WordPress dashboard, helping you stay aware of potential security risks. Configure the plugin to send periodic notifications about your site's security status, ensuring you remain informed without being overwhelmed. Designed for ease of use, it supports proactive security measures without storing or retrieving any personal data from your site.

= WP-CLI =

You can use the following WP-CLI commands to manage and check vulnerabilities:

* Core: `wp wpvulnerability core`

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

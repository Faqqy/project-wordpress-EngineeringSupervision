=== WP Fastest Cache ===
Contributors: emrevona
Donate link: https://profiles.wordpress.org/emrevona/
Tags: cache, Optimize, performance, wp-cache, core web vitals
Requires at least: 3.3
Tested up to: 6.3
Stable tag: 1.2.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

The simplest and fastest WP Cache system

== Description ==

<h4>Official Website</h4>

You can find more information on our web site (<a href="https://www.wpfastestcache.com/">wpfastestcache.com</a>)

When a page is rendered, php and mysql are used. Therefore, system needs RAM and CPU. 
If many visitors come to a site, system uses lots of RAM and CPU so page is rendered so slowly. In this case, you need a cache system not to render page again and again. Cache system generates a static html file and saves. Other users reach to static html page.
<br><br>
In addition, the site speed is used in Google’s search ranking algorithm so cache plugins that can improve your page load time will also improve your SEO ranking.
<br><br>
Setup of this plugin is so easy. You don't need to modify the .htacces file. It will be modified automatically.

<h4>Features</h4>

1. Mod_Rewrite which is the fastest method is used in this plugin
2. All cache files are deleted when a post or page is published
3. Admin can delete all cached files from the options page
4. Admin can delete minified css and js files from the options page
5. Block cache for specific page or post with Short Code
6. Cache Timeout - All cached files are deleted at the determinated time
7. Cache Timeout for specific pages
8. Enable/Disable cache option for mobile devices
9. Enable/Disable cache option for logged-in users
10. SSL support
11. CDN support
12. Cloudflare support
13. Preload Cache - Create the cache of all the site automatically
14. Exclude pages and user-agents
15. WP-CLI cache clearing
16. Proxy Cache - Varnish Cache Integration to clear proxy cached content automatically when the cache created by WP Fastest Cache is cleared

<h4>Performance Optimization</h4>

WP Fastest Cache is not only a wp cache plugin but also a speed optimization wordpress cache plugin. There are many features such as Minify Html, Minify Css, Enable Gzip Compression, Leverage Browser Caching, Add Expires Headers, Combine CSS, Combine JS, Disable Emoji.

1. Generating static html files from your dynamic WordPress blog
2. Minify Html - You can decrease the size of page
3. Minify Css - You can decrease the size of css files
4. Enable Gzip Compression - Reduce the size of files sent from your server to increase the speed to which they are transferred to the browser
5. Leverage browser caching - Reduce page load times for repeat visitors
6. Combine CSS - Reduce number of HTTP round-trips by combining multiple CSS resources into one
7. Combine JS
8. Disable Emoji - You can remove the emoji inline css and wp-emoji-release.min.js

<h4>Premium Performance Optimization</h4>

The free version is enough to speed up your site but in the premium version there are extra features such as Mobile Cache, Widget Cache, Minify HTML Plus, Minify CSS Plus, Minify JS, Combine JS Plus, Defer Javascript, Optimize Images, Convert WebP, Database Cleanup, Google Fonts Async, Lazy Load for super fast load times.

1. Mobile Cache
2. Widget Cache
3. Minify HTML Plus
4. Minify CSS Plus
5. Minify Javascript - Minifying JavaScript files can reduce payload sizes and script parse time
6. Combine JS Plus
7. Defer Javascript - Eliminate render-blocking JavaScript resources. Consider delivering critical JS inline and deferring all non-critical JS
8. Optimize Images - Optimized images load faster and consume less cellular data
9. Convert WebP - Serve images in next-gen formats. Image formats like JPEG 2000, JPEG XR, and WebP often provide better compression than PNG or JPEG, which means faster downloads and less data consumption
10. Database Cleanup - The Database Cleanup feature clears out all of the garbage datas such as post revisions, trashed posts & pages, comments from trash & spam, trackbacks and pingbacks, transient options etc.
11. Google Fonts Async
12. Lazy Load - Defer offscreen images. Consider lazy-loading offscreen and hidden images after all critical resources have finished loading to lower time to interactive

<h4>Information</h4>

It is very inconvenient to use multiple caching plugins at the same time. That's why you need to disable plugins such as LiteSpeed Cache, WP-Optimize, W3 Total Cache, WP Super Cache, SiteGround Optimizer, Breeze while using WP Fastest Cache.

WP Fastest Cache is compatible with most popular plugins such as Contact Form 7, Yoast SEO, Elementor Website Builder, Classic Editor, Akismet Spam Protection, WooCommerce, Contact Form by WPForms, Really Simple SSL, All-in-One WP Migration, Yoast Duplicate Post, Wordfence Security – Firewall & Malware Scan, WordPress Importer, UpdraftPlus WordPress Backup Plugin, MonsterInsights, All in One SEO, WP Mail SMTP by WPForms.

<h4>Supported Languages</h4>

Although there are over 7000 languages spoken in the world today, we feel very lucky to support 27 languages for now.

However, localizing or adapting a plugin to another language or culture is time consuming and a demanding task. That's where the amazing Translation Contributors team of WordPress comes into play. These selfless people spent their precious time without expecting anything in return so that other people can use the add-ons more easily. We sincerely thank all of them.

Chinese Simplified (China), Chinese Traditional (Taiwan), Czech, Dutch (Belgium), Dutch (Netherlands), English (South Africa), English (UK), Finnish, French (France), Galician, German (Germany), Hungarian, Indonesian, Italian, Japanese, Korean (Korea), Persian, Russian, Slovak (Slovakia), Spanish (Argentina), Spanish (Colombia), Spanish (Ecuador), Spanish (Mexico), Spanish (Spain), Spanish (Venezuela), Swedish, Turkish

== Installation ==

1. Upload `wp-fastest-cache` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Permission of .htacces must 644
4. Enable this plugin on option page

== Screenshots ==

1. Performance Comparison
2. Other Performance Comparison
3. Without Cache
4. With Cache
5. Main Settings Page
6. Preload
7. New Post
8. Update Cache
9. Delete Cache
10. All cached files are deleted at the determinated time
11. Block caching for post and pages (TinyMCE)
12. Clean cached files via admin toolbar easily
13. Exclude Page
14. CDN
15. Enter CDN Information
16. File Types
17. Specify Sources
18. Database Cleanup

== Changelog ==
= 1.2.0 =
* to make the Preload feature to be compatible with Sitemap Index
* to hide the premium tab for the premium users
* to show warning if the Static CSS File Generation option of Divi theme is enabled
* to update translation files
* to fix PHP Warning: Undefined array key "sitemaps" in preload.php on line 62
* to change the cache path for the Polylang-Pro plugin
* to check if the buffer has only one line (no line breaks)
* refactoring of checkHtml()
* to check that Cookie Notice & Compliance for GDPR / CCPA is active or not

= 1.1.9 =
* to add gear button for the preload feature
* to remove image urls for sitemap preload
* to fix PHP Deprecated: Required parameter in preload.php on line 576
* <strong>[FEATURE]</strong> Moving the menu item under the settings menu [<a target="_blank" href="https://www.wpfastestcache.com/tutorial/how-to-move-the-menu-item-under-the-setting-menu/">Details</a>]
* to fix Warning: Undefined array key "action" in wpFastestCache.php on line 378 and 395

= 1.1.8 =
* <strong>[FEATURE]</strong> to add Sitemap option for the preload feature [<a target="_blank" href="https://www.wpfastestcache.com/features/preload-settings/#methods">Details</a>]
* to update translation files
* to fix PHP Warning: Attempt to read property "term_taxonomy_id" on bool in wpFastestCache.php on line 1638

= 1.1.7 =
* to change the cache path for the Polylang plugin
* <strong>[FEATURE]</strong> to add Korean (Korea) language
* to update translation files
* refactoring of is_amp()
* to replace empty char which exist in the admin cookie with %20 for RewriteCond

= 1.1.6 =
* to update translation files
* to fix problem that the first js source is not able to be excluded
* refactoring of set_cache_file_path()
* refactoring of Buffer Callback Filter [<a target="_blank" href="https://www.wpfastestcache.com/tutorial/buffer-callback-filter/#how-to-remove-trailing-slash-on-void-elements">Details</a>]

= 1.1.5 =
* to replace wp_remote_get() with wp_safe_remote_get() in the check_url() function
* to update translation files
* to fix PHP Warning: Undefined array key "roles" in wpFastestCache.php on line 962
* to remove multiple slashes from url
* to fix PHP Warning: Attempt to read property “wpFastestCacheLanguage” on array in admin.php on line 23

= 1.1.4 =
* to check trailing slash for query string cache
* refactoring process of clearing homepage cache by cache timeout

= 1.1.3 =
* to change translation system [<a target="_blank" href="https://www.wpfastestcache.com/blog/is-wp-fastest-cache-available-in-other-languages/">Details</a>]
* refactoring of delete_author_page_cache()
* to add Czech, Dutch (Belgium), Galician, Hungarian, Indonesian, Japanese, Persian, Spanish (Colombia), Spanish (Ecuador), Spanish (Ecuador), Spanish (Venezuela), Spanish (Argentina), Spanish (Mexico) translations
* to enable the toolbar settings wizard for the Multisite installation [<a target="_blank" href="https://www.wpfastestcache.com/features/clear-cache-link-on-the-toolbar/">Details</a>]
* to fix low level vulnerability

= 1.1.2 =
* to clear cache of next/prev posts after updating or publishing a post
* to fix E_WARNING: file_get_contents(): No such file or directory in admin.php  on line 377
* <strong>[FEATURE]</strong> Added ability to disable hook system [<a target="_blank" href="https://www.wpfastestcache.com/features/how-to-disable-clear-cache-hook-system/">Details</a>]
* to fix PHP Deprecated:  trim(): Passing null to parameter #1 ($string) of type string is deprecated in preload.php on line 546
* to fix Notice:  Constant WPFC_CACHE_QUERYSTRING already defined

= 1.1.1 =
* <strong>[FEATURE]</strong> Varnish Cache Integration [<a target="_blank" href="https://www.wpfastestcache.com/features/using-varnish-cache-with-wp-fastest-cache/">Details</a>]
* to fix E_WARNING: unlink(): No such file or directory in wpFastestCache.php  on line 1530

= 1.1.0 =
* to show cache if the url contains a parameter of Yandex Click Identifier
* <strong>[FEATURE]</strong> Excluding Yandex Click Identifier [<a target="_blank" href="https://www.wpfastestcache.com/features/cache-url-with-yandex-click-id-parameters-querystring/">Details</a>]
* <strong>[FEATURE]</strong> Adding "Regular Expression" option for the Exclude Pages feature [<a target="_blank" href="https://www.wpfastestcache.com/features/using-regular-expression-to-exclude-a-page/">Details</a>]

= 1.0.9 =
* to improve the style of exclude feature wizard
* to fix hiding the toolbar when logged in
* to fix PHP Notice: Undefined offset: -1 in js-utilities.php on line 67
* to fix PHP Fatal error: Uncaught Error: Non-static method cannot be called statically in clearing-specific-pages.php on line 58

= 1.0.8 =
* to stop showing the "DONOTCACHEPAGE is defined as TRUE" comment in the footer for the ajax requests
* <strong>[FEATURE]</strong> Clearing Specific Pages [<a target="_blank" href="https://www.wpfastestcache.com/features/clear-cache-of-specific-urls-when-updating-or-posting/">Details</a>]
* to fix the site url on the exclude page
* to fix PHP Notice:  Function WP_User_Query::query was called incorrectly. User queries should not be run before the plugins_loaded hook

= 1.0.7 =
* <strong>[FEATURE]</strong> Clearing Specific Pages (BETA) [<a target="_blank" href="https://www.wpfastestcache.com/features/clear-cache-of-specific-urls-when-updating-or-posting/">Details</a>]
* to add last-modified header when cache is served via php

= 1.0.6 =
* to serve sources via cdn for excluded pages if cdn is enabled
* to fix PHP Notice: Undefined offset: -1 in js-utilities.php  on line 48

= 1.0.5 =
* to fix E_NOTICE: Undefined variable: path in wpFastestCache.php on line 2142
* to add excluding feature for Buffer Callback Filter [<a target="_blank" href="https://www.wpfastestcache.com/tutorial/buffer-callback-filter/#exclude">Details</a>]

= 1.0.4 =
* to add avif extensions for cdn
* to add WPFC_SERVE_ONLY_VIA_CACHE [<a target="_blank" href="https://www.wpfastestcache.com/tutorial/how-to-serve-cache-only-via-php/">Details</a>]

= 1.0.3 =
* Photon will no longer be supported [<a target="_blank" href="https://www.wpfastestcache.com/blog/photon-will-no-longer-be-supported/">Details</a>]
* to exclude category url for preload if any error occurs

= 1.0.2 =
* to add WP-CLI command for clearing cache of a post [<a target="_blank" href="https://www.wpfastestcache.com/features/wp-cli-commands/">Details</a>]
* to fix Warning scandir() at wpFastestCache.php:302
* to fix Warning file_put_contents(/cache/wpfc-minified/index.html) at cache.php:1090
* to fix Warning unlink(wp-cache-config.php) admin.php:885

= 1.0.1 =
* to clear only cache of post/page even if the "update post" option is disabled

= 1.0.0 =
* to define the save_settings() function of single preload feature as static function

EARLIER VERSIONS
For the changelog of earlier versions, please refer to [<a target="_blank" href="https://www.wpfastestcache.com/changelog/earlier-changelog-of-freemium-version/">the changelog on wpfastestcache.com</a>]

== Frequently Asked Questions ==

= How do I know my blog is being cached? =
You need to refresh a page twice. If a page is cached, at the bottom of the page there is a text like "&lt;!-- WP Fastest Cache file was created in 0.330816984177 seconds, on 08-01-14 9:01:35 --&gt;".

= Does it work with Nginx? =
Yes, it works with Nginx properly. Since Nginx doesn’t use an .htaccess file, you need to enable the Gzip compression and Browser Caching features manually. You can follow these tutorials: <a href="https://www.wpfastestcache.com/tutorial/how-to-enable-leverage-browser-caching-on-nginx/">How to Enable Leverage Browser Caching on Nginx</a> and <a href="https://www.wpfastestcache.com/tutorial/how-to-enable-gzip-compression-in-wordpress/#nginx">How to Enable Gzip on Nginx</a>

= Does it work with IIS (Windows Server) ? =
Yes, it works with IIS properly.

= Is this plugin compatible with Multisite? =
Yes, it is compatible with Multisite.

= Is this plugin compatible with Subdirectory Installation? =
Yes, it is compatible with Subdirectory Installation.

= Is this plugin compatible with Http Secure (https) ? =
Yes, it is compatible with Http Secure (https).

= Is this plugin compatible with Adsense? =
Yes, it is compatible with Adsense 100%.

= Is this plugin compatible with CloudFlare? =
Yes, it is but you need to read the details. <a href="https://www.wpfastestcache.com/tutorial/wp-fastest-cache-cloudflarecloudfront/">Click</a>

= Is this plugin compatible with qTranslate? =
Yes, it is compatible with qTranslate 100%.

= Is this plugin compatible with WP Hide & Security Enhancer? =
Yes, it is compatible with WP Hide & Security Enhancer.

= Is this plugin compatible with WP-PostViews? =
Yes, it is compatible with WP-PostViews. The current post views appear on the admin panel. The visitors cannot see the current post views. The developer of WP-PostViews needs to fix this issue.

= Is this plugin compatible with WooCommerce Themes? =
Yes, it is compatible with WooCommerce Themes 100%.


== Upgrade notice ==
....
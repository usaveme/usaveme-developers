# WordPress deployment

This repository contains a standalone shortcode plugin for the existing USAVEME WordPress website.

1. Download `wordpress/usaveme-developers.php` from a reviewed release or branch.
2. Create a folder named `usaveme-developers` and place the PHP file inside it.
3. ZIP the folder and install it from WordPress **Plugins → Add New → Upload Plugin**.
4. Activate **USAVEME Developer Portal**.
5. Create or edit the page with slug `developers` and insert `[usaveme_developers]` in a Shortcode block.
6. Preview on desktop/mobile, test links, then publish.

If a prior developer portal plugin is active, first test this plugin on staging and avoid duplicate shortcode registrations. Back up the WordPress site before replacing existing code. GitHub changes do not automatically deploy to WordPress. No API keys or wallet secrets are required.

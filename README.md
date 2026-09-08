# C&A Investments — PHP/CSS Demo

This package contains the friendly, locally focused El Paso home-buyer demo for C&A Investments as a conventional PHP website.

## Files

- `index.php` — page content, reusable PHP data arrays, and demo form response
- `styles.css` — complete responsive design system
- `images/hero-home.webp` — optimized hero image
- `images/og.png` — social-sharing image
- `images/favicon.svg` — browser icon

The El Paso map is loaded from OpenStreetMap and requires an internet connection to display.

## Requirements

- PHP 8.0 or newer
- Any normal Apache, Nginx, cPanel, or local PHP hosting environment
- No React, Node, npm, database, or build command

## Run locally

From this folder:

```bash
php -S localhost:8000
```

Then open `http://localhost:8000`.

## Before a real launch

Replace the temporary email address, testimonials, canonical URL, and social metadata before launch. The included phone number is a generic 915 demo number. Both forms currently show a local demo confirmation and intentionally do not email or store visitor information. Connect them to the client's preferred form processor or PHP mail workflow before launch.

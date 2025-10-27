Wordpress CMS for Technical Career Path - Built from [wedo-headless-starter](https://github.com/BennyHudson/wedo-headless-starter) - use `wp server` to run locally.

---

# wedo-headless-starter

A starter package for wedo.digital headless WordPress installs.

This repository is a minimal, opinionated WordPress setup intended for headless projects. The idea is to keep WordPress as a content API/backend while using a separate front-end (Next.js, Gatsby, Nuxt, etc.) to render the site.

## What this package includes

- A lightweight theme: `wedo-headless` (located in `wp-content/themes/wedo-headless`) designed for headless usage. It registers custom post types, taxonomies and exposes content to GraphQL.
- A set of plugins bundled in `wp-content/plugins` that are commonly used for headless workflows and migrations.

### Bundled plugins

The repository currently contains the following plugin folders (present under `wp-content/plugins`):

- `advanced-custom-fields-pro/` — ACF Pro for creating flexible custom fields used to shape content. (Bundle expected to be pre-activated in this starter.)
- `classic-editor/` — Restores the classic WP editor (useful in some admin workflows).
- `wp-graphql/` — Exposes a GraphQL API for querying WordPress data; primary integration for headless frontends.
- `wp-graphql-acf-master/` — Integrates ACF fields with WPGraphQL so custom fields are queryable.
- `wp-smushit/` — Image optimization (Smush) for compressing and serving optimized images.
- `wp-sync-db-1.5/` and `wp-sync-db-media-files-master/` — Tools for syncing databases and media between environments (useful for migrations and seeding local dev).
- `wordpress-seo/` — Yoast SEO plugin (adds SEO features and integrates with WPGraphQL via the WPGraphQL SEO bridge if present).
- `add-wpgraphql-seo/` — A helper/bridge plugin to expose SEO fields (Yoast) to WPGraphQL (may be a small local plugin or wrapper).
- `regenerate-thumbnails/` — Regenerate Thumbnails: utility for recreating image sizes after changing theme or image sizes (useful during migrations or when adding new image sizes).

If you add or remove plugins from `wp-content/plugins`, update this README to reflect the change.

## Theme: Wedo Headless

Location: `wp-content/themes/wedo-headless`

Short overview:

- Theme name: "Wedo Headless CMS" (see `style.css`).
- Purpose: provide a minimal WordPress theme that configures the backend for headless consumption. It focuses on content structure and GraphQL exposure rather than front-end rendering.
- Key features implemented in `functions.php`:
  - Registers custom image sizes (`post-thumb`, `post-square`).
  - Enables post thumbnails and feed links.
  - Loads modular include files from `functions/` (for CPTs, taxonomies, menus, options, favicons, admin styles, email helpers, etc.).
  - Adds filters to increase GraphQL query limits and to make user objects public to GraphQL (useful for headless clients).
  - Removes some default WP head middleware (generator, RSD link, etc.) for a cleaner API surface.

Files of interest:

- `wp-content/themes/wedo-headless/functions.php` — bootstraps the theme and includes functional modules.
- `wp-content/themes/wedo-headless/functions/` — split includes (CPTs, taxonomies, menus, options, admin styles, etc.).

## Quick start / usage notes

1. Copy this repo to your environment or clone it.
2. Install WordPress as usual (DB, wp-config, site URL, etc.).
3. Activate the `Wedo Headless CMS` theme and enable the bundled plugins you need.
4. Configure ACF field groups and expose them to GraphQL where needed.
5. Use the WPGraphQL endpoint (typically `/graphql`) from your headless frontend to query content.

Developer tips:

- If you need a public GraphQL schema for a front-end, enable the appropriate ACF to GraphQL settings or use `wp-graphql-acf` mapping in field group settings.
- For large sites or bulk queries, the theme raises the GraphQL connection max query amount to 1000 — you can adjust this in `functions.php`.
- Use the included DB/media sync plugins to move content between environments safely.

---

If anything in this README is out of date (plugins added/removed, theme changes), please tell me and I'll update it.

# Evolution CMS Default Preset

Minimal project-layer preset for Evolution CMS 3.5.x. It is meant to be the small bootstrap kit for a new site: controllers, Blade views, theme assets, and preset metadata only.

## What This Preset Contains

```text
core/custom/
  composer.json
  config/
    cms/settings/ControllerNamespace.php
    tracy/active.php
  packages/default/src/
    composer.json
    DefaultServiceProvider.php
    Controllers/
      BaseController.php
      HomeController.php
    Seeders/
      HomeTemplateSeeder.php
views/
  home.blade.php
  layouts/base.blade.php
  partials/header.blade.php
themes/default/
  css/app.css
```

Evolution core, manager files, runtime cache, database files, and local secrets stay outside this repository.

## Install

Install a clean Evolution CMS runtime first:

```bash
evo install --branch=3.5.x --db-type=sqlite --db-name=database.sqlite --admin-username=admin --admin-email=admin@example.com --admin-password=change-me --admin-directory=manager --language=uk --cli --composer-update --composer-clear-cache
```

Apply the preset:

```bash
php core/artisan preset:install --from https://github.com/evolution-cms-presets/default.git --ref main --force
```

For local preset development:

```bash
php core/artisan preset:apply --source /path/to/default --preset default --force
```

Use `--dry-run` to preview the copied files before applying.

## Development Contract

- Put PHP site logic in `core/custom/packages/default/src/`.
- Put frontend templates in `views/`.
- Put theme assets in `themes/default/`.
- Keep the preset minimal; project-specific content belongs in the site repo that consumes it.
- `HomeTemplateSeeder` assigns the default site template alias to `home`, so Evolution can resolve `views/home.blade.php`.

## Next Site Step

Use this preset as the stable base, then create project-specific branches or repositories that replace `default` naming, add real content views, and grow controllers only when the site needs them.

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

## Install Through Evo Installer

The preset should be installed by the Evolution CMS installer, not applied manually as a second step. The installer creates the target project first, then copies this preset as the project-layer bootstrap.

From an installed `evo` binary:

```bash
evo install /path/to/my-site \
  --cli \
  --branch=3.5.x \
  --db-type=sqlite \
  --db-name=database.sqlite \
  --admin-username=admin \
  --admin-email=admin@example.com \
  --admin-password=change-me \
  --admin-directory=manager \
  --language=uk \
  --preset=evolution-cms-presets/default \
  --composer-update \
  --composer-clear-cache
```

For local installer development from `/Users/dmi3yy/PhpstormProjects/Extras/installer`:

```bash
cd /Users/dmi3yy/PhpstormProjects/Extras/installer
go run ./cmd/evo install /Users/dmi3yy/PhpstormProjects/Extras/dmi3yy.com \
  --cli \
  --branch=3.5.x \
  --db-type=sqlite \
  --db-name=database.sqlite \
  --admin-username=admin \
  --admin-email=admin@example.com \
  --admin-password=change-me \
  --admin-directory=manager \
  --language=uk \
  --preset=evolution-cms-presets/default \
  --composer-update \
  --composer-clear-cache
```

`evolution-cms-presets/default` is the preset source. The target project can still be committed and pushed as its own repository, for example `dmi3yy/dmi3yy.com`.

For local preset development, point the installer at the preset checkout:

```bash
go run ./cmd/evo install /tmp/default-preset-check \
  --cli \
  --branch=3.5.x \
  --db-type=sqlite \
  --db-name=database.sqlite \
  --admin-username=admin \
  --admin-email=admin@example.com \
  --admin-password=change-me \
  --admin-directory=manager \
  --language=uk \
  --preset=/Users/dmi3yy/PhpstormProjects/Extras/Presets/default \
  --composer-update \
  --composer-clear-cache
```

Use `--preset=evolution-cms-presets/default@dev` when you want the installer to pull a development branch or tag from GitHub.

## Development Contract

- Put PHP site logic in `core/custom/packages/default/src/`.
- Put frontend templates in `views/`.
- Put theme assets in `themes/default/`.
- Keep the preset minimal; project-specific content belongs in the site repo that consumes it.
- `HomeTemplateSeeder` assigns the default site template alias to `home`, so Evolution can resolve `views/home.blade.php`.

## Next Site Step

Use this preset as the stable base, then create project-specific branches or repositories that replace `default` naming, add real content views, and grow controllers only when the site needs them.

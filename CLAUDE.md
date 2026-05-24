# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Overview

**diffraction** is a Hugo-based blog site at `https://diffraction.pt/blog/`. All Hugo work lives under the `hugo/` subdirectory. The theme (`pico-base`) is a Git submodule.

## Commands

All commands must be run from `hugo/` (not the repo root):

```bash
cd hugo

# Start dev server with live reload
hugo server

# Build for production (output to hugo/public/)
hugo
```

**Requirement**: Hugo Extended ≥ 0.116.0 (needed for Dart Sass transpilation).

## Architecture

```
hugo/
├── hugo.toml              # Main config (baseURL, theme, params)
├── content/
│   ├── _index.md          # Home page
│   └── posts/             # Blog posts (Markdown)
└── themes/
    └── pico-base/         # Git submodule — custom Hugo theme
        ├── hugo.yaml      # Theme config (menus, params)
        ├── package.json   # @picocss/pico ^2.0.6 (npm dep)
        ├── assets/
        │   ├── sass/main.scss   # Dart Sass entry point
        │   └── js/main.js       # Minimal JS
        └── layouts/             # Hugo templates
```

**No separate build pipeline**: Hugo processes Dart Sass and JS inline during `hugo server` or `hugo`. No `npm run build` needed.

**Theme customization**: CSS lives in `themes/pico-base/assets/sass/main.scss`, which imports PicoCSS via `node_modules/@picocss/pico/scss` and applies overrides (e.g., `$theme-color: "pumpkin"`).

**Overriding theme templates**: Place files under `hugo/layouts/` mirroring the theme's structure — Hugo will use those instead of the theme's versions.

**Content**: Blog posts in `hugo/content/posts/` use standard Hugo front matter (title, date, tags, etc.).

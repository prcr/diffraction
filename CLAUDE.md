# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Commands

| Task | Command |
|---|---|
| Install dependencies | `uv sync` |
| Build (dev) | `uv run pelican content` |
| Build, serve, and watch | `uv run pelican --listen` |
| Production build | `uv run pelican content -s publishconf.py` |

There is no Makefile or tasks.py — all tasks run via `uv run`.

## Configuration split

`pelicanconf.py` is the development config: `SITEURL = ""` and `RELATIVE_URLS = True`. `publishconf.py` imports from it and overrides for production: absolute `SITEURL`, Atom feeds enabled, and `DELETE_OUTPUT_DIRECTORY = True`.

When editing site-wide settings, be careful which config file needs to change — production-only settings (feeds, absolute URLs) belong in `publishconf.py`; everything else in `pelicanconf.py`.

## Theme

The [Attila](https://github.com/arulrajnet/attila) theme is installed as a Python package via `pyproject.toml` (pinned to a specific git commit). Its path is resolved at runtime with `attila.get_path()` in `pelicanconf.py`. To update the theme, change the commit SHA in `pyproject.toml` and run `uv sync`.

## CI

The GitHub Actions workflow (`.github/workflows/build.yml`) only verifies the build succeeds — it does not deploy the site.

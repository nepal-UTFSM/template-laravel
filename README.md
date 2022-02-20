# Laravel Template

## Initial setup

### Github Secrets

Set this secrets before running workflows:

- `SSH_HOST`
- `SSH_PORT`
- `SSH_USER`
- `SSH_KEY`
- `REMOTE_PATH_MAIN` without trail '/'
- `REMOTE_PATH_PROD` without trail '/'
- `REMOTE_URL_MAIN` with 'https://...'
- `REMOTE_URL_PROD` with 'https://...'
- `SENTRY_PROJECT` (not used)
- `SENTRY_ORG` (not used)
- `SENTRY_TOKEN` (not used)

## Actions

- Deploy main (to staging)
- Deploy prod (to production)

### .rsyncigore

All inside this file will be ignored when deploying.

Notes:

- All items inside `storage` are ignored. If a new filesystem inside there is defined, you must create the forlder first.

## Conventions

- [Good practices](https://github.com/alexeymezenin/laravel-best-practices)

## Tools

- Laravel Dusk
- Laravel Telescope
- Sentry
- Laravel Ide Helper
- Laravel Tlint

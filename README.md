# Laravel Template

## Actions

- Deploy main (to staging)
- Deploy prod (to production)

### Secrets

Set this secrets before running workflows:

- SSH_HOST
- SSH_PORT
- SSH_USER
- SSH_KEY
- REMOTE_PATH_MAIN
- REMOTE_PATH_PROD
- SENTRY_PROJECT (not used)
- SENTRY_ORG (not used)
- SENTRY_TOKEN (not used)

### .rsyncigore

All inside this file will be ignored when deploying.

## Conventions

- [Good practices](https://github.com/alexeymezenin/laravel-best-practices)

## Tools

- Laravel Dusk
- Laravel Telescope
- Sentry
- Laravel Ide Helper
- Laravel Tlint

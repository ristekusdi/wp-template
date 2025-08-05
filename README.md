# WP Template

A scaffolding template to develop WordPress site with better security.

## How to run?

> [!IMPORTANT]
> You must have install `wp-cli` in order to make this scaffolding work. You may use [curl](https://make.wordpress.org/cli/handbook/guides/installing/#recommended-installation) or [Composer](composer global require wp-cli/wp-cli-bundle) or [Homebrew](https://make.wordpress.org/cli/handbook/guides/installing/#installing-via-homebrew) to install `wp-cli`.

1. Create new project using Composer.

```sh
composer create-project ristekusdi/wp-template <project-name>
```

2. Change directory to the project.

```sh
cd <project-name>
```

3. Create env variable by copy the `.env.example` file.

```sh
cp .env.example .env
```

Then adjust values for:

- DB_HOST
- DB_NAME
- DB_USER
- DB_PASSWORD
- AUTH_KEY
- SECURE_AUTH_KEY
- LOGGED_IN_KEY
- NONCE_KEY
- AUTH_SALT
- SECURE_AUTH_SALT
- LOGGED_IN_SALT
- NONCE_SALT
- WP_CACHE_KEY_SALT

4. Install composer dependencies.

```sh
composer install
```

5. Install WordPress with `wp` command.

> Note: Replace `DB_NAME`, `DB_USER`, `DB_PASSWORD`, `DB_HOST`, `SITE_URL`, and `SITE_TITLE` with actual value.

```sh
wp core download
wp db check 2>/dev/null || wp db create
wp core install --url=<SITE_URL> --title=<SITE_TITLE> --admin_user=admin --admin_password=password --admin_email=no-reply@unud.ac.id
wp server
```

Happy programming.

## How to deploy?

The deployment use Deployer with GitLab CI/CD. You need to provide:

- A user named `deployer`. This user used for deployment CI/CD.
- SSH Private Key and Known Hosts. Please visit [ristekusdi/deploy-web-app](https://gitlab.unud.ac.id/ristekusdi/deploy-web-apps/-/tree/main/non-container?ref_type=heads#create-ssh-key-pair) to learn how to create it.
- Replace `<ip-address-or-hostname>` value in `deploy.php` with IP address server.
- Replace `<example.com>` value in `deploy.php` with your domain name.
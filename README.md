# Plain WordPress

A WordPress starter kit to develop a WordPress site with better security.

## How to run?

1. Create new project using Composer.

```sh
composer create-project ristekusdi/wp-template <project-name>
```

2. Change directory to the project.

```sh
cd <project-name>
```

3. Create env variable and adjust `DB_HOST`, `DB_NAME`, `DB_USER`, and `DB_PASSWORD`.

```sh
cp .env.example .env
```

4. Install composer dependencies.

```sh
composer install
```

5. Install WordPress CLI.

```sh
composer global require wp-cli/wp-cli-bundle
```

6. Install WordPress.

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

- SSH Private Key and Known Hosts. Please visit [ristekusdi/deploy-web-app](https://gitlab.unud.ac.id/ristekusdi/deploy-web-apps/-/tree/main/non-container?ref_type=heads#create-ssh-key-pair) to learn how to create it.
- Replace `<ip-address-or-hostname>` value in `deploy.php` with IP address server.
- Replace `<example.com>` value in `deploy.php` with your domain name.
- Create a new user "deployer" on the server with SSH access.

# General Laravel Setup

This is my boilerplate for Laravel Project, it includes among other things:

- Jetstream with Teams support
- Git Initialization (main branch)
- Livewire
- Tailwindcss
- Timezone set to America/Mexico_City
- Flowbite
- Permissions and Roles (Spatie)
- Spanish translations
- Admin routes
- Basic users in migration (Superuser, Admin and User)
- Debug bar for Laravel
- Laravel IDE Helper

## Basic components for GUI based on Flowbite

- avatar
- badge
- button
- card
- horizontal-card
- input
- label
- link
- menu-link
- navigation-menu
- navmenu
- select
- spinner
- textarea
- upload-file

## Usage

git clone git@github.com:luisferfranco/larasetup.git myproject
cd myproject
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm run dev
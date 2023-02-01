# Laravel Role

Demonstration on how to create your own roles

## One to one

Good for single role user

<https://github.com/jedymatt/laravel-roles/tree/one-to-one>

## Many to Many

Good for multiple role user

<https://github.com/jedymatt/laravel-roles/tree/many-to-many>

### Polymorphic Many to Many

Good for multiple role user, and multiple users with different tables and guard (you can change or add middleware for different guards)

<https://github.com/jedymatt/laravel-roles/tree/polymorphic-many-to-many>

## Files Changed

- routes/web.php
- database/migrations
- database/seeders
- database/factories
- app/Models
- app/Traits --> this is for polymorphic many to many
- app/Http/Kernel.php
- app/Http/Middleware/AuthorizeRole.php

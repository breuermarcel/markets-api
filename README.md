# Stockify-API

---

## Installation

Clone repository into your packages' folder:
```bash
git clone https://github.com/breuermarcel/stockify.git
```

Define your package repositories: dev
```json
"repositories": [
    {
        "type":"path",
        "url": "./packages/*",
        "options": {
            "symlink": true
        }
    }
],
```

Require package:
```bash
composer require breuermarcel/stockify 
```

Migrate database:
```bash
php artisan migrate
```

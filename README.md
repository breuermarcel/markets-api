# Stockify-API

---

## Installation

Clone repository into your packages' folder:
```bash
git clone https://github.com/breuermarcel/markets-api.git
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
composer require breuermarcel/markets-api 
```

Migrate database:
```bash
php artisan migrate
```

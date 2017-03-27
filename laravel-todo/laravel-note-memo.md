# laravel-todo
Haoye Exercise

環境是用 Laravel 的 Homestead 建立。

1. 因為 vendor 及 .env 在 git 裡會被忽略。所以要執行以下幾個指令來還原：

```
$ composer install --no-scripts
$ composer run-script post-root-package-install
$ composer run-script post-install-cmd
$ composer run-script post-create-project-cmd
```

2. `.env` 設定

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todo_local
DB_USERNAME=homestead
DB_PASSWORD=secret
```

3. 若已經有 `migration` 且 `database/migrations` 也有檔案。

執行
```
$ artisan migrate
```

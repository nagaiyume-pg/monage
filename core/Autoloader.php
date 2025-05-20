<?php
    // core/Autoloader.php
    spl_autoload_register(function ($class) {
        // 名前空間区切り（\）をディレクトリ区切り（/）に変換
        $classPath = __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';

        if (file_exists($classPath)) {
            require_once $classPath;
        } else {
            // 必要に応じてログ出力やエラーハンドリング
            error_log("Autoloader: クラスファイルが見つかりません - $classPath");
        }
    });

    // core/Autoloader.php
    spl_autoload_register(function ($class) {
        $baseDir = __DIR__ . '/../app/';  // クラスのベースディレクトリ
        $classPath = $baseDir . str_replace('\\', '/', $class) . '.php';

        if (file_exists($classPath)) {
            require_once $classPath;
        }
    });

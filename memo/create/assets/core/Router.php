<?php

/**
 * Class Router
 *
 * シンプルなHTTPルータークラス。GETおよびPOSTルートの登録とディスパッチ処理を提供します。
 */
class Router {
    /**
     * @var array ルート情報をHTTPメソッドごとに格納する配列
     */
    private $routes = [];

    /**
     * GETリクエスト用のルートを登録します。
     *
     * @param string $path 対象のパス（例: '/home'）
     * @param callable|string $callback 実行されるコールバック、または 'Controller@method' 形式の文字列
     * @return void
     */
    public function get($path, $callback) {
        $this->routes['GET'][$path] = $callback;
    }

    /**
     * POSTリクエスト用のルートを登録します。
     *
     * @param string $path 対象のパス（例: '/submit'）
     * @param callable|string $callback 実行されるコールバック、または 'Controller@method' 形式の文字列
     * @return void
     */
    public function post($path, $callback) {
        $this->routes['POST'][$path] = $callback;
    }

    /**
     * 現在のリクエストに対応するルートをディスパッチ（実行）します。
     * 該当するルートがない場合は404エラーを返します。
     *
     * @return mixed コールバック関数またはコントローラーメソッドの実行結果。ルートが見つからない場合は404エラー出力。
     */
    public function dispatch() {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (isset($this->routes[$method][$uri])) {
            $callback = $this->routes[$method][$uri];

            if (is_callable($callback)) {
                // コールバックが関数/クロージャの場合、直接実行
                return call_user_func($callback);
            } elseif (is_string($callback)) {
                // "Controller@method" 形式の文字列として処理
                [$controller, $method] = explode('@', $callback);
                require_once "../app/controllers/{$controller}.php";
                $controllerObj = new $controller();
                return call_user_func([$controllerObj, $method]);
            }
        } else {
            // ルートが見つからない場合は404エラー
            http_response_code(404);
            echo "404 Not Found";
        }
    }
}
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Monage</title>
        <link rel="stylesheet" href="./assets/styles/style.css">
    </head>
    <body class="page">

        <!-- ヘッダー -->
        <header class="site-header">
            <div class="site-header__container">
                <span class="site-header__logo">Monage</span>
            </div>
        </header>

        <!-- メインコンテンツ -->
        <main class="main-content">

            <!-- 資産一覧表 -->
            <section class="assets-list" id="assets-list">
                <!-- ヘッダー -->
                <header class="assets-list__header">
                    <!-- タイトル -->
                    <h2 class="assets-list__title">資産一覧表</h2>
                    <!-- ボタングループ -->
                    <div class="assets-list__button-group">
                        <!-- 項目追加追加 -->
                        <button class="assets-list__button">
                            <img class="assets-list__button-icon" src="./assets/images/icon-add.svg">
                            <span class="assets-list__button-label">項目を追加</span>
                        </button>
                    </div>
                </header>
                <!-- 表 -->
                <table class="assets-list__table">
                    <!-- 見出し -->
                    <thead class="assets-list__table-head">
                        <tr class="assets-list__table-row assets-list__table-row--head">
                            <!-- チェックボックス -->
                            <th class="assets-list__table-heading">
                                <input class="assets-list__table-checkbox" type="checkbox" name="assets-list__table-all" id="assets-list__table-all">
                            </th>
                            <!-- 項目 -->
                            <th class="assets-list__table-heading">項目</th>
                            <!-- 値段 -->
                            <th class="assets-list__table-heading">値段</th>
                            <!-- 最終更新美 -->
                            <th class="assets-list__table-heading">最終更新日</th>
                            <!-- 操作 -->
                            <th class="assets-list__table-heading">操作</th>
                        </tr>
                    </thead>
                    <!-- 表本体 -->
                    <tbody class="assets-list__table-body">
                        <?php for($i = 0; $i<3; $i++): ?>
                        <!-- 行 -->
                        <tr class="assets-list__table-row">
                            <!-- チェックボックス -->
                            <td class="assets-list__table-data assets-list__table-data--checkbox">
                                <input class="assets-list__table-checkbox" type="checkbox" name="assets-list__table-checkbox" id="assets-list__table-checkbox">
                            </td>
                            <!-- 項目 -->
                            <td class="assets-list__table-data">所持金</td>
                            <!-- 値段 -->
                            <td class="assets-list__table-data">2万1000円</td>
                            <!-- 最終更新日 -->
                            <td class="assets-list__table-data">2025年01月24日</td>
                            <!-- ボタングループ -->
                            <td class="assets-list__table-data assets-list__table-data--operation">
                                <div class="assets-list__action-buttons">
                                    <!-- 編集ボタン -->
                                    <button class="assets-list__action-button">
                                        <img class="assets-list__action-icon" src="./assets/images/icon_edit.svg" alt="">
                                        <span class="assets-list__action-label">編集</span>
                                    </button>
                                    <!-- 削除ボタン -->
                                    <button class="assets-list__action-button">
                                        <img class="assets-list__action-icon" src="./assets/images/icon_delete.svg" alt="">
                                        <span class="assets-list__action-label">削除</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </section>

            <!-- 支出詳細表 -->
            <section class="expense-list">
                <h2 class="expense-list__title">支出詳細表</h2>
                <table class="expense-list__table">
                    <thead class="expense-list__head">
                        <tr class="expense-list__row expense-list__row--head">
                            <th class="expense-list__heading">項目</th>
                            <th class="expense-list__heading">値段（円）</th>
                            <th class="expense-list__heading">出どころ</th>
                            <th class="expense-list__heading">登録日</th>
                            <th class="expense-list__heading">最終更新日</th>
                            <th class="expense-list__heading">操作</th>
                        </tr>
                    </thead>
                    <tbody class="expense-list__body">
                        <tr class="expense-list__row">
                            <td class="expense-list__data">カラオケ</td>
                            <td class="expense-list__data">1000</td>
                            <td class="expense-list__data">銀行残高</td>
                            <td class="expense-list__data">2024年10月10月</td>
                            <td class="expense-list__data">2025年11月11日</td>
                            <td class="expense-list__data expense-list__data--operation">
                                <!-- 編集ボタン -->
                                <button class="expense-list__button">
                                    <img class="expense-list__button--icon" src="./assets/images/icon_edit.svg" alt="">
                                    <span class="expense-list__button--label">編集</span>
                                </button>
                                <!-- 削除ボタン -->
                                <button class="expense-list__button">
                                    <img class="expense-list__button--icon" src="./assets/images/icon_delete.svg" alt="">
                                    <span class="expense-list__button--label">削除</span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

        </main>
    </body>
</html>
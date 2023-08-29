<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Advance Test</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
    <main>
        <div class="confirm__content">
            <div class="confirm__heading">
                <h2>内容確認</h2>
            </div>
            <form class="form" action="/contacts" method="post">
            @csrf
                <div class="confirm-table">
                    <table class="confirm-table__inner">
                        <!-- 名前 -->
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お名前</th>
                                <td class="confirm-table__name">
                                    <input type="text"  name="first_name" value="{{ $contact['first_name'] }}" readonly />
                                    <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly/>
                                </td>
                        </tr>
                    <!-- 性別 -->
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">性別</th>
                                <td class="confirm-table__text">
                                    <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly/>
                                </td>
                        </tr>
                    <!-- メアド -->
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">メールアドレス</th>
                                <td class="confirm-table__text">
                                    <input type="email" name="email" value="{{ $contact['email'] }}" readonly/>
                                </td>
                        </tr>
                        <!-- 郵便番号-->
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">郵便番号</th>
                                <td class="confirm-table__text">
                                    <input type="text" name="postcode" value="{{ $contact['postcode'] }}" readonly />
                                </td>
                        </tr>
                        <!-- 住所-->
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">住所</th>
                                <td class="confirm-table__text">
                                    <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
                                </td>
                        </tr>
                        <!-- 建物名-->
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">建物名</th>
                                <td class="confirm-table__text">
                                    <input type="text" name="building_name" value="{{ $contact['building_name'] }}" readonly  />
                                </td>
                        </tr>
                        <!-- お問い合わせ-->
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">ご意見</th>
                                <td class="confirm-table__content">
                                    <textarea type="text" name="option" readonly>{{ $contact['option'] }}</textarea>
                                </td>
                        </tr>
                    </table>
                </div>
                <!-- 確認ボタン-->
                <div class="form__button">
                    <button class="form__button-submit" type="submit">送信</button>
                </div>
                <!-- 戻るボタン-->
                <div class="form-back">
                    <button class= "input_back" type="submit" name="back"  value="back">
                        修正する
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Advance Test</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>お問い合わせ</h2>
            </div>
        <form class="form" action="/contacts/confirm" method="post">
            @csrf
            <!-- 名前 -->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--name">
                        <input type="text"  name="first_name"  value="{{ old('first_name') }}"/>
                        <input type="text"  name="last_name" value="{{ old('last_name') }}" />
                    </div>
                    <div class="form__ex">
                        <span class="form__ex--first">例）山田</span>
                        <span class="form__ex--last">例）太郎</span>
                    </div>
                    <div class="name__error">
                        <span class="form__err--first">
                            @error('first_name')
                                {{ $message }}
                            @enderror
                        </span>
                        <span class="form__err--last">
                            @error('last_name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
            </div>
            <!-- 性別 -->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">性別</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="radio-gender">
                    <label><input type="radio" name="gender" value="男性" checked/>男性</label>
                    <label><input type="radio" name="gender" value="女性"  />女性</label>
                </div>
                <div class="form__error">
                    @error('gender')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <!-- メアド -->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="email" name="email" value="{{ old('email') }}" />
                    </div>
                    <div class="form__ex">
                        <span class="form__ex--default">例）test@example.com</span>
                    </div>
                    <div class="form__error">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <!-- 郵便番号-->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">郵便番号</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--postal">
                        <span class="form__label--mark">〒</span>
                        <input type="text" name="postcode"  value="{{ old('postcode') }}"/>
                    </div>
                    <div class="form__ex">
                        <span class="form__ex--postal">例）123-4567</span>
                    </div>
                    <div class="form__error">
                        @error('postcode')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <!-- 住所-->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">住所</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="address" value="{{ old('address') }}" />
                    </div>
                    <div class="form__ex">
                        <span class="form__ex--default">例）東京都渋谷区千駄ヶ谷1-2-3</span>
                    </div>
                    <div class="form__error">
                        @error('address')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <!-- 建物名-->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">建物名</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="building_name" value="{{ old('building_name') }}" />
                    </div>
                    <div class="form__ex">
                        <span class="form__ex--default">例）千駄ヶ谷マンション101</span>
                    </div>
                </div>
            </div>
            <!-- お問い合わせ-->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">ご意見</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--textarea">
                    <textarea name="option" >{{ old('option') }}</textarea>
                    </div>
                    <div class="form__error">
                        @error('option')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <!-- 確認ボタン-->
            <div class="form__button">
                <button class="form__button-submit" type="submit">確認</button>
            </div>
        </form>
        </div>
    </main>
</body>

</html>
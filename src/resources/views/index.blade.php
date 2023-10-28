<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <h1 class="heading">お問い合せ<h1>
    <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <label class="form__label--item">お名前 ※</label>
                <span class="form__input--text">
                    <input type="text" name="last-name" placeholder="例) 山田" />
                    <input type="text" name="first-name" placeholder="例) 太郎" />
                </span>
            </div>
            <div class="form__error">

            </div>
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
                <span class="form__input--text">
                    <input type="radio" name="gender" value="男性" checked>男性
                    <input type="radio" name="gender" value="女性">女性
                </span>
            </div>
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
                <span class="form__input--text">
                    <input type="email" name="email" placeholder="例) test@example" />
                </span>
            </div>
            <div class="form__group-title">
                <span class="form__label--item">郵便番号</span>
                <span class="form__label--required">※</span>
                <span class="form__input--text">
                    〒<input type="text" name="address-number" placeholder="例) 123-4567" />
                </span>
            </div>
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
                <span class="form__input--text">
                    <input type="text" name="address" placeholder="例) 東京都渋谷区千駄ヶ谷1-2-3" />
                </span>
            </div>
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
                <span class="form__input--text">
                    <input type="text" name="address-option" placeholder="例) 千駄ヶ谷マンション123" />
                </span>
            </div>
            <div class="form__group-title">
                <span class="form__label--item">ご意見</span>
                <span class="form__label--required">※</span>
                <span class="form__input--text">
                    <textarea name="textarea" cols="30" rows="6"></textarea>
                </span>
            </div>
            <div class="form__button">
                <button class="form__button--submit" type="submit">確認</button>
            </div>
        </div>
</body>
</html>
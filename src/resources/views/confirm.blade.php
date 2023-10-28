<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
    <h1>内容確認</h1>
    <div>
        <label class="confirm-table__header">お名前</label>
        <span class="confirm-table__text">
            <input type="text" name="name" value="{{ $contact['last-name'] }}" readonly />
            <input type="text" name="name" value="{{ $contact['first-name'] }}" readonly />
        </span>
    </div>
    <div>
        <label class="confirm-table__header">性別</label>
        <span class="confirm-table__text">
            <input type="text" name="name" value="{{ $contact['gender'] }}" readonly />
        </span>
    </div>
    <div>
        <label class="confirm-table__header">メールアドレス</label>
        <span class="confirm-table__text">
            <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
        </span>
    </div>
    <div>
        <label class="confirm-table__header">郵便番号</label>
        <span class="confirm-table__text">
            <input type="text" name="address-number" value="{{ $contact['address-number'] }}" readonly />
        </span>
    </div>
    <div>
        <label class="confirm-table__header">住所</label>
        <span class="confirm-table__text">
            <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
        </span>
    </div>
    <div>
        <label class="confirm-table__header">建物名</label>
        <span class="confirm-table__text">
            <input type="text" name="address-option" value="{{ $contact['address-option'] }}" readonly />
        </span>
    </div>
    <div>
        <label class="confirm-table__header">ご意見</label>
        <span class="confirm-table__text">
            <input type="textarea" name="textarea" value="{{ $contact['textarea'] }}" readonly></input>
        </span>
    </div>
    <div class="form__button">
        <button class="form__button-submit" type="submit">送信</button>
    </div>
</body>

</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="">
    </head>
    <body class="scroll-smooth">
        <form action="confirmForm.php" method="POST">
            <ul>
                <li>
                    <label for="name">名前</label>
                    <input type="text" name="name">
                </li>
                <li>
                    <label for="address">住所</label>
                    <input type="text" name="address">
                </li>
                <li>
                    <input id="men" type="checkbox" name="jender" value="男">
                    <label for="men">男</label>
                    <input id="women" type="checkbox" name="jender" value="女">
                    <label for="women">女</label>
                </li>
                <li>
                    <label for="phone">電話番号</label>
                    <input type="text" name="phone">
                </li>
                <li>
                    <label for="">お問い合わせ種別</label>
                    <select id="" class="" name="kind">
                        <option value="新規契約について" >新規契約について</option>
                        <option value="解約について">解約について</option>
                        <option value="その他">その他</option>
                    </select>
                </li>
                <li>
                    <label for="info">お問い合わせ内容</label>
                    <textarea name="info" id="" cols="30" rows="10"></textarea>
                </li>
            </ul>
            <input type="submit" value="送信"/>
        </form>
    </body>
</html>

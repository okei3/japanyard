<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h1>Japanyard</h1>
        {form ethna_action="login"}
        <dt>ログイン</dt>     <input type="submit" value="log in" />
        <div>name:
        <input type="text" name="name" value="" />
        </div>
        <div>password:
        <input type="password" name="password" value="" />
        </div>
        {/form}
        {form ethna_action="registry"}
        <dt>新規登録</dt>
        <input type="submit" value="registry" />
        <div>name:
        <input type="text" name="name" value="" />
        </div>
        <div>password:
        <input type="password" name="password" value="" />
        </div>
        <div>password(confirm):
        <input type="password" name="confirm_password" value="" />
        </div>
        {/form}
    </body>
</html>

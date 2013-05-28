<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        {if $app.get_item}
            <div>{$app.get_item.0.name}を引いた<div>
        {/if}

        <h1>Japanyard</h1>
        <div>id:{$app.user_id}</div>

        {form ethna_action="item_get"}
            <dt>アイテムマスに止まったら押してね</dt>
            {uniqid}
            <input type="submit" value="item Gacha" />
        {/form}

        {foreach from=$app.user_item_info item=item}
            <hr />
            <div> {$item.name}</div>
            <div> {$item.explain}</div>
            {form ethna_action="item_use"}
                {uniqid}
                <input type="hidden" name="item_id" value="{$item.id}" />
                <input type="submit" value="use" />
            {/form}
        {/foreach}

    </body>
</html>

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

        {form ethna_action="support_item_add"}
            <dt>アイテムマスに止まったら押してね</dt>
            {uniqid}
            <input type="text" name="name" value="アイテム名" />
            <input type="text" name="explain" value="説明" />
            <input type="text" name="speciality" value="役割:(0:全員 1:警察 2:泥棒)" />
            <input type="submit" value="追加" />
        {/form}

        {foreach from=$app.item_list item=item}
            <hr />
            <div> {$item.id}</div>
            <div> {$item.name}</div>
            <div> {$item.explain}</div>
            <div> 役割{$item.speciality}(0:全員 1:警察 2:泥棒)</div>
            {form ethna_action="support_item_delete"}
                {uniqid}
                <input type="hidden" name="item_id" value="{$item.id}" />
                <input type="submit" value="削除" />
            {/form}
        {/foreach}

    </body>
</html>

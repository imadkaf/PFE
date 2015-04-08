{* DO NOT EDIT THIS FILE! Use an override template instead. *}
<h1>{"Register account information"|i18n("design/standard/shop")}</h1>

{if $input_error}
<div class="warning">
<h2>{"Input did not validate, fill in all fields"|i18n("design/standard/shop")}</h2>
</div>

{/if}
<form method="post" action={"/shop/register/"|ezurl}>

<table>
<tr>
    <td>{"First name"|i18n("design/standard/shop")}</td>
    <td><input type="text" name="FirstName" size="20" value="{$first_name|wash}" /></td>
</tr>
<tr>
    <td>{"Last name"|i18n("design/standard/shop")}</td>
    <td><input type="text" name="LastName" size="20" value="{$last_name|wash}" /></td>
<tr>
    <td>{"Email"|i18n("design/standard/shop")}</td>
    <td><input type="text" name="EMail" size="20" value="{$email|wash}" /></td>
</tr>
<tr>
    <td colspan="2">{"Address"|i18n("design/standard/shop")}</td>
</tr>
<tr>
    <td colspan="2">
    <textarea name="Address" cols="50" rows="10" >{$address|wash}</textarea>
    </td>
</tr>
</table>

<input type="submit" name="CancelButton" value="Cancel" />
<input type="submit" name="StoreButton" value="Store" />
</form>
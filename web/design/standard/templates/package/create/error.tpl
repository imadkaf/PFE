{* DO NOT EDIT THIS FILE! Use an override template instead. *}
{section show=$error_list|count|gt( 0 )}
<div class="error">
<ul>
{section var=error loop=$error_list}
    <li>{if $error.item.field}<em class="field">{$error.item.field|wash}:</em> {/if}{$error.item.description|wash}</li>
{/section}
</ul>
</div>
{/section}

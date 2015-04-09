<?php
// URI:       design:node/view/block_item.tpl
// Filename:  extension/ezdemo/design/ezdemo/override/templates/block_item/product.tpl
// Timestamp: 1417102386 (Thu Nov 27 16:33:06 CET 2014)
$oldSetArray_baa501684c3c5b80bf0a68a02401f4e5 = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/ezdemo_site/cache/template/compiled/common.php' );

$text .= '<article class="selected-products">
    <div class="attribute-image">
        ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'href' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'url_alias',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'ezurl',
      ),
      2 => false,
    ),
  ),
  'image_class' => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'productthumbnail',
      2 => false,
    ),
  ),
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'image',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 3,
    1 => 8,
    2 => 79,
  ),
  1 => 
  array (
    0 => 3,
    1 => 113,
    2 => 184,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/block_item/product.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    </div>
    <div class="product-info">
        <div class="attribute-header">
            <a href="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" class="teaser-link">
                <h3>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h3>
            </a>
        </div>
        <ul class="breadcrumb">
            ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_eaeefba7d2d71e68503610f69933f288_1 ) ) $fe_variable_stack_eaeefba7d2d71e68503610f69933f288_1 = array();
$fe_variable_stack_eaeefba7d2d71e68503610f69933f288_1[] = compact( 'fe_array_eaeefba7d2d71e68503610f69933f288_1', 'fe_array_keys_eaeefba7d2d71e68503610f69933f288_1', 'fe_n_items_eaeefba7d2d71e68503610f69933f288_1', 'fe_n_items_processed_eaeefba7d2d71e68503610f69933f288_1', 'fe_i_eaeefba7d2d71e68503610f69933f288_1', 'fe_key_eaeefba7d2d71e68503610f69933f288_1', 'fe_val_eaeefba7d2d71e68503610f69933f288_1', 'fe_offset_eaeefba7d2d71e68503610f69933f288_1', 'fe_max_eaeefba7d2d71e68503610f69933f288_1', 'fe_reverse_eaeefba7d2d71e68503610f69933f288_1', 'fe_first_val_eaeefba7d2d71e68503610f69933f288_1', 'fe_last_val_eaeefba7d2d71e68503610f69933f288_1' );
unset( $fe_array_eaeefba7d2d71e68503610f69933f288_1 );
unset( $fe_array_eaeefba7d2d71e68503610f69933f288_1 );
$fe_array_eaeefba7d2d71e68503610f69933f288_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$fe_array_eaeefba7d2d71e68503610f69933f288_11 = compiledFetchAttribute( $fe_array_eaeefba7d2d71e68503610f69933f288_1, 'path' );
unset( $fe_array_eaeefba7d2d71e68503610f69933f288_1 );
$fe_array_eaeefba7d2d71e68503610f69933f288_1 = $fe_array_eaeefba7d2d71e68503610f69933f288_11;
if (! isset( $fe_array_eaeefba7d2d71e68503610f69933f288_1 ) ) $fe_array_eaeefba7d2d71e68503610f69933f288_1 = NULL;
while ( is_object( $fe_array_eaeefba7d2d71e68503610f69933f288_1 ) and method_exists( $fe_array_eaeefba7d2d71e68503610f69933f288_1, 'templateValue' ) )
    $fe_array_eaeefba7d2d71e68503610f69933f288_1 = $fe_array_eaeefba7d2d71e68503610f69933f288_1->templateValue();

$fe_array_keys_eaeefba7d2d71e68503610f69933f288_1 = is_array( $fe_array_eaeefba7d2d71e68503610f69933f288_1 ) ? array_keys( $fe_array_eaeefba7d2d71e68503610f69933f288_1 ) : array();
$fe_n_items_eaeefba7d2d71e68503610f69933f288_1 = count( $fe_array_keys_eaeefba7d2d71e68503610f69933f288_1 );
$fe_n_items_processed_eaeefba7d2d71e68503610f69933f288_1 = 0;
$fe_offset_eaeefba7d2d71e68503610f69933f288_1 = 0;
$fe_max_eaeefba7d2d71e68503610f69933f288_1 = $fe_n_items_eaeefba7d2d71e68503610f69933f288_1 - $fe_offset_eaeefba7d2d71e68503610f69933f288_1;
$fe_reverse_eaeefba7d2d71e68503610f69933f288_1 = false;
if ( $fe_offset_eaeefba7d2d71e68503610f69933f288_1 < 0 || $fe_offset_eaeefba7d2d71e68503610f69933f288_1 >= $fe_n_items_eaeefba7d2d71e68503610f69933f288_1 )
{
    $fe_offset_eaeefba7d2d71e68503610f69933f288_1 = ( $fe_offset_eaeefba7d2d71e68503610f69933f288_1 < 0 ) ? 0 : $fe_n_items_eaeefba7d2d71e68503610f69933f288_1;
    if ( $fe_n_items_eaeefba7d2d71e68503610f69933f288_1 || $fe_offset_eaeefba7d2d71e68503610f69933f288_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_eaeefba7d2d71e68503610f69933f288_1'. Array count: $fe_n_items_eaeefba7d2d71e68503610f69933f288_1");   
}
}
if ( $fe_max_eaeefba7d2d71e68503610f69933f288_1 < 0 || $fe_offset_eaeefba7d2d71e68503610f69933f288_1 + $fe_max_eaeefba7d2d71e68503610f69933f288_1 > $fe_n_items_eaeefba7d2d71e68503610f69933f288_1 )
{
    if ( $fe_max_eaeefba7d2d71e68503610f69933f288_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_eaeefba7d2d71e68503610f69933f288_1");
    $fe_max_eaeefba7d2d71e68503610f69933f288_1 = $fe_n_items_eaeefba7d2d71e68503610f69933f288_1 - $fe_offset_eaeefba7d2d71e68503610f69933f288_1;
}
if ( $fe_reverse_eaeefba7d2d71e68503610f69933f288_1 )
{
    $fe_first_val_eaeefba7d2d71e68503610f69933f288_1 = $fe_n_items_eaeefba7d2d71e68503610f69933f288_1 - 1 - $fe_offset_eaeefba7d2d71e68503610f69933f288_1;
    $fe_last_val_eaeefba7d2d71e68503610f69933f288_1  = 0;
}
else
{
    $fe_first_val_eaeefba7d2d71e68503610f69933f288_1 = $fe_offset_eaeefba7d2d71e68503610f69933f288_1;
    $fe_last_val_eaeefba7d2d71e68503610f69933f288_1  = $fe_n_items_eaeefba7d2d71e68503610f69933f288_1 - 1;
}
// foreach
for ( $fe_i_eaeefba7d2d71e68503610f69933f288_1 = $fe_first_val_eaeefba7d2d71e68503610f69933f288_1; $fe_n_items_processed_eaeefba7d2d71e68503610f69933f288_1 < $fe_max_eaeefba7d2d71e68503610f69933f288_1 && ( $fe_reverse_eaeefba7d2d71e68503610f69933f288_1 ? $fe_i_eaeefba7d2d71e68503610f69933f288_1 >= $fe_last_val_eaeefba7d2d71e68503610f69933f288_1 : $fe_i_eaeefba7d2d71e68503610f69933f288_1 <= $fe_last_val_eaeefba7d2d71e68503610f69933f288_1 ); $fe_reverse_eaeefba7d2d71e68503610f69933f288_1 ? $fe_i_eaeefba7d2d71e68503610f69933f288_1-- : $fe_i_eaeefba7d2d71e68503610f69933f288_1++ )
{
$fe_key_eaeefba7d2d71e68503610f69933f288_1 = $fe_array_keys_eaeefba7d2d71e68503610f69933f288_1[$fe_i_eaeefba7d2d71e68503610f69933f288_1];
$fe_val_eaeefba7d2d71e68503610f69933f288_1 = $fe_array_eaeefba7d2d71e68503610f69933f288_1[$fe_key_eaeefba7d2d71e68503610f69933f288_1];
$vars[$rootNamespace]['path_item'] = $fe_val_eaeefba7d2d71e68503610f69933f288_1;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= '                <span class="divider">»</span>
                ';
} // delimiter ends

$text .= '            <li>
                <a href="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'path_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['path_item'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'path_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['path_item'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</a>
                            </li>
            ';
$fe_n_items_processed_eaeefba7d2d71e68503610f69933f288_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_eaeefba7d2d71e68503610f69933f288_1 ) ) extract( array_pop( $fe_variable_stack_eaeefba7d2d71e68503610f69933f288_1 ) );

else
{

unset( $fe_array_eaeefba7d2d71e68503610f69933f288_1 );

unset( $fe_array_keys_eaeefba7d2d71e68503610f69933f288_1 );

unset( $fe_n_items_eaeefba7d2d71e68503610f69933f288_1 );

unset( $fe_n_items_processed_eaeefba7d2d71e68503610f69933f288_1 );

unset( $fe_i_eaeefba7d2d71e68503610f69933f288_1 );

unset( $fe_key_eaeefba7d2d71e68503610f69933f288_1 );

unset( $fe_val_eaeefba7d2d71e68503610f69933f288_1 );

unset( $fe_offset_eaeefba7d2d71e68503610f69933f288_1 );

unset( $fe_max_eaeefba7d2d71e68503610f69933f288_1 );

unset( $fe_reverse_eaeefba7d2d71e68503610f69933f288_1 );

unset( $fe_first_val_eaeefba7d2d71e68503610f69933f288_1 );

unset( $fe_last_val_eaeefba7d2d71e68503610f69933f288_1 );

unset( $fe_variable_stack_eaeefba7d2d71e68503610f69933f288_1 );

}

// foreach ends
$text .= '        </ul>
        <form method="post" action="/eng/content/action">
            <fieldset>
                <div class="item-price">
                    ';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'price' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'content' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'inc_vat_price' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = $locale->formatCurrencyWithSymbol( $var1, $locale->attribute( 'currency_symbol' ) );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
                </div>
                <div class="item-buying-action form-inline">
                    <label>
                        <span class="hidden">Amount</span>
                        <input type="text" name="Quantity" />
                    </label>
                    <button class="btn btn-warning" type="submit" name="ActionAddToBasket">
                        Buy
                    </button>
                </div>
            </fieldset>
            <input type="hidden" name="ContentNodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
            <input type="hidden" name="ContentObjectID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
            <input type="hidden" name="ViewMode" value="full" />
        </form>
    </div>
</article>
';

$setArray = $oldSetArray_baa501684c3c5b80bf0a68a02401f4e5;
$tpl->Level--;
?>

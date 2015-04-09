<?php
// URI:       design:tagcloud/tagcloud.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/tagcloud/tagcloud.tpl
// Timestamp: 1417102386 (Thu Nov 27 16:33:06 CET 2014)
$oldSetArray_fb0b4073963f4316ca40ecbfaae17187 = isset( $setArray ) ? $setArray : array();
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

// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_3f342bba2f3c1cff00a6467b1bfe62a9_2 ) ) $fe_variable_stack_3f342bba2f3c1cff00a6467b1bfe62a9_2 = array();
$fe_variable_stack_3f342bba2f3c1cff00a6467b1bfe62a9_2[] = compact( 'fe_array_3f342bba2f3c1cff00a6467b1bfe62a9_2', 'fe_array_keys_3f342bba2f3c1cff00a6467b1bfe62a9_2', 'fe_n_items_3f342bba2f3c1cff00a6467b1bfe62a9_2', 'fe_n_items_processed_3f342bba2f3c1cff00a6467b1bfe62a9_2', 'fe_i_3f342bba2f3c1cff00a6467b1bfe62a9_2', 'fe_key_3f342bba2f3c1cff00a6467b1bfe62a9_2', 'fe_val_3f342bba2f3c1cff00a6467b1bfe62a9_2', 'fe_offset_3f342bba2f3c1cff00a6467b1bfe62a9_2', 'fe_max_3f342bba2f3c1cff00a6467b1bfe62a9_2', 'fe_reverse_3f342bba2f3c1cff00a6467b1bfe62a9_2', 'fe_first_val_3f342bba2f3c1cff00a6467b1bfe62a9_2', 'fe_last_val_3f342bba2f3c1cff00a6467b1bfe62a9_2' );
unset( $fe_array_3f342bba2f3c1cff00a6467b1bfe62a9_2 );
unset( $fe_array_3f342bba2f3c1cff00a6467b1bfe62a9_2 );
$fe_array_3f342bba2f3c1cff00a6467b1bfe62a9_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tag_cloud', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tag_cloud'] : null;
if (! isset( $fe_array_3f342bba2f3c1cff00a6467b1bfe62a9_2 ) ) $fe_array_3f342bba2f3c1cff00a6467b1bfe62a9_2 = NULL;
while ( is_object( $fe_array_3f342bba2f3c1cff00a6467b1bfe62a9_2 ) and method_exists( $fe_array_3f342bba2f3c1cff00a6467b1bfe62a9_2, 'templateValue' ) )
    $fe_array_3f342bba2f3c1cff00a6467b1bfe62a9_2 = $fe_array_3f342bba2f3c1cff00a6467b1bfe62a9_2->templateValue();

$fe_array_keys_3f342bba2f3c1cff00a6467b1bfe62a9_2 = is_array( $fe_array_3f342bba2f3c1cff00a6467b1bfe62a9_2 ) ? array_keys( $fe_array_3f342bba2f3c1cff00a6467b1bfe62a9_2 ) : array();
$fe_n_items_3f342bba2f3c1cff00a6467b1bfe62a9_2 = count( $fe_array_keys_3f342bba2f3c1cff00a6467b1bfe62a9_2 );
$fe_n_items_processed_3f342bba2f3c1cff00a6467b1bfe62a9_2 = 0;
$fe_offset_3f342bba2f3c1cff00a6467b1bfe62a9_2 = 0;
$fe_max_3f342bba2f3c1cff00a6467b1bfe62a9_2 = $fe_n_items_3f342bba2f3c1cff00a6467b1bfe62a9_2 - $fe_offset_3f342bba2f3c1cff00a6467b1bfe62a9_2;
$fe_reverse_3f342bba2f3c1cff00a6467b1bfe62a9_2 = false;
if ( $fe_offset_3f342bba2f3c1cff00a6467b1bfe62a9_2 < 0 || $fe_offset_3f342bba2f3c1cff00a6467b1bfe62a9_2 >= $fe_n_items_3f342bba2f3c1cff00a6467b1bfe62a9_2 )
{
    $fe_offset_3f342bba2f3c1cff00a6467b1bfe62a9_2 = ( $fe_offset_3f342bba2f3c1cff00a6467b1bfe62a9_2 < 0 ) ? 0 : $fe_n_items_3f342bba2f3c1cff00a6467b1bfe62a9_2;
    if ( $fe_n_items_3f342bba2f3c1cff00a6467b1bfe62a9_2 || $fe_offset_3f342bba2f3c1cff00a6467b1bfe62a9_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_3f342bba2f3c1cff00a6467b1bfe62a9_2'. Array count: $fe_n_items_3f342bba2f3c1cff00a6467b1bfe62a9_2");   
}
}
if ( $fe_max_3f342bba2f3c1cff00a6467b1bfe62a9_2 < 0 || $fe_offset_3f342bba2f3c1cff00a6467b1bfe62a9_2 + $fe_max_3f342bba2f3c1cff00a6467b1bfe62a9_2 > $fe_n_items_3f342bba2f3c1cff00a6467b1bfe62a9_2 )
{
    if ( $fe_max_3f342bba2f3c1cff00a6467b1bfe62a9_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_3f342bba2f3c1cff00a6467b1bfe62a9_2");
    $fe_max_3f342bba2f3c1cff00a6467b1bfe62a9_2 = $fe_n_items_3f342bba2f3c1cff00a6467b1bfe62a9_2 - $fe_offset_3f342bba2f3c1cff00a6467b1bfe62a9_2;
}
if ( $fe_reverse_3f342bba2f3c1cff00a6467b1bfe62a9_2 )
{
    $fe_first_val_3f342bba2f3c1cff00a6467b1bfe62a9_2 = $fe_n_items_3f342bba2f3c1cff00a6467b1bfe62a9_2 - 1 - $fe_offset_3f342bba2f3c1cff00a6467b1bfe62a9_2;
    $fe_last_val_3f342bba2f3c1cff00a6467b1bfe62a9_2  = 0;
}
else
{
    $fe_first_val_3f342bba2f3c1cff00a6467b1bfe62a9_2 = $fe_offset_3f342bba2f3c1cff00a6467b1bfe62a9_2;
    $fe_last_val_3f342bba2f3c1cff00a6467b1bfe62a9_2  = $fe_n_items_3f342bba2f3c1cff00a6467b1bfe62a9_2 - 1;
}
// foreach
for ( $fe_i_3f342bba2f3c1cff00a6467b1bfe62a9_2 = $fe_first_val_3f342bba2f3c1cff00a6467b1bfe62a9_2; $fe_n_items_processed_3f342bba2f3c1cff00a6467b1bfe62a9_2 < $fe_max_3f342bba2f3c1cff00a6467b1bfe62a9_2 && ( $fe_reverse_3f342bba2f3c1cff00a6467b1bfe62a9_2 ? $fe_i_3f342bba2f3c1cff00a6467b1bfe62a9_2 >= $fe_last_val_3f342bba2f3c1cff00a6467b1bfe62a9_2 : $fe_i_3f342bba2f3c1cff00a6467b1bfe62a9_2 <= $fe_last_val_3f342bba2f3c1cff00a6467b1bfe62a9_2 ); $fe_reverse_3f342bba2f3c1cff00a6467b1bfe62a9_2 ? $fe_i_3f342bba2f3c1cff00a6467b1bfe62a9_2-- : $fe_i_3f342bba2f3c1cff00a6467b1bfe62a9_2++ )
{
$fe_key_3f342bba2f3c1cff00a6467b1bfe62a9_2 = $fe_array_keys_3f342bba2f3c1cff00a6467b1bfe62a9_2[$fe_i_3f342bba2f3c1cff00a6467b1bfe62a9_2];
$fe_val_3f342bba2f3c1cff00a6467b1bfe62a9_2 = $fe_array_3f342bba2f3c1cff00a6467b1bfe62a9_2[$fe_key_3f342bba2f3c1cff00a6467b1bfe62a9_2];
$vars[$rootNamespace]['tag'] = $fe_val_3f342bba2f3c1cff00a6467b1bfe62a9_2;
$text .= '<a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tag'] : null;
$var5 = compiledFetchAttribute( $var4, 'tag' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = rawurlencode( $var4 );
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/content/keyword/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' style="font-size: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tag'] : null;
$var1 = compiledFetchAttribute( $var, 'font_size' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '%" title="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tag'] : null;
$var1 = compiledFetchAttribute( $var, 'count' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' objects tagged with \'';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tag'] : null;
$var2 = compiledFetchAttribute( $var1, 'tag' );
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

$text .= '\'">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tag'] : null;
$var2 = compiledFetchAttribute( $var1, 'tag' );
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

$text .= '</a> ';
$fe_n_items_processed_3f342bba2f3c1cff00a6467b1bfe62a9_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_3f342bba2f3c1cff00a6467b1bfe62a9_2 ) ) extract( array_pop( $fe_variable_stack_3f342bba2f3c1cff00a6467b1bfe62a9_2 ) );

else
{

unset( $fe_array_3f342bba2f3c1cff00a6467b1bfe62a9_2 );

unset( $fe_array_keys_3f342bba2f3c1cff00a6467b1bfe62a9_2 );

unset( $fe_n_items_3f342bba2f3c1cff00a6467b1bfe62a9_2 );

unset( $fe_n_items_processed_3f342bba2f3c1cff00a6467b1bfe62a9_2 );

unset( $fe_i_3f342bba2f3c1cff00a6467b1bfe62a9_2 );

unset( $fe_key_3f342bba2f3c1cff00a6467b1bfe62a9_2 );

unset( $fe_val_3f342bba2f3c1cff00a6467b1bfe62a9_2 );

unset( $fe_offset_3f342bba2f3c1cff00a6467b1bfe62a9_2 );

unset( $fe_max_3f342bba2f3c1cff00a6467b1bfe62a9_2 );

unset( $fe_reverse_3f342bba2f3c1cff00a6467b1bfe62a9_2 );

unset( $fe_first_val_3f342bba2f3c1cff00a6467b1bfe62a9_2 );

unset( $fe_last_val_3f342bba2f3c1cff00a6467b1bfe62a9_2 );

unset( $fe_variable_stack_3f342bba2f3c1cff00a6467b1bfe62a9_2 );

}

// foreach ends

$setArray = $oldSetArray_fb0b4073963f4316ca40ecbfaae17187;
$tpl->Level--;
?>

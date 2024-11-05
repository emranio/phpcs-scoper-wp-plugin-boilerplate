<?php

// scoper-autoload.php @generated by PhpScoper

$loader = (static function () {
    // Backup the autoloaded Composer files
    $existingComposerAutoloadFiles = isset($GLOBALS['__composer_autoload_files']) ? $GLOBALS['__composer_autoload_files'] : [];

    $loader = require_once __DIR__.'/autoload.php';
    // Ensure InstalledVersions is available
    $installedVersionsPath = __DIR__.'/composer/InstalledVersions.php';
    if (file_exists($installedVersionsPath)) require_once $installedVersionsPath;

    // Restore the backup and ensure the excluded files are properly marked as loaded
    $GLOBALS['__composer_autoload_files'] = \array_merge(
        $existingComposerAutoloadFiles,
        \array_fill_keys([], true)
    );

    return $loader;
})();

// Class aliases. For more information see:
// https://github.com/humbug/php-scoper/blob/master/docs/further-reading.md#class-aliases
if (!function_exists('humbug_phpscoper_expose_class')) {
    function humbug_phpscoper_expose_class($exposed, $prefixed) {
        if (!class_exists($exposed, false) && !interface_exists($exposed, false) && !trait_exists($exposed, false)) {
            spl_autoload_call($prefixed);
        }
    }
}
humbug_phpscoper_expose_class('ComposerAutoloaderInitaf664a2fc063f5bf94e263ada6d70cbe', 'MyVendorPrefix\ComposerAutoloaderInitaf664a2fc063f5bf94e263ada6d70cbe');
humbug_phpscoper_expose_class('PhpToken', 'MyVendorPrefix\PhpToken');
humbug_phpscoper_expose_class('ValueError', 'MyVendorPrefix\ValueError');
humbug_phpscoper_expose_class('Attribute', 'MyVendorPrefix\Attribute');
humbug_phpscoper_expose_class('UnhandledMatchError', 'MyVendorPrefix\UnhandledMatchError');
humbug_phpscoper_expose_class('Stringable', 'MyVendorPrefix\Stringable');
humbug_phpscoper_expose_class('Normalizer', 'MyVendorPrefix\Normalizer');

// Function aliases. For more information see:
// https://github.com/humbug/php-scoper/blob/master/docs/further-reading.md#function-aliases
if (!function_exists('app')) { function app() { return \MyVendorPrefix\app(...func_get_args()); } }
if (!function_exists('append_config')) { function append_config() { return \MyVendorPrefix\append_config(...func_get_args()); } }
if (!function_exists('blank')) { function blank() { return \MyVendorPrefix\blank(...func_get_args()); } }
if (!function_exists('class_basename')) { function class_basename() { return \MyVendorPrefix\class_basename(...func_get_args()); } }
if (!function_exists('class_uses_recursive')) { function class_uses_recursive() { return \MyVendorPrefix\class_uses_recursive(...func_get_args()); } }
if (!function_exists('collect')) { function collect() { return \MyVendorPrefix\collect(...func_get_args()); } }
if (!function_exists('ctype_alnum')) { function ctype_alnum() { return \MyVendorPrefix\ctype_alnum(...func_get_args()); } }
if (!function_exists('ctype_alpha')) { function ctype_alpha() { return \MyVendorPrefix\ctype_alpha(...func_get_args()); } }
if (!function_exists('ctype_cntrl')) { function ctype_cntrl() { return \MyVendorPrefix\ctype_cntrl(...func_get_args()); } }
if (!function_exists('ctype_digit')) { function ctype_digit() { return \MyVendorPrefix\ctype_digit(...func_get_args()); } }
if (!function_exists('ctype_graph')) { function ctype_graph() { return \MyVendorPrefix\ctype_graph(...func_get_args()); } }
if (!function_exists('ctype_lower')) { function ctype_lower() { return \MyVendorPrefix\ctype_lower(...func_get_args()); } }
if (!function_exists('ctype_print')) { function ctype_print() { return \MyVendorPrefix\ctype_print(...func_get_args()); } }
if (!function_exists('ctype_punct')) { function ctype_punct() { return \MyVendorPrefix\ctype_punct(...func_get_args()); } }
if (!function_exists('ctype_space')) { function ctype_space() { return \MyVendorPrefix\ctype_space(...func_get_args()); } }
if (!function_exists('ctype_upper')) { function ctype_upper() { return \MyVendorPrefix\ctype_upper(...func_get_args()); } }
if (!function_exists('ctype_xdigit')) { function ctype_xdigit() { return \MyVendorPrefix\ctype_xdigit(...func_get_args()); } }
if (!function_exists('data_fill')) { function data_fill() { return \MyVendorPrefix\data_fill(...func_get_args()); } }
if (!function_exists('data_forget')) { function data_forget() { return \MyVendorPrefix\data_forget(...func_get_args()); } }
if (!function_exists('data_get')) { function data_get() { return \MyVendorPrefix\data_get(...func_get_args()); } }
if (!function_exists('data_set')) { function data_set() { return \MyVendorPrefix\data_set(...func_get_args()); } }
if (!function_exists('deprecationWarning')) { function deprecationWarning() { return \MyVendorPrefix\deprecationWarning(...func_get_args()); } }
if (!function_exists('e')) { function e() { return \MyVendorPrefix\e(...func_get_args()); } }
if (!function_exists('env')) { function env() { return \MyVendorPrefix\env(...func_get_args()); } }
if (!function_exists('fdiv')) { function fdiv() { return \MyVendorPrefix\fdiv(...func_get_args()); } }
if (!function_exists('filled')) { function filled() { return \MyVendorPrefix\filled(...func_get_args()); } }
if (!function_exists('getHtmlAttribute')) { function getHtmlAttribute() { return \MyVendorPrefix\getHtmlAttribute(...func_get_args()); } }
if (!function_exists('getMaxHistoryMonthsByAmount')) { function getMaxHistoryMonthsByAmount() { return \MyVendorPrefix\getMaxHistoryMonthsByAmount(...func_get_args()); } }
if (!function_exists('getOpenCollectiveSponsors')) { function getOpenCollectiveSponsors() { return \MyVendorPrefix\getOpenCollectiveSponsors(...func_get_args()); } }
if (!function_exists('getTypeName')) { function getTypeName() { return \MyVendorPrefix\getTypeName(...func_get_args()); } }
if (!function_exists('get_debug_type')) { function get_debug_type() { return \MyVendorPrefix\get_debug_type(...func_get_args()); } }
if (!function_exists('get_resource_id')) { function get_resource_id() { return \MyVendorPrefix\get_resource_id(...func_get_args()); } }
if (!function_exists('grapheme_extract')) { function grapheme_extract() { return \MyVendorPrefix\grapheme_extract(...func_get_args()); } }
if (!function_exists('grapheme_stripos')) { function grapheme_stripos() { return \MyVendorPrefix\grapheme_stripos(...func_get_args()); } }
if (!function_exists('grapheme_stristr')) { function grapheme_stristr() { return \MyVendorPrefix\grapheme_stristr(...func_get_args()); } }
if (!function_exists('grapheme_strlen')) { function grapheme_strlen() { return \MyVendorPrefix\grapheme_strlen(...func_get_args()); } }
if (!function_exists('grapheme_strpos')) { function grapheme_strpos() { return \MyVendorPrefix\grapheme_strpos(...func_get_args()); } }
if (!function_exists('grapheme_strripos')) { function grapheme_strripos() { return \MyVendorPrefix\grapheme_strripos(...func_get_args()); } }
if (!function_exists('grapheme_strrpos')) { function grapheme_strrpos() { return \MyVendorPrefix\grapheme_strrpos(...func_get_args()); } }
if (!function_exists('grapheme_strstr')) { function grapheme_strstr() { return \MyVendorPrefix\grapheme_strstr(...func_get_args()); } }
if (!function_exists('grapheme_substr')) { function grapheme_substr() { return \MyVendorPrefix\grapheme_substr(...func_get_args()); } }
if (!function_exists('h')) { function h() { return \MyVendorPrefix\h(...func_get_args()); } }
if (!function_exists('head')) { function head() { return \MyVendorPrefix\head(...func_get_args()); } }
if (!function_exists('last')) { function last() { return \MyVendorPrefix\last(...func_get_args()); } }
if (!function_exists('mb_check_encoding')) { function mb_check_encoding() { return \MyVendorPrefix\mb_check_encoding(...func_get_args()); } }
if (!function_exists('mb_chr')) { function mb_chr() { return \MyVendorPrefix\mb_chr(...func_get_args()); } }
if (!function_exists('mb_convert_case')) { function mb_convert_case() { return \MyVendorPrefix\mb_convert_case(...func_get_args()); } }
if (!function_exists('mb_convert_encoding')) { function mb_convert_encoding() { return \MyVendorPrefix\mb_convert_encoding(...func_get_args()); } }
if (!function_exists('mb_convert_variables')) { function mb_convert_variables() { return \MyVendorPrefix\mb_convert_variables(...func_get_args()); } }
if (!function_exists('mb_decode_mimeheader')) { function mb_decode_mimeheader() { return \MyVendorPrefix\mb_decode_mimeheader(...func_get_args()); } }
if (!function_exists('mb_decode_numericentity')) { function mb_decode_numericentity() { return \MyVendorPrefix\mb_decode_numericentity(...func_get_args()); } }
if (!function_exists('mb_detect_encoding')) { function mb_detect_encoding() { return \MyVendorPrefix\mb_detect_encoding(...func_get_args()); } }
if (!function_exists('mb_detect_order')) { function mb_detect_order() { return \MyVendorPrefix\mb_detect_order(...func_get_args()); } }
if (!function_exists('mb_encode_mimeheader')) { function mb_encode_mimeheader() { return \MyVendorPrefix\mb_encode_mimeheader(...func_get_args()); } }
if (!function_exists('mb_encode_numericentity')) { function mb_encode_numericentity() { return \MyVendorPrefix\mb_encode_numericentity(...func_get_args()); } }
if (!function_exists('mb_encoding_aliases')) { function mb_encoding_aliases() { return \MyVendorPrefix\mb_encoding_aliases(...func_get_args()); } }
if (!function_exists('mb_get_info')) { function mb_get_info() { return \MyVendorPrefix\mb_get_info(...func_get_args()); } }
if (!function_exists('mb_http_input')) { function mb_http_input() { return \MyVendorPrefix\mb_http_input(...func_get_args()); } }
if (!function_exists('mb_http_output')) { function mb_http_output() { return \MyVendorPrefix\mb_http_output(...func_get_args()); } }
if (!function_exists('mb_internal_encoding')) { function mb_internal_encoding() { return \MyVendorPrefix\mb_internal_encoding(...func_get_args()); } }
if (!function_exists('mb_language')) { function mb_language() { return \MyVendorPrefix\mb_language(...func_get_args()); } }
if (!function_exists('mb_lcfirst')) { function mb_lcfirst() { return \MyVendorPrefix\mb_lcfirst(...func_get_args()); } }
if (!function_exists('mb_list_encodings')) { function mb_list_encodings() { return \MyVendorPrefix\mb_list_encodings(...func_get_args()); } }
if (!function_exists('mb_ltrim')) { function mb_ltrim() { return \MyVendorPrefix\mb_ltrim(...func_get_args()); } }
if (!function_exists('mb_ord')) { function mb_ord() { return \MyVendorPrefix\mb_ord(...func_get_args()); } }
if (!function_exists('mb_output_handler')) { function mb_output_handler() { return \MyVendorPrefix\mb_output_handler(...func_get_args()); } }
if (!function_exists('mb_parse_str')) { function mb_parse_str() { return \MyVendorPrefix\mb_parse_str(...func_get_args()); } }
if (!function_exists('mb_rtrim')) { function mb_rtrim() { return \MyVendorPrefix\mb_rtrim(...func_get_args()); } }
if (!function_exists('mb_scrub')) { function mb_scrub() { return \MyVendorPrefix\mb_scrub(...func_get_args()); } }
if (!function_exists('mb_str_pad')) { function mb_str_pad() { return \MyVendorPrefix\mb_str_pad(...func_get_args()); } }
if (!function_exists('mb_str_split')) { function mb_str_split() { return \MyVendorPrefix\mb_str_split(...func_get_args()); } }
if (!function_exists('mb_stripos')) { function mb_stripos() { return \MyVendorPrefix\mb_stripos(...func_get_args()); } }
if (!function_exists('mb_stristr')) { function mb_stristr() { return \MyVendorPrefix\mb_stristr(...func_get_args()); } }
if (!function_exists('mb_strlen')) { function mb_strlen() { return \MyVendorPrefix\mb_strlen(...func_get_args()); } }
if (!function_exists('mb_strpos')) { function mb_strpos() { return \MyVendorPrefix\mb_strpos(...func_get_args()); } }
if (!function_exists('mb_strrchr')) { function mb_strrchr() { return \MyVendorPrefix\mb_strrchr(...func_get_args()); } }
if (!function_exists('mb_strrichr')) { function mb_strrichr() { return \MyVendorPrefix\mb_strrichr(...func_get_args()); } }
if (!function_exists('mb_strripos')) { function mb_strripos() { return \MyVendorPrefix\mb_strripos(...func_get_args()); } }
if (!function_exists('mb_strrpos')) { function mb_strrpos() { return \MyVendorPrefix\mb_strrpos(...func_get_args()); } }
if (!function_exists('mb_strstr')) { function mb_strstr() { return \MyVendorPrefix\mb_strstr(...func_get_args()); } }
if (!function_exists('mb_strtolower')) { function mb_strtolower() { return \MyVendorPrefix\mb_strtolower(...func_get_args()); } }
if (!function_exists('mb_strtoupper')) { function mb_strtoupper() { return \MyVendorPrefix\mb_strtoupper(...func_get_args()); } }
if (!function_exists('mb_strwidth')) { function mb_strwidth() { return \MyVendorPrefix\mb_strwidth(...func_get_args()); } }
if (!function_exists('mb_substitute_character')) { function mb_substitute_character() { return \MyVendorPrefix\mb_substitute_character(...func_get_args()); } }
if (!function_exists('mb_substr')) { function mb_substr() { return \MyVendorPrefix\mb_substr(...func_get_args()); } }
if (!function_exists('mb_substr_count')) { function mb_substr_count() { return \MyVendorPrefix\mb_substr_count(...func_get_args()); } }
if (!function_exists('mb_trim')) { function mb_trim() { return \MyVendorPrefix\mb_trim(...func_get_args()); } }
if (!function_exists('mb_ucfirst')) { function mb_ucfirst() { return \MyVendorPrefix\mb_ucfirst(...func_get_args()); } }
if (!function_exists('namespaceSplit')) { function namespaceSplit() { return \MyVendorPrefix\namespaceSplit(...func_get_args()); } }
if (!function_exists('normalizer_is_normalized')) { function normalizer_is_normalized() { return \MyVendorPrefix\normalizer_is_normalized(...func_get_args()); } }
if (!function_exists('normalizer_normalize')) { function normalizer_normalize() { return \MyVendorPrefix\normalizer_normalize(...func_get_args()); } }
if (!function_exists('object_get')) { function object_get() { return \MyVendorPrefix\object_get(...func_get_args()); } }
if (!function_exists('optional')) { function optional() { return \MyVendorPrefix\optional(...func_get_args()); } }
if (!function_exists('pj')) { function pj() { return \MyVendorPrefix\pj(...func_get_args()); } }
if (!function_exists('pluginSplit')) { function pluginSplit() { return \MyVendorPrefix\pluginSplit(...func_get_args()); } }
if (!function_exists('pr')) { function pr() { return \MyVendorPrefix\pr(...func_get_args()); } }
if (!function_exists('preg_last_error_msg')) { function preg_last_error_msg() { return \MyVendorPrefix\preg_last_error_msg(...func_get_args()); } }
if (!function_exists('preg_replace_array')) { function preg_replace_array() { return \MyVendorPrefix\preg_replace_array(...func_get_args()); } }
if (!function_exists('retry')) { function retry() { return \MyVendorPrefix\retry(...func_get_args()); } }
if (!function_exists('str')) { function str() { return \MyVendorPrefix\str(...func_get_args()); } }
if (!function_exists('str_contains')) { function str_contains() { return \MyVendorPrefix\str_contains(...func_get_args()); } }
if (!function_exists('str_ends_with')) { function str_ends_with() { return \MyVendorPrefix\str_ends_with(...func_get_args()); } }
if (!function_exists('str_starts_with')) { function str_starts_with() { return \MyVendorPrefix\str_starts_with(...func_get_args()); } }
if (!function_exists('tap')) { function tap() { return \MyVendorPrefix\tap(...func_get_args()); } }
if (!function_exists('throw_if')) { function throw_if() { return \MyVendorPrefix\throw_if(...func_get_args()); } }
if (!function_exists('throw_unless')) { function throw_unless() { return \MyVendorPrefix\throw_unless(...func_get_args()); } }
if (!function_exists('trait_uses_recursive')) { function trait_uses_recursive() { return \MyVendorPrefix\trait_uses_recursive(...func_get_args()); } }
if (!function_exists('transform')) { function transform() { return \MyVendorPrefix\transform(...func_get_args()); } }
if (!function_exists('triggerWarning')) { function triggerWarning() { return \MyVendorPrefix\triggerWarning(...func_get_args()); } }
if (!function_exists('trigger_deprecation')) { function trigger_deprecation() { return \MyVendorPrefix\trigger_deprecation(...func_get_args()); } }
if (!function_exists('value')) { function value() { return \MyVendorPrefix\value(...func_get_args()); } }
if (!function_exists('windows_os')) { function windows_os() { return \MyVendorPrefix\windows_os(...func_get_args()); } }
if (!function_exists('with')) { function with() { return \MyVendorPrefix\with(...func_get_args()); } }
if (!function_exists('wp_orm_get_phinx_config')) { function wp_orm_get_phinx_config() { return \MyVendorPrefix\wp_orm_get_phinx_config(...func_get_args()); } }

return $loader;
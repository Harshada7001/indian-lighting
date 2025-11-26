<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('validate_domain'))
{
    function validate_domain($domain)
    {
        if (defined('INTL_IDNA_VARIANT_UTS46')) {
            $idn = idn_to_ascii($domain, 0, INTL_IDNA_VARIANT_UTS46);
        } else {
            $idn = idn_to_ascii($domain, 0, INTL_IDNA_VARIANT_2003);
        }

        return ($idn !== FALSE);
    }
}

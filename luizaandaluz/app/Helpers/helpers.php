<?php
if (!function_exists('user')) {
    /**
     *
     *
     * @return \App\User
     */
    function user()
    {

        return Illuminate\Support\Facades\Auth::user();

    }

}

if (!function_exists('lang')) {

    /**
     * Get a translation
     * @param string $index
     * @return string
     */
    function lang($index)
    {
        return \Illuminate\Support\Facades\Lang::get($index);
    }

}

if (!function_exists('sprintf_lang')) {

    /**
     * Get a translation
     * @param string $index
     * @return string
     */
    function sprintf_lang($index, $args = null)
    {
        return sprintf(\Illuminate\Support\Facades\Lang::get($index), $args);
    }

}

if (!function_exists('default_value')) {
    /**
     *
     * @param string $index
     * @return mixed
     */
    function default_value($index, $value = null)
    {
        if(session()->has('errors') && null != old($index)){
            return old($index);
        }
        return $value;

    }

}

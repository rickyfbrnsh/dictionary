<?php

if (! function_exists('translateToSundaLanguage')) {
    function translateToSundaLanguage($word)
    {
        return \Ricky\Dictionary\Sunda::translate($word);
    }
}

if (! function_exists('translateToJawaLanguage')) {
    function translateToJawaLanguage($word)
    {
        return \Ricky\Dictionary\Jawa::translate($word);
    }
}

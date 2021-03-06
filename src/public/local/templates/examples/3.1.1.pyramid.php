<?php
    function getHeroesNonPyramid() {
        $data = DOC_ROOT . '/data/heroes.json';
        if (!file_exists($data)) {
            return false;
        }

        $content = file_get_contents($data);
        if (empty($content)) {
            return false;
        }

        $json = json_decode($content, true);
        if (empty($json)) {
            return false;
        }

        return $json;
    }

    $heroes = getHeroesNonPyramid();
    var_dump(array_Keys(current($heroes)));
<?php

class BracketMatch {

    /**
     * @param string $str
     * @param integer $position
     *
     * @return Integer
     */
    public function findMatchedClosingBracket($str, $position)
    {
        if ($str[$position] != "(") {
            throw new Exception("no '(' at index " . $position, 422);
        }

        $depth = 1;
        for ($i = $position + 1; $i < strlen($str); $i++) {
            switch ($str[$i]) {
                case "(":
                    $depth++;
                    break;
                case ")":
                    if (--$depth == 0) {
                        return $i;
                    }
                    break;
            }
        }

        return -1;
    }
}

var_dump((new BracketMatch)->findMatchedClosingBracket("a (b c (d e (f) g) h) i (j k)", 2)); // 20
var_dump((new BracketMatch)->findMatchedClosingBracket("a (b ())", 2)); // 7


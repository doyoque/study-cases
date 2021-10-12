<?php

namespace Doyoque\Bracket;

class BracketMatch {

    /**
     * @param string $str
     * @param integer $position
     *
     * @return integer
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

<?php

use Doyoque\Bracket\BracketMatch;
use PHPUnit\Framework\TestCase;

class BracketMatchTest extends TestCase
{
    /**
     * @var mixed $bracket
     */
    protected $bracket;

    protected function setUp(): void
    {
        parent::setUp();

        $this->bracket = new BracketMatch();
    }

    /** @test */
    public function the_return_index_is_two_zero()
    {
        $this->assertEquals($this->bracket->findMatchedClosingBracket("a (b c (d e (f) g) h) i (j k)", 2), 20);
    }

    /** @test */
    public function get_the_index_position_of_corresponding_close_parent()
    {
        $this->assertIsInt($this->bracket->findMatchedClosingBracket("a (b c (d e (f) g) h) i (j k)", 2));
    }
}
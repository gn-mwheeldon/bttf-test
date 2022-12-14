<?php

namespace martymcfly\BackToTheFutureQuotes\Tests;

use martymcfly\BackToTheFutureQuotes\QuoteFactory;
use PHPUnit\Framework\TestCase;

class QuoteFactoryTest extends TestCase
{
    public function testReturnsAPredefinedQuote()
    {
        $quotes = new QuoteFactory(['This is a quote']);

        $quote = $quotes->getRandomQuote();

        $this->assertSame('This is a quote', $quote);
    }

    public function testReturnsARandomQuote()
    {
        $quotes = new QuoteFactory();

        $quote = $quotes->getRandomQuote();

        $this->assertContains($quote, $quotes->quotes);
    }
}

<?php

namespace Dkudryavcev\Tests;
use \PHPUnit\Framework\TestCase;
use Dkudryavcev\Task05\Truncater;

class TruncaterTest extends TestCasep
{
    /** @test */
    public function Reduction()
    {
        $truncater = new Truncater();
        $this->assertSame('Длинн...', $truncater->truncate('Длинный текст', ['length' => 5 ]));
        $this->assertSame('...', $truncater->truncate(''));
        $this->assertSame('Кудрявцев Дмитрий Андреевич...', $truncater->truncate('Кудрявцев Дмитрий Андреевич'));
        $this->assertSame('Кудрявцев Дм...', $truncater->truncate('Кудрявцев Дмитрий Андреевич', ['length' => 10]));
        $this->assertSame('Кудрявцев Дмитрий Андреевич...', $truncater->truncate('Кудрявцев Дмитрий Андреевич', ['length' => 50]));
        $this->assertSame('Кудрявцев Дмитрий Андреевич...', $truncater->truncate('Кудрявцев Дмитрий Андреевич', ['length' => -10]));
        $this->assertSame('Кудрявцев Дм*', $truncater->truncate('Кудрявцев Дмитрий Андреевич', ['length' => 10, 'separator' => '*']));
        $this->assertSame('Кудрявцев Дмитрий Андреевич*', $truncater->truncate('Кудрявцев Дмитрий Андреевич', ['separator' => '*']));
    }
}

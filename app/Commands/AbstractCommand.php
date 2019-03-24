<?php

namespace App\Commands;

use App\Circle;
use App\Line;
use App\Point;
use LaravelZero\Framework\Commands\Command;
use Symfony\Component\Console\Exception\InvalidArgumentException;

abstract class AbstractCommand extends Command
{
    protected function inputError(string $msg = ''): void
    {
        $this->call('help', ['command_name' => $this->getName(), 'format' => 'raw']);
        if (empty($msg)) {
            $msg = "Input Error: {$this->getName()} {$this->getArguments()}";
        }
        throw new InvalidArgumentException($msg);
    }

    protected function parseCircle($arg): Circle
    {
        $arr = is_array($arg) ? $arg : json_decode($arg, true);
        if (!isset($arr[0][1], $arr[1]) || !is_numeric($arr[1])) {
            $this->inputError();
        }
        return new Circle($this->parsePoint($arr[0]), $arr[1]);
    }

    protected function parseLine($arg): Line
    {
        $arr = is_array($arg) ? $arg : json_decode($arg, true);
        if (!isset($arr[0][1], $arr[1][1])) {
            $this->inputError();
        }
        return new Line($this->parsePoint($arr[0]), $this->parsePoint($arr[1]));
    }

    protected function parsePoint($arg): Point
    {
        $arr = is_array($arg) ? $arg : json_decode($arg, true);
        if (count($arr) !== 2 || !is_numeric($arr[0]) || !is_numeric($arr[1])) {
            $this->inputError();
        }
        return new Point($arr[0], $arr[0]);
    }
}

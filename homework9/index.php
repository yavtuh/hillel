<?php

interface Format
{
    public function format(string $logger);
}

interface Delivery
{
    public function delivery(string $deliver);
}

class FormatRaw implements Format
{
    public function format(string $string)
    {
        return $string;
    }
}
class FormatWithDate implements Format
{

    public function format(string $string)
    {
        return date('Y-m-d H:i:s') . $string;
    }
}
class FormatWithDateAndDetails implements Format
{
    public function format(string $string)
    {
        return date('Y-m-d H:i:s') . $string . ' - With some details';
    }
}

class DeliverByEmail implements Delivery
{
    public function delivery(string $format)
    {
        echo "Вывод формата ({$format}) по имейл";
    }
}

class DeliverBySms implements Delivery
{
    public function delivery(string $format)
    {
        echo "Вывод формата ({$format}) в смс";
    }
}

class DeliverToConsole implements Delivery
{
    public function delivery(string $format)
    {
        echo "Вывод формата ({$format}) в консоль";
    }
}


class Logger
{
    private Format $format;
    private Delivery $delivery;

    public function __construct(Format $format, Delivery $delivery)
    {
        $this->format   = $format;
        $this->delivery = $delivery;
    }

    public function log($string)
    {
        $this->delivery($this->format($string));
    }

    public function format($string)
    {
        return $this->format->format($string);
    }

    public function delivery( $format)
    {
        $this->delivery->delivery($format);
    }

}

$logger = new Logger(new FormatRaw(), new DeliverBySms());
$logger->log('Emergency error! Please fix me!');

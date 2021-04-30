<?php

// With strategies, the client can choose needed algorithm without knowing actual implementation 


// The below example transfers the data from one data source to another
// For example, transfer from database to csv file, or from spreadsheet to json file

// Note: This can be implemented with a simple anonymous (lambda) function in most modern programming languages.

interface ReaderInterface {
    public function start(): void;
    public function read(): array;
    public function stop(): void;
}

interface WriterInterface {
    public function start(): void;
    public function write(array $data): void;
    public function stop(): void;
}

class DatabaseReader implements ReaderInterface {}

class SpreadsheetReader implements ReaderInterface {}

class CsvWriter implements WriterInterface {}

class JsonWriter implements WriterInterface {}

class Transformer {
    // Code

    public function transform(string $from, string $to): void
    {
        $reader = $this->findReader($from);
        $writer = $this->findWriter($to);

        $reader->start();
        $writer->start();
        try {
            foreach ($reader->read() as $row) {
                $writer->write($row);
            }
        } finally {
            $writer->stop();
            $reader->stop();
        }
    }

    // Code
}

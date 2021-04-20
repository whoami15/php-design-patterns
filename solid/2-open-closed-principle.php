<?php

// defined by Bertrand Meyer

// A module should be open for extension and closed for its modification.

/* Bad example */

class DocProcessorBadClass
{

    public function process(array $docs)
    {
        foreach ($docs as $doc) {
            if ($doc instanceof Invoice) $doc->sendToClient();
            elseif ($doc instanceof Receipt) $doc->archive();
            elseif ($doc instanceof Memo) $doc->markAdRead();
            // If we needs to add more documents we add it here
            // If the action method changes we update this function
        }
    }
}

/* Good example */

interface Document
{
    public function process();
    // Every class that implements this interface should have the process() method
    // The method can make different  in each class
}

class Invoice implements Document
{
    public function process()
    {
        echo "processing a invoice";
    }
}

class Memo implements Document
{
    public function process()
    {
        echo "processing a memo";
    }
}

class Receipt implements Document
{
    public function process()
    {
        echo "processing a receipt";
    }
}

class DocProcessor
{

    public $documents;

    public function __construct(Document $documents)
    {
        $this->documents = $documents;
        return $this;
    }

    public function processDocument()
    {
        foreach ($this->documents as $document)
            $document->process();
    }
}

<?php

class Thesaurus
{
    /**
     * @var array
     */
    private array $thesaurus;

    /**
     * Thesaurus constructor.
     *
     * @param array $thesaurus
     */
    function __construct(array $thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    /**
     * @param string $word
     * @return string
     */
    public function getSynonyms(string $word): string
    {
        $response = [
            'word'     => $word,
            'synonyms' => $this->thesaurus[$word] ?? [],
        ];

        return json_encode($response);
    }
}

$thesaurus = new Thesaurus([
    "buy" => ["purchase"],
    "big" => ["great", "large"],
]);

echo $thesaurus->getSynonyms("big");

echo "\n";

echo $thesaurus->getSynonyms("agelast");
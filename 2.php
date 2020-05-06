<?php

class FileOwners
{
    /**
     * @param array $files
     * @return array
     */
    public static function groupByOwners(array $files): array
    {
        $arr = [];

        foreach ($files as $key => $item) {
            $arr[$item][] = $key;
        }

        return $arr;
    }
}

$files = [
    "Input.txt"  => "Randy",
    "Code.py"    => "Stan",
    "Output.txt" => "Randy",
];

print_r(FileOwners::groupByOwners($files));

## Palindrom
A palindrome is a word that reads the same backward or forward.
Write a function that checks if a given word is a palindrome. Character case should
be ignored.
For example, isPalindrome("Deleveled") should return true as character case should
be ignored, resulting in "deleveled", which is a palindrome since it reads the same
backward and forward.

## GroupByOwner
Implement a groupByOwners function that:
Accepts an associative array containing the file owner name for each file
name.
Returns an associative array containing an array of file names for each owner
name, in any order.
•
•
For example, for associative array
```
["Input.txt" => "Randy", "Code.py" => "Stan", "Output.txt" => "Randy"]
```
the groupByOwners function should return
```
["Randy" => ["Input.txt", "Output.txt"], "Stan" => ["Code.py"]].
```

## Thesaurus
A thesaurus contains words and synonyms for each word. Below is an example of a
data structure that defines a thesaurus:
```
array("buy" => array("purchase"), "big" => array("great", "large"))
```
Implement the function getSynonyms, which accepts a word as a string and returns
all synonyms for that word in JSON format, as in the example below.
For example, the call ``$thesaurus->getSynonyms("big")`` should return:

```
{"word":"big","synonyms":["great", "large"]}'
```

while a call with a word that doesn't have synonyms, like
```$thesaurus->getSynonyms("agelast")``` should return:

```
'{"word":"agelast","synonyms":[]}'
```


## OddNumbers
In an array having positive integers, except for one number which occurs odd number
of times, all other numbers occur even number of times. Find the number.
Try to solve the problem with the lowest effort.


## Invert Binary Tree
The task is to invert a binary tree, so the leaf’s order is inverted.
Example
```
       1
     /   \
    2     3
   / \   / \
  4   5 6   7
```


Inverts to
```
       1
     /   \
    3     2
   / \   / \
  7   6 5   4
```
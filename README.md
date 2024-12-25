# Unexpected behavior when using strict equality operator in PHP

This repository contains a PHP function that demonstrates an uncommon code error involving the strict equality operator (`===`). The function `foo()` compares two values using strict equality and returns `true` only if they are of the same type and have the same value. This behavior is different from the loose equality operator (`==`), which only checks for value equality without considering type. 

The example shows how this strict comparison can lead to unexpected results when comparing numbers to strings or other data types.

## Bug Description

The `foo()` function incorrectly uses the strict equality operator (`===`) instead of the loose equality operator (`==`). This leads to unexpected behavior when comparing values of different types. For example, comparing `0` and `'0'` using strict equality will return `false` because they have different types, even though their values are equivalent.

## Bug Solution

The solution involves replacing the strict equality operator (`===`) with the loose equality operator (`==`) to ensure that values are compared based on their value only, regardless of type.


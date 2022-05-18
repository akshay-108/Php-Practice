<?php
/**An anagram of a string is another string that contains the same characters, only the order of characters can be different. For example, “abcd” and “dabc” are an anagram of each other. */

function is_anagram($str1,$str2)
{
    if(count_chars($str1,1) == count_chars($str2,1))
    {
        return "Yes";
    }else{
        return "No";
    }
}

// code 
print_r(is_anagram("akshay","yashak")."\n");
print_r(is_anagram("card","cart")."\n");


?>
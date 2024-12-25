function foo(a, b) {
  if (a === b) {
    return true;
  }
  return false;
}

//This function will return false even if both values are 0 because it is using the strict equality operator ===. 
//The strict equality operator will only return true if the values are of the same type and have the same value. 
//To fix this, you can use the loose equality operator ==, which will compare the values without checking the type. 
function foo(a, b) {
  if (a == b) {
    return true;
  }
  return false;
}

//This function will return true if both values are 0, regardless of their type.
//This is because the loose equality operator == does not check for type and only checks for value equality.
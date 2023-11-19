# Sydney Keller (smkeller@wesleyan.edu)
# Minji Woo (mjwoo@wesleyan.edu)

# Problem 1

# For each function in unit_testing_sample_code.py write a test function 
# that takes as input a test name, an expected output value of the 
# function to test, and an actual output value of the function to test. 
# Your test functions, i.e. unit tests, should evaluate and print to the 
# screen whether or not the values expected and returned from the tested 
# functions are the same.

from unit_testing_sample_code import string_capitalizer, capitalize_list, integer_manipulator, manipulate_list

def test_string(n, output, func):
    if output == func :
        print ("Test " + str(n) + " passed! `" + str(output) + "` matches `" + str(func) + "`.")
    else:
        print ("Test " + str(n) + " failed. Expected: `" + str(output) + "`. Got: `" + str(func) + "`.")


def test_strlist(n, list_output, func):
    i = 0
    print ("Test " + str(n) + ":")
    while i < len(func) :
        if list_output[i] != func[i] :
            print ("Part " + str(i) + " in test " + str(n) + " failed. Expected: `" + str(list_output[i]) + "`. Got: `" + str(func[i]) + "`.")
        else :
            print ("Part " + str(i) + " in test " + str(n) + " passed! `" + str(list_output[i]) + "` matches  `" + str(func[i]) + "`.")
        i = i + 1


def test_int(n, output, func):
    if output == func :
        print ("Test " + str(n) + " passed! `" + str(output) + "` matches `" + str(func) + "`.")
    else:
        print ("Test " + str(n) + " failed. Expected: `" + str(output) + "`. Got: `" + str(func) + "`.")


def test_intlist(n, list_output, func):
    i = 0
    print ("Test " + str(n) + ":")
    while i < len(func) :
        if list_output[i] != func[i] :
            print ("Part " + str(i) + " in test " + str(n) + " failed. Expected: `" + str(list_output[i]) + "`. Got: `" + str(func[i]) + "`.")
        else :
            print ("Part " + str(i) + " in test " + str(n) + " passed! `" + str(list_output[i]) + "` matches  `" + str(func[i]) + "`.")
        i = i + 1



print("\nString Capitalizer Tests:")
# test_string is the function for testing the string capitalizer and takes # three arguments: test number (“0”), expected output value (“TwO”), and
# the call to the string_capitalizer function with the argument “two”. 
test_string("0", "TwO", string_capitalizer("two"))
test_string("1", "C", string_capitalizer("c"))
test_string("2", "FouR", string_capitalizer(4))
test_string("3", "", string_capitalizer(""))
print("\nList Capitalizer Tests:")
test_strlist("0", ["TwO","C","FouR",""], capitalize_list(["two","c",4,""]))
print("\nInteger Manipulator Tests:") 
test_int("0", 66, integer_manipulator(10)) 
test_int("1", 2, integer_manipulator(2)) 
test_int("2", 6, integer_manipulator(3)) 
test_int("3", 0, integer_manipulator(0)) 
test_int("4", 1, integer_manipulator("three"))
print("\nManipulate List Tests:")
test_intlist("0", [66,2,6,0,1], manipulate_list([10,2,3,0,"three"]))


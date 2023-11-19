# Sydney Keller (smkeller@wesleyan.edu)
# Minji Woo (mjwoo@wesleyan.edu)

# Part of Problem 2

# Repeat the implementation of the same unit tests as for problem 1 
# but this time with Python’s pytest framework

import pytest
from unit_testing_sample_code import manipulate_list

@pytest.mark.parametrize("input_list, expected_output",[(10,66),(2,2),(3,6),(0,0),("three",1)])

def test_intlist(input_list, expected_output):
    result = manipulate_list([input_list])
    assert result == [expected_output]
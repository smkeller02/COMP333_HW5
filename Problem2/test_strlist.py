# Sydney Keller (smkeller@wesleyan.edu)
# Minji Woo (mjwoo@wesleyan.edu)

# Part of Problem 2

# Repeat the implementation of the same unit tests as for problem 1 
# but this time with Python’s pytest framework

import pytest
from unit_testing_sample_code import capitalize_list

@pytest.mark.parametrize("input_list, expected_output",[("two","TwO"),("c", "C"),(4, "FouR"),("", "")])

def test_strlist(input_list, expected_output):
    result = capitalize_list([input_list])
    assert result == [expected_output]
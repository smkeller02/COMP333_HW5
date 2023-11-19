# Sydney Keller (smkeller@wesleyan.edu)
# Minji Woo (mjwoo@wesleyan.edu)

# Part of Problem 2

# Repeat the implementation of the same unit tests as for problem 1 
# but this time with Python’s pytest framework

import pytest
from unit_testing_sample_code import string_capitalizer

@pytest.mark.parametrize("str_input, output", [
    ("two", "TwO"),
    ("c", "C"),
    (4, "FouR"),
    ("", "")
])

def test_string(str_input, output):
    result = string_capitalizer(str_input)
    assert result == output
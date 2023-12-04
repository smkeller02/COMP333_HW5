# COMP333_HW5
Unit Testing and Continuous Integration</br>
(Python pytest, Jest, PHPUnit, GitHub Actions, Generative AI)

Sydney Keller (<smkeller@wesleyan.edu>)
Minji Woo (<mwoo@wesleyan.edu>)

# Purpose:
Learning:</br>
1. general principles of unit testing</br>
2. how to set up a comprehensive unit testing system for the front- and backend of a web app</br>
3. run continuous integration to monitor the integrity of a codebase as it evolves over time</br>
4. explore how generative AI tools can be used for testing

# Setting up and running unit tests
1. git clone to desktop (or wherever you prefer)

## Problem 1
1. cd into Problem1 folder from root
2. run 'python3 unit_testing.py'

## Problem 2
1. cd into Problem2 folder from root
2. run 'pytest'

## Problem 3
1. copy and paste the Problem3 folder into XAMPP's htdocs folder
2. now cd into the Problem3 folder</br>
NOTE: please see Problem3's README for specific backend set up, database set up, file overview, etc.
3. from there, cd into the test-project folder
4. run 'php vendor/bin/phpunit tests'

## Problem 4
We will use the same frontend code from HW3 to run the unit testing with Jest: https://github.com/smkeller02/COMP333_HW3.
Please read the 'How to test frontend using Jest' section of the README.md file of HW3 to run the test. The files with the tests are createuser.test.js and loginuser.test.js.

## Problem 5
Using GitHub Actions, we set up the Continuous Integration for frontend unit tests. You will be able to find the CI running successfully on our frontend unit test codes in the following repository: https://github.com/smkeller02/COMP333_HW5_Problem5.


## Problem 6
We have not used generative AI tool to write the testing code itself. There would be a limitation in writing an accurate testing code tailored to one's specific structure and functionalities of the whole webapp code as everyone's is unique. However, I do believe that generative AI may be a potential tool that can help you get a head start by helping to understand how the Jest works and providing example unit testing codes of Jest. 

Using the advantage of generative AI tool that accumulates myriad of information currently accessible on the Internet in a faster speed than an individual could do, we can potentially ask for the backbone of general unit testing code using Jest along with its breakdown information. 

You may not be able to reproduce our unit testing code by solely relying on generative AI. But here is the general step to integrate generative AI and additional information I will provide.

The code below is how you can use OpenAI (one example of generative AI) to get the backbone of Jest unit testing code (the procedure is what I learned from the DeltaLab class, but further information can be found in OpenAI documentation.)

```
# Install OpenAI package
pip install openai
```

```
# Set up OpenAi key to get the access
import openai
openai.api_key = 'your-api-key'
```

```
# Create a function to generate answers to your future question/prompt
def generate_test_case(prompt):
    response = openai.Completion.create(
        engine="text-davinci-002",
        prompt=prompt,
        max_tokens=200,
        n=1,
        stop=None,
        temperature=0.7
    )
    return response.choices[0].text.strip()
```

```
# Example Usage
prompt = "Provide backbone of Jest testing code with the breakdown."
test_case = generate_test_case(prompt)
print(test_case)
```

When I tested this, it gives a correct structure. However, building from this backbone need more understanding of the existing code we are testing. To reproduce our testing code, you may need to look into our code and figure out the test data or input values. For instance, in the password mismatch test for createuser.test.js, I specifically mentioned mismatched passwords. This may not be applicable to other codes, and thus need further understanding of the structure and design of the code to write a complete test case code. 

# Folders and Files:
- Problem1:
    - unit_testing_sample_code.py: sample code that came with the HW
    - unit_testing.py: my unit testing code for problem 1
- Problem2:
    - unit_testing_sample_code.py: sample code that came with the HW
    - test_string.py: pytest code for testing string_capitalizer() from unit_testing_sample_code.py
    - test_strlist.py: pytest code for testing capitalize_list() from unit_testing_sample_code.py
    - test_int.py: pytest code for testing integer_manipulator() from unit_testing_sample_code.py
    - test_intlist.py: pytest code for testing manipulate_list() from unit_testing_sample_code.py
- Problem3:
    - index.php: the entry-point of our application, front-controller of application. index.php connects to UserController.php for all interactions with database</br>
    - inc:
        - config.php: holds the configuration information of application, holds the database credentials. 
        - bootstrap.php: used to bootstrap  application by including the necessary files
    - Model:
        - Database.php: the database access layer which will be used to interact with the underlying MySQL database.
        - UserModel.php: the User model file which implements the necessary methods to interact with the users table in the MySQL database.
    - Controller/Api:
        - BaseController.php: a base controller file which holds common utility methods.
        - UserController.php: the User controller file which holds the necessary application code to entertain REST API calls. Creates a user, logs a user in, gets data from ratings table for user, deletes, adds, and updates ratings for user.
    - test-project:
        - tests:
            - UserListTest.php: request the current user list with a GET request and check that the server responds with a 200 response code.
            - CreateUserTest.php: request the creation of a user with a POST request and check that the server responds with a 201 response code.
            - FailedLoginTest.php: test the failed login of a user with a POST request and check that the server responds with a 201 response code.
            - LoginUserTest.php: test the successful login of a user with a POST request and check that the server responds with a 201 response code.
            - DeleteSongTest.php: request the deletion of a song with a POST request and check that the server responds with a 200 response code.
            - NewSongTest.php: request the creation of a new song with a POST request and check that the server responds with a 201 response code.
            - UpdateSongTest.php: request the update of a song with a POST request and check that the server responds with a 200 response code.
        - composer.json: comes with PHPUnit/composer
        - composer.lock: comes with PHPUnit/composer 
        - src: empty folder, comes with PHPUnit/composer
        - vendor: folder + files that come with PHPUnit/composer, helps run tests

# Sources Cited:
- https://stackoverflow.com/questions/21267064/mysql-database-wont-start-in-xampp-manager-osx - XAMPP MySQL Database keeps getting stuck and wont run
- https://pguso.medium.com/a-beginners-guide-to-phpunit-writing-and-running-unit-tests-in-php-d0b23b96749f - overview of how to write PHPUnit tests
- https://dev.to/icolomina/testing-an-external-api-using-phpunit-m8j - testing API with PHPUnit
- https://developer.mozilla.org/en-US/docs/Web/HTTP/Status#client_error_responses - HTTP response codes
- https://docs.guzzlephp.org/en/stable/quickstart.html#:~:text=A%20GuzzleHttp%5CException%5CConnectException%20exception,option%20is%20set%20to%20true. - guzzle documentation for exceptions
- https://docs.guzzlephp.org/en/stable/request-options.html#http-errors - guzzle documentation for http_errors
- https://symfony.com/doc/current/testing.html#making-requests - PHPUnit testing overview

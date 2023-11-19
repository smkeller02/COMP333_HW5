<?php
// Sydney Keller (smkeller@wesleyan.edu)
// Minji Woo (mjwoo@wesleyan.edu)
// test requests the creation of a user with a POST request and 
// checks that the server responds with a 201 response code.
class CreateUserTest extends PHPUnit\Framework\TestCase
{
    protected $client;

    protected function setUp() : void{
        parent::setUp();
        $this->client = new GuzzleHttp\Client(["base_uri" => "http://localhost/Problem3/index.php/"]);   }

    public function testPost_CreateUser() {
        $userData = [
            'username' => 'user_test',
            'password' => 'password123',
        ];

        $response = $this->client->request('POST', 'createuser', ['json' => $userData]);
        $this->assertEquals(201, $response->getStatusCode());
    }

    public function tearDown() : void{
        parent::tearDown();
        $this->client = null;
    }
}
?>
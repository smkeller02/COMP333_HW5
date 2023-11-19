<?php
// Sydney Keller (smkeller@wesleyan.edu)
// Minji Woo (mjwoo@wesleyan.edu)
// test the successful login of a user with a POST request and 
// check that the server responds with a 201 response code.
class LoginUserTest extends PHPUnit\Framework\TestCase
{
    protected $client;

    protected function setUp() : void{
        parent::setUp();
        $this->client = new GuzzleHttp\Client(["base_uri" => "http://localhost/Problem3/index.php/"]);   }

    public function testPost_LoginUser() {
        $userData = [
            'username' => 'syd1',
            'password' => 'testtest123',
        ];

        $response = $this->client->request('POST', 'loginuser', ['json' => $userData]);
        $this->assertEquals(201, $response->getStatusCode());
    }

    public function tearDown() : void{
        parent::tearDown();
        $this->client = null;
    }
}
?>
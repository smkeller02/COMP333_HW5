<?php
// Sydney Keller (smkeller@wesleyan.edu)
// Minji Woo (mjwoo@wesleyan.edu)
// test the failed login of a user with a POST request and
// check that the server responds with a 400 response code.

class FailedLoginTest extends PHPUnit\Framework\TestCase
{
    protected $client;

    protected function setUp() : void{
        parent::setUp();
        $this->client = new GuzzleHttp\Client(["base_uri" => "http://localhost/Problem3/index.php/"]);   }

        public function testPost_FailedLogin() {
            $userData = [
                'username' => 'nonexistant',
                'password' => 'helpidontexist',
            ];
        
            // GuzzleHttp\Exception\ClientException is thrown for 400 level errors if the http_errors request option is set to true, so change to false
            $response = $this->client->request('POST', 'loginuser', ['json' => $userData, 'http_errors' => false]);
            $this->assertEquals(400, $response->getStatusCode());
        }

    public function tearDown() : void{
        parent::tearDown();
        $this->client = null;
    }
}
?>
<?php
// Sydney Keller (smkeller@wesleyan.edu)
// Minji Woo (mjwoo@wesleyan.edu)
// test requests the current user list with a GET request and 
// checks that the server responds with a 200 response code.
class UserListTest extends PHPUnit\Framework\TestCase
{
    protected $client;

    protected function setUp() : void{
        parent::setUp();
        $this->client = new GuzzleHttp\Client(["base_uri" => "http://localhost/Problem3/index.php/"]);   }

    public function testGet_UserList() {
        $response = $this->client->request('GET', 'ratings');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function tearDown() : void{
        parent::tearDown();
        $this->client = null;
    }
}
?>
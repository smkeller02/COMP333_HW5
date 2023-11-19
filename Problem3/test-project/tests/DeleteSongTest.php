<?php
// Sydney Keller (smkeller@wesleyan.edu)
// Minji Woo (mjwoo@wesleyan.edu)
// request the deletion of a song with a POST request and 
// check that the server responds with a 200 response code.
class DeleteSongTest extends PHPUnit\Framework\TestCase
{
    protected $client;

    protected function setUp() : void{
        parent::setUp();
        $this->client = new GuzzleHttp\Client(["base_uri" => "http://localhost/Problem3/index.php/"]);   }

    public function testPost__DeleteSong() {
        $userData = [
            "username" => "syd1",
            "id" => "121",
        ];

        $response = $this->client->request('DELETE', 'deleterating', ['json' => $userData]);
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function tearDown() : void{
        parent::tearDown();
        $this->client = null;
    }
}
?>
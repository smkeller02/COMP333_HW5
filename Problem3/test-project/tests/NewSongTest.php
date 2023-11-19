<?php
// Sydney Keller (smkeller@wesleyan.edu)
// Minji Woo (mjwoo@wesleyan.edu)
// request the creation of a new song with a POST request and 
// check that the server responds with a 201 response code.
class NewSongTest extends PHPUnit\Framework\TestCase
{
    protected $client;

    protected function setUp() : void{
        parent::setUp();
        $this->client = new GuzzleHttp\Client(["base_uri" => "http://localhost/Problem3/index.php/"]);   }

    public function testPost__NewSong() {
        $userData = [
            "username" => "syd1",
            "artist" => "apple",
            "song" => "green",
            "rating" => "4"
        ];

        $response = $this->client->request('POST', 'addnewrating', ['json' => $userData]);
        $this->assertEquals(201, $response->getStatusCode());
    }

    public function tearDown() : void{
        parent::tearDown();
        $this->client = null;
    }
}
?>
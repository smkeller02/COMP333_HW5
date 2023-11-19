<?php
// Sydney Keller (smkeller@wesleyan.edu)
// Minji Woo (mjwoo@wesleyan.edu)
// request the update of a song with a POST request and 
// check that the server responds with a 200 response code.
class UpdateSongTest extends PHPUnit\Framework\TestCase
{
    protected $client;

    protected function setUp() : void{
        parent::setUp();
        $this->client = new GuzzleHttp\Client(["base_uri" => "http://localhost/Problem3/index.php/"]);   }

    public function testPost__UpdateSong() {
        $userData = [
            "id" => "44",
            "username" => "Otto",
            "artist" => "Bill Evans",
            "song" => "Days of Wine and Roses",
            "rating" => "2"
        ];

        $response = $this->client->request('POST', 'updaterating', ['json' => $userData]);
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function tearDown() : void{
        parent::tearDown();
        $this->client = null;
    }
}
?>
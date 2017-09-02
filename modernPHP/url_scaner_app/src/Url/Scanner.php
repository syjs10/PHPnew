<?php
namespace Oreilly\ModernPHP\Url;

/**
*
*/
class Scanner
{
    /**
     * @var  array url Array
     * @var [type]
     */
    protected $urls;

    /**
     * var\GuzzleHttp\Client
     * @var [type]
     */
    protected $httpClient;

    /**
     *
     * @param array $url Array need to scan
     */
    public function __construct(array $urls)
    {
        $this->urls = $urls;
        $this->httpClient = new \GuzzleHttp\Client();
    }
    /**
     * get Invalid URL
     * @return array
     */
    public function getInvalidUrls()
    {
        $invalidUrls = [];
        foreach ($this->urls as $url) {
            try {
                $statusCode = $this->getStatusCodeForUrl($url);
            } catch (\Exception $e) {
                $statusCode = 500;
            }
            if ($statusCode >= 400) {
                array_push($invalidUrls, [
                    'url' => $url,
                    'status' => $statusCode
                ]);
            }
        }
        return $invalidUrls;
    }
    /**
     * get HTTP Status Code of URL
     * @param  String $url  URL
     * @return int          HTTP Status Code
     */
    protected function getStatusCodeForUrl($url)
    {
        $httpResponse = $this->httpClient->options($url);
        return $httpResponse->getStatusCode();
    }
}

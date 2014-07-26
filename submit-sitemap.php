<?php
//$sitemap_url - url of your site map like http://code-snippets.co.cc/sitemap.php
//$title - your site title (optional)
//$siteurl - your site url (optional)
function submit_sitemap($sitemap_url, $title ="", $siteurl = ""){
    // for curl handlers
    $curl_handlers = array();
    $response = array();
    $sitemap_url = trim($sitemap_url);
    if(strpos($sitemap_url, "http") !== 0)
    {
        $sitemap_url = "http://".$sitemap_url;
    }
    $site = explode("//", $sitemap_url);
    $start = $site[0];
    $site = explode("/", $site[1]);
    $middle = $site[0];
    if(trim($title) == "")
    {
        $title = $middle;
    }
    if(trim($siteurl) == "")
    {
        $siteurl = $start."//".$middle;
    }
    //urls to ping
    $urls[0] = "http://www.google.com/webmasters/tools/ping?sitemap=".urlencode($sitemap_url);
    $urls[1] = "http://www.bing.com/webmaster/ping.aspx?siteMap=".urlencode($sitemap_url);
    $urls[2] = "http://search.yahooapis.com/SiteExplorerService/V1/updateNotification?appid=YahooDemo&url=".urlencode($sitemap_url);
    $urls[3] = "http://rpc.weblogs.com/pingSiteForm?name=".urlencode($title)."&url=".urlencode($siteurl)."&changesURL=".urlencode($sitemap_url);

    //setting curl handlers
    foreach ($urls as $url) 
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $curl_handlers[] = $curl;
    }
    //initiating multi handler
    $multi_curl_handler = curl_multi_init();

    // adding all the single handler to a multi handler
    foreach($curl_handlers as $key => $curl)
    {
        curl_multi_add_handle($multi_curl_handler,$curl);
    }
    
    // executing the multi handler
    do 
    {
        $multi_curl = curl_multi_exec($multi_curl_handler, $active);
    } 
    while ($multi_curl == CURLM_CALL_MULTI_PERFORM  || $active);
    
    // check if there any error
    $submitted = true;
    foreach($curl_handlers as $key => $curl)
    {
        //you may use curl_multi_getcontent($curl); for getting content
        //and curl_error($curl); for getting errors
        if(curl_errno($curl) == CURLE_OK)
        {
            $response[] =  curl_multi_getcontent($curl);
        }
        else
        {
            $response[] = curl_error($curl);
        }
    }
    curl_multi_close($multi_curl_handler);
    return $response;
}

//getting response array
$arr = submit_sitemap("http://blog.toowrappedup.com/sitemap.xml");

//outputting response
foreach($arr as $val)
{
    echo "\n RESPONSE :: ----";
    echo strip_tags($val)."\n\n";
    echo "\n -------------------";
}
?>

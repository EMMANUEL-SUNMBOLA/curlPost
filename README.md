# CURL - POST
- To test my `Api` for `POST` requests
- `POST` requests now work for `arrays`,  `JSON` next
- `curlpull.php` tests the `GET` request
- `POSTMAN` is overrated test your own APIs
- To add the `API-KEY` to your `CURL-POST` request, you need to add the `CURLOPT_HTTPHEADER` attribute to your `curl_setopt_array`
- In the `CURLOPT_HTTPHEADER`, you can add custom values that will be found in the `header` of the `POST` request sent like your `API-KEY`
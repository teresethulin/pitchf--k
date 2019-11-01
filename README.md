<h1 align="center">
    <br>
    <img src="/resources/images/pitchf--k.png" align="center">
    <br>
    <br>
        A newsfeed site with fake music news.
    <br>
</h1>




## Description
**Pitchfk** - a newsfeed site with fake music news.

Created with PHP, HTML, CSS.

School assignment at [Yrgo](https://yrgo.se/) Web Development program.


## Prerequisites
PHP 7.3.11 installed

## Installation
1. Clone [this directory](https://github.com/teresethulin/plain-news.git) with Github Desktop or bash

    `git clone https://github.com/teresethulin/plain-news.git`
    
2. Start a local server in the resources folder in the command line

    `php -S localhost:8888`

3. Open index.php in your browser.
    
    
## Testers
- Maja Alin
- Victor Ljungblad
- Ossian Boren
- Bernhard Stedt

## License
This project is licensed under the [MIT License](../plain-news/LICENSE)

## Code review
Comments from Bernhard Stedt

* [index.php:L8-L51](https://github.com/teresethulin/plain-news/blob/0b058e9456b95a55a7b280ae537adde1487289ae/resources/index.php#L8-L51)  - Moving header into header.php would make it easier to add pages to the site
* [index.php:L68-L77](https://github.com/teresethulin/plain-news/blob/0b058e9456b95a55a7b280ae537adde1487289ae/resources/index.php#L68-L77) - Moving footer into footer.php would make it easier to add pages to the site
* [functions.php:L11-L12](https://github.com/teresethulin/plain-news/blob/0b058e9456b95a55a7b280ae537adde1487289ae/resources/functions.php#L11-L12) - It's recommended to have an empty line between @param and @return
* [functions.php:L22-L23](https://github.com/teresethulin/plain-news/blob/0b058e9456b95a55a7b280ae537adde1487289ae/resources/functions.php#L22-L23) - It's recommended to have an empty line between @param and @return
* [data.php:L15-L24](https://github.com/teresethulin/plain-news/blob/0b058e9456b95a55a7b280ae537adde1487289ae/resources/data.php#L15-L24) - For readability I would suggest putting each key value pair on a seperate line


import scrapy


class OlxSpider(scrapy.Spider):
    name = 'olx'
    start_urls = ['https://sp.olx.com.br/?q=klonoa']
    user_agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36'

    def parse(self, response):
        yield{
            'anuncios': response.css('a.fnmrjs-0.fyjObc::attr(href)').getall()
        }

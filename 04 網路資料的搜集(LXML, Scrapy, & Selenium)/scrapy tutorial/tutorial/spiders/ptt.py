import scrapy


class PTTSpider(scrapy.Spider):
    name = "ptt"

    def start_requests(self):
        urls = [
            'http://www.ptt.cc/bbs/Boy-Girl/'
        ]
        for url in urls:
            yield scrapy.Request(url=url, callback=self.parse)

    def parse(self, response):
        #print(response.body)
        print(response.xpath('//a/@href').extract())

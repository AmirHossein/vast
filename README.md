# vast
VAST 4.2 PHP Model

[![Latest Stable Version](https://poser.pugx.org/ahhp/vast/v)](//packagist.org/packages/ahhp/vast) [![Total Downloads](https://poser.pugx.org/ahhp/vast/downloads)](//packagist.org/packages/ahhp/vast) [![Latest Unstable Version](https://poser.pugx.org/ahhp/vast/v/unstable)](//packagist.org/packages/ahhp/vast) [![License](https://poser.pugx.org/ahhp/vast/license)](//packagist.org/packages/ahhp/vast)

Usage:
```php
$vast = new ahhp\Vast\Vast();
$vast->addAd(
    (new \ahhp\Vast\Nodes\Ad)
        ->setInLine(
            (new \ahhp\Vast\Nodes\InLine)
                ->setAdServingId("ad-servering-id")
                ->addCategory("authority1", "uri1")
                ->addCategory("authority2", "uri2")
        )
);
echo $vast->getXML();
```
Output:
```xml
<?xml version="1.0" encoding="UTF-8"?>
<VAST>
        <Ad>
                <InLine>
                        <AdServingId><![CDATA[ad-servering-id]]></AdServingId>
                        <Category authority="authority1"><![CDATA[uri1]]></Category>
                        <Category authority="authority2"><![CDATA[uri2]]></Category>
                </InLine>
        </Ad>
</VAST>
```

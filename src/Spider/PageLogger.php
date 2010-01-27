<?php
class Spider_PageLogger extends Spider_DbLogger
{
    public function log($uri, $depth, DOMXPath $xpath)
    {
        $this->savePage($uri);
    }

    protected function savePage($uri)
    {
        $statement = $this->db->prepare(
            'insert into SpiderPage (uri) ' .
            'values (:uri)'
        );

        $statement->execute(array($uri));
    }
}

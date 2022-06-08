<?php

namespace App\Http\Controllers;

class SolariumController extends Controller
{
    protected $client;

    public function __construct(\Solarium\Client $client)
    {
        $this->client = $client;
    }

    public function checkSimilarity(string projectFields)
    {
        $query = $client->createSelect();
        $query->addFilterQuery(array('key'=>'projectName', 'key'=>'projectPurpose', 'key'=>'projectValues', 'key'=>'projectScope'));
        $dismax = $query->getDisMax();
        $dismax->setBoostQuery('projectDescription:' + projectFields);
        $dismax->setMinimumShouldMatch('2<-30% 9<-3');

        $query->setQuery('memory -printer');
        $resultset = $client->select($query);
        echo 'NumFound: ' . $resultset->getNumFound();

    }
}

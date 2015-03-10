<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 10/03/15
 * Time: 23:33
 */

namespace Opti\LolApiBundle\Api;

class ServiceFactory {

    private $region;
    private $endpoints;

    public function __construct($region, $endpoints){
        $this->region = $region;
        $this->endpoints = $endpoints;
    }

    public function getStaticDataService(){
        return [
            'baseUrl' => $this->endpoints['global'],
            'operations' => [
                'getChampions' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/static-data/{region}/v1.2/champion',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getChampion' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/static-data/{region}/v1.2/champion/{id}',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'id' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getItems' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/static-data/{region}/v1.2/item',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getItem' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/static-data/{region}/v1.2/item/{id}',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'id' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getLanguageStrings' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/static-data/{region}/v1.2/language-strings',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getLanguages' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/static-data/{region}/v1.2/languages',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getMap' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/static-data/{region}/v1.2/map',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getMasteries' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/static-data/{region}/v1.2/mastery',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getMastery' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/static-data/{region}/v1.2/mastery/{id}',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'id' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getRealm' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/static-data/{region}/v1.2/realm',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getRunes' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/static-data/{region}/v1.2/rune',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getRune' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/static-data/{region}/v1.2/rune{id}',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'id' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getSummonerSpells' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/static-data/{region}/v1.2/summoner-spell',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getSummonerSpell' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/static-data/{region}/v1.2/summoner-spell{id}',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'id' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getVersions' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/static-data/{region}/v1.2/versions',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'id' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
            ],
            'models' => [
                'GetResponse' => [
                    'type' => 'object',
                    'additionalProperties' => [
                        'location' => 'json'
                    ],
                ],
                'GetImage' => [
                    'type' => 'object',
                    'properties' => [
                        'image' => [
                            'location' => 'body',
                            'type' => 'string'
                        ]
                    ],
                ]
            ]
        ];
    }



    public function getRegionalServices(){
        return [
            'baseUrl' => $this->endpoints[$this->region],
            'operations' => [
                'getChampions' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/{region}/v1.2/champion',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getChampion' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/{region}/v1.2/champion/{id}',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'id' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getCurrentGame' => [
                    'httpMethod' => 'GET',
                    'uri' => '/observer-mode/rest/consumer/getSpectatorGameInfo/{platformId}/{summonerId}',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'summonerId' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'platformId' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getFeaturedGames' => [
                    'httpMethod' => 'GET',
                    'uri' => '/observer-mode/rest/featured',
                    'responseModel' => 'GetResponse',
                    'parameters' => []
                ],
                'getRecentGames' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/{region}/v1.3/game/by-summoner/{summonerId}/recent',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'summonerId' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getLeaguesBySummoners' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/{region}/v2.5/league/by-summoner/{summonerIds}',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'summonerIds' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getLeagueEntriesBySummoners' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/{region}/v2.5/league/by-summoner/{summonerIds}/entry',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'summonerIds' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getLeaguesByTeams' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/{region}/v2.5/league/by-team/{teamIds}',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'teamIds' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getLeagueEntriesByTeams' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/{region}/v2.5/league/by-team/{teamIds}/entry',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'teamIds' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getChallengerLeagues' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/{region}/v2.5/league/challenger',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getShards' => [
                    'httpMethod' => 'GET',
                    'uri' => '/shards',
                    'responseModel' => 'GetResponse',
                    'parameters' => []
                ],
                'getShard' => [
                    'httpMethod' => 'GET',
                    'uri' => '/shards/{region}',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getMatch' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/{region}/v2.2/match/{matchId}',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'matchId' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getMatchHistory' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/{region}/v2.2/matchhistory/{summonerId}',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'summonerId' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getRankedStats' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/{region}/v1.3/stats/by-summoner/{summonerId}/ranked',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'summonerId' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getSummaryStats' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/{region}/v1.3/stats/by-summoner/{summonerId}/summary',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'summonerId' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getSummonersByNames' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/{region}/v1.4/summoner/by-name/{summonerNames}',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'summonerNames' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]

                    ]
                ],
                'getSummonersByIds' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/{region}/v1.4/summoner/{summonerIds}',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'summonerIds' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getMasteriesBySummoners' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/{region}/v1.4/summoner/{summonerIds}/masteries',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'summonerIds' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getSummonerNamesByIds' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/{region}/v1.4/summoner/{summonerIds}/name',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'summonerIds' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getRunesBySummoners' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/{region}/v1.4/summoner/{summonerIds}/runes',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'summonerIds' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getTeamsBySummoners' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/{region}/v2.4/team/by-summoner/{summonerIds}',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'summonerIds' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],
                'getTeamsByIds' => [
                    'httpMethod' => 'GET',
                    'uri' => '/api/lol/{region}/v2.4/team/{teamIds}',
                    'responseModel' => 'GetResponse',
                    'parameters' => [
                        'region' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ],
                        'teamIds' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ],

            ],
            'models' => [
                'GetResponse' => [
                    'type' => 'object',
                    'additionalProperties' => [
                        'location' => 'json'
                    ],
                ],
                'GetImage' => [
                    'type' => 'object',
                    'properties' => [
                        'image' => [
                            'location' => 'body',
                            'type' => 'string'
                        ]
                    ],
                ]
            ]
        ];
    }
}
# Optii\LolApiBundle 

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/183f6eba-be47-43a6-823b-9555ec046b53/big.png)](https://insight.sensiolabs.com/projects/183f6eba-be47-43a6-823b-9555ec046b53)

This bundle will allow you to query the League of Legends API endpoints. Query throttling and caching are available via the bundle. The bundle is built upon the Guzzle framework.




# Getting started

To install the bundle add the following line to your composer.json file :

```json
     "optii/lol-api-bundle": "0.1.*@dev"
```
then update your dependencies

```
 composer update
```

The next step is to activate the bundle in the symfony kernel, add the following line to your app/AppKernel.php

```php
    array(
        new Optii\LolApiBundle\OptiLolApiBundle(),
        );
```

Next you will have to configure the bundle, so it will work properly, here are the available configuration options

```yaml
opti_lol_api:
    key: 12341231231214 #(required) Your api key 
    region: euw  #(optional) The default region
    throttle: false #(optional) Activate or deactivate the throttling 
    cache: false #(optional) Activate or deactivate the caching
    endpoints: #(optional) The endpoints and their host (The defaults are set to the current endpoints, if any endpoints change just change them here)
            euw: euw.api.pvp.net 
            na: na.api.pvp.net
            ...
```

# Using the bundle

The bundle has 2 services for the moment opti_lol_api.static, for all the static api calls you need to make and the opti_lol_api.regional service for all the regional request that are made, so how do you make a request ?

a request to the static api would look like this :

```php
    $static = $this->get('opti_lol_api.static');
    $data = $static->getChampions();
```

As you can see in the API documentation normally to get the champions a region is a required parameter, because the region defaults to the one from the configuration file, to make calls easier, you can still change the region if you wish in your code, like this:

```php
    $static = $this->get('opti_lol_api.static');
    $data = $static->getChampions(['region' => Region::NA]);
```

# Available queries for the static API

```php
    $static->getChampions(); 
    $static->getChampion(['id' => $id]);
    $static->getItems();
    $static->getItem(['id' => $itemId]);
    $static->getLanguageString();
    $static->getLanguages();
    $static->getMap();
    $static->getMasteries();
    $static->getMastery(['id'=>$masteryId]);
    $static->getRealm();
    $static->getRunes();
    $static->getRune(['id' => $runeId]);
    $static->getSummonerSpells();
    $static->getSummonerSpell(['id' => $spellId]);
    $static->getVersions();
```

A list of optional parameters are available on the League of legends API website

# Available queries for the regional API

```php
    $regional->getChampions();
    $regional->getChampion(['id' => $id]);
    $regional->getCurrentGame(['summonerId' => $id, 'platformId' => Platform::EUW]);
    $regional->getFeaturedGames();
    $regional->getRecentGames(['summonerId' => $id]);
    $regional->getLeaguesBySummoners(['summonerIds' => $summoners]);
    $regional->getLeagueEntriesBySummoners(['summonerIds' => $summoners]);
    $regional->getLeaguesByTeams(['teamIds' => $teams]);
    $regional->getLeagueEntriesByTeams(['teamIds' => $teams]);
    $regional->getChallengerLeagues(['type' =>  Queue::RANKED_SOLO_5X5]);
    $regional->getShards();
    $regional->getShard();
    $regional->getMatch(['matchId' => $matchId]);
    $regional->getMatchHistory(['summonerId' => $id]);
    $regional->getRankedStats(['summonerId' => $id]);
    $regional->getSummaryStats(['summonerId' => $id]);
    $regional->getSummonersByNames(['summonerNames' => $names]);
    $regional->getSummonersByIds(['summonerIds' => $ids]);
    $regional->getMasteriesBySummoners(['summonerIds' => $ids]);
    $regional->getSummonerNamesByIds(['summonerIds' => $ids]);
    $regional->getRunesBySummoners(['summonerIds' => $ids]);
    $regional->getTeamsBySummoners(['summonerIds' => $ids]);
    $regional->getTeamsByIds(['teamIds' => $ids]);
```

# Throttling

 Throttling can be enabled using the ```throttle: true``` configuration.
 It is not currently possible to configure the time of the throttling, its previewed in a future version
 
# Caching
 
 Caching is not yet implement, its coming soon. Like real soon !!

# Helper classes

Some helper classes are in the bundle to make it easier to get the good strings to use for the request.

Doc to be completed

#Info

 Planning on adding helpers to help parse some of the data and twig functions for maps/runes/masteries/icons/champs etc
 
 




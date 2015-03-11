# Optii\LolApiBundle 

This bundle will allow you to query the League of Legends API endpoints. Query throttling and caching are available via the bundle. The bundle is built upon the Guzzle framework.




# Getting started

To install the bundle update your composer.json with the follow :

```
     "require": {
            "opti/LolApiBundle" : "dev-master"
        },
        "repositories" : [{
          "type" : "vcs",
          "url" : "https://github.com/optii/LolApiBundle.git"
        }],
```

The next step is to activate the bundle in the symfony kernel, add the following line to your app/AppKernel.php

```
    new Opti\LolApiBundle\OptiLolApiBundle()
```

Next you will have to configure the bundle, so it will work properly, here are the available configuration options

```
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

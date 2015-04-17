
require.config({
    "baseUrl": "/js",
    shim : {
        "bootstrap" : { "deps" :['jquery'] }
    },
    "paths": {
        "jquery": "vendor/jquery", // "//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min",
        "bootstrap": "vendor/bootstrap.min", // "//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min"
    }
});

requirejs(["main"]);

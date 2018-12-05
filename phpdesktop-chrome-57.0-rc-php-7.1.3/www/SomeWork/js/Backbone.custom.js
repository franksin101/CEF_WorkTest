//import 'backbone-min.js';

Backbone.emulateHTTP = true;
Backbone.sync = function(method, model, options){
    console.log(model);

    let _header = {
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        method: "POST",
        body: JSON.stringify({
            "method" : method,
            "data" : model.toJSON()
        })
    };

    let _url = null;

    if(typeof options.url === 'undefined')
        _url = "no_url.php";
    else
        _url = options.url;

    fetch(_url, _header)
    .then(function(response){
        console.log(response);
        return response.json();
    })
    .then(function(jsonData){
        let _update_f  = null;

        console.log(jsonData);

        if (typeof options._update === 'undefined'){
            console.log("you don't set Backbone.sync.options._update.");
        } else {
            console.log("update model data");
            options._update(jsonData);
        }
    })
    .catch(function(error){
        console.log(error);
    });
}
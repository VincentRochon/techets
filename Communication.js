function Communication() {

    const Connection = require('node_modules/tedious').Connection;  
        var config = {  
            server: "techets.database.windows.net",  //update me
            authentication: {
                type: 'default',
                options: {
                    userName: 'techets', //update me
                    password: 'T3chETS123'  //update me
                }
            },
            options: {
                // If you are on Microsoft Azure, you need encryption:
                encrypt: true,
                database: 'TechETS_DB'  //update me
            }
        };  
        var connection = new Connection(config);  
        connection.on('connect', function(err) {  
            // If no error, then good to proceed.
            console.log("Connected");  
        });
}

function Test(){
    console.log("Test");
}
